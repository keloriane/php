
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

    $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
    $famille = array('Julien' , 'Manon' , 'Lucien' , 'Valerian' , 'KevinS');
    $favorites = array('Pizzas' , 'Red curry' , 'Mango' , 'Burger' , 'beer');
    $Movies = array('Silicon Valley' , 'Friends' , 'How i met your mother' , 'Breaking Bad' , 'Stranger things');
    $papa = array('prenom'=>'Thierry', 'nom'=>'Flabat', 'age' => 57, 'jeune'=>true, 'hobbies'=>array('music', 'Art', 'Sex'));
    $moi = array('naissance'	=> 1993 ,'prenom'=> 'Kevin' , 'nom' => 'Flabat' ,'jeune' =>true ,'papa' => $papa, 'hobbies'  =>array('coder', 'Guitar', 'Sex', 'Sortir'));
    $AmeSoeur = array('nom' => 'marie','prenom' => 'Johana', 'age' => 24, 'jeune' => true , 'boire' => true , 'couleur' => 'rousse');
    $web_development = array('backend' => array('') , 'frontend' => array(''));






    echo $pays[2];
    echo "<br/>";
    print_r($famille);
    echo "<br/>";
    print_r($favorites);
    echo "<br/>";
    echo $Movies[1];
    echo "<br/>";

    echo "<br/>";
    print_r($moi['papa']);

    $hmoi = count($moi['hobbies']);
    $hpapa = count($papa['hobbies']);
    echo $hmoi + $hpapa;
    array_push($moi['hobbies'] , 'taxidermie');
    $moi['nom'] = 'Dieudonee';
    echo "<br/>";
    array_push($web_development['frontend'] , 'XHTML');
    array_push($web_development['backend'] , 'Ruby on rails');
    array_push($web_development['frontend'] , 'CSS');
    array_push($web_development['frontend'] , 'Flash');
    print_r($web_development);





   ?>

</body>
</html>
