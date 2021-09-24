<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buap";

$tipo = isset($_REQUEST['tipo'])?$_REQUEST['tipo']:"";
$anhio = isset($_REQUEST['anhio'])?$_REQUEST['anhio']:"";
$mes = isset($_REQUEST['mes'])?$_REQUEST['mes']:"";

$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');

$total=0;
$sql = "SELECT * FROM pueblacapital2 WHERE tipo2= '". $tipo . "' and year(fecha) ='". $anhio ."' and month(fecha) = '". $mes ."'";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia</title>
</head>
<body>
    <div class="container">
        <h2><?php echo $tipo."(".$mes." - ".$anhio.")";?></h2>
        <div class="row">
            <div class="col">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Incidente</th>
                        <th>Fecha</th>
                        <th>Texto</th>
                        <?php
                        $result=$conn->query($sql);
                        $c=0;
                        if($result->num_rows >0){
                            while($row=$result->fetch_assoc()){
                                $c++;
                                echo "<tr>";
                                echo "td";
                                echo $c;
                                echo "</td>";
                                echo "<td>";
                                echo $row["Incidente"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["fecha"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["texto"];
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/boostrap.min.js"></script>
</body>
</html>