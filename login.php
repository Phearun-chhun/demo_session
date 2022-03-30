<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Logout</title>
    <!-- link to css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class='container'>
        <form action="" class='form_login'>
            <div class="userEmail">
                <label for="email"></label>
                <input type="email" class='form_control' name="email" id="email" placeholder='email' required>
            </div>
            <div class="userPassword">
                <label for="pwd"></label>
                <input type="password" class='form_control' name="password" id="pwd" placeholder='password' required>
            </div>
            <div class="btn_submit">
                <button type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>