<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitanteRequest;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use Exception;


class SolicitanteController extends Controller
{
    public function index(Request $request)
    {
      
        $solicitantes = Solicitante::when ($request->has('parametro'), function($whenQuery) use ($request){
            $whenQuery->where('nome', 'like','%' . $request->parametro . '%');
        })
        ->orderBy('nome')->paginate(10);
  
        return view('solicitante.index', [
            'solicitantes'=> $solicitantes,
            'parametro'=> $request->parametro,
        ]);
    }
   
    public function create()
    {
        //$solicitantes = Solicitante::orderBy('nome')->paginate(10);
        return view('solicitante.create');
       
    }

    public function store(SolicitanteRequest $request)
    {
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $solicitante = Solicitante::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
              return redirect()->route('solicitante.index')->with('success', 'Responsável: ' .$solicitante->nome .  ' foi gravado com sucesso !!!');

            } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Solicitante não cadastrado');
           }
    }

    public function show(Solicitante $solicitante)
    {
        $solicitantes = Solicitante::orderBy('nome')->paginate(10);
        return 'ola';
       // return view('solicitante.show', ['solicitantes' => $solicitantes]);
    }

    public function destroy(Solicitante $solicitante)
    {
        
       //dd("apagar");
    
        Solicitante::findOrFail($solicitante->id)->delete();
        return redirect()-> route('solicitante.index')-> with('success', 'Solicitante excluído com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Solicitante $solicitante)
   {
       // Carregar a VIEW
     
       return view('solicitante.edit', ['solicitante' => $solicitante]);
   }

   // Editar no banco de dados a conta
   public function update(SolicitanteRequest $request, Solicitante $solicitante)
   {
  $request->validated();
      
       try {
           $solicitante->update([
               'nome' => $request->nome
           ]);
           return redirect()->route('solicitante.index')->with('success', 'Solicitante foi alterado para ' . $request->nome . ' com sucesso !!!');


       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Solicitante não alterado');
       }
   } 

}

