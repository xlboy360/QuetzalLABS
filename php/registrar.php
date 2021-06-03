<?php
$apellido=$_POST['apellido'];
$nom=$_POST['nombre'];
$pw=$_POST['pass1'];
$pw2=$_POST['pass2'];
$user=$_POST['usuario'];
$mail=$_POST['mail'];

$con=mysqli_connect("localhost","root", "","id16838426_quetzallabs");

if( $pw == $pw2) {
    
    
        $res=mysqli_query($con,"INSERT INTO Usuario (USER,NOMBRE,APELLIDO,CORREO,CONTRASENA) VALUES('$user','$nom','$apellido','$mail','$pw')");
    
    
    echo'<script type="text/javascript">
    alert("Usuario creado con exito");
    window.location.href="../login.html";
    </script>';
    
}
else{
    echo'<script type="text/javascript">
    alert("Las contraseñas no coinciden");
    window.location.href="../register.html";
    </script>';
}

?>