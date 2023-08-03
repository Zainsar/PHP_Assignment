<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Fetch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <?php

    include 'connect.php';

    ?>

    <div class="container-fluid">

        <h1 style="text-align:center;">Data Fetch From Database</h1>

        <div class="row">

            <?php

            $Get = "SELECT * FROM `information`";
            $Info = mysqli_query($connect, $Get);

            while ($row = mysqli_fetch_assoc($Info)) {
                echo '<div class="col-lg-4 col-md-6 col-sm-12 mt-3">';
                echo '    <div class="card">';
                echo '        <div class="card-body">';
                echo '            <h5 class="card-title">' . $row['FirstName'] . ' ' . $row['LastName'] . '</h5>';
                echo '            <p class="card-text">Email: ' . $row['Email'] . '</p>';
                echo '            <p class="card-text">Password: ' . $row['Password'] . '</p>';
                echo '            <p class="card-text">Age: ' . $row['Age'] . '</p>';
                echo '            <p class="card-text">Gender: ' . $row['Gender'] . '</p>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>