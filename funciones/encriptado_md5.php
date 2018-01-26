<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="code.js"></script>
        <script>
        function encriptar(elemento){
            var palabra = document.getElementsByTagName("input")[0].value;
            var palabra_codificada = btoa(palabra);
            document.getElementById("resultado").innerHTML = palabra_codificada;
        }
        function desencriptar(elemento){
            var palabra = document.getElementsByTagName("input")[0].value;
            var palabra_decodificada = atob(palabra);
            document.getElementById("resultado").innerHTML = palabra_decodificada;
        }
        </script>
    </head>
    <body>
        <input type="password" id="caja">
        <button onclick="encriptar(this)">encriptar</button>
        <button onclick="desencriptar(this)">desencriptar</button>
        <p id="resultado"></p>
    </body>

</html>
<!--26/01/2018-->