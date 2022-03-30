<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name= htmlspecialchars($_POST["nom"]);
$prenom= htmlspecialchars($_POST["prenom"]);
$nb= htmlspecialchars($_POST["nb"]);
$type= htmlspecialchars($_POST["type"]);
$harissa= isset($_POST["harissa"]);
$salade= isset($_POST["salade"]);
$mayo= isset($_POST["mayo"]);
$address= htmlspecialchars($_POST["address"]);
?><p><?php
echo ("La Commande de Monsieur ".$name." ".$prenom." est ".$nb." sandwiches de type ".$type." ");

if($harissa||$salade||$mayo) {
    echo("avec ".(($harissa)?"harissa ,":"").(($salade)?"salade ,":"").(($mayo)?"mayo":""));
}
echo(" delivree a l'adresse ".$address);?></p><br><h2>PRIX : <?php
echo($nb<11?($nb*4):($nb*4*0.9));?></h2><?php
$cin = $_FILES["cin"];
if($cin["error"]==0) {
    move_uploaded_file($cin["tmp_name"],"src/".uniqid().basename($cin["name"]));
    echo ("Your file is uploaded successfully");
}
else{ echo ("There was a problem in your file");}?>

</body>
</html>