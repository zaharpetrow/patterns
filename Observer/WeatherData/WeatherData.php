<?php

class WeatherData {

    private $temp;
    private $humidity;
    private $pressure;
    private $observers = [];

    private function setTemperature() {
        $this->temp = rand(1, 30);
    }

    private function setHumidity() {
        $this->humidity = rand(10, 99);
    }

    private function setPressure() {
        $this->pressure = rand(600, 800);
    }

    public function getTemperature() {
        return "<br>Температура: +{$this->temp}";
    }

    public function getHumidity() {
        return "<br>Влажность: {$this->humidity}%";
    }

    public function getPressure() {
        return "<br>Давление: {$this->pressure} мм рт. ст.";
    }

    public function measurementsChanged() {
        $this->setTemperature();
        $this->setHumidity();
        $this->setPressure();

        $this->natify();
    }

    public function attach(Observer $observer) {
        if (!$observer instanceof Observer) {
            return;
        }

        $this->observers[] = $observer;
        echo "<br>Наблюдатель добавлен.";
    }

    public function detach(Observer $observer) {
        foreach ($this->observers as $key => $s) {
            if ($observer === $s) {
                unset($this->observers[$key]);
                echo "<br>Наблюдатель удален.";
            }
        }
    }

    public function natify() {
        echo "<br>Произашли изменения...";

        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
