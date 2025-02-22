<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CepService {

    public function descobirCep(string $estado, string $cidade, string $logradouro) {
        
        if ($estado == null || $cidade == null || $logradouro == null) {
            return null;
        }
        
        $response = Http::get("https://viacep.com.br/ws/{$estado}/{$cidade}/{$logradouro}/json/");
        
        if ($response->successful() && !isset($response['erro'])) {
            return $response->json();
        }

        return null;
    }

    public function buscarCep(string $cep): ?array {
        $cep = preg_replace('/\D/', '', $cep);

        if (strlen($cep) !== 8) {
            return null;
        }

        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->successful() && !isset($response['erro'])) {
            return $response->json();
        }

        return null;
    }
}
