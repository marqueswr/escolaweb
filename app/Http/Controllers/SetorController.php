<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Setor;
use Illuminate\Http\Request;
use App\Http\Requests\SetorRequest;



class SetorController extends Controller
{
    public function index(Request $request)
    {
      
        $setores = Setor::when ($request->has('parametro'), function($whenQuery) use ($request){
            $whenQuery->where('nome', 'like','%' . $request->parametro . '%');
        })
        ->orderBy('nome')->paginate(10);
  
        return view('setor.index', [
            'setores'=> $setores,
            'parametro'=> $request->parametro,
        ]);
    }
   
    public function create()
    {
        return view('setor.create');
    }

    public function store(SetorRequest $request)
    {
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $setor = Setor::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
              return redirect()->route('setor.index')->with('success', 'setor: ' .$setor->nome .  ' foi gravado com sucesso !!!');

            } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Setor não cadastrado');
           }
    }

    public function show(Setor $setor)
    {
        $setores = Setor::orderBy('nome')->paginate(10);
        return 'ola';
       // return view('solicitante.show', ['solicitantes' => $solicitantes]);
    }

    public function destroy(Setor $setor)
    {
        
        Setor::findOrFail($setor->id)->delete();
        return redirect()-> route('serto.index')-> with('success', 'Setor excluído com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Setor $setor)
   {
       // Carregar a VIEW
     
       return view('setor.edit', ['setor' => $setor]);
   }

   // Editar no banco de dados a conta
   public function update(SetorRequest $request, Setor $setor)
   {
  $request->validated();
      
       try {
           $setor->update([
               'nome' => $request->nome
           ]);
           return redirect()->route('setor.index')->with('success', 'Setor foi alterado para ' . $request->nome . ' com sucesso !!!');


       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Setor não alterado');
       }
   } 

}

