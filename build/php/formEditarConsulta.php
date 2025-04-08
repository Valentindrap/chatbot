<?php
// Incluir el archivo de conexión a la base de datos
include ("conexion.php");

// Armar la consulta SQL, buscando todos los campos de la tabla 'consultas' donde el 'id' sea igual al valor que se pasará
$sql = "SELECT * FROM consultas WHERE id = (:id)";

// Preparar la consulta usando PDO (esto previene inyecciones SQL)
$stmt = $pdo->prepare($sql);

// Ejecutar la consulta, pasando el valor de 'id' obtenido desde la URL (por ejemplo, ?id=5)
$stmt->execute(['id' => $_GET['id']]);

// Intentar obtener una fila de resultados de la consulta
if ($consulta = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Si la consulta devuelve una fila, esta será almacenada en la variable $consulta
    // Ahora puedes trabajar con los datos dentro de $consulta
    // Por ejemplo, puedes acceder a los campos con $consulta['nombre_columna']
?>

<link rel="stylesheet" href="../css/formEditarConsulta.css">

<form name="formEditarConsulta" action="editarConsulta.php" method="POST" class="form-container">
    <label>Id:</label>
    <input type="text" name="id" value="<?=$consulta['id'];?>" readonly/> <br>

    <label for="">Pregunta</label>
    <input type="text" name="pregunta" value="<?=$consulta['pregunta'];?>" id="pregunta"  class="input-field"/><br>

    <label for="">Respuesta</label>
    <input type="text" name="respuesta" value="<?=$consulta['respuesta'];?>" id="respuesta" class="input-field"/><br>

    <label for="">Categoria</label>
    <select name="categoria"  id="categoria" class="input-field">
        <option value="<?=$consulta['categoria'];?>" selected><?=$consulta['categoria'];?></option>
        <option value="Sistema Operativo">Sistema Operativo</option>
        <option value="Software">Software</option>
        <option value="Conectividad">Conectividad</option>
        <option value="Hardware">Hardware</option>
        <option value="Seguridad">Seguridad</option>
    </select> <br>

    <input type="submit" value="Enviar solicitud" class="submit-btn">
</form>

<?php
} else {
    echo "<div class='error'>El registro seleccionado no existe</div>";
    echo "<a href='listarConsultas.php' class='volver-link'>Volver</a>";
}
?>
