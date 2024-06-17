<?php
  if (isset($loginFormMessage) === false) {
    $loginFormMessage = "";
  }
  $info = "
    <form method='post' action='admin.php'>
      <h1>Login to access restricted area</h1>
      <label>userid</label>
      <input type='userid' name='userid' required />
      <label>password</label>
      <input type='password' name='password' required />
      <input type='submit' value='login' name='log-in' />
    </form>
    <p id='login-form-message'>$loginFormMessage</p>";
?>