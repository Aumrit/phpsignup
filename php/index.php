<?php
include 'inc/autoLoader.php';



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $test=new Test();
        $test->setUserStmnt("ply","sup","py@sup","hoho123");
        $test->getUser();

     ?>
  </body>
</html>
