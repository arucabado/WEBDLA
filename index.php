<?php
session_start ();
if (!isset($_SESSION["id_usuario"])){
    $tipoUsuario = "Invitado";
} else {
    $tipoUsuario = $_SESSION["nombre_usuario"];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Division Latino - Horarios Mundiales</title>
</head>
<body background="/images/The-Division-crest.webp"  >
    <?php include 'menu.html'; ?>
    <h1 class="titulo1">Division Latino</h1>
    <h1 class="titulo1">Horarios Mundiales</h1>
    <table>
        <tr>
            <th>País</th>
            <th>Usuario</th>
            <th>Bandera</th>
            <th>Hora</th>
        </tr>
        <tr>
            <td>Acuña, Coahuila, México</td>
            <td>Franco</td>
            <td><img src="/images/banderaMX.png" alt="México" class="imgbanderas"></td>
            <td id="acuna_time"></td>
        </tr>
        <tr>
            <td>Guatemala</td>
            <td>Madmax</td>
            <td><img src="/images/guatemala.png" alt="Guatemala" class="imgbanderas"></td>
            <td id="guatemala_time"></td>
        </tr>
        <tr>
            <td>Colombia</td>
            <td>Silva</td>
            <td><img src="/images/colombia.png" alt="Colombia" class="imgbanderas"></td>
            <td id="colombia_time"></td>
        </tr>
        <tr>
            <td>Venezuela</td>
            <td>Marcos</td>
            <td><img src="/images/venezuela.png" alt="Venezuela" class="imgbanderas"></td>
            <td id="venezuela_time"></td>
        </tr>
        <tr>
            <td>República Dominicana</td>
            <td>Thanos</td>
            <td><img src="/images/republica-dominicana.png" alt="República Dominicana" class="imgbanderas"></td>
            <td id="repdom_time"></td>
        </tr>
        <tr>
            <td>Paraguay</td>
            <td>Dany</td>
            <td><img src="/images/paraguay.png" alt="Paraguay" class="imgbanderas"></td>
            <td id="paraguay_time"></td>
        </tr>
        <tr>
            <td>Chile</td>
            <td>Thexodermo</td>
            <td><img src="/images/chile.png" alt="Chile" class="imgbanderas"></td>
            <td id="chile_time"></td>
        </tr>
        <tr>
            <td>Monterrey, México</td>
            <td>Arucabado</td>
            <td><img src="/images/banderaMX.png" alt="México" class="imgbanderas"></td>
            <td id="monterrey_time"></td>
        </tr>
        <tr>
            <td>España</td>
            <td>Paraguas</td>
            <td><img src="/images/espana.png" alt="España" class="imgbanderas"></td>
            <td id="espana_time"></td>
        </tr>
       
    </table>
    <div>
        <h1><a href ="https://docs.google.com/spreadsheets/d/e/2PACX-1vTJEX5DerCvOj3a_m36TRy1gPBAUvrduOIdmXI9j1Y0MpQk1wIXaZ9KOcPa7HzXzp_N5qGmjDj6yEfL/pubhtml">
            Tabla de Estadisticas Division 2</a>
        </h1>
    </div>
    <a href="https://discord.com/invite/7RhAFCJrgb"><img src="/images/discord_link2.png" class="img_links" /></a>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>