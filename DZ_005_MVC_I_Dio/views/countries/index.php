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
        <h1 align="center">Pregled Svih Država</h1>
        <br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Naziv države</th>
                <th scope="col">ID regije</th>
                <th scope="col">Akcija</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($countries as $country) { ?>

<tr>              

  <th scope="row">  <?php echo $country->country_id?></th>
                <td> <?php echo $country->country_name  ?></td>
                <td><?php echo $country->region_id  ?></td>
                <td>
 <a type="button" class="btn btn-warning" href="?controller=countries&action=verifyupdate&id=<?php echo $country->country_id?>">Uredi</a>
                    <a type="button" class="btn btn-primary" href="?controller=countries&action=show&id=<?php echo $country->country_id?>">Detalji</a>
                    <a type="button" class="btn btn-danger" href="?controller=countries&action=deleteCountry&id=<?php echo $country->country_id?>">Izbriši</a>
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
