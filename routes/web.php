<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Criar nesse projeto uma rota seguindo o padrão:

/imc/{nome}/{peso}/{altura}/{genero}

O programa deve calcular o IMC, a partir dos dados da URL e imprimir algo como:

Olá Sra. Mariana, seu IMC é 104,2. Você tem Obesidade grau III
Olá Sr. Jonas, seu IMC é 18,2. Você está abaixo do peso ideal
Olá Sr. Gustavo, seu IMC é 23. Você tem o peso ideal
etc...

Se algumas das condições abaixo ocorrer, a frase seguinte deve ser impressa: "Informe apenas valores válidos"

- Seguimento de URL peso recebeu um valor não numérico
- Seguimento de URL altura recebeu um valor não numérico
- Seguimento de URL recebeu um valor diferente de masculino ou feminino (independentemente de estar em caixa alta ou baixa).
|
*/

Route::get('/imc/{nome}/{peso}/{altura}/{genero}', [PacienteController::class, 'calculoIMC']);
