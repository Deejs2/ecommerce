
<?php
include('db/db.php');
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, email, password FROM tbl_user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if ($result->num_rows == 1) {
        $_SESSION['email'] = $row['email'];
        header('Location:admin/index.php');
    } else {
        echo "<h1>Wrong Input Valid Email And Password</h1>";
        //header('Location:login.php');
    }
}
?>


<main class="form-signin w-100 m-auto">
  <form method="post" action="">
    <h3 style="font-weight: 600; font-style:italic;">eNepal</h3>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Login"/>
    
  </form>
</main>-->


