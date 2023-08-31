<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <form action="">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom" value="">
                    <input type="text" class="form-control" name="artist" id="artist" placeholder="Artiste" value="">
                    <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="">
                    <input type="text" class="form-control" name="numberSongs" id="numberSongs" placeholder="Nombre de pistes" value="">
                    <input type="date" class="form-control" name="releaseDate" id="releaseDate" placeholder="Date de sortie" value="">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="index.php">
                    <button class="btn btn-light"><--</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>