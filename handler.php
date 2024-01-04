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
    function calcPie(int $n):float {
      $pie = 3.14159;
      return $pie;
    }

    $pi = 3.14159;
    $number = "";
    if ( isset( $_POST['number'] ) ){
      $number = $_POST['number'];
    }
    echo "<h1>My Calculation of PI</h1>\n";
    echo "<p>The number of iterations is ".$number."</p>\n";
    echo "<p>The calculated value of PI is ".calcPie($number)."</p>\n";
    echo "<p>The actual value of PI is ".$pi."</p>\n";
    ?>
    
  </body>
  
</html>
