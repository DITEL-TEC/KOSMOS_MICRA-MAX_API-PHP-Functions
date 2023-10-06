
<html>
<head>
    <title>Actualizar valor cada segundo</title>
</head>
<body>
    <h1 id="resultado"></h1>
    
    <script>
        function actualizarValor() {
            // Realizar una solicitud AJAX para obtener el valor actualizado
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Actualizar el valor en la página
                    document.getElementById("resultado").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "consulta_valor.php", true);
            xhttp.send();
        }

        // Actualizar el valor cada segundo
        setInterval(actualizarValor, 1000);
    </script>
</body>
</html>