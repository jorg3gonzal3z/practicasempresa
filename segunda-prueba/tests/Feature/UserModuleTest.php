<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');

        $this->get('/usuarios/2')
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario: 2");
        
        $this->get('saludo/jorge/jorgito')
            ->assertStatus(200)
            ->assertSee("Bienvenido Jorge, tu apodo es: jorgito");

    }

}
