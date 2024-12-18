<?php
if(isset($_SESSION['log'])&& $_SESSION['log']==true){
$logged=true;
}
else{
$logged=false;
}
echo'
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="content.php">Forum</a>
      </li>
    </ul>';
      if($logged){
      echo'<a class="nav-link" href="logout.php"><button class="btn btn-danger mx-2" type="submit">Logout</button></a>';
      }
      else{
      echo'
      <div class="d-flex gap-2">
      <a class="nav-link" href="login.php"><button class="btn btn-light" type="submit">Login</button></a>
      <a class="nav-link" href="signup.php"><button class="btn btn-info" type="submit">Signup</button></a>
      </div>';
      }
      echo'
  </div>
</div>
</nav>';
?>