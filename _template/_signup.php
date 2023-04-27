<?php
$signinfo=false;
if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['mail_address']) and isset($_POST['mobilenumber'])) {
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $mail=$_POST['mail_address'];
    $number=$_POST['mobilenumber'];
    $res=user::signup($user, $pass, $mail, $number);
    $signinfo=true;
}

?>


<?php
if ($signinfo) {
    if ($res) {
      
        ?>

<main class="container">
 <div class="bg-light mt-3 rounded p-5">
  <h1>login successfull</h1>
  <form action="login.php">
    <button btn btn-seconary>click here</button>
  </form>
 </div>
</main>
   
  <?} else {?>
    <main class="container">
 <div class="bg-light mt-3 rounded p-5">
  <h1>sign up failed</h1>
  <p class="lead">please enter proper values</p>
  <p class="lead"><?=$res?></p>
 </div>
</main>
 <?php }
  } else {
      ?>
<main class="form-signup">
 <form method="post" action='signup.php'>
    <img class="mb-3" src="https://th.bing.com/th/id/OIP.7kYeBsu09jOHSZr6aByOVQHaER?pid=ImgDet&rs=1" alt="" width="300" height="150">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input name="mail_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input name="mobilenumber" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Phone Number</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary hvr-underline-reveal" type="submit">Sign up</button>
  </form>
  

  
  
</main>
<?}?>