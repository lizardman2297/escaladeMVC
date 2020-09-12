<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Document</title>
</head>
<body>

<div>
    <form action="index.php?module=user&action=signup" method="post" class='formulaire'>
        <h1>Sign-Up</h1>

        <input type="text" name="username" id="username" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="password" name="passwordVerfi" id="passwordVerfi" placeholder="password">
        <input type="submit" value="Inscription">
        <a href="index.php" class="link">Se connecter</a>
    </form>
</div>


</body>
</html>