<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Copia;
use App\Models\Serie;
use App\Models\Setor;
use App\Models\Disciplina;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use App\Http\Requests\CopiaRequest;
use Illuminate\Support\Facades\Auth;

class CopiaController extends Controller
{
   
    public function index(Request $request)
    {
        $copias = Copia::when ($request->has('parametro'), function($whenQuery) use ($request){
            $whenQuery->where('descricao', 'like','%' . $request->parametro . '%');
        })
        ->orderByDesc('dtasolicitacao')->paginate(10);
  
        return view('copia.index', [
            'copias'=> $copias,
            'parametro'=> $request->parametro,
        ]);
    }

    public function create()
    {
        $solicitantes = Solicitante::all();
        $setores = Setor::all();
        $disciplinas = Disciplina::all();
        $series = Serie::all();

        return view('copia.create',[
            'solicitantes'=>$solicitantes,
            'setores'=>$setores,
            'disciplinas'=>$disciplinas,
            'series'=>$series
        ]);
       
    }

    public function store(CopiaRequest $request)
    {
     
         // Validar o formulário
         $request->validated();

         try {

             $copia = Copia::create([
                 'mes' => $request->mes,
                 'descricao' => $request-> descricao,
                 'quantidade' => $request->quantidade,
                 'dtasolicitacao' => $request->dtasolicitacao,
                 'tipo' => $request->tipo,
                 'setores_id' => $request->setor_id,
                 'disciplina_id' => $request->disciplina_id,
                 'solicitante_id' => $request->solicitante_id,
                 'serie_id' => $request->serie_id,
                 'user_id'=> auth()->user()->id
               
             ]);

             // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('copia.index')->with('success', 'Copia solicitada: ' .$copia->descricao .  ' foi gravado com sucesso !!!');

          } catch (Exception $e) {
 
             // Redirecionar o usuário, enviar a mensagem de erro
             return back()->withInput()->with('error', 'Cópia não cadastrada'. $e);
         }
    }

    public function show(Copia $copia)
    {
        $solicitantes = Solicitante::all();
        $setores = Setor::all();
        $disciplinas = Disciplina::all();
        $series = Serie::all();
    
           return view('copia.show', [
                'copia'=>$copia,
                'solicitantes'=>$solicitantes,
                'setores'=>$setores,
                'disciplinas'=>$disciplinas,
                'series'=>$series
            ]);
    }

  
    public function edit(Copia $copia)
    {
        $solicitantes = Solicitante::all();
        $setores = Setor::all();
        $disciplinas = Disciplina::all();
        $series = Serie::all();
    
           return view('copia.edit', [
                'copia'=>$copia,
                'solicitantes'=>$solicitantes,
                'setores'=>$setores,
                'disciplinas'=>$disciplinas,
                'series'=>$series
            ]);
    }

  
    public function update(CopiaRequest $request, Copia $copia)
    {
       
         $request->validated();
    
        try {
           $copia->update([
                 'mes' => $request->mes,
                 'descricao' => $request-> descricao,
                 'quantidade' => $request->quantidade,
                 'dtasolicitacao' => $request->dtasolicitacao,
                 'tipo' => $request->tipo,
                 'setores_id' => $request->setores_id,
                 'disciplina_id' => $request->disciplina_id,
                 'solicitante_id' => $request->solicitante_id,
                 'serie_id' => $request->serie_id,
                 'user_id'=> $request->user_id
           ]);
          
           return redirect()-> route('copia.index')-> with('success', 'Registro de cópia alterado com sucesso');

        } catch (Exception $e) {
           return back()->withInput()->with('error', 'O registro da cópia não foi alterado');
       } 
    }

 
    public function destroy(Copia $copia)
    {
        Copia::findOrFail($copia->id)->delete();
        return redirect()-> route('copia.index')-> with('success', 'Registro de cópia excluído com sucesso');
    }
}
