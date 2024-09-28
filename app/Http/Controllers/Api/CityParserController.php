<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CityParserController extends Controller
{
    public static function getRussianCities(): string
    {
        // получаем массив Российских нас.пунктов
        $city_arr = Http::get('https://api.hh.ru/areas')->json($key = 0);

        // очистка таблицы перед загрузкой
        City::truncate();

        foreach ($city_arr['areas'] as $area) {
            $city = new City;
            $city->locality_id = $area['id'];
            $city->parent_id = $area['parent_id'];
            $city->name = $area['name'];
            $city->slug = Str::slug($area['name'], '-');
            $city->save();

            if (count($area['areas'])) {
                foreach ($area['areas'] as $sub_area) {
                    $city = new City;
                    $city->locality_id = $sub_area['id'];
                    $city->parent_id = $sub_area['parent_id'];
                    $city->name = $sub_area['name'];
                    $city->slug = Str::slug($sub_area['name'], '-');
                    $city->save();
                }
            }
        }

        return "Города России загружены в БД";
    }
}
