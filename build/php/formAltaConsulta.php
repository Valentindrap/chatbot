<link rel="stylesheet" href="../css/altaConsulta.css">
<form name="formAltaConsulta" method="Post" action="altaConsulta.php" method="POST">
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