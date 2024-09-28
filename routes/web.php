<?php

use App\Models\Carrito;

Route::get('/carrito-actual/{id}', function($id) {
    $carrito = Carrito::where('user_id', $id)->where('activo', 1)->with('productos')->first();
    
    if ($carrito) {
        echo '<pre>';
        print_r($carrito->toArray());
        echo '</pre>';
    } else {
        echo "No hay carrito activo para este usuario.";
    }
});
