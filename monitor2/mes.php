<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buap";

$tipo = isset($_REQUEST['tipo'])?$_REQUEST['tipo']:"";
$anhio = isset($_REQUEST['anhio'])?$_REQUEST['anhio']:"";

$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');

$total=0;
$sql = "select '".$tipo."' as tipo2,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a1,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a2,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a3,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a4,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a5,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a6,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a7,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a8,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a9,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a10,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a11,
SELECT count(*) FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) =1) a12
";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes</title>
</head>
<body>
    <div class="container">
        <h2>Mes</h2>
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <th>Tipo</th>
                    <th>Enero</th>
                    <th>Febrero</th>
                    <th>Marzo</th>
                    <th>Abril</th>
                    <th>Junio</th>
                    <th>Julio</th>
                    <th>Agosto</th>
                    <th>Septiembre</th>
                    <th>Octubre</th>
                    <th>Noviembre</th>
                    <th>Diciembre</th>
                </tr>
                <?php
                $cont=0;
                $result=$conn->query($sql);
                if($result->num_rows >0){
                    while($row=$result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>";
                        echo $row["tipo2"];
                        echo "</td>";
                        echo "<td>";
                        echo "<a href=\"javascript: reporteMes(1)\">".$row["a1"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(2)\">".$row["a2"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(3)\">".$row["a3"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(4)\">".$row["a4"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(5)\">".$row["a5"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(6)\">".$row["a6"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(7)\">".$row["a7"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(8)\">".$row["a8"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(9)\">".$row["a9"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(10)\">".$row["a10"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(11)\">".$row["a11"]."</a>";
                        echo "</td>";
                        echo "<td>";
                        echo echo "<a href=\"javascript: reporteMes(12)\">".$row["a12"]."</a>";
                        echo "</td>";
                    }
                }

                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/boostrap.min.js"></script>
    <script>
        function reporteMes(mes) {

            var tipo = "<?php echo $tipo ?>";
            var anhio = "<?php echo $aniho ?>";

            location.href= "dia.php?tipo="+tipo+"&anhio="+anhio+"&mes="+mes+"&r="+Math.random(); //se usa el math.random para que no se quede en cache y redireccione de una manera correcta
            
        }
    </script>
</body>
</html>