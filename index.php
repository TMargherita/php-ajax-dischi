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

        <select id="select-authors" class="authors" name="authors">
          <option value="All">All</option>
        </select>
      </div>
    </header>
    <!--/top header-->
    <!--corpo della pagina-->
    <main>
      <div class="container">
        <div class="album">

        </div>
      </div>
    </main>
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="cd">
        <div class="cd-poster">
          <img src="{{poster}}">
        </div>
        <h3 class="cd-title">{{title}}</h3>
        <div class="cd-author">{{author}}</div>
        <div class="cd-year">{{year}}</div>
      </div>
    </script>

    <script id="author-option-template" type="text/x-handlebars-template">
      <option value ="{{author}}">{{author}}</option>
    </script>
    <!--/corpo della pagina-->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
