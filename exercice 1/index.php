<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Calculatrice</title>
  </head>
  <body>
      <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice TP3</h1>
          <h4 class="text-white m-4 text-center">Compléter le fichier fourni pour que la calculatrice fonctionne. Bonus : Ajouter un bouton de remise à zéro.</h4>
        </div>
      </header>
    <h1>Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
      <input type="text" name="chiffre1" value="0"/>
      <input type="text" name="chiffre2" value="0"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="zero" value="Remise à 0"/>
    </form>
    <?php $number1 = $_POST['chiffre1'];
          $number2 = $_POST['chiffre2'];
          if (isset($number1) && isset($number2)) {
              if (is_numeric($number1) && is_numeric($number2)) {
                  if (isset($_POST['addition'])) {
                      $result = $number1 + $number2;
                  } else if (isset($_POST['soustraction'])) {
                      $result = $number1 - $number2;
                  } else if (isset($_POST['multiplication'])) {
                      $result = $number1 * $number2;
                  } else if (isset($_POST['division'])) {
                      if ($number1 == 0 || $number2 == 0) {
                          $result = 'On peut pas diviser par 0 TABARNACLE DE CALIS EN CRIS LA !';
                      } else {
                        $result = $number1 / $number2;  
                      }      
                  } else if (isset($_POST['zero'])) {
                      $result = 0;
                  }
              } else {
                  $result = 'Veuillez rentrer des chiffres TABARNACLE !';
              }
          }    
    ?>
    <p>Résultat : <?= $result ?></p>
    </div>
  </body>
</html>
