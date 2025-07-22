<?php
    require_once __DIR__ . '/../../backend/config/paths.php';
?>

<div class="login">
    <div class="sign-form-container form-signin">
        <h2>Sign In</h2>
        <form action="">
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <div class="rememberMe-container">
                    <input type="checkbox" name="" id="rememberMe">
                    <label for="rememberMe">Remember Me</label>
                </div>
                <a id="signUp">Sign Up</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="sign-form-container  form-signup">
        <h2>Sign Up</h2>
        <form action="">
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Gmail</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a id="signIn">Sign In</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

<script src="eshop/panel/frontend/assets/js/formAdmin.js"></script>