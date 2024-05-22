<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;

class ProductsController extends Controller
{
    public function products ()
    {

        $tiendas = Tienda::all();

        //dd($tiendas);

        return view('products.products', [
            'tiendas' => $tiendas,
        ]);
    }


    public function cards(int $id)
    {

        $tienda = Tienda::findorFail($id);

        return view('products.cards',[
            'tienda' => $tienda,
        ]);
    }

    //----------> Crear Producto

    public function createProducts()
    {
        return view('products.createProducts');
    }

    public function createAccionProducts(Request $request)
    {
        $request->validate([

            'categoria' => ['required','min:2'],
            'codigo.required' => 'El codigo debe tener un valor.',
            'modelo' => ['required','min:2'],
            'precio' => ['required','numeric'],
            'fechaEntrada' => ['required'],
            'imagen' => ['required'],
        ],
        [
            'categoria.required' => 'La categoria debe tener un valor.',
            'codigo.required' => 'El codigo debe tener un valor.',
            'modelo.required' => 'El modelo debe tener un valor.',
            'modelo.min' => 'El modelo debe tener al menos :min caracteres.',
            'precio.required' => 'El precio debe tener un valor.',
            'precio.numeric' => 'El precio debe ser un número.',
            'fechaEntrada.required' => 'La fecha de ingreso debe contener un valor.',
        ]);

        //dd($request);

        $input = $request->only(['categoria','codigo','modelo','descripcion', 'precio', 'fechaEntrada', 'imagen']);

        Tienda::create($input);


        return redirect()
        ->route('products.products')
        ->with('feedback.message', 'El Producto <b>"' . e($input['modelo']) . '"</b> se creo con éxito.');

    }


    //----------> Eliminar un Producto


    public function deleteProductsForm(int $id)
    {
        return view('products.deleteProducts', [
            'tienda' => Tienda::findOrFail($id),
        ]);

    }

    public function deleteAccionProducts(int $id)
    {
        $tienda = Tienda::findOrFail($id);

        $tienda->delete();

        return redirect()
            ->route('products.products')
            ->with('feedback.message', 'El Producto <b>"' . e($tienda->modelo) . '"</b> se eliminó con éxito.');

    }

    //----------> Editar un Producto

    public function editProductsForm(int $id)
    {
        return view('products.editProducts', [
            'tienda' => Tienda::findOrFail($id),
        ]);
    }


    public function editAccionProducts(int $id, Request $request)
    {
        $request->validate([

            'categoria' => ['required','min:2'],
            'codigo.required' => 'El codigo debe tener un valor.',
            'modelo' => ['required','min:2'],
            'precio' => ['required','numeric'],
            'fechaEntrada' => ['required'],
            'imagen' => ['required'],
        ],
        [
            'categoria.required' => 'La categoria debe tener un valor.',
            'codigo.required' => 'El codigo debe tener un valor.',
            'modelo.required' => 'El modelo debe tener un valor.',
            'modelo.min' => 'El modelo debe tener al menos :min caracteres.',
            'precio.required' => 'El precio debe tener un valor.',
            'precio.numeric' => 'El precio debe ser un número.',
            'fechaEntrada.required' => 'La fecha de ingreso debe contener un valor.',
        ]);

        //dd($request);

        $input = $request->only(['categoria','codigo','modelo','descripcion', 'precio', 'fechaEntrada', 'imagen']);


        $tienda = Tienda::findOrFail($id);

        $tienda->update($input);

        return redirect()
            ->route('products.products')
            ->with('feedback.message', 'El Producto <b>"' . e($tienda->modelo) . '"</b> se eliminó con éxito.');





    }






}
