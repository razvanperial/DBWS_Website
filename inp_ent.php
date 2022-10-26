<?php
	define('ROOT', '/');
	ini_set('error_reporting', E_ALL);
    echo("hello")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat'
        rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Campus Connect</title>
</head>



<body>
    <header>
            <nav class="navBar">
                <a href="index.php"><img src="img/logo_transparent.png"></a>
            </nav>
    </header>
    
<div id="container">
    <div class="sideNav">
        <a href="index.php#top">Home</a>
        <a href="index.php#Info">Info</a>
        <a href="index.php#Contact">Contact</a>
        <a href="maintenance.php">Maintenance</a>
        <a href="imprint.php">Imprint</a>
    </div>
    <div class="content">
        <div>
            Input
            <!--form to read name surname birthdate email-->
            <form method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Name"><br>
                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname"placeholder="Surname"><br>
                <label for="birthdate">Birthdate:</label><br>
                <input type="text" id="birthdate" name="birthdate" placeholder="YYYY-MM-DD"><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php //Insert data into database 
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $birthdate = $_POST['birthdate'];
                $email = $_POST['email'];

                $servername = "localhost";
                $username = "group12";
                $password = "bafflepyramid";
                $dbname = "group12";
                
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "INSERT INTO Student (name, surname, birthdate, email)
                VALUES ('$name', '$surname', '$birthdate', '$email')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="table">
        </div>
    </div>
</div>

</body>
    
</body>

</html>