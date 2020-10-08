<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Ajax Dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <!--top header-->
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
      </div>
    </header>
    <!--/top header-->
    <!--corpo della pagina-->
    <main>
      <div class="container">
        <div class="album">
          <?php foreach ($database as $cd) { ?>
            <div class="cd">
              <div class="cd-poster">
                <img src="<?php echo $cd["poster"] ?>">
              </div>
              <h3 class="cd-title"><?php echo $cd["title"] ?></h3>
              <div class="cd-author"><?php echo $cd["author"] ?></div>
              <div class="cd-year"><?php echo $cd["year"] ?></div>
            </div>
          <?php }?>
        </div>
      </div>
    </main>
    <!--/corpo della pagina-->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
