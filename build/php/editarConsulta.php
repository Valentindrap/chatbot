<link rel="stylesheet" href="../css/editarConsulta.css">
<?php
include("conexion.php");

$sql = "UPDATE consultas SET pregunta=:pregunta, respuesta=:respuesta, categoria=:categoria WHERE id=:id";
$stmt = $pdo->prepare($sql);

if ($stmt->execute([
    "pregunta" => $_POST["pregunta"],
    "respuesta" => $_POST["respuesta"],
    "categoria" => $_POST["categoria"],
    "id" => $_POST["id"]
])) {
    echo "<div class='success'>Registro actualizado completamente</div>";
} else {
    echo "<div class='error'>Error al actualizar los datos</div>";
}

echo "<br/><a class='volver-link' href='listarConsultas.php'>Volver</a>";
?>
