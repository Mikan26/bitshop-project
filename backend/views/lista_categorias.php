<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <title>BitShop</title>
</head>

<body>
    <div class="form_container">
        <h1>Listado de categorías</h1>
        <table id="lista_categorias">
            <tr>
                <th>Id</th>
                <th>Nombre Categoría</th>
            </tr>
            <?php if (isset($categorias) && count($categorias) > 0) : ?>
                <?php foreach ($categorias as $categoria) : ?>
                    <tr>
                        <td>
                            <div class="celda"><?= htmlspecialchars($categoria["id"]) ?></div>
                        </td>
                        <td>
                            <div class="celda"><?= htmlspecialchars($categoria["nombre"]) ?></div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="2">No hay categorías registradas.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>

</html>