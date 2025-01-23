<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projeto-Cep

Este é um projeto Laravel desenvolvido para buscar informações de endereço utilizando a API ViaCEP. Ele permite consultar informações de um CEP ou pesquisar por endereço (estado, cidade, e logradouro).

## 📋 Pré-requisitos

Certifique-se de que você possui PHP 8.0 ou superior, Composer, um servidor local como o Laravel Sail, XAMPP ou WAMP, e Git instalados na sua máquina.

## 🚀 Como Configurar e Executar

Clone o repositório:
```bash
git clone https://github.com/seu-usuario/projeto-cep.git
cd projeto-cep
php artisan serve
```

## 🌐 Rotas Disponíveis

No navegador, acesse:
http://127.0.0.1:8000

Buscar informações de um CEP específico: </br>
Método: GET </br>
Endpoint: /api/cep/{cep} </br>
Exemplo:
http://127.0.0.1:8000/api/cep/01001000


Buscar endereço por estado, cidade e logradouro: </br>
Método: GET </br>
Endpoint: /api/cep/{estado}/{cidade}/{logradouro} </br>
Exemplo:
http://127.0.0.1:8000/api/cep/SP/osasco/lidia
