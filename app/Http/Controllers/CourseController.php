<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;


class CourseController extends Controller
{
     // LISTAR todos los egresados (JSON)
    public function index()
    {
        return response()->json(Course::all());
    }

    // FORMULARIO para crear un nuevo user
    public function create()
    {
        return view('Store'); // resources/views/Store.blade.php
    }

    // GUARDAR nuevo user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'instructor_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $course = Course::create($validated);

        return response()->json(['message' => 'Usuario creado correctamente', 'course' => $course]);
    }

    // MOSTRAR un user específico
    public function show(Course $course)
    {
        return response()->json($course);
    }

    // FORMULARIO para editar un usuario
    public function edit(Course $course)
    {
        return view('Update', compact('course')); // resources/views/Update.blade.php
    }

    // ACTUALIZAR usuario 
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'required|numeric',
            'instructor_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $course->update($validated);

        return response()->json(['message' => 'course actualizado correctamente', 'course' => $course]);
    }

    // ELIMINAR usuario
    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json(['message' => 'Course eliminado correctamente']);
    }
}
