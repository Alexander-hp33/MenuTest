<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\Platillo; // importacion del modelo 

class MenuTest extends TestCase
{
    use RefreshDatabase; // Asegura que las migraciones se ejecuten antes de cada prueba


    // Prueba para simular la creacion de un platillo mediante solicitud POST
    /** @test */
    public function crear_platillo()
    {
        // se utiliza para desactivar el manejo de expciones 
        $this->withoutExceptionHandling();

        $response = $this->post('/platillo', [
            'nombre' => 'Pizza Margarita',
            'descripcion' => 'Pizza con base de tomate y queso mozzarella.',
            'precio' => 8.99,
            'categoria' => 'Plato Fuerte',
            'disponible' => true,
            'ingredientes' => 'Tomate, Queso Mozzarella, Albahaca',

        ]);
        // verifica que la respuesta es correcta,
        $response->assertStatus(302);

        //Verifica que se creo un platillo en la base de datos
        $this->assertCount(1, Platillo::all());

        //Obtengo el primero registro de la base de datos
        $platillo = Platillo::first();

        // Verifica que los campos del proyecto coinciden con lo enviado
        $this->assertEquals($platillo->nombre, 'Pizza Margarita');
        $this->assertEquals($platillo->descripcion, 'Pizza con base de tomate y queso mozzarella.');
        $this->assertEquals($platillo->precio, 8.99);
        $this->assertEquals($platillo->categoria, 'Plato Fuerte');
        $this->assertTrue($platillo->disponible);
        $this->assertEquals($platillo->ingredientes, 'Tomate, Queso Mozzarella, Albahaca');
    }



    // Pruena para listar los productos creados
    /** @test */
    public function listar_platillos()
    {
        // se utiliza para desactivar el manejo de expciones 
        $this->withoutExceptionHandling();

        // Realiza la solicitud GET con el parámetro `all=true`
        $response = $this->get('/platillo?all=true');

        // Verifica que la respuesta sea correcta
        $response->assertStatus(200);

        // Verifica que la vista contiene los platillos
        $response->assertViewHas('platillo');

    }



    // Pruena para actualizar proyecto
    /** @test */
    public function actualizar_platillo()
    {
        // Se utiliza para desactivar el manejo de excepciones de laravel
        $this->withoutExceptionHandling();

        // Crea un platillo en la base de datos
        $platillo = Platillo::factory()->create();

        $imagen = UploadedFile::fake()->create('platillo.jpg', 500, 'image/jpeg');

        $response = $this->put(route('platillo.update', $platillo), [
            'nombre' => 'Platillo actualizado',
            'descripcion' => 'Descripción actualizada',
            'categoria' => 'Plato Fuerte',
            'disponible' => true,
            'ingredientes' => 'Tomate, Queso Mozzarella, Albahaca',
            'precio' => 123.45,
            'imagen' => $imagen,
                ]);

        $response->assertStatus(302);
    }



    //Prueba para mostrar un registro 
    /** @test */
    public function actualizar_platillos_ruta()
    {
        // se utiliza para desactivar el manejo de expeciones de laravel
        $this->withoutExceptionHandling();

        $platillo = Platillo::factory()->create();
        // simula una funcion get
        $response = $this->get("/platillo/{$platillo->id}");

        $response->assertOk();

        $response->assertViewIs("platillo.show");
    }


    // Funcion para eliminar un registro
    /** @test */
    public function eliminar_platillo()
    {
        $this->withoutExceptionHandling();

        // Crear un proyecto
        $platillo = Platillo::factory()->create([
            'nombre' => 'Pizza',
            'descripcion' => 'Pizza con base de tomate y queso mozzarella.',
            'precio' => 8.99,
            'categoria' => 'Entrada',
            'disponible' => true,
            'ingredientes' => 'Tomate, Queso Mozzarella, Albahaca',
            'imagen' => 'ruta/imagen.jpg'
        ]);

        // Realiza solicitud Delete para eliminar el proyecto
        $response = $this->delete('/platillo/' . $platillo->id);

        // verifica que la respuesta sea correcta
        $response->assertStatus(302);

        //Verifica que el proyecto no exista
        $this->assertDatabaseMissing('platillo', [
            'id' => $platillo->id,
            'nombre' => 'Pizza',
            'descripcion' => 'Pizza con base de tomate y queso mozzarella.',
            'precio' => 8.99,
            'categoria' => 'Entrada',
            'disponible' => true,
            'ingredientes' => 'Tomate, Queso Mozzarella, Albahaca',
            'imagen' => 'ruta/imagen.jpg'
        ]);

        var_dump($platillo);
    }

}
