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
            background-image: linear-gradient(270deg,rgb(47, 243, 162),skyblue);
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
            background-color: rgb(214, 224, 233);
            border-radius: 8px;
        }
    </style>
</head>
<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">

        <!-- form -->
    <form method="post" action="">
        <table >
            <tr>
                <td><label for="user">Username</label></td>
                <td><input type="text" id="user" name="user" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" id="email" name="email" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="text" id="password" name="password" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="register" class="btn btn-success w-100" value="Sign Up"></td>
            </tr>
        </table>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "project2");
        if($connect === false){
            die("ERROR: could not connect" . mysqli_connect_error());
        }

        if(isset($_POST['register'])){
            $user = $_POST['user'];
            $mail = $_POST['email'];
            $pass = $_POST['password'];

            //$results = $connect->query("INSERT INTO student (user,email,pass) VALUES ('$user','$mail','$pass')");
            $results = mysqli_query($connect, "INSERT INTO student (user,email,pass) VALUES ('$user','$mail','$pass')");

            echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success!</strong> SIGNED IN SUCCESSFULLY
          </div>";
            echo "<a href='login.php' class='btn btn-primary'>LogIn</a>";
        }
        ?>
    </form>

</body>
</html>