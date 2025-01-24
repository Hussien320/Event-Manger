
<?php
require_once "./includes/config_session.inc.php";
require_once "./includes/register_view.inc.php";
?>

<body>
    <link rel="stylesheet" href="style.css" />
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">Sing Up</h1>
                <form action="includes/register.inc.php" method="post">
                    <input type="text"  name="username" placeholder="USERNAME" />
                    <input type="password"  name="password" placeholder="PASSWORD" />
                    <input type="email" name="email" placeholder="EMAIL" />
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="index.html">Log In</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>

    <?php
        check_signup_errors();
?>
</body>
