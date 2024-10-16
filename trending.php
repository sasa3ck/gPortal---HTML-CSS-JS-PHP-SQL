<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tranding</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>

  <div class="wrapper">
    <?php require_once "components/header.php" ?>

    <div class="container trending">
      <h3>Trending Games</h3>
      <div class="games games-trending">
        <?php
          require_once "./lib/db.php";
          $sql = 'SELECT * FROM trending ORDER BY id DESC';
          $query = $pdo->prepare($sql);
          $query->execute();
          $games = $query->fetchAll(PDO::FETCH_OBJ);
          foreach ($games as $el) {
            echo '<div class="block">
                    <img src="./img/' . $el->image . '" alt="">
                    <span><img src="./img/miniFire.svg" alt="">' . $el->followers . ' Followers</span>
                  </div>';
          }
        ?>
      </div>
    </div>

  <?php require_once "components/footer.php" ?>

  <script src="js/main.js"></script>
</body>
</html>