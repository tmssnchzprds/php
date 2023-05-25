<!DOCTYPE html>
<html>
    <head>
        <title>Crear Cesta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Insertar libros a la cesta</h2>
        <form method="post" action="InsertarCesta.php">
            Libro:
            <select name="libros">
                <option value="javascript">JavaScript</option>
                <option value="photoshop">Photoshop</option>
                <option value="php">PHP5</option>
            </select>
            <br>Cantidad:
            <input type="text" name="cantidad" value="1">
            <br>
            <input type="submit" value="Insertar">
        </form>
    </body>
</html>