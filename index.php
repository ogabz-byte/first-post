<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="img/aa.png" >
            <h1>welcome</h1>
            <h3>already have an account ?</h3>
            <button class="switch-btn" type="button" onclick="location.reload()">login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>login</h1>
            <form action="login.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="name">
                <input type="password" name="user-pass" class="input-box" placeholder="password">
                <input type="submit" name="login-btn" class="btn" value="login">
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element ">
            <img src="img/aa.png">
            <h1>welcome</h1>
            <h3>dont have an account ?</h3>
            <button class="switch-btn" type="button" onclick="switchSignup()">signup</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>signup</h1>
            <form action="signup.php" method="post">
                <input type="text" name="user-name" class="input-box" placeholder="user name">
                <input type="email" name="user-email" class="input-box" placeholder="email">
                <input type="password" name="user-pass" class="input-box" placeholder="password">
                <input type="submit" name="signup-btn" class="btn" value="signup">
            </form>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>