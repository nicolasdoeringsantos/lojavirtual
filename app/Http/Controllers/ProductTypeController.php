<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::all();
        return view('product_types.index', compact('productTypes'));
    }

    public function create()
    {
        return view('product_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product_types|max:255',
        ]);

        $productType = new ProductType;
        $productType->name = $request->name;
        $productType->save();

        return redirect()->route('product_types.index')->with('success', 'Tipo de produto criado com sucesso!');
    }
}
