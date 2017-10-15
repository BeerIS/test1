<?php
  include("function.php");
  $menu = $_REQUEST["rdoMenu"];
  $num = $_REQUEST["txtNumber"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      switch ($menu) {
        case "1":
          $sum = sum($num);
          $strTitle = "Sum";
          $strOutput = "Sum of 1 To $num : $sum";
          break;
        case "2":
          $fact = factorial($num);
          $strTitle = "Factorial";
          $strOutput = "Factorial of $num : $fact";
          break;
        case "3":
          $fib = fib($num);
          $strTitle = "Fionacci";
          $strOutput = "Fibonacci at $num : $fib";
          break;
        default:
          $strTitle = "Error";
          $strOutput = "No function selected";
      }
    ?>
    <h1><?php echo $strTitle; ?></h1>
    <hr>
    <?php
      echo $strOutput;
    ?>
  </body>
</html>
