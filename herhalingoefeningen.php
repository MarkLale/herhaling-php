<?php

//Variables
$getal =12;
echo gettype($getal);

//Oefening 1

$klas = ["Piet van Dijk","Rembrant van Rijn", "Vincent van Gogh", "Floris van Dyck"];

var_dump($klas);


//Oefening 2

for($i=0;$i < count($klas); $i++)
echo $klas[$i].PHP_EOL;


//Oefening 3

foreach ($klas as $key => $value) {
  echo $value.PHP_EOL;
}

//Combinatie OPdracht
$hoeveelheid_activiteiten =readline("Hoeveel activiteiten hij/zij wil toevoegen aan je bucket list?");
$bucket_list = [];

for($i=0;$i<$hoeveelheid_activiteiten; $i++){
  $activity[$i] = array_push($bucket_list,readline("Wekle activiteiten wil je toevoegen?")).PHP_EOL;

}

var_dump($bucket_list);

foreach ($bucket_list as $value) {
  echo $value.PHP_EOL;
}


 ?>
