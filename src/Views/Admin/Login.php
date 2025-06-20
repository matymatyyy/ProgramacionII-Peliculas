<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/src/Views/Admin/AdminStyles/login.css">
</head>
<body>
    <form  method="post" action="/admin/login" class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="username" name="username" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="password" name="password" required>
        </div>
        <div class="forgot">
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit">Iniciar Sesion</button>
        </div>
    </form>
</body>
</html>
