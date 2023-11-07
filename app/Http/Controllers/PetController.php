<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Utils\Constants\DogBreeds;
use App\Utils\Constants\DogColors;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PetController extends Controller
{
    public function create()
    {
        $dogBreeds = DogBreeds::$BREEDS;
        $dogColors = DogColors::$DOG_COLORS;
        return view("pets.create", ['breeds' => $dogBreeds, 'colors' => $dogColors]);
    }

    public function index()
    {
        return Pet::all();
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'name' => 'required',
            'type' => 'required', Rule::in(['caniche', 'salchicha', 'pastor_aleman', 'bulldog']),
            'color' => 'required', Rule::in(['blanco', 'negro', 'beige', 'cafe']),
            'height' => 'required',
        ]);
        $newPet = new Pet();
        $newPet->name = $request->get("name");
        $newPet->type = $payload['type'];
        $newPet->color = $request->get("color");
        $newPet->height = $payload['height'];
        $newPet->save();
        return $newPet;
    }
}
