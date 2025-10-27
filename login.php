<?php
session_start();
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example check (replace with DB authentication)
    if ($username === "admin" && $password === "admin") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: /csmss-polytechnic-website/csmss_poly_dashboard/admin_index/index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #FFFDE7;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form {
            background:white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 4px 20px rgba(217, 161, 161, 0.9);
            text-align: center;
        }
        .form h2 { margin-bottom: 20px; font-weight: bold; color: #333; }
        .form .form-control { height: 45px; border-radius: 5px; padding-left: 12px; }
        button.btn { background: #642224; color: white; width: 100%; padding: 12px; border-radius: 5px; border: none; }
        button.btn:hover { background: #642224; }
    </style>
</head>
<body>
<div class="form">
    <form action="" method="post">
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" class="form-control mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
        <button class="btn" type="submit">Login</button>
    </form>
</div>
</body>
</html>
