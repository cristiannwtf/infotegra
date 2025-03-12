<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Character;

class CharacterController extends Controller
{
    // Método para consumir la API y mostrar los personajes en una vista
    public function fetchCharacters()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters = $response->json()['results'];

        return view('characters.index', compact('characters'));
    }

    // Método para guardar los personajes en la base de datos
    public function saveCharacters()
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters = $response->json()['results'];

        foreach ($characters as $char) {
            Character::updateOrCreate(
                ['id' => $char['id']],
                [
                    'name' => $char['name'],
                    'status' => $char['status'],
                    'species' => $char['species'],
                    'type' => $char['type'] ?? null,
                    'gender' => $char['gender'],
                    'origin_name' => $char['origin']['name'],
                    'origin_url' => $char['origin']['url'] ?? null,
                    'image' => $char['image'],
                ]
            );
        }

        return redirect()->route('characters.list')->with('success', 'Personajes guardados correctamente.');
    }

    // Método para mostrar los personajes guardados en la base de datos
    public function listCharacters()
    {
        $characters = Character::all();
        return view('characters.list', compact('characters'));
    }

    // Método para editar un personaje
    public function editCharacter($id)
    {
        $character = Character::findOrFail($id);
        return view('characters.edit', compact('character'));
    }

    // Método para update un personaje
    public function updateCharacter(Request $request, $id)
    {
        $character = Character::findOrFail($id);
        $character->update($request->all());
        return redirect()->route('characters.list')->with('success', 'Personaje actualizado correctamente.');
    }
}