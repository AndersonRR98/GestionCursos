<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Formulario de Course</h1>

    <form action="/courses" method="POST">
        @csrf

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descrpcion"><br>

        <label for="precio">Precio:</label>
        <input type="decimal" name="precio" required><br>      

        <label for="instructor_id">Instructor ID:</label>
        <input type="number" name="instructor_id" required><br>

          <label for="category_id">categoria ID:</label>
        <input type="number" name="category_id" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
