<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php require_once "components/header.php" ?>

  <div class="feedback">
    <div class="container">
      <h2>User</h2>
      <p>Hi: <b><?= $_COOKIE['login'] ?></b>.</p>

      <form method="post" action="lib/add-game.php">
        <label>Image</label>
        <input type="text" class="one-line" name="image">
        <label>Followers</label>
        <input type="text" class="one-line" name="followers">
        <button type="submit">Add</button>
      </form>
    </div>
  </div>

  <?php require_once "components/footer.php" ?>

</body>
</html>