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
        <h1>Kreiraj novi posao</h1>

        <form action="?controller=jobs&action=insertJob" method="POST">
            <div class="form-group">
                <label for="job_id">ID posla</label>
                <input type="text" class="form-control" name="job_id" id="job_id" placeholder="Ovdje unesite id posla">
            </div>
            <div class="form-group">
                <label for="job_title">Naziv posla</label>
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Ovdje unesite naziv posla">
            </div>

            <div class="form-group">
                <label for="min_salary">Minimalna plaća</label>
                <input type="text" class="form-control" name="min_salary" id="min_salary" placeholder="Ovdje unesite minimalnu plaću">
            </div>

            <div class="form-group">
                <label for="max_salary">Maksimalna plaća</label>
                <input type="text" class="form-control" name="max_salary" id="max_salary" placeholder="Ovdje unesite maksimalnu plaću">
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