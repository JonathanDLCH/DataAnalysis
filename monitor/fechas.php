<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bdname = "buap";

        $conn= new mysqli($servername,$username,$password,$bdname);

        $f2017=0;
        $f2018=0;
        $f2019=0;
        $f2020=0;
        
        $sql = "SELECT count(*) as total FROM pueblacapital2 WHERE texto like '%/2017%'";
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $f2017 = $row["total"];
            }
        }

        $sql = "SELECT count(*) as total FROM pueblacapital2 WHERE texto like '%/2018%'";
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $f2018 = $row["total"];
            }
        }

        $sql = "SELECT count(*) as total FROM pueblacapital2 WHERE texto like '%/2019%'";
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $f2019 = $row["total"];
            }
        }

        $sql = "SELECT count(*) as total FROM pueblacapital2 WHERE texto like '%/2020%'";
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $f2020 = $row["total"];
            }
        }

        $conn->close();

        $total = 0;

        if($f2018>$f2019){
            $total = $f2018;
        }else{
            $total = $f2019;

        }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamiento I. Fechas</title>
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
        <h1>Reporte de fechas - Puebla Tickets</h1>
    </header>
    <?php
    $var1 = round($f2018 *100 / $total);
    $var2 = round($f2019 *100 / $total);
    echo "2017: " . $f2017 . "<br><br>";
    echo "2018: " . "<div style=\"background-color:#00395e; width:100px; height:25px; position:relative;\"><div style=\"width:". $var1. "px; background-color:#00b6e4; height:25px;\"></div><div style=\"position:absolute; top:4px; left:30px; color:white;\">". $f2018 ."</div></div>" . "<br>";
    echo "2019: " . "<div style=\"background-color:#00395e; width:100px; height:25px; position:relative;\"><div style=\"width:". $var2. "px; background-color:#00b6e4; height:25px;\"></div><div style=\"position:absolute; top:4px; left:30px; color:white;\">". $f2019 ."</div></div>" . "<br>";
    echo "2020: " . $f2020;
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
