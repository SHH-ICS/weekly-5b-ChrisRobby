<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Results Page</title>
  </head>

  <body>
    
    <?php
    function calcPie(int $number):float {
      $pie = 0.0;
      for ($n = 0; $n < $number; $n++) {
        $pie = $pie + 4.0 * ((-1)**$n / (2.0 * $n + 1.0));
      }
      return $pie;
    }

    $number = "";
    if ( isset( $_POST['number'] ) ){
      $number = $_POST['number'];
    }
    echo "<h1>My Calculation of PI</h1>\n";
    echo "<p>The number of iterations is ".$number."</p>\n";
    echo "<p>The calculated value of PI is ".calcPie($number)."</p>\n";
    echo "<p>The actual value of PI is ".pi()."</p>\n";
    ?>
    
  </body>
  
</html>
