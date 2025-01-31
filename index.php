<?php
//HOLLAAAA V2
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "aeromexico"; // Cambia por el nomabre correcto de tu BD

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

if($conexion){
    echo "conexion exitosa"; 
}else{
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $idboleto = $_POST['idboleto'];
    $partida = $_POST['partida'];
    $destino = $_POST['destino'];

    // Usar prepared statement para evitar inyección SQL
    $stmt = $conexion->prepare("INSERT INTO RegistroCliente (Nombre, IDboleto, partida, destino) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $nombre, $idboleto, $partida, $destino);

    if ($stmt->execute()) {
        echo "<p style='color: green;'>Registro insertado correctamente.</p>";
    } else {
        echo "<p style='color: red;'>Error al insertar: " . $stmt->error . "</p>";
    }

    $stmt->close();
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Aerolínea</title>
</head>
<body>
    <h2> Aerolínea</h2>
    <form method="POST" action="index.php">
       
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="idboleto">ID Boleto:</label>
        <input type="number" name="idboleto" required><br><br>

        <label for="partida">Partida:</label>
        <input type="text" name="partida" required><br><br>

        <label for="destino">Destino:</label>
        <input type="text" name="destino" required><br><br>

        <button type="submit">Guardar</button>
    </form>



    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>ID Boleto</th>
            <th>Partida</th>
            <th>Destino</th>
        </tr>

        <?php
        // Consultar los datos de la base de datos
        $sql = "SELECT * FROM RegistroCliente";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>" . $fila["ID"] . "</td>
                        <td>" . $fila["Nombre"] . "</td>
                        <td>" . $fila["IDboleto"] . "</td>
                        <td>" . $fila["partida"] . "</td>
                        <td>" . $fila["destino"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
        }

        $conexion->close();
        ?>

    </table>

</body>
</html>

