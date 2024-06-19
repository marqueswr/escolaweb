<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SerieRequest;



class SerieController extends Controller
{
    public function index(Request $request)
    {
      
        $series = Serie::when ($request->has('parametro'), function($whenQuery) use ($request){
            $whenQuery->where('nome', 'like','%' . $request->parametro . '%');
        })
        ->orderBy('nome')->paginate(10);
  
        return view('serie.index', [
            'series'=> $series,
            'parametro'=> $request->parametro,
        ]);
    }
   
    public function create()
    {
        return view('serie.create');
    }

    public function store(SerieRequest $request)
    {
           // Validar o formulário
           $request->validated();

           try {
   
               // Cadastrar no banco de dados na tabela contas os valores de todos os campos
               $serie = Serie::create([
                   'nome' => $request->nome
               ]);
   
               // Redirecionar o usuário, enviar a mensagem de sucesso
              return redirect()->route('serie.index')->with('success', 'serie: ' .$serie->nome .  ' foi gravado com sucesso !!!');

            } catch (Exception $e) {
   
               // Redirecionar o usuário, enviar a mensagem de erro
               return back()->withInput()->with('error', 'Série não cadastrada');
           }
    }

    public function show(Serie $serie)
    {
        $series = Serie::orderBy('nome')->paginate(10);
        return 'ola';
       // return view('solicitante.show', ['solicitantes' => $solicitantes]);
    }

    public function destroy(Serie $serie)
    {
        
        Serie::findOrFail($serie->id)->delete();
        return redirect()-> route('serie.index')-> with('success', 'Serie excluída com sucesso');
    }

     // Carregar o formulário editar a conta
   public function edit(Serie $serie)
   {
       // Carregar a VIEW
     
       return view('serie.edit', ['serie' => $serie]);
   }

   // Editar no banco de dados a conta
   public function update(SerieRequest $request, Serie $serie)
   {
  $request->validated();
      
       try {
           $serie->update([
               'nome' => $request->nome
           ]);
           return redirect()->route('serie.index')->with('success', 'Série foi alterada para ' . $request->nome . ' com sucesso !!!');


       } catch (Exception $e) {
           return back()->withInput()->with('error', 'Série não alterada');
       }
   } 

}

