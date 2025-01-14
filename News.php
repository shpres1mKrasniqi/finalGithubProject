<?php
require_once 'newsDB.php';

$NewsDB = new newsDB();


$News = [
    [
        'titulli' => 'Aventador',
        'pershkrimi' => 'Makina e re sportive me performancë të lartë.',
        'foto' => 'aventador.jpg',
        'data_publikimit' => '2023-01-10',
        'shtuar_nga' => 'admin',
        'modifikuar_nga' => 'admin'
    ],
];

$NewsDB->shtoNews($News);


$News = $NewsDB->merrNews();

foreach ($News as $New) {
    echo "<h2>" . htmlspecialchars($New['titulli']) . "</h2>";
    echo "<p>" . htmlspecialchars($New['pershkrimi']) . "</p>";
    if (!empty($New['foto'])) {
        echo "<img src='" . htmlspecialchars($New['foto']) . "' alt='" . htmlspecialchars($New['titulli']) . "' style='width:300px; height:auto;'>";
    }
    echo "<p>Data e Publikimit: " . htmlspecialchars($New['data_publikimit']) . "</p>";
    echo "<p>Shtuar nga: " . htmlspecialchars($New['shtuar_nga']) . "</p>";
    echo "<p>Modifikuar nga: " . htmlspecialchars($New['modifikuar_nga']) . "</p>";
    echo "<hr>";
}
?>
