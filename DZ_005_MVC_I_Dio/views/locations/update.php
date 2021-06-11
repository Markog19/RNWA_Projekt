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
        <h1>Kreiraj novu lokaciju</h1>

        <form action="?controller=locations&action=updateLocation" method="POST">
             <div class="form-group">
                <label for="location_id">Id ulice</label>
            <input type="text" class="form-control" name="location_id" id="location_id" value="<?php echo $locations->location_id ?>" >
            <div class="form-group">
                <label for="street_address">Adresa ulice</label>
            <input type="text" class="form-control" name="street_address" id="street_address" value="<?php echo $locations->street_address ?>" >
            </div>
            <div class="form-group">
                <label for="postal_code">Poštanski broj</label>
                <input type="text" class="form-control" name="postal_code" id="postal_code" value="<?php echo $locations->postal_code ?>">
            </div>
            <div class="form-group">
                <label for="city">Grad</label>
                <input type="text" class="form-control" name="city" id="city" value="<?php echo $locations->city ?>">
            </div>
            <div class="form-group">
                <label for="state_province">Županija</label>
                <input type="text" class="form-control" name="state_province" id="state_province" value="<?php echo $locations->state_province ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Id države</label>
                <select name="country_id" class="form-control" >
                    <?php foreach($countries as $country){  
                   echo "<option value = '$country->country_id'> $country->country_name</option>";
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