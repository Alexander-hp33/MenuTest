<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Platillo; // importacion del modelo 

class PlatilloController extends Controller
{
    //Metodo para crear los registros
    public function store(Request $request)
    {
        //metodo para crear los registros (se le puede poner las reglas que desas que cumpla el campo 
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required||numeric|min:0',
            'categoria' => 'required|string',
            'disponible' => 'required|boolean',
            'ingredientes' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Procesar la imagen si se envió
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
        }

        // Crear el registro en la base de datos
        Platillo::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria' => $request->categoria,
            'disponible' => $request->disponible,
            'ingredientes' => $request->ingredientes,
            'imagen' => $imagenPath, // Guardar la ruta de la imagen
        ]);

        return redirect()->route('platillo.index')->with('success', 'Registro creado con exito');
    }




    // Metodo para obtener los registros de la tabla platillos
    public function index(Request $request)
    {
        // Revisar si el usuario quiere todos los registros o paginados
        if ($request->has('all') && $request->all == 'true') {
            // Obtener todos los registros
            $platillo = Platillo::all();
        } else {
            // Obtener los registros paginados
            $platillo = Platillo::paginate(10); // Cambiar 10 al número de registros deseados
        }

        // Retornar la vista con los datos
        return view('platillo.index', compact('platillo'));
    }



    // Metodo para actualizar un registro 
    public function update(Request $request, Platillo $platillo)
    {

        // Validación de los campos de texto del platillo
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|string',
            'disponible' => 'required|boolean',
            'ingredientes' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        $platillo->update($request->only('nombre', 'descripcion', 'categoria', 'disponible', 'ingredientes', 'precio'));

        return redirect()->route('platillo.index')->with('success', 'Registro actualizado correctamente');

    }



    public function updateImage(Request $request, Platillo $platillo)
    {
        // Validar que el archivo sea una imagen válida
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Verificar si hay una imagen en la solicitud
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');

            // Generar un nombre único para la nueva imagen
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Guardar la imagen en el almacenamiento público
            $path = $image->storeAs('images', $imageName, 'public');

            // Si ya existe una imagen anterior, eliminarla
            if ($platillo->imagen && Storage::disk('public')->exists($platillo->imagen)) {
                Storage::disk('public')->delete($platillo->imagen);
            }

            // Actualizar el campo de imagen en el modelo
            $platillo->imagen = $path;
            $platillo->save();
        }

        // Redireccionar con un mensaje de éxito
        return back()->with('success', 'Imagen actualizada correctamente');
    }



    // me todo para mostrar registro
    public function show($id)
    {

        $platillo = Platillo::find($id);

        // si el proyecto no existe , redirecciono a la lista proyectos 
        if (!$platillo) {
            return redirect()->route('platillo.index')->with('error', 'Registro no encontrado');
        }
        return view('platillo.show', compact('platillo'));
    }



    // metodo para eliminar un registro
    public function destroy(Platillo $platillo)
    {

        // Eliminar el platillo
        $platillo->delete();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('platillo.index')->with('success', 'Registro eliminado con éxito');
    }


}
