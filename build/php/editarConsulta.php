<?php
include("conexion.php");

$sql="UPDATE consultas SET pregunta=:pregunta, respuesta=:respuesta, categoria=:categoria WHERE id=:id";
$stmt= $pdo->prepare($sql);
if ($stmt->execute([
    "pregunta" => $_POST["pregunta"], 
    "respuesta" => $_POST["respuesta"], 
    "categoria" => $_POST["categoria"]
]) ) {echo "registro actualizado completamente";
}else{
    echo "error al actualizar los datos";
}

echo "<br/> <a name='volver' href='listarConsultas.php'>Volver</a>";
?>