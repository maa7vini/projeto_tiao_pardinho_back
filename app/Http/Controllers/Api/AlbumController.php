<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{

    /**
     *  Retorna uma lista de albums
     * 
     *  Este método recupera uma lista de albums do banco de dados
     *  e a retorna como uma resposta JSON
     * 
     *  @return \Illuminate\Http\JsonResponse
     * 
     */

    public function index() : JsonResponse
    {
        // Recupera todos os albums
        $albums = Album::with('faixas')->orderBy('id')->get();

        // Retorna os albums como uma resposta JSON
        return response()->json([
            'status' => true,
            'albums' => $albums,
        ], 200);
    }

    /**
     *  Exibe os detalhes de um album específico.
     * 
     *  Este método retorna os detalhes de um album específico em formato JSON
     * 
     *  @param \App\Models\Album $album O objeto do album a ser exibido
     *  @return \Illuminate\Http\JsonResponse
     * 
     */

     public function show(Album $album) : JsonResponse
     {
        // Carrega as faixas associadas ao album
        $album->load('faixas');

        // Retorna um album individualmente com suas faixas 
        return response()->json([
            'status' => true,
            'album' => $album,
        ], 200);
     }


     public function store(Request $request)
    {
        // Iniciar Transação 
        DB::beginTransaction();

        try{

            $album = Album::create([
                'nome' => $request->nome,
                'capa_album' => $request->capa_album,
            ]);

            // Operação é concluída com êxito
            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Album cadastrado!',
                'album' => $album,
            ], 201);

        }catch (Exception $e){

            // Operação não é concluída com êxito
            DB::rollBack();

            // Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => false,
                'message' => 'Album não cadastrado!',
            ], 400);

        }
    }

    public function destroy(Album $album) : JsonResponse
    {
        try{

            // Apagar o album no banco de dados
            $album->delete();

            // Retorna os dados do album apagado e uma mensagem de sucesso com status 200
            return response()->json([
                'status' => true,
                'album' => $album,
                'message' => 'Album apagado com sucesso!'
            ], 200);

        } catch(Exception $e){

            // Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => false,
                'message' => 'Album não apagado!',
            ], 400);
 

        }
    }
}
