<?php

include 'config.php';

$host='localhost';
$username='root';
$password='';
$dbname='Veturat';

$conn=new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
    die("Lidhja deshtoi: " . $conn->connect_error);

}
$sql_update = "UPDATE Veturat SET 
        price = '1.000.000',
        description = 'Kategoria:Sportive'
        WHERE emri = 'Aventador'";

if ($conn->query($sql_update) === TRUE) {
    echo "Të dhënat e 'Aventador' u përditësuan me sukses.<br>";
} else {
    echo "Gabim gjatë përditësimit të 'Aventador': " . $conn->error . "<br>";
}
$sql_update = "UPDATE Veturat SET 
        shpejtesia = 'Mbi 447 km/h'
        WHERE emri = 'Koenigsegg CcX'";
if ($conn->query($sql_update) === TRUE) {
    echo "Të dhënat e 'Koenigsegg CcX' u përditësuan me sukses.<br>";
} else {
    echo "Gabim gjatë përditësimit të 'Koenigsegg CcX': " . $conn->error . "<br>";
}
$sql="INSERT IGNORE INTO Veturat (emri,motorri,horsepower,shpejtesia,pershpejtimi,transmission,konsuminaftes,price,description)
VALUES('Aventador', '6.0L V12', '820 kuaj fuqi','Shpejtesia maksimale 320', '0-100 km/h Rreth: 2.8sekonda' , 'Automatik', '12-14 litra për 100 km', '1000000' , 'Makine sportive e shpejte(Kategoria:Sportive).'),
      ('Audi R8','5.2L V10','620 kuaj fuqi','Shpejtesia maksimale: 329 km/h','0-100 km/h: Rreth 3.1 sekonda','Automatik','13-14 litra per 100km','180.000','Kategoria:Sportive'),
      ('Lamborghini', '6.2L V10', '900 kuaj fuqi', 'Shpejtesia maksimale: 340 km/h', '0-100 km/h: Rreth 2.2 sekonda', 'Automatik', '14 litra per 100 km', '1600000', 'Kategoria:Sportive'),
      ('Koenigsegg CcX','5.0L V8 twin-turbocharged','1000 kuaj fuqi','Shpejtësia maksimale: Mbi 447 km/h(nje nga veturat me te shpejta ne bote)','0-100 km/h: Vetëm 2 sekonda','Automatik','18-10litra ne 100km/h','4.900.000','Kategoria:Sportive')";

if($conn->query($sql)==TRUE){
    echo "Te dhenat u futen me sukses";
}else{
    echo "Gabim: " . $conn->error;
}
?>
