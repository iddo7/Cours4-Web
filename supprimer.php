<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
</head>
<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $db = 'cours4';


    // Create connection
    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    // Query
    $deleteQuery = "DELETE FROM albums WHERE id=" . $_GET["id"];

    if ($connection->query($deleteQuery) === TRUE) {
        echo "Record deleted successfully";
    }
    else {
        echo "Error deleting record: " . $connection->error;
    }
    $connection->close();

    header("Location: index.php");
    exit;
?>
<body>
</body>
</html>