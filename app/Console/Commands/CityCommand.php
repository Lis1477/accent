<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\CityParserController;
use Illuminate\Console\Command;

class CityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:city-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Парсим города России с HH';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $result = CityParserController::getRussianCities();
        $this->info($result);
    }
}
