<?php
include ("conexion.php");

$sql = "SELECT * FROM consultas WHERE id = (:id)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);

if ($consulta = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

<link rel="stylesheet" href="../css/formEditarConsultas.css">

<div class="container">
    <div class="mascota">
        <img src="../img/mascota-chatbot.png" alt="Chatbot Mascota">
        <div class="mensaje-chatbot">¡Editá tu consulta!</div>
    </div>

    <form name="formEditarConsulta" action="editarConsulta.php" method="POST" class="formulario">
        <label>ID:</label>
        <input type="text" name="id" value="<?= htmlspecialchars($consulta['id']); ?>" readonly/>

        <label for="pregunta">Pregunta</label>
        <input type="text" name="pregunta" value="<?= htmlspecialchars($consulta['pregunta']); ?>" id="pregunta" required/>

        <label for="respuesta">Respuesta</label>
        <input type="text" name="respuesta" value="<?= htmlspecialchars($consulta['respuesta']); ?>" id="respuesta" required/>

        <label for="categoria">Categoría</label>
        <select name="categoria" id="categoria" required>
            <?php
            $categorias = ["Sistema Operativo", "Software", "Conectividad", "Hardware", "Seguridad"];
            foreach ($categorias as $categoria) {
                $selected = ($consulta['categoria'] == $categoria) ? 'selected' : '';
                echo "<option value='$categoria' $selected>$categoria</option>";
            }
            ?>
        </select>

        <input type="submit" value="Actualizar Consulta" class="submit-btn">
    </form>
</div>
<?php
} else {
    echo "<div class='error'>El registro seleccionado no existe</div>";
    echo "<a href='listarConsultas.php' class='volver-link'>Volver</a>";
}
?>
