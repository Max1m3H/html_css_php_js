<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Affichage infos</title>
  </head>
  <body>

    <!--    HERQUE Maxime   -->

    <?php
    echo 'Nom :'.$_GET['Name'];
    echo '<br>';
    echo 'Prenom: '.$_GET['First_name'];
    echo '<br>';
    echo 'Adresse Mail :'.$_GET['Email'];
    echo '<br>';
    echo 'Numéro de télephone :'.$_GET['Phone'];
    echo '<br><br>';
?>

  </body>
</html>
