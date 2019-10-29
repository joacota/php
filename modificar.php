<?php
session_start();
if(isset($_GET["action"])){
  if($_GET["action"]== "Incrementar"){
    $_SESSION ["contador"]++;
  }
  if ($_GET["action"] == "desencrementar"){
    $_SESSION["contador"] --;
  }
  if($_GET["action"] == "resetear"){
    $_SESSION["contador"] = 0;
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="?action=Incrementar">Incrementar</a>
<a href="?action=desencrementar">desencrementar</a>
<a href="?action=resetear">resetear</a>
<?php echo $_SESSION["contador"] ?? null ?>

  </body>
</html>
