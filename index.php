<?php
include 'config.php';

// Consulta para obtener información del producto y sus comentarios
$producto_id = 1; // Aquí debes reemplazarlo con el ID real del producto que estás mostrando
$query = "SELECT * FROM productos WHERE producto_id = $producto_id";
$resultado = $conexion->query($query);


// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Obtener datos del producto
    $producto = $resultado->fetch_assoc();
}
   


// Cerrar la conexión a la base de datos
$conexion->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Linea</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Tu Tienda en Línea</h1>
</header>

<nav>
    <a href="#">Pedidos</a>
    <a href="#">Carrito de Compra</a>
    <a href="#">Comentarios</a>
</nav>
    <div class="producto">
        <img src="img/2024-03-04.png" alt="" srcset="">
        <h2>Producto: <p class="titulo_producto"><?php echo $producto['nombre_producto']; ?></p></h2>
        <h2>Precio: $<h3 class="titulo_precio"><?php echo $producto['precio']; ?></h3></h2>
        <h2>Descripción: <h3 class="titulo_descripcion"><?php echo $producto['descripcion']; ?></h3></h2>
        
        <button class="agregar-carrito-btn" onclick="agregarAlCarrito(<?php echo isset($producto['id']) ? $producto['id'] : ''; ?>)">Agregar al Carrito</button>

</div>
</body>
</html>

