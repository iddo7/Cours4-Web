<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "albums";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }


    $connection->query('SET NAMES utf8');

    $selectAllQuery = "SELECT * FROM albums";
    $result = $connection->query($selectAllQuery);
    if ($result->num_rows <= 0) {
        echo "0 results";
    }
?>

<body>
    <div class="container">
        <div class="row">
            <?php 
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-6 d-flex justify-content-center mb-4 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $row["img"]; ?>" class="card-img-top p-3" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["nom"]; ?></h4>
                                <p class="card-text"><?php echo $row["artiste"]; ?></p>
                                <p class="card-text"><?php echo $row["dateDeSortie"] . " - " . $row["nmbDePistes"]; ?> chansons</p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            ?>
        </div>
        <div class="row">
            <div class="col">
                <a href="ajouter.php">
                    <button class="btn btn-primary">Ajouter</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>