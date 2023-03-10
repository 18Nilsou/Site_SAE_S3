<!--HTML W3C fait-->

<?php
// php STAN 9
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
    <script src="../js/index.js" defer></script>
    <title>FindTheBreach</title>
</head>

<body>

    <!-- HEADER -->
    <?php include("../footer-header/header.php") ?>

    <div class="container">

        <div class="tab-body" data-id="newpassword">

            <form method="post" action="../php/token.php">

                <div class="row">
                    <!-- Token to verify identity-->
                    <input type="number" name="token" class="input" placeholder="Token" required="required">
                </div>

                <div class="row">
                    <!-- Write email -->
                    <input type="email" name="mail" class="input" placeholder="eMail" required="required">
                </div>

                <div class="row">
                    <!-- Write new password-->
                    <input type="password" name="password" class="input" placeholder="Mot de passe"  required="required">
                </div>

                <div class="row">
                    <!-- Confirm new password -->
                    <input type="password" name="passwordConfirm" class="input" placeholder="Confirmer mot de passe" required="required">
                </div>

                <input type="submit" value="Valider" class="btn">

            </form>

        </div>

        <div class="tab-footer">
          <a class="tab-link active" data-ref="newpassword" href="javascript:void(0)"></a>
        </div>

      </div>

    <?php include("../footer-header/footer.php") ?>

</body>
</html>