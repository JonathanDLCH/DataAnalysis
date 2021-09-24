<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buap";


$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');

$total=0;
$sql = "SELECT tipo2, count(tipo2) total FROM pueblacapital2 WHERE year(fecha) = 2019 group by tipo2";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/boostrap.min.css">
    <title>Por año</title>
</head>
<body>
    <div class="container">
        <h2></h2>
        <div class="col">
            <table class="table table-hover">
                <tr>
                    <th>tipo</th>
                    <th>Cantidad</th>
                </tr>
                <?php
                $cont =0;
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>";
                        echo "<a  href='mes.php?tipo=".$row["tipo2"]."&anhio=2019'>".$row["tipo2"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo $row["total"];
                        echo "</td>";
                        echo "</tr>";
                        $cont += $row["total"];

                    }
                }
                echo "<tr>";
                echo "<td>";
                echo "Total";
                echo "</th>";
                echo "<th>";
                echo $cont;
                echo "</th>";
                echo "</tr>";
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/boostrap.min.js"></script>
</body>
</html>