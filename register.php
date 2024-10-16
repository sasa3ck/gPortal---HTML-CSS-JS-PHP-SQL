<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php require_once "components/header.php" ?>

  <div class="feedback">
    <div class="container">
      <h2>Register</h2>
      <p>Lorem Ipsum is simply dummy text of the printing .</p>
      <form method="post" action="lib/reg.php">
        <div class="inline">
          <div>
            <label>Login</label>
            <input type="text" name="login">
          </div>
          <div>
            <label>Name</label>
            <input type="text" name="name">
          </div>
        </div>
        <label>Email</label>
        <input type="email" class="one-line" name="email">
        <label>Password</label>
        <input type="password" class="one-line" name="password">
        <button type="submit">Reg</button>
      </form>
    </div>
  </div>

  <?php require_once "components/footer.php" ?>
</body>
</html>