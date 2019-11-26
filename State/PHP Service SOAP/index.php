<?php
$wsdl = 'http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?WSDL';

$client  = new SoapClient($wsdl, [
    'soap_version' => SOAP_1_2,
    'exceptions'   => TRUE
        ]);
$date    = $client->GetLatestDateTime();
$result  = $client->GetCursOnDateXML(['On_date' => $date->GetLatestDateTimeResult]);

if ($result->GetCursOnDateXMLResult->any) {
    $xml = new SimpleXMLElement($result->GetCursOnDateXMLResult->any);
}
?>
<h2>Курсы валют на <?= $date->GetLatestDateTimeResult ?></h2>
<table>
    <tbody>
        <tr>
            <td>У.Е.</td>
            <td style="text-align: center">Наминал</td>
            <td style="text-align: center">Курс</td>
            <td style="text-align: center">ISO код валюты</td>
        </tr>
        <?php foreach ($xml->ValuteCursOnDate as $item): ?>
            <tr>
                <td><?= $item->Vname ?></td>
                <td style="text-align: center"><?= $item->Vnom ?></td>
                <td style="text-align: center"><?= $item->Vcurs ?></td>
                <td style="text-align: center"><?= $item->VchCode ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>