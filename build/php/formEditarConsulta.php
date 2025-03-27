<?php
    include ("conexion.php");

    $sql="SELECT * FROM consultas WHERE id=(:id)";
    $stmt= $pdo->prepare($sql);
    if($stmt->execute(['id'=> $_GET['ID'] ])){
?>

<form name="formEditarConsulta" method="Post" action="editarConsulta.php" method="POST">
    <label>Id:</label>
    <input type="text" name="id" readonly/> <br>

    <label for="">Pregunta</label>
    <input type="text" name="pregunta" id="pregunta"  class=""/><br>
    <label for="">Respuesta</label>
    <input type="text" name="respuesta" id="respuesta" class=""/><br>
    <label for="">Categoria</label>
    <select name="categoria" id="categoria">
        <option value="Sistema Operativo">Sistema Operativo</option>
        <option value="Software">Software</option>
        <option value="Conectividad">Conectividad</option>
        <option value="Hardware">Hardware</option>
        <option value="Seguridad">Seguridad</option>
    </select> <br>
    <input type="submit" value="Enviar solicitud">
</form>

<?php
    }else {
        echo "el registro seleccionado no existe";
    }
?>