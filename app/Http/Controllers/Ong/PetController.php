<?php
namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Raca; // Certifique-se de importar o modelo Raca
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function index()
    {
        $ong = Auth::guard('ong')->user();
        $pets = Pet::where('ong_id', $ong->id)->get();
        return view('ong.pets.index', compact('pets'));
    }

    public function create()
    {
        $racas = Raca::all(); // Busca todas as raças
        return view('ong.pets.create', compact('racas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'raca_id' => 'required|exists:racas,id',
            'descricao' => 'required',
            'idade' => 'required|integer',
            'foto' => 'nullable|image',
        ]);

        $ong = Auth::guard('ong')->user();

        $pet = new Pet();
        $pet->nome = $request->nome;
        $pet->raca_id = $request->raca_id;
        $pet->descricao = $request->descricao;
        $pet->idade = $request->idade;
        $pet->ong_id = $ong->id;

        if ($request->hasFile('foto')) {
            $pet->foto = $request->file('foto')->store('pets');
        }

        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Pet cadastrado com sucesso.');
    }

    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('ong.pets.show', compact('pet'));
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $racas = Raca::all(); // Busca todas as raças
        return view('ong.pets.edit', compact('pet', 'racas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'raca_id' => 'required|exists:racas,id',
            'descricao' => 'required',
            'idade' => 'required|integer',
            'foto' => 'nullable|image',
        ]);

        $pet = Pet::findOrFail($id);
        $pet->nome = $request->nome;
        $pet->raca_id = $request->raca_id;
        $pet->descricao = $request->descricao;
        $pet->idade = $request->idade;

        if ($request->hasFile('foto')) {
            $pet->foto = $request->file('foto')->store('pets');
        }

        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Pet atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet excluído com sucesso.');
    }
}
