<?php

    require_once('DB.php');

    $db = new DB();

    $data = $db->viewData();

?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="header">

    <div class="headernav">

        <a class="logo" href="index.php">Human Resources</a>
        <a href="#" style="float:right">Sign up</a>
        <a href="#" style="float:right">Login</a>
    </div>

</div>

<div class="topnav">
    <a href="index.php" class="active">Početna</a>
    <a href="#" style="float:right">Link 3</a>
    <a href="#" style="float:right">Link 2</a>
    <a href="#" style="float:right">Link 1</a>
</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Pregled i pretraga zaposlenika</h2>

            <?php

            echo "<h5>" . "Današnji datum " . date("d. m. Y") . "</h5>";

            ?>

            <form action="search.php" method="POST">
                <input type="text" name="name" id="searchBox"
                       placeholder="Pretraži zaposlenika (id, ime, prezime, email)" oninput=search(this.value)>
                <br>
            </form>

            <div class="result" style="overflow-x:auto;">
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>hire_date</th>
                        <th>job_id</th>
                        <th>salary</th>
                        <th>commission_pct</th>
                        <th>manager_id</th>
                        <th>department_id</th>
                    </tr>
                    </thead>

                    <tbody id="dataViewer">


                    <?php
                    foreach ($data as $i) { ?>

                        <tr>
                            <td> <?php echo $i["employee_id"]; ?> </td>
                            <td> <?php echo $i["first_name"]; ?> </td>
                            <td> <?php echo $i["last_name"]; ?> </td>
                            <td> <?php echo $i["email"]; ?> </td>
                            <td> <?php echo $i["phone_number"]; ?> </td>
                            <td> <?php echo $i["hire_date"]; ?> </td>
                            <td> <?php echo $i["job_id"]; ?> </td>
                            <td> <?php echo $i["salary"]; ?> </td>
                            <td> <?php echo $i["commission_pct"]; ?> </td>
                            <td> <?php echo $i["manager_id"]; ?> </td>
                            <td> <?php echo $i["department_id"]; ?> </td>

                        </tr>
                        <?php


                    } ?>
                    </tbody>

                </table>
            </div>

        </div>

        <div class="card">
            <h2>Objava 2</h2>
            <h5>opis, 5 travnja, 2021</h5>
            <div class="fakeimg" style="height:200px;">Naslovna fotografija objave 2</div>
            <p>Paragraf..</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum porttitor erat, et maximus
                massa eleifend ac. Suspendisse commodo pretium massa, eget volutpat lectus faucibus in. Pellentesque
                luctus sed ligula id mollis. Duis faucibus lacinia nunc, eu malesuada justo sagittis ut. Sed sed aliquet
                ante. Curabitur ut velit nisl. Aenean quis maximus nulla, in viverra odio. Nulla tortor tellus, euismod
                sed eros a, rutrum semper enim. Nulla facilisi. Donec et finibus dui. Nam tristique sem vitae augue
                ultrices, vitae volutpat metus ullamcorper. Nulla commodo libero ante, eu semper est porta eget. Orci
                varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>

    <div class="rightcolumn">
        <div class="card">
            <h2>O nama</h2>
            <div class="fakeimg" style="height:100px;">Naslovna fotografija</div>
            <p>Marko Galić</p>
            <p>Branimir Bulić</p>
        </div>

        <div class="card">
            <h3>Najpopularnije</h3>
            <p>Objava 1</p>
            <p>Objava 2</p>
        </div>

        <div class="card">
            <h3>Zaprati nas na</h3>
            <p>Tekst..</p>
            <p>Tekst..</p>
            <p>Tekst..</p>
        </div>
    </div>
</div>

<div class="footer">
    <h2>&copy;RNWA</h2>
    <p>Galić, Bulić</p>


    <div class="navbar">
        <a href="#home" class="active">Početna</a>
        <a href="#news">O nama</a>
        <a href="#contact">Kontakt</a>
    </div>


</div>

<script src="js/main.js" type="text/javascript"></script>


</body>

</html>
