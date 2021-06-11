<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>



<div class="jumbotron">
    <div class="container text-center">
        <h1>Kreiraj novu državu</h1>

        <form action="?controller=countries&action=insertCountry" method="POST">
            <div class="form-group">
                <label for="country_id">ID države</label>
                <input type="text" class="form-control" name="country_id" id="country_id" placeholder="Ovdje unesite id države">
            </div>
            <div class="form-group">
                <label for="country_name">Naziv države</label>
                <input type="text" class="form-control" name="country_name" id="country_name" placeholder="Ovdje unesite naziv države">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Id regije</label>
                <select name="region_id" class="form-control">
                   <?php foreach($regions as $region){  
                   echo "<option value = '$region->region_id'> $region->region_name</option>";
               }?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Kreiraj</button>
        </form>
    </div>
</div>

<br>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>