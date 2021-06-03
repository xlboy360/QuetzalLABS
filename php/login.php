<?php
session_start();

$conexion=mysqli_connect("localhost","root","","id16838426_quetzallabs");

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$consulta = "SELECT * FROM Usuario WHERE CORREO='$usuario' AND CONTRASENA='$password' ";
$resultado=mysqli_query($conexion,$consulta);
$data=null;

while($row = mysqli_fetch_assoc($resultado)){
    echo $row['USER'];

    if($row>=1){
        $_SESSION["s_usuario"] = $row['USER'];
        $data= $row['USER'];
        echo'<script type="text/javascript">
           
            window.location.href="../shop.html";
            </script>';
       
       
    }else{
        echo'<script type="text/javascript">
        alert("Las contraseñas no coinciden");  
        window.location.href="../register.html";
        </script>';
        $_SESSION["s_usuario"] = null;
        $data=null;
        
    }
}
print json_encode($data);
$conexion=null;