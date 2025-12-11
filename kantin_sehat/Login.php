<?php
session_start();

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "novi" && $pass == "noviaja"){
        $_SESSION['login'] = true;
        header("Location: Menu.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Kantin Sehat</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
</body>
</html>