<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>template</title>
  </head>
  <body>

<header>
  <h1>LOGOTIPO</h1>
</header>

<?php
  include "views/modules/navegacion.php"
?>

<section>

  <span>
    <?php

    $mvc = new MvcController();
    $mvc -> enlacesPaginasController();

    ?>
  </span>
</section>

  </body>
</html>

<?php

?>
