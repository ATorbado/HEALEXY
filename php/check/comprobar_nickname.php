<?php
    @$con=mysqli_connect("sql303.byethost.com","b17_25150469","Hola123A","b17_25150469_proyectoalex");
        if(mysqli_connect_error()){
            echo"error al conectar";
        }else{
            $nickname =$_REQUEST['nickname'];
            //echo "$nickname";
            $consulta="SELECT nickname FROM loggeos WHERE nickname = \"".strtolower($nickname)."\"";
            $result = mysqli_query($con,$consulta);
            $cambios = mysqli_affected_rows($con);
            
            if($cambios>=1){
                echo '<div class="alert alert-danger">Apodo en uso :( </div>';
            }else{
                echo '<div class="alert alert-success">Apodo disponible</div>';
            }  
        }
?>