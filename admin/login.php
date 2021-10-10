<?php
session_start();
include("./config.php");
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $login_query = "SELECT * FROM user WHERE username='$username'";
    $login_access = mysqli_query($conn, $login_query);
    $login_count = mysqli_num_rows($login_access);
    if ($login_count) {
        $login_fetch = mysqli_fetch_assoc($login_access);
        $password_db = $login_fetch['password'];
        $_SESSION['username'] = $login_fetch['username'];
        // $pass_decode = password_verify($password, $password_db);
        if ($password == $password_db) {
?>

            <script>
                location.replace("./");
            </script>
<?php
        } else {
            echo "<script>alert(' Invalid password')</script>";
        }
    } else {
        echo "<script>alert(' Invalid username')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <section class="w-100 loginpage">
        <div class="w-50 m-auto form-box">
            <h3>Login to admin panel</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl " name="username" required placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-3">
                    <input type="password" class="form-control form-control-xl" name="pass" required placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1 w-50 border-0" name="login" style="background-color: var(--primary-color);">Log in</button>
            </form>
        </div>
    </section>
</body>

</html>