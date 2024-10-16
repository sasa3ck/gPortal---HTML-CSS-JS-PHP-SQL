<header class="container">
  <span class="logo">logo</span>
  <div class="burger"> <span></span> </div>
  <nav>
    <ul>
      <li class="active"><a href="/home.php">Home</a></li>
      <li><a href="/about.php">About us</a></li>

      <?php
        if (isset($_COOKIE["login"])) {
          echo '<li><a href="/user.php">User</a></li>';
        } else {
          echo '<li><a href="/register.php">Register</a></li>
            <li><a href="/auth.php">Auth</a></li>';
        }
      ?>

      <li><a href="/news.php">News</a></li>
      <li class="btn"><a href="/contacts.php">Contact us</a></li>
    </ul>
  </nav>
</header>