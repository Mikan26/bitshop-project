<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <title>BitShop</title>
</head>

<body>
    <div class="form_container">
        <h1>Listado de productos</h1>
        <table id="lista_productos">
            <tr>
                <th>Id</th>
                <th>Nombre Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
            <?php foreach ($productos as $producto) : ?>
                <tr>
                    <td>
                        <div class="celda"><?= $producto["id"] ?></div>
                    </td>
                    <td>
                        <div class="celda"><?= $producto["nombre"] ?></div>
                    </td>
                    <td>
                        <div class="celda"><?= $producto["descripcion"] ?></div>
                    </td>
                    <td>
                        <div class="celda"><?= $producto["precio"] ?></div>
                    </td>
                    <td>
                        <div class="celda"><?= $producto["categoria_id"] ?></div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>