<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ongs = Ong::paginate(2);

        return view('ongs', ['ongs' => $ongs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastroONG');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->except('_token');

            $validator = $this->validateInput($data);

            if ($validator->fails()) {
                $errors = $validator->errors();
                $errorResponse = ['code' => 422, 'errors' => $errors->toArray()];
                return response()->json($errorResponse, 422);
            }

            $this->processImage($data, $request);

            $data['senha'] = bcrypt($data['senha']);

            $created = Ong::create($data);
            if (!$created) {
                throw new Exception("Cadastro não realizado! Tente novamente mais tarde.");
            }
            DB::commit();
            return response()->json(['code' => 201, 'message' => 'Cadastrado com sucesso!']);
        } catch (Throwable $th) {
            DB::rollBack();
            if (isset($data['foto'])) {
                print_r($data['foto']);
                unlink(public_path('img/ongs/') . $data['foto']);
            }
            return response()->json(['code' => 400, 'message' => $th->getMessage()]);
        }
    }

    public function validateInput($data)
    {
        $regras = [
            'nome' => 'required|min:3',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'uf' => 'required|max:2',
            'cidade' => 'required',
            'email' => 'required|email|unique:ongs',
            'telefone' => 'required',
            'senha' => 'required|confirmed',
            'senha_confirmation' => 'required',
        ];

        $mensagens = [
            'required' => 'Preencha o campo obrigatório',
            'nome.min' => 'Nome deve ter mais que 3 caracteres',
            'email.unique' => 'Email já cadastrado',
            'uf.max' => 'UF deve possuir 2 caracteres',
            'senha.confirmed' => 'Confirmação de senha incorreta.',
        ];

        return Validator::make($data, $regras, $mensagens);
    }

    private function processImage(&$data, $request)
{
    if (!empty($data['foto'])) {
        $image = $data['foto'];
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $image = $request->file('foto');
            $imageName = md5($image->getClientOriginalName() . strtotime("now")) . '.' . $image->extension();
            $image->move(public_path('img/ongs'), $imageName);
            $data['foto'] = 'img/ongs/'.$imageName;
        }
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
