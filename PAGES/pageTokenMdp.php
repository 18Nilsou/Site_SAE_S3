<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
  <script src="../JS/index.js" defer></script>
  <title>FindTheBreach</title>
</head>
<body>
    <header>
        <a href="../index.php">
            <img class="Logo" src="../IMAGE/FindTheBreach.png">
        </a>
    
        <a class="Title" href="../index.php">
            <p>Find The Breach</p>
        </a>
        <?php
        if(!(sizeof($_SESSION)===0) && ($_SESSION['user'])){
            ?>
            <a class="connexionHeader" href="pageConnection.php">
                <p>
                    Connecté
                </p>
            </a>
            <?php
        }else{
            ?>
            <a class="connexionHeader" href="pageConnection.php">
                <p>
                    Connection
                </p>
            </a>
            <?php
        }
        ?>
    </header>

    <div class="container">

        <div class="tab-body" data-id="connexion">
            <form method="post" action="../PHP/token.php">
                <div class="row">
                <input type="number" name="token" class="input" placeholder="Token" required="required"/>
                </div><div class="row">
                <input type="email" name="mail" class="input" placeholder="eMail" required="required"/>
                </div><div class="row">
                <input type="password" name="mdp"class="input" placeholder="Mot de passe"  required="required"/>
                </div><div class="row">
                <input type="password" name="mdpConfirmer" class="input" placeholder="Confirmer mot de passe" required="required"/>
                </div>
                <input type="submit" value="Valider" class="btn">
            </form>
        </div>
    
        <div class="tab-footer">
          <a class="tab-link active" data-ref="connexion" href="javascript:void(0)"></a>
        </div>
      </div>
</body>
</html>