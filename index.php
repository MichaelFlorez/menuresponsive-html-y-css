<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo menú responsive</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <Label for="show-menu" class="show-menu">Show Menu</Label>
    <input type="checkbox" id="show-menu" role="button">
    <ul id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About &#65516</a>
            <ul class="hidden">
                <li><a href="#">Who we are</a></li>
                <li><a href="#">What we do</a></li>
            </ul>
        </li>
        <li><a href="#">Portfolio &#65516</a>
            <ul class="hidden">
                <li><a href="#">Photogaphy</a></li>
                <li><a href="#">Web &amp; User Interface Desingn</a></li>
                <li><a href="#">Illustration</a></li>
            </ul>
        </li>
        <li><a href="#">New</a></li>
        <li><a href="#">Contact</a></li>

    </ul>


</body>
</html>