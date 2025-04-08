<link rel="stylesheet" href="../css/listarConsultas.css">

<a href='formAltaConsulta.php' class='volver-link'>Volver a cargar consultas</a>

<?php
//1- Conectamos con la base de datos
include ("conexion.php");
//2- Armamos consulta
$sql = "SELECT * FROM consultas";
//3- Ejecutamos la consulta
$consultas = $stmt = $pdo->query($sql);
//4- Mostramos datos provenientes de la base de datos
foreach($consultas as $consulta){
    echo "<div class='consulta'>";
    echo "<p><b>Pregunta:</b> " . htmlspecialchars($consulta['pregunta']) . "</p>";
    echo "<p><b>Respuesta:</b> " . htmlspecialchars($consulta['respuesta']) . "</p>";
    echo "<p><b>Categoria:</b> " . htmlspecialchars($consulta['categoria']) . "</p>";
    echo "<a class='editar' href='formEditarConsulta.php?id=".$consulta['id']."'>Editar</a>";
    echo "</div>";
}
?>
