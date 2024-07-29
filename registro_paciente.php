<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro_paciente.css">
    <title>Registro de Pacientes</title>
</head>
<body>
    <center><h1>Registro Paciente</h1></center>
    <h3>Datos Filiación:</h3>
    <form action="procesar_registro.php" method="post">
        <div class="form-row">
            <div class="column">
                <label class="texto" for="nombre">Nombre:</label>
                <input class="campo" type="text" id="nombre" name="nombre" required>
            </div>
            <div class="column">
                <label class="texto" for="apellido_paterno">Apellido Paterno:</label>
                <input class="campo" type="text" id="apellido_paterno" name="apellido_paterno" required>
            </div>
            <div class="column">
                <label class="texto" for="apellido_materno">Apellido Materno:</label>
                <input class="campo" type="text" id="apellido_materno" name="apellido_materno" required>
            </div>
        </div>
        
        <h3>Representante:</h3>
        <div class="form-row">
            <div class="column">
                <label class="texto" for="nombre_representante">Nombre:</label>
                <input class="campo" type="text" id="nombre_representante" name="nombre_representante" required>
            </div>
            <div class="column">
                <label class="texto" for="apellido_representante">Apellido:</label>
                <input class="campo" type="text" id="apellido_representante" name="apellido_representante" required>
            </div>
            <div class="column">
                <label class="texto" for="parentesco">Parentesco:</label>
                <input class="campo" type="text" id="parentesco" name="parentesco" required>
            </div>
        </div>
        
        <h3>Contacto Telefónico:</h3>
        <label class="texto" for="contacto_telefonico">Contacto Telefónico:</label>
        <input class="campo" type="number" id="contacto_telefonico" name="contacto_telefonico" required><br><br>
        
        <h3>Residencia:</h3>
        <label class="texto" for="direccion_calle">Dirección de la Calle:</label>
        <input class="campo" type="text" id="direccion_calle" name="direccion_calle" required><br><br>

        <label class="texto" for="direccion_calle2">Dirección de la Calle Línea 2:</label>
        <input class="campo" type="text" id="direccion_calle2" name="direccion_calle2"><br><br>
        
        <label class="texto" for="ciudad">Ciudad:</label>
        <select class="campo" id="ciudad" name="ciudad" required>
            <option value="">Seleccione una ciudad</option>
            <option value="Sucre">Sucre</option>
            <option value="La Paz">La Paz</option>
            <option value="Santa Cruz">Santa Cruz</option>
            <option value="Potosi">Potosí</option>
            <option value="Oruro">Oruro</option>
            <option value="Beni">Beni</option>
            <option value="Pando">Pando</option>
            <option value="Cochabamba">Cochabamba</option>
            <option value="Tarija">Tarija</option>
        </select><br><br>
                
        <label class="texto" for="estado_provincia">Estado o Provincia:</label>
        <input class="campo" type="text" id="estado_provincia" name="estado_provincia" required><br><br>

        <label class="texto" for="pais">País:</label>
        <input class="campo" type="text" id="pais" name="pais" required><br><br>
        
        <h3>Historial Nutricional, Desarrollo e Inmunización:</h3>
        <label class="texto" for="historial_nutricional">Alergias:</label><br>
        <textarea class="campo" id="historial_nutricional" name="historial_nutricional" rows="4" cols="50"></textarea><br><br>
        
        <h3>Inmunización:</h3>
        <label><input type="checkbox" name="vacuna[]" value="pentavalente (1)"> Pentavalente 1</label><br>
        <label><input type="checkbox" name="vacuna[]" value="pentavalente (2)"> Pentavalente 2</label><br>
        <label><input type="checkbox" name="vacuna[]" value="pentavalente (3)"> Pentavalente 3</label><br>
        <label><input type="checkbox" name="vacuna[]" value="opv (1)"> OPV 1</label><br>
        <label><input type="checkbox" name="vacuna[]" value="opv (2)"> OPV 2</label><br>
        <label><input type="checkbox" name="vacuna[]" value="opv (3)"> OPV 3</label><br>
        <label><input type="checkbox" name="vacuna[]" value="vph (1)"> VPH 1</label><br>
        <label><input type="checkbox" name="vacuna[]" value="vph (2)"> VPH 2</label><br>
        <label><input type="checkbox" name="vacuna[]" value="vph2"> VPH 2</label><br>
        <label><input type="checkbox" name="vacuna[]" value="hepatitis A (1)"> Hepatitis A 1</label><br>
        <label><input type="checkbox" name="vacuna[]" value="hepatitis A (2)"> Hepatitis A 2</label><br>
        <label><input type="checkbox" name="vacuna[]" value="hepatitis B"> Hepatitis B</label><br>
        <label><input type="checkbox" name="vacuna[]" value="bcg"> BCG</label><br>
        <label><input type="checkbox" name="vacuna[]" value="ipv"> IPV</label><br>
        <label><input type="checkbox" name="vacuna[]" value="srp"> SRP</label><br>
        <label><input type="checkbox" name="vacuna[]" value="varicela"> Varicela</label><br>
        <label><input type="checkbox" name="vacuna[]" value="fiebre_amarilla"> Fiebre Amarilla</label><br>
        <label><input type="checkbox" name="vacuna[]" value="dpt"> DPT</label><br>
        <label><input type="checkbox" name="vacuna[]" value="dt"> DT</label><br>
        <label><input type="checkbox" name="vacuna[]" value="influenza"> Influenza</label><br>
        <label><input type="checkbox" name="vacuna[]" value="otro"> Otro</label><br><br>
        
        <h3>Hora de Registro:</h3>
        <input type="time" id="hora_registro" name="hora_registro" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
