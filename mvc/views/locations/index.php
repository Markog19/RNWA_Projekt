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
.navbar {​​​
            margin-bottom: 0;
border-radius: 0;
}​​​
        /* Add a gray background color and some padding to the footer */
footer {​​​
            background-color: #f2f2f2;
padding: 25px;
}​​​
    </style>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 align="center">Pregled Svih Poslova</h1>
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
               <th scope="col">#ID</th><th scope="col">Adresa ulice</th><th scope="col">Poštanski broj</th><th scope="col">Grad</th><th scope="col">Županija</th><th scope="col">ID države</th><th scope="col">Akcija</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($locations as $location) { ?>

<tr>              

  <th scope="row"> <?php echo $location->location_id?></th>
                <td> <?php echo $location->street_address  ?></td>
                <td><?php echo $location->postal_code  ?></td>
                <td><?php echo $location->city  ?></td>
                <td><?php echo $location->state_province  ?></td>
                <td><?php echo $location->country_id  ?></td>


                <td>
 <a type="button" class="btn btn-warning" href="?controller=locations&action=verifyupdate&id=<?php echo $location->location_id?>">Uredi</a>
                    <a type="button" class="btn btn-primary" href="?controller=locations&action=show&id=<?php echo $location->location_id?>">Detalji</a>
                    <a type="button" class="btn btn-danger" href="?controller=locations&action=deleteLocation&id=<?php echo $location->location_id?>">Izbriši</a>
                </td>
            </tr>
        <?php }?>
</tbody>
        </table>
    </div>
</div>
<br>
</body>
</html>
