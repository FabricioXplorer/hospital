<?php
    // Datos de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $nombre_representante = $_POST['nombre_representante'];
        $apellido_representante = $_POST['apellido_representante'];
        $parentesco = $_POST['parentesco'];
        $contacto_telefonico = $_POST['contacto_telefonico'];
        $direccion_calle = $_POST['direccion_calle'];
        $direccion_calle2 = $_POST['direccion_calle2'];
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $estado_provincia = $_POST['estado_provincia'];
        $historial_nutricional = $_POST['historial_nutricional'];
        $vacuna = isset($_POST['vacuna']) ? implode(", ", $_POST['vacuna']) : "";
        $hora_registro = $_POST['hora_registro'];

        // Inserción de datos
        $sql = "INSERT INTO pacientes (nombre, apellido_paterno, apellido_materno, nombre_representante, apellido_representante, parentesco, contacto_telefonico, direccion_calle, direccion_calle2, ciudad, estado_provincia, pais, historial_nutricional, vacuna, hora_registro)
                VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$nombre_representante', '$apellido_representante', '$parentesco', '$contacto_telefonico', '$direccion_calle', '$direccion_calle2', '$ciudad', '$estado_provincia', '$pais', '$historial_nutricional', '$vacuna', '$hora_registro')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro guardado con éxito";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>