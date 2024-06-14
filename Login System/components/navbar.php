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
      <h4 class="text-info">Gamerz</h4>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content.php">Forum</a>
        </li>';
        if($logged){
        echo'
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>';
        }
        echo'
      </ul>
      <button class="btn btn-outline-info text-light" type="submit"><a class="nav-link" href="signup.php">Signup</a></button>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-info text-light mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Login
      </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Login to Gamerz</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="login.php" method="post">
                <div class="mb-3">
                  <label for="user" class="form-label">Username</label>
                  <input type="text" class="form-control" id="user" placeholder="Enter Username" name="user" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>';
?>