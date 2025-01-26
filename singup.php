<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <main>
    <a href="index.php"><img src="home.png" alt="img"></a>

<form action="test.php" method="POST" class="text-bg-scen">
<INPut type="text" name="user" placeholder="نام کاربری" required>
<hr>
<INPut type="text" name="pass" placeholder="رمز عبور" required>
<hr>
<input type="text" name="name" placeholder="نام کاربری" required>
<hr>
<button type="submit">ثبت نام</button>
<hr>
<hr>
</form>
<form action="login.php" method="POST">
        <input type="submit" name="ورودی" value="ورود">
    </form>
</main>
</body>
</html>