<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Consulta</title>
    <link rel="stylesheet" href="../css/formAltaConsultas.css">
</head>
<body>
    <div class="chatbot-container">
        <div class="mascota-wrapper">
            <img src="../img/mascota-chatbot.png" alt="Mascota Chatbot" class="chatbot-img">
            <div class="chatbot-bubble">¡Hola! Soy tu asistente, completá el formulario 👇</div>
        </div>
        
        <form name="formAltaConsulta" action="altaConsulta.php" method="POST">
            <h2>Formulario de Consulta</h2>
            
            <label for="pregunta">Pregunta</label>
            <input type="text" name="pregunta" id="pregunta" required />

            <label for="respuesta">Respuesta</label>
            <input type="text" name="respuesta" id="respuesta" required />

            <label for="categoria">Categoría</label>
            <select name="categoria" id="categoria" required>
                <option value="Sistema Operativo">Sistema Operativo</option>
                <option value="Software">Software</option>
                <option value="Conectividad">Conectividad</option>
                <option value="Hardware">Hardware</option>
                <option value="Seguridad">Seguridad</option>
            </select>

            <input type="submit" value="Enviar solicitud">
        </form>
    </div>

    <div class="volverdiv">
        <a href='listarConsultas.php' class='volver-link'>Ver lista de consultas</a>
    </div>
</body>
</html>
