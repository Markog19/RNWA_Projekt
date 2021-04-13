<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
<div class="header">

    <div class="headernav">
        <!-- <a href="#"><img src="https://mpng.subpng.com/20180405/kgq/kisspng-human-resources-business-outsourcing-human-resourc-human-resource-5ac5b3dcbb2569.8505142415229060767666.jpg" width="50px" height="50px"></a> -->

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


            <div class="col-md-8 form-group">
                <input type="text" id="search" class="form-control" autocomplete="off"
                       placeholder="Pretraži zaposlenika (id, ime, prezime, email)"><br>
            </div>


            <div class="result" style="overflow-x:auto;">

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

