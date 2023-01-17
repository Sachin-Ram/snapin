<?php
if (isset($_POST['username']) and isset($_POST['password'])) {
    $u_mail=$_POST['username'];
    $u_password=$_POST['password'];
    $logininfo=user::login($u_mail, $u_password);
}

?>
<?php
if ($logininfo) {
    print("you can log in ");
} else {
    ?>
<main class="form-signin">
  <form method="post" action='login.php'>
    <img class="mb-3" src="https://th.bing.com/th/id/OIP.7kYeBsu09jOHSZr6aByOVQHaER?pid=ImgDet&rs=1" alt="" width="300" height="150">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary hvr-underline-reveal" type="submit">Sign in</button>
    
  </form>
</main>
<?}?>