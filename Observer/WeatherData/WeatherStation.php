<?php

require_once 'WeatherData.php';
require_once 'Observer.php';

class WeatherStation {

    static public function start() {

        $weatherData = new WeatherData();

        $o1 = new CurrentConditionsDisplay($weatherData);
        $o2 = new StatisticDisplay($weatherData);
        $o3 = new ForecastDisplay($weatherData);
//        $weatherData->attach($o1);
//        $weatherData->attach($o2);
//        $weatherData->attach($o3);

        $weatherData->measurementsChanged();
        $weatherData->measurementsChanged();
        $weatherData->detach($o3);
        $weatherData->measurementsChanged();
    }

}
