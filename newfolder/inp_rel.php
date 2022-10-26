<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat'
        rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="scripts.js" type="text/javascript"></script>
    <title>Campus Connect</title>
</head>



<body>
    <header>
            <nav class="navBar">
                <a href="index.html"><img src="img/logo_transparent.png"></a>
            </nav>
    </header>
    <div id="container">
        <div class="sideNav">
            <a href="index.html#top">Home</a>
            <a href="index.html#Info">Info</a>
            <a href="index.html#Contact">Contact</a>
            <a href="maintenance.html">Maintenance</a>
            <a href="imprint.html">Imprint</a>
        
        </div>
        <div class="input">
            <h1>Input</h1>
            <div>
                Entity 1 <br>
                <button onclick="table()">Show Entity1</button>
                <div id="entity1"></div>
            </div>
            <div>
                Entity 2<br>
                <button>Show Entity1</button>
                <div id="entity2"></div>
            </div>
            
            <form action="input_temp.html" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Name"><br>
                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname"
                    placeholder="Surname"><br>
                <label for="birthdate">Birthdate:</label><br>
                <input type="text" id="birthdate" name="birthdate"
                    placeholder="YYYY-MM-DD"><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div id="table">
        </div>
    </div>
    
</body>

</html>