<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Curso</title>
</head>
<body>
    <h1>Actualizar Curso</h1>

    <!-- Formulario de actualización -->
    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="{{ $course->titulo }}" required><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" value="{{ $course->descripcion }}"><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ $course->precio }}" required><br>

        <label for="instructor_id">instructor ID:</label>
        <input type="number" name="instructor_id" value="{{ $course->instructor_id }}" required><br>

        <label for="category_id">categoria ID:</label>
        <input type="number" name="category_id" value="{{ $course->category_id }}" required><br>
        <button type="submit">Actualizar Usuario</button>
    </form>

    <hr>

    <!-- Formulario para eliminar -->
    <form action="/courses/{{ $course->id }}" method="POST" style="margin-top:10px;">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color:red; color:white;">Eliminar Usuario</button>
    </form>

</body>
</html>
