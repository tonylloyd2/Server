<?php
session_start();
include "./conn.php";
# check if session set
if (isset($_SESSION['email'])) {
  echo $_SESSION['email'];
?>


  <!DOCTYPE html>
  <html>

  <head>
    <title><?php echo $_SESSION['email']; ?></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f9775b6928.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <div>
      <nav class="navbar">
        <form action="#" method="get">
          <div class="search-bar">
            <input class="search-input" type="text" name="search" placeholder="Search..." required>
            <i class="fa fa-search fa-fw" aria-hidden="true" style="color: red;"></i>

          </div>
        </form>
        <button href="#" class="nav-button"><i class="fa-solid fa-user"></i></button>
      </nav>
      <div class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <div class="side-panel">
        <div class="side-panel-content">
          <button class="nav-link" href="#home"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</button>
          <button class="nav-link" href="#profile"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; Profile</button>
          <button class="nav-link" href="#domain"><i class="fa-solid fa-globe"></i>&nbsp; Domain</button>
          <button class="nav-link" href="#settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</button>
          <a class="nav-link" href="./logout.php">
            <button type="button">
              <i class="fa fa-sign-out-alt fa-fw" aria-hidden="true"></i>&nbsp; Logout
            </button>
          </a>

        </div>
      </div>


      <script src="../js/dashboard.js"></script>
  </body>

  </html>

  </body>

  </html>

<?php
}
#redirect to index.html if session not set
else {
  header("Location: ./index.php");
}
