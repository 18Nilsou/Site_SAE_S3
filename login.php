<?php

date_default_timezone_set('Europe/Paris');

$host = "lucky.db.elephantsql.com";
$user = "xpirrwid";
$pass = "LkhxflJA_GDQQI_nqpkJBIbFBc955fiL";
$pass_login = "$2y$10$3OtqRbdAhpLy9Et4q0z2Q.gBcmNDiqHYEP/ToBYYAMvsOFseJvsna"; // Hash du mot de pass de connexion
$db = "xpirrwid";


try {
    
    //connection a la base de donnée
    $con = new PDO("pgsql:host=$host; port=5432; dbname=$db; user=$user; password=$pass")
    or die ("Could not connect to server\n");

    //recup des variable du formulaire
    $pseudo =$_POST["pseudo"];
    $adr =$_POST["adr"];
    $password =$_POST["password"];

    $sqlCheckUser = "SELECT EMAIL, NICKNAME, ID_USER, PASSWORD FROM USERS"; //requete pour recup tout les users
    $check = false;
    // $password == $row['password']

    $IdUser = 0;

    foreach  ($con->query($sqlCheckUser) as $row) {    //on check si le user existe deja
        if ($pseudo == $row['nickname'] && $adr == $row['email'] && password_verify($row['password'],$pass_login)){ // on vérifie que le mdp est correct avec le mdp et le hash
            $check = true;
            $IdUser = $row['id_user'];
        }
    }

    //si il n'exite pas on le cree
    if($check == true){

        $checkAdmin = false;
        $sqlIsAdmin = "SELECT ID_USER FROM ADMIN";

        foreach  ($con->query($sqlIsAdmin) as $row) {    //on check si le user existe deja
            if ($IdUser ==  $row['id_user']){
                $checkAdmin = true;
            }
        }

        if (true == $checkAdmin){
            header("location:pageAdmin.php");
            exit;
        }
        else{
            header("location:../HTML/pageDl.html");
            exit;
        }

    }else{
        header("location:../index.html");
        exit;
    }
        
   
    $con = null;
}

catch(PDOException $e){
    echo $e->getMessage();
    }
  
?>