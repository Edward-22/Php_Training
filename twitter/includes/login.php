<?php
if(isset($_PSOT['login']) && !empty($_POST['login'])) {
    $EmailAddress = $_POST['EmailAddress'];
    $Password = $_POST['Password'];
    if (!empty($EmailAddress) or !empty($Password)) {
        $EmailAddress = $getFromU->checkInput($EmailAddress);
        $Password = $getFromU->checkInput($Password);
        if (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email";
        }
    } else {
        $error = "Enter username and password";
    }
}
?>
<div class="login-div">
    <form method="post">
        <ul>
            <li>
                <input type="text" name="email" placeholder="Please enter your Email here"/>
            </li>
            <li>
                <input type="password" name="password" placeholder="password"/><input type="submit" name="login" value="Log in"/>
            </li>
            <li>
                <input type="checkbox" Value="Remember me">Remember me
            </li>
      <?php
        if(isset($php_errormsg)) {
            echo '<li class="error-li">
                <div class="span-fp-error">'.$php_errormsg.'</div>
                </li>';
        }
      ?>
        </ul>
    </form>
</div>
