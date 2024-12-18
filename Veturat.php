<?php
require_once 'VeturatDB.php';

$veturatDB = new VeturatDB();

$veturat = [
    [
        'emri' => 'Aventador',
        'motorri' => '6.0L V12',
        'horsepower' => '820',
        'shpejtesia' => '320 km/h',
        'pershpejtimi' => '2.8 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '12',
        'price' => '1000000',
        'description' => 'Makine sportive.'
    ],
    [
        'emri' => 'Audi R8',
        'motorri' => '5.2L V10',
        'horsepower' => '620 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: 329 km/h',
        'pershpejtimi' => '0-100 km/h: Rreth 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '13-14 litra për 100km',
        'price' => '180000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Lamborghini',
        'motorri' => '6.2L V10',
        'horsepower' => '900 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: 340 km/h',
        'pershpejtimi' => '0-100 km/h: Rreth 2.2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '14 litra për 100 km',
        'price' => '1600000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Koenigsegg CcX',
        'motorri' => '5.0L V8 twin-turbocharged',
        'horsepower' => '1000 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: Mbi 447 km/h (një nga veturat më të shpejta në botë)',
        'pershpejtimi' => '0-100 km/h: Vetëm 2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '18-10 litra për 100 km',
        'price' => '4900000',
        'description' => 'Kategoria: Sportive'
    ]
];
$veturatDB->shtoVeturat($veturat);


$veturatDB->perditesoVeturat('Aventador', [
    'price' => '1000000',
    'description' => 'Kategoria: Sportive'
]);
$veturatDB->perditesoVeturat('Koenigsegg CcX',[
    'shpejtesia' =>'Shpejtesia maksimale: Mbi 447km/h'
]);

$veturat = $veturatDB->merrVeturat();
foreach ($veturat as $vetura) {
    echo "<h2>" . htmlspecialchars($vetura['emri']) . "</h2>";
    echo "<p>" . htmlspecialchars($vetura['motorri']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['horsepower']) . " kuaj fuqi</p>";
    echo "<p>" . htmlspecialchars($vetura['shpejtesia']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['pershpejtimi']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['transmission']) . "</p>";
    echo "<p>Konsum: " . htmlspecialchars($vetura['konsuminaftes']) . "</p>";
    echo "<p>Price: €" . number_format($vetura['price'], 2) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['description']) . "</p><br>";
}
?>
