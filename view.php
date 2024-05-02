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
        table tr:hover td{
            background-color: rgb(239, 124, 244);
            color: white;
        }
        .container-fluid{
            background-color:rgb(239, 124, 244);
        }
        .table-head{
            background-color: #00F5FF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid text-white">
        <h1 class="text-center p-4">BOOKING DETAILS</h1>
    </div>
    <table class="table table-striped table-bordered text-center">
        <tr class="table table-head border-white">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>no_of_persons</th>
            <th>date</th>
            <th>time</th>
            <th>preferred food</th>
            <th>ocassion</th>
        </tr>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "project2");
        if($connect === false){
            die("ERROR: could not connect" . mysqli_connect_error());
        }
            $results = mysqli_query($connect, "SELECT * FROM booking");
            while($row=mysqli_fetch_array($results)){
                echo "<tr class='table-light text-dark'>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['no_of_persons'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['preferred_food'] . "</td>";
                echo "<td>" . $row['occassion'] . "</td>";
                echo "<tr>";
            }
            
            
            ?>
    </table>
</body>
</html>