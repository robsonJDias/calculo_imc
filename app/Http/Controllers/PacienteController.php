<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function calculoIMC($nome, $peso, $altura, $genero)
    {
    $nome = ucfirst($nome);
    $genero = strtolower($genero);

    if($genero === "feminino" or $genero === "masculino"){
        if($genero == 'feminino'){
            $genero = "Sra.";
        }elseif($genero == 'masculino'){
            $genero = "Sr.";
        }
    }else{
        return ("Genero masculino ou feminino");
    }


    if(floatval($peso)){
        $peso;
    }else {
        return ("No campo peso insira apenas valores numérico");
    }

    if(floatval($altura)){
        $altura;
    }else {
        return ("No campo altura insira apenas valores numérico");
    }

    $imc = $peso / ($altura * $altura);
    $imc = str_replace(',0', '', number_format($imc, 1, ',', ''));

    if($imc <= 18.5){
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê está abixo do peso ideal.";
    }elseif ($imc <= 24.9){
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê tem o peso ideal.";
    }elseif($imc <= 29.9){
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê está levemente acima do peso.";
    }elseif($imc <= 34.9){
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê tem obesidade grau I.";
    }elseif($imc <= 39.9){
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê tem obesidade grau II (severa).";
    }else{
        $resultado = "Olá $genero $nome, seu IMC é $imc. Voçê tem obesidade grau III (mórbida).";
    }


    return view('calculoimc', compact('resultado','imc'));

    }
}
