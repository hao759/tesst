<?php
   ob_start();
   echo "Hello1";
   echo "z";
//branch333331
//branch3
   $ob1 = ob_get_contents();
   echo "Tutorials Point1";
   $ob2 = ob_get_contents();
//2
   ob_end_clean();
   var_dump($ob1, $ob2);
?>
//3
