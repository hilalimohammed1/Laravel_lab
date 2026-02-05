<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        [
            'id' => 1,
            'title' => 'HP16D0195NF',
            'price' => 'Intel i5 12th Gen',
            'image' => 'HP16D0195NF.jpg',
            'description' => 'Laptop polyvalent conçu pour la bureautique et multimédia.'
        ],
        [
            'id' => 2,
            'title' => 'HP14424U3EA',
            'price' => 'Intel i3 11th Gen',
            'image' => 'HP14424U3EA.jpg',
            'description' => 'Portable léger adapté aux tâches quotidiennes.'
        ],
        [
            'id' => 3,
            'title' => 'HUA6901443442959',
            'price' => 'Ryzen 5 4600H',
            'image' => 'HUA6901443442959.jpg',
            'description' => 'Bonne performance pour bureautique + montage léger.'
        ],
        [
            'id' => 4,
            'title' => 'NXATHEF002',
            'price' => 'Intel i7 10th Gen',
            'image' => 'NXATHEF002.jpg',
            'description' => 'Portable professionnel avec écran Full HD.'
        ],
    ];

    public function index(){
        return view('product', ['products' => $this->products]);
    }

    public function show($id){
        $product = null;
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                $product = $product;
                break;
            }
        }

        if ($product === null) {
            abort(404, 'Ce produit est introuvable');
        }

        return view('show', compact('product'));
    }

    public function add(){
        return view('product.add');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|min:10|string',

        ], [
            'title.required' => 'Le titre est obligatoire',
            'title.min' => 'Le titre doit contenir au moins 3 caractères',
            'price.required' => 'Le prix est obligatoire',
            'price.numeric' => 'Le prix doit être un nombre',
            'description.required' => 'La description est obligatoire',
            'description.min' => 'La description doit contenir au moins 10 caractères',

        ]);
        return redirect()->back()->with('success', 'Produit ajouté avec succès');
    }
}