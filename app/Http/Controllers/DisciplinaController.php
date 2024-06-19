<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Http\Requests\DisciplinaRequest;
use App\Http\Requests\SolicitanteRequest;


class DisciplinaController extends Controller
{
    public function index(Request $request)
    {
      
        $disciplinas = Disciplina::when ($request->has('parametro'), function($whenQuery) use ($request){
            $whenQuery->where('nome', 'like','%' . $request->parametro . '%');
        })
        ->orderBy('nome')->paginate(10);
  
        return view('disciplina.index', [
            'disciplinas'=> $disciplinas,
            'parametro'=> $request->parametro,
        ]);
    }
   
    public function create()
    {
        return view('disciplina.create');
    }

    public function store(DisciplinaRequest $request)
    {
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $disciplina = Disciplina::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
              return redirect()->route('disciplina.index')->with('success', 'Disciplina: ' .$disciplina->nome .  ' foi gravado com sucesso !!!');

            } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Disciplina não cadastrada');
           }
    }

    public function show(Disciplina $disciplina)
    {
        $disciplinas = Disciplina::orderBy('nome')->paginate(10);
        return 'ola';
       // return view('solicitante.show', ['solicitantes' => $solicitantes]);
    }

    public function destroy(Disciplina $disciplina)
    {
        
        Disciplina::findOrFail($disciplina->id)->delete();
        return redirect()-> route('disciplina.index')-> with('success', 'Disciplina excluída com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Disciplina $disciplina)
   {
       // Carregar a VIEW
     
       return view('disciplina.edit', ['disciplina' => $disciplina]);
   }

   // Editar no banco de dados a conta
   public function update(DisciplinaRequest $request, Disciplina $disciplina)
   {
  $request->validated();
      
       try {
           $disciplina->update([
               'nome' => $request->nome
           ]);
           return redirect()->route('disciplina.index')->with('success', 'Disciplina foi alterada para ' . $request->nome . ' com sucesso !!!');


       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Disciplina não alterada');
       }
   } 

}

