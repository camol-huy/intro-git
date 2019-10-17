<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10-Oct-19
 * Time: 6:36 PM
 */

require "includes/header.inc.php";

$variable;


if (isset($variable) ){
    echo "<h1>" . $variable ."</h1>";

}

$tableau = [1, "zzz"];

foreach ($tableau as $item) {
    echo $item;
}

$associatifTable = ["key" => "value", "rest" => "blazb" ];

foreach ($associatifTable as $key => $value) {
    echo "<br>";
    echo $value;
    echo "<br>";
}


$example = $_GET["example"];
if( filter_var($example, FILTER_VALIDATE_URL)){
    echo "true";
}else{
    echo "false";
}
echo  $example;

$sql = "SELECT * FROM utilisateur";

$dbh = new PDO('mysql:dbname=introphp;host=localhost;charset=utf8', 'root', '');

$result= $dbh->prepare($sql);
$result->execute();

$sqlSelect = "SELECT * FROM utilisateur WHERE id = :id";

$id=2;

$result= $dbh->prepare($sqlSelect);
$result->bindValue('id', $id, PDO::PARAM_INT);

$result->execute();

echo "<br>";
while($row = $result->fetchObject()){
    echo $row->nom;
    echo "   " . $row->prenom;
    echo "<br>";
}




