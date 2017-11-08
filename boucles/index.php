<?php

$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronoms_personnels as $key => $index) {
  echo "$pronoms_personnels $key: ";
  echo ucfirst($index);
}

$number = 1;
while ($number <= 120) {
  echo "$number" ."<br/>";
  $number++;
}

for ($i=0; $i <= 120; $i++) {
  echo "$i" ." <br/>";
}

// $lovelace = array('Nicolas' , 'Steve' , 'Antoine' , 'Marvin' , 'Kevin²' , 'Ilias' , 'Vincent' , 'Jimmy' , 'Valerian');
// foreach($lovelace as $index => $key){
//   echo "$lovelace => $key:";
// }

$pays = array('be' =>array('Belgique') ,'fr'=>array('France') , 'ca'=>array('Canada') ,'jap'=>array('Japon') ,'it'=>array('Italie') ,'es'=>array('Espagne') , 'eg'=> array('Egypte');

foreach($pays as $index => $key){
  echo "$pays => $key" . '<input type="radio" id="radioButton">';
}



 ?>
