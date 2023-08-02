<!DOCTYPE html>
<html>
<head>
    <title>Resultados de la base de datos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos_c.css">
    <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="images/Logo_nav1.jpg" alt="" width="208" height="100"/></a></div>
              
</head>
<body>
    


<?php
// Obtener los valores seleccionados por el usuario desde el formulario
if (isset($_POST['origen']) && isset($_POST['destino'])) {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];

    // Configura los detalles de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itinerario";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Construir la consulta SQL con los valores de origen y destino
    $sql_select = "SELECT * FROM transporte WHERE origen = '$origen' AND destino = '$destino'";

    



    // Ejecutar la consulta SQL
    $result = $conn->query($sql_select);

    // Mostrar los resultados en una tabla HTML
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Numero</th><th>Origen</th><th>Destino</th><th>Frecuencia de salida</th><th>Medio de trasnporte</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_ruta"] . "</td>";
            echo "<td>" . $row["origen"] . "</td>";
            echo "<td>" . $row["destino"] . "</td>";
            echo "<td>" . $row["frecuencia_salida"] . "</td>";
            echo "<td>" . $row["tipo_transporte"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Por favor, seleccione el origen y destino del viaje.";
}
?>

</body>
</html>
