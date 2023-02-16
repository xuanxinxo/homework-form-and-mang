<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./index.css">
<head>
    <title>Đăng nhập</title>
</head>


<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Signup Form
            </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="#" class="signup" method='post'>
                    <div class="field">
                        <label>User name</label>
                        <input type="text" name='name' placeholder="Enter Username">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="text" name='password' placeholder="Enter Password">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="btn" value="Login">
                    </div>
                    <?php
                    if (isset($_POST['btn'])) {
                        $UserName = $_POST['name'];
                        $Password = $_POST['password'];
                        if ($UserName == 'LeXuan' && $Password == 'Xuanpnv24b') {
                            echo "Đăng nhập thành công";
                        } else {
                            echo "Đăng nhập thất bại !";
                        }
                    }
                    ?>
</body>

</html>