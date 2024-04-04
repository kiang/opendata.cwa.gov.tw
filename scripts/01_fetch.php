<?php
$basePath = dirname(__DIR__);
$config = require __DIR__ . '/config.php';

$data = json_decode(file_get_contents('https://opendata.cwa.gov.tw/api/v1/rest/datastore/E-A0015-001?format=JSON&offset=24&Authorization=' . $config['Authorization']), true);

foreach ($data['records']['Earthquake'] as $record) {
    $y = substr($record['EarthquakeNo'], 0, 3);
    $targetPath = $basePath . '/raw/' . $y;
    if (!file_exists($targetPath)) {
        mkdir($targetPath, 0777, true);
    }
    $targetFile = $targetPath . '/' . $record['EarthquakeNo'] . '.json';
    file_put_contents($targetFile, json_encode($record, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}
