<?php

class CBR {

    const WSDL = 'http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?WSDL';

    protected $client;

    public function __construct() {
        $this->client = new SoapClient(self::WSDL, ['soap_version' => SOAP_1_2, 'exceptions' => TRUE]);
    }

    public function GetLatestDateTime() {
        return $this->client->GetLatestDateTime();
    }

    public function GetCursOnDateXML() {
        return $this->client->GetCursOnDateXML(['On_date' => $this->GetLatestDateTime()]);
    }
    public function simpleXMLElement(){
        return $this->GetCursOnDateXML()->any;
    }

}
