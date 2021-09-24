<?php
    include('conexiondb.php');
    $id= isset($_REQUEST["id"])?$_REQUEST["id"]:211001;

    $texto="";
    $sql = "SELECT * FROM incidente WHERE id = " . $id;
    $result = $conexion->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $texto = $row["texto"];
        }
    }
    $conexion->close();
?>
<!Doctype HTML>
<html>
    <head>
        <title>Monitor de Incidentes</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            if($texto == ""){
                echo '<meta http-equiv="refresh" content="1; url=monitor.php?id='.($id+1).'" ';
            }
        ?>
    </head>


    <body>

        <div id="mySidenav" class="sidenav">
            <p class="logo">T. información</p>
            <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Monitor</a>
            <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Clasificación</a>
            <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Análisis</a>
        </div>
        <div id="main">

            <div class="head">
                <div class="col-div-6">
                    <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Incidentes</span>
                    <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Incidentes</span>
                </div>

                <div class="col-div-6">
                    <div class="profile">

                        <img src="../images/jonathan.jpg" class="pro-img" />
                        <p>Jonathan De La Cruz Huerta <span>201731754</span></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
            <br/>

            <div class="col-div-3">
                <div class="box">
                <button type="button" onclick="pre('<?php echo $id; ?>')"> <--- Incidente Anterior </button>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                <button type="button" onclick="next('<?php echo $id; ?>')"> Siguiente Incidente ---> </button>
                </div>
            </div>
            <div class="clearfix"></div>
            <br/><br/>
            <div class="col-div-8">
                <div class="box-8">
                    <div class="content-box">
                        <p>Incidente <span><?php echo $id?></span></p>
                        <br/>
                        <p> <?php echo $texto; ?> </p>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function pre(id){
                id = parseInt(id, 10);
                location.href = "monitor.php?id=" + (id-1);
            }
            function next(id){
                id = parseInt(id, 10);
                location.href = "monitor.php?id=" + (id+1);
            }

            $(".nav").click(function(){
            $("#mySidenav").css('width','70px');
            $("#main").css('margin-left','70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display','none');
            $(".nav2").css('display','block');
            });

            $(".nav2").click(function(){
            $("#mySidenav").css('width','300px');
            $("#main").css('margin-left','300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display','block');
            $(".nav2").css('display','none');
            });

        </script>

    </body>
</html>
