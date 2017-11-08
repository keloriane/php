<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      <p>nom</p><input type="text" name="nom" value="">
      <p>number</p><input type="number" name="a" value="">
      <p>number</p><input type="number" name="b" value="">
      <p>Phrase</p><input type="text" name="phrase" value="">
      <p>Valider</p><input type="submit" name="" value="Valider">

    </form>


    <?php

    //nom majuscule//



    $nom = $_GET["nom"];

    function name($nom){
      if(isset($nom) && !empty($nom) ){

        return $nom = ucfirst($nom);
      }
    }



    echo name($nom);




    $date = (new DateTime()) -> format('s' . 'd' . '/'. 'm' .'/' . 'y');
    echo "<br/>$date";


    //Somme//

    $a = $_GET["a"];
    $b = $_GET["b"];


      function somme($a,$b){
        $total = $a + $b;
        return $total;
      }

      echo "<br/>";
      echo somme($a,$b);


      function initiales_de($mots)
  {

    $mots = $_GET["phrase"];

    $initiales="";
    $was_a_space=true;
    $mots=str_split($mots);
    for ($i=0; $i < count($mots)-1 ; $i++) {
      if ($mots[$i]==" ") {
        $was_a_space=true;//si il ya un espace , s'en rappeler pour savoir quand commence le mot suivant
      }else {
        if ($was_a_space) {//si le lettre précedente était un espace mais que celle-ci est un caractére alors nouveau mot et stocker 1ere lettre
          $initiales=$initiales.strtoupper($mots[$i]);
        }else {
        }
        $was_a_space=false;
      }
    }
    return $initiales;
  }
  echo "<br>";
  echo initiales_de($mots);
  echo "<br>";


  function generator($min,$max){
    $leter = rand($min,$max);
    $word_array =[];
    while ($leter > 0) {
      $leter--;
      array_push($word_array,chr(rand(97,122)));
    }
    return implode($word_array);
  }

  echo generator(1,5);
  echo "<br/>";
  echo generator(7,15);



    //CHANSON DE POIVRO//
  $chanson="A
Bavas a ca ma sarpata a parda,
Ma la macha ma la macha
Bavas a ca ma sarpata a parda
Ma la macha a ravana.
";
$substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
echo "<br>  <br>";
echo "<br>  <br>";
for ($i=0; $i <count($substitutions)-1 ; $i++) {
  echo str_replace("a",$substitutions[$i],$chanson);
  echo "<br>  <br>";
}















  ?>

  </body>
</html>
