<?php

namespace App\Http\Controllers;

use App\Services\CepService;
use Illuminate\Http\JsonResponse;

class CepController
{
    protected $cepService;

    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    public function buscarCep(string $cep): JsonResponse {
        $dados = $this->cepService->buscarCep($cep);

        if ($dados) {
            return response()->json($dados);
        }

        return response()->json(['error' => 'CEP invalido ou nao encontrado'], 404);
    }

    public function descobrirCep(string $estado, string $cidade, string $logradouro): JsonResponse {
        $dados = $this->cepService->descobirCep($estado, $cidade, $logradouro);

        if ($dados) {
            return response()->json($dados);
        }

        return response()->json(['error' => 'Localizacao invalido ou nao encontrado'], 404);
    }
}
