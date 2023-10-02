<?php
$host = "localhost";
$dbuser = "reboot";
$dbpass = "reboot";
$dbname = "wiitube";



$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {

    die("Connection failed: $conn->connect_error");
}

echo "Connection done!";

$title = "Reboot Lab";

$videoQuery = "SELECT * FROM videos";

$result1 = $conn->query($videoQuery);


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?php
            echo $title
            ?></title>


</head>



<body>

    <header>
        <div>
            <p class="titling">
                <?php
                echo $title
                ?></p><button class="login-button">Inciar sesión</button>
            <div>
    </header>

    <div>
        <h1> Main section </h1>

    <ul>
<?php 

if ($result1-> num_rows > 0) {
    while ($row = $result1-> fetch_assoc()) {
        echo "<li>" . $row["description"]. " : "  . "<br>"."<a href=". $row["url"].">" .$row["url"] ." </a>. </li>";
    }
}

?>

</ul>

        <h2> Home <h2>
    </div>
    <?php
    echo "<h1>Welcome to WiiTube</h1>"
    ?>
    <footer>
        <p class="copyright">&copy; 2023 Reboot Academy. All Rights Reserved.</p>
    </footer>
</body>

</html>