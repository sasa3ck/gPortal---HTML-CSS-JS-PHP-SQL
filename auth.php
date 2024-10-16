<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auth</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php require_once "components/header.php" ?>

  <div class="feedback">
    <div class="container">
      <h2>Auth</h2>
      <p>Lorem Ipsum is simply dummy text of the printing .</p>
      <form method="post" action="lib/auth.php">
        <div class="inline">
          <div>
            <label>Login</label>
            <input type="text" name="login">
          </div>
          <div>
            <label>Password</label>
            <input type="password" class="one-line" name="password">
          </div>
        </div>
        <button type="submit">Auth</button>
      </form>
    </div>
  </div>

  <?php require_once "components/footer.php" ?>
</body>
</html>