<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter</title>
</head>
<?php 
    $valuesInputed = array(
        "albumName" => "",
        "artistName" => "",
        "image" => "",
        "numberOfSongs" => "",
        "releaseDate" => "",
    );
    $errorOccured = false;
    $errorEmpty = '';


    // FORM WAS SUBMITTED
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $inputs = array("albumName", "artistName", "image", "numberOfSongs", "releaseDate");

        if (anyIsEmpty($inputs)) {
            $errorOccured = true;
            $errorEmpty = 'Tous les champs doivent être remplis';
        }
        // ADD ISET() to optionGender and check if value is exactly the one we want

        for ($i = 0; $i < sizeof($inputs); $i++) {
            $keys = array_keys($valuesInputed);
            $valuesInputed[$keys[$i]] = trojan($_POST[$inputs[$i]]);
        }

        if (!$errorOccured) {
            foreach($valuesInputed as $value) {
                echo $value;
            }
        }
    }

    
    function anyIsEmpty($arrayOfInputs) {
        $result = false;
        foreach ($arrayOfInputs as $input) {
            if (empty($_POST[$input])) {
                $result = true;
                break;
            }
        }

        return $result;
    }

    function trojan($data){
        $data = trim($data); //Enleve les caractères invisibles
        $data = addslashes($data); //Mets des backslashs devant les ' et les  "
        $data = htmlspecialchars($data); // Remplace les caractères spéciaux par leurs symboles comme ­< devient &lt;
        
        return $data;
    }

?>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <a href="index.php">
                    <button class="btn btn-light"><--</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] != 'POST' || $errorOccured == true) {
                ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

                            <input type="text" class="form-control" name="albumName" id="albumName" placeholder="Nom de l'album" 
                                value="<?php echo $valuesInputed['albumName'];?>">

                            <input type="text" class="form-control" name="artistName" id="artistName" placeholder="Artiste" 
                                value="<?php echo $valuesInputed['artistName'];?>">

                            <input type="text" class="form-control" name="image" id="image" placeholder="Image" 
                                value="<?php echo $valuesInputed['image'];?>">

                            <input type="text" class="form-control" name="numberOfSongs" id="numberOfSongs" placeholder="Nombre de pistes" 
                                value="<?php echo $valuesInputed['numberOfSongs'];?>">

                            <input type="date" class="form-control" name="releaseDate" id="releaseDate" placeholder="Date de sortie" 
                                value="<?php echo $valuesInputed['releaseDate'];?>">

                            <p class="text-danger">
                                <?php 
                                    if ($errorOccured) {
                                        echo $errorEmpty;
                                    }
                                ?>
                            </p>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>