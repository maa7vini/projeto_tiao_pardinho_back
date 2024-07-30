<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faixa;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaixaController extends Controller
{

    /**
     *  Retorna uma lista de faixas
     * 
     *  Este método recupera uma lista de faixas do banco de dados
     *  e a retorna como uma resposta JSON
     * 
     *  @return \Illuminate\Http\JsonResponse
     * 
     */

    public function index() : JsonResponse
    {
        // Recupera todas as faixas
        $faixas = Faixa::orderBy('id')->get();
        
        // Retorna as faixas como uma resposta JSON
        return response()->json([
            'status' => true,
            'faixas' => $faixas,
        ], 200);
    }


    /**
     *  Exibe os detalhes de uma faixa específica.
     * 
     *  Este método retorna os detalhes de uma faixa específica em formato JSON
     * 
     *  @param \App\Models\Faixa $faixa O objeto da faixa a ser exibida
     *  @return \Illuminate\Http\JsonResponse
     * 
     */

    public function show(Faixa $faixa) : JsonResponse
    {
        // Recupera todas as faixas
        Faixa::orderBy('id')->get();

        // Retorna uma faixa individualmente
        return response()->json([
            'status' => true,
            'faixa' => $faixa,
        ], 200);
    }

    public function store(Request $request)
    {
        // Iniciar Transação 
        DB::beginTransaction();

        try{

            $faixa = Faixa::create([
                'nome' => $request->nome,
                'album_id' => $request->album_id,
            ]);

            // Operação é concluída com êxito
            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Faixa cadastrada!',
                'faixa' => $faixa,
            ], 201);

        }catch (Exception $e){

            // Operação não é concluída com êxito
            DB::rollBack();

            // Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => false,
                'message' => 'Faixa não cadastrada!',
            ], 400);

        }
    }


    /**
     *  Excluir uma faixa do banco de dados.
     * 
     *  @param \App\Models\Faixa $faixa A faixa a ser excluida.
     *  @return \Illuminate\Http\JsonResponse
     * 
     */

    public function destroy(Faixa $faixa) : JsonResponse
    {
        try{

            // Apagar a faixa no banco de dados
            $faixa->delete();

            // Retorna os dados da faixa apagada e uma mensagem de sucesso com status 200
            return response()->json([
                'status' => true,
                'faixa' => $faixa,
                'message' => 'Faixa apagada com sucesso!'
            ], 200);

        } catch(Exception $e){

            // Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => false,
                'message' => 'Faixa não apagada!',
            ], 400);
 

        }
    }
}
