<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url("https://wallpapertag.com/wallpaper/full/5/a/9/214618-4k-hd-wallpapers-3840x2160-tablet.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        table{
            width: 500px;
            height: 250px;
        }
        form{
            padding: 40px;
            border-radius: 8px;
        }
    </style>
</head>
<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

        <!-- form -->
    <form method="post" class="bg-light">
        <table >
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" id="email" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="text" id="password" name="password" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="login" class="btn btn-success w-100" value="LogIn"></td>
            </tr>
        </table>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "project2");
        if($connect === false){
            die("ERROR: could not connect" . mysqli_connect_error());
        }

        if(isset($_POST['login'])){
            $mail = $_POST['email'];
            $pass = $_POST['password'];

            //$results = $connect->query("INSERT INTO student (user,email,pass) VALUES ('$user','$mail','$pass')");
            $results = mysqli_query($connect, "SELECT * FROM student WHERE email='$mail' and pass='$pass' ");
            if(mysqli_num_rows($results) > 0){
                header("location: main.php");
            }
            else{
                echo "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Oops!</strong> Login Failed
          </div>";
            }
        }
        ?>
    </form>

</body>
</html>