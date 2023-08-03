<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid" style="margin-top: 2px;">

        <h1 style="text-align:center;">Form Validation</h1>

        <form action="foam.php" method="post" class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" name="FirstName" class="form-control" placeholder="First-Name">
            <br>
            <label for="LastName">LastName</label>
            <input type="text" name="LastName" class="form-control" placeholder="Last-Name">
            <br>
            <label for="Email">Email</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input type="Email" class="form-control" name="Email" placeholder="Email">
            </div>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            <br>
            <br>
            <label for="Password">Password</label>
            <input type="Password" name="Password" class="form-control" placeholder="********">
            <br>
            <label for="Age">Age</label>
            <input type="number" name="Age" class="form-control" placeholder="18 Above">
            <br>
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" class="form-control" placeholder="Male/Female">
            <br>
            <input type="Submit" value="Submit" name="Submit" class="btn btn-success">
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Age = $_POST['Age'];
        $Gender = $_POST['Gender'];

        $information = "INSERT INTO `information` (`FirstName`, `LastName`, `Email`, `Password`, `Age`, `Gender`) VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Age', '$Gender')";
        $results = mysqli_query($connect, $information);
        if (!$results) {
            die("information failed");
        }
    }
    ?>
</body>

</html>