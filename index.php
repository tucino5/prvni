<!DOCTYPE html>

<html lang="cs">

<head>

    <meta charset="UTF-8">

    <title>Volani vzdalene sluzby v PHP</title>

    <script>

        const HOST = window.location.protocol + "//" + window.location.hostname + ((window.location.port) ? ":" + window.location.port : "") + window.location.pathname;

        function volaniSluzby() {

            let url = HOST+"datumy.php";

            fetch(url).then(function(response) {

                response.text().then(function(text) {

                    let obj = JSON.parse(text);

                    document.getElementById("vystup").innerHTML =

                        obj.datum+" "+obj.cas+" ("+obj.denVTydnu+") "+obj.svatek;

                });

            });

        }

    </script>

</head>

<body onload="volaniSluzby()">



<h1>Volani vzdalene sluzby v PHP</h1>



<div id="vystup">...</div>



</body>

</html>