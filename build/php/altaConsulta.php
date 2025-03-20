<?php
include("conexion.php");

$sql="INSERT INTO consultas (pregunta, respuesta, categoria) VALUES (:pregunta, :respuesta, :categoria)";
$stmt= $pdo->prepare($sql);
if ($stmt->execute([
    "pregunta" => $_POST["pregunta"], 
    "respuesta" => $_POST["respuesta"], 
    "categoria" => $_POST["categoria"] 
]) ) {echo "registro cargado completamente";
}else{
    echo "error al cargar datos";
}