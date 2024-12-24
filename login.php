<?php
include 'header.php';
?>

<div class="container-fluid d-flex align-items-center justify-content-center mt-5">
  <div class="card col-8">
    <h1 class="text-center mt-3">LOGIN</h1>
    <div class="card-body">
      <form action="" method="POST">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="user_name" placeholder="Enter user name">
          <label for="floatingInput">User name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" id="floatingInput" placeholder="Enter password">
          <label for="floatingInput">Password</label>
        </div>
        <input type="submit" name="register" class="btn btn-primary" value="Login">
      </form>
    </div>
  </div>
</div>