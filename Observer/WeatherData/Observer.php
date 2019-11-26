<?php

interface Observer {

    public function update(WeatherData $subject);
}

class CurrentConditionsDisplay implements Observer {

    private $subject;
    private $temp;
    private $humidity;
    private $pressure;

    public function __construct(WeatherData $subject) {
        $this->subject = $subject;
        $subject->attach($this);
    }

    public function update(WeatherData $subject) {
        $this->temp     = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->pressure = $subject->getPressure();

        $this->display();
    }

    public function display() {
        $text = '';

        $text .= "<br>";
        $text .= "<br>";
        $text .= "<div style=\"color: red\">";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "<br>";
        $text .= "<strong>" . __CLASS__ . "</strong>";
        $text .= "<br>";
        $text .= "<strong>Текущее состояние</strong>";
        $text .= "<br>";
        $text .= $this->temp;
        $text .= $this->humidity;
        $text .= $this->pressure;
        $text .= "<br>";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "</div>";

        echo $text;
    }

    public function getTemp() {
        return $this->subject->getTemperature();
    }

    public function getHumidity() {
        return $this->subject->getHumidity();
    }

    public function getPressure() {
        return $this->subject->getPressure();
    }

}

class StatisticDisplay implements Observer {

    private $temp;
    private $humidity;
    private $pressure;

    public function __construct(WeatherData $subject) {
        $subject->attach($this);
    }

    public function update(WeatherData $subject) {
        $this->temp     = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->pressure = $subject->getPressure();

        $this->display();
    }

    public function display() {
        $text = '';

        $text .= "<br>";
        $text .= "<br>";
        $text .= "<div style=\"color: blue\">";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "<br>";
        $text .= "<strong>" . __CLASS__ . "</strong>";
        $text .= "<br>";
        $text .= "<strong>Статистика</strong>";
        $text .= "<br>";
        $text .= $this->temp;
        $text .= $this->humidity;
        $text .= $this->pressure;
        $text .= "<br>";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "</div>";

        echo $text;
    }

}

class ForecastDisplay implements Observer {

    private $temp;
    private $humidity;
    private $pressure;

    public function __construct(WeatherData $subject) {
        $subject->attach($this);
    }

    public function update(WeatherData $subject) {
        $this->temp     = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->pressure = $subject->getPressure();

        $this->display();
    }

    public function display() {
        $text = '';

        $text .= "<br>";
        $text .= "<br>";
        $text .= "<div style=\"color: green\">";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "<br>";
        $text .= "<strong>" . __CLASS__ . "</strong>";
        $text .= "<br>";
        $text .= "<strong>Прогноз</strong>";
        $text .= "<br>";
        $text .= $this->temp;
        $text .= $this->humidity;
        $text .= $this->pressure;
        $text .= "<br>";
        $text .= "<span>----------------------------------------------------------</span>";
        $text .= "</div>";

        echo $text;
    }

}
