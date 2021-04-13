// jQuery ajax live search

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "search.php?s=" + str, true);
        xmlhttp.send();
    }
}

$(document).ready(function () {
    // fetch data from table without reload/refresh page
    loadData();

    function loadData(query) {
        $.ajax({
            url: "search.php",
            type: "POST",
            chache: false,
            data: {query: query},
            success: function (response) {
                $(".result").html(response);
            }
        });
    }

    // live search data from table without reload/refresh page
    $("#search").keyup(function () {
        var search = $(this).val();
        if (search != "") {
            loadData(search);
        } else {
            loadData();
        }
    });
});