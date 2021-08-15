<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamiento de la I. Monitor</title>
    <style>
        *{
            font-family: "Gill Sans Extrabold", Helvetica, sans-serif ;
        }
        body{
            background: #DFF2F5;
            margin: 10px 25px;
        }
        h1{
            text-align: center;
        }
        footer{
            background: #BFDEDA;
            padding: 10px 0;
            margin-top: 200px;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Monitor - Puebla Tickets</h1>
        <p>Funcionamiento:<br>Este monitor muestra el resultado segun el id escrito en el link del explorador "?id=#".</p>
    </header>
    <br>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bdname = "buap";

        $conn= new mysqli($servername,$username,$password,$bdname);
        
        $id= isset($_REQUEST["id"]) ? $_REQUEST["id"]:0;

        $sql = "SELECT * FROM pueblacapital WHERE id =" . $id;
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                echo $row["texto"];
            }
        }
        $conn->close();
    ?>
    <footer>
        <ul>
            <li><h2>Benemérita Universidad Autónoma de Puebla</h2></li>
            <li><h3>Ciencias de la Computación</h3></li>
            <li><h3>Tratamiento de la Información</h3></li>
            <li><h4>Profesor: Gilberto Lopez Poblano</h4></li>
            <li><h4>Alumno: Jonathan De La Cruz Huerta</h4></li>
        </ul>
    </footer>
</body>
</html>