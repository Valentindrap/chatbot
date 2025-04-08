<link rel="stylesheet" href="../css/altaConsulta.css">
<?php
include("conexion.php");

$sql = "INSERT INTO consultas (pregunta, respuesta, categoria) VALUES (:pregunta, :respuesta, :categoria)";
$stmt = $pdo->prepare($sql);

if ($stmt->execute([
    "pregunta" => $_POST["pregunta"],
    "respuesta" => $_POST["respuesta"],
    "categoria" => $_POST["categoria"]
])) {
    echo "<div class='success'>Registro cargado completamente</div>";
} else {
    echo "<div class='error'>Error al cargar los datos</div>";
}

echo "<br/><a class='volver' href='listarConsultas.php'>Volver</a>";
?>
