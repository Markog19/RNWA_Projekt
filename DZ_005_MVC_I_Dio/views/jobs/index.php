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
               <th scope="col">#ID</th>
                <th scope="col">Naziv posla</th>
                <th scope="col">Minimalna plaća</th>
                <th scope="col">Maksimalna plaća</th>
                <th scope="col">Akcija</th>
            </tr>
            </thead>

            <tbody>
<?php foreach($jobs as $job) { ?>

<tr>              

  <th scope="row"> <?php echo $job->job_id?></th>
                <td> <?php echo $job->job_title  ?></td>
                <td><?php echo $job->min_salary  ?></td>
				<td><?php echo $job->max_salary  ?></td>

                <td>
 <a type="button" class="btn btn-warning" href="?controller=jobs&action=verifyupdate&id=<?php echo $job->job_id?>">Uredi</a>
                    <a type="button" class="btn btn-primary" href="?controller=jobs&action=show&id=<?php echo $job->job_id?>">Detalji</a>
                    <a type="button" class="btn btn-danger" href="?controller=jobs&action=deleteJob&id=<?php echo $job->job_id?>">Izbriši</a>
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
