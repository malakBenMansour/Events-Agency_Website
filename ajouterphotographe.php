<?php

include "../../../entity/photographe.php";
include "../../../controller/photographeC.php";
$PH = new photographeC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["prix"])&&
    isset($_POST["descrip"])&&
    isset($_POST["tel"])&&
    isset($_POST["email"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["descrip"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["email"])

    ) {
        $photo = new photographe(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['adresse'],
            $_POST['prix'],
            $_POST['descrip'],
            $_POST['tel'],
            $_POST['email']

        );
        $PH->ajouterphotographe($photo);
        header('location:photographe.php');
        //var_dump( $voyage);
        //console.log($voyage);
    } else
        header('location:ajoutphotographe.php');
    //echo "problem !!";
}

?>

