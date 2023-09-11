<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<?php 
if ($_SESSION["connexion"] == true) {
    


    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "cours4";

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cours4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container col-6">
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

                                <a href="modifier.php?id=<?php echo $row["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="supprimer.php?id=<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></a>
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
<?php 
}
else {
    header("Location: login.php");
    exit;
}
?>
</html>