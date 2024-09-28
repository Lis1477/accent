<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function index($slug=null): View | RedirectResponse
    {
        if ($slug == null) {
            // редиректим, если есть кука города
            $city_obj = json_decode(request()->cookie('current_city'));
            if ($city_obj) {
                return redirect($city_obj->slug);
            }
        } else {
            $city_obj = City::where('slug', $slug)->first(['name', 'slug']);
            // если есть город
            if ($city_obj) {
                // записываем новую куку
                cookie()->queue('current_city', json_encode($city_obj->toArray(), JSON_UNESCAPED_UNICODE), 60*24*365);
                // берем текущий город
                $data['current_city'] = $city_obj->toArray();
            } else { // если нет
                // удаляем куку
                cookie()->queue('current_city', null, -1);
                // редиректим
                return redirect('/');
            }
        }

        // берем города
        $data['capitals'] = City::whereIn('locality_id', [1,2])->get();
        $data['regions'] = City::where('parent_id', 113)
            ->whereNotIn('locality_id', [1,2])
            ->orderBy('name')
            ->with('regionCities')
            ->get();

        return view('main_page')->with($data);
    }
}
