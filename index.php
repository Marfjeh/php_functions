<?php
  function reken ($type, $one, $two)
  {
      switch ($type) {
        case '+':
        $total = $one + $two;
        break;

        case '-':
        $total = $one - $two;
        break;

        case '*':
        $total = $one * $two;
        break;

        case'/':
        $total = $one / $two;
        break;

        default:
          throw new Exception("No Aurguments.", 1);
        break;
      }
      echo("DEBUG: Type: " . $type . "<br>First number: " . $one . "<br>Second number: " . $two . "<br><br>");
      echo("Total: " . $total);
  }
  reken("*", 5, 96);
 ?>
