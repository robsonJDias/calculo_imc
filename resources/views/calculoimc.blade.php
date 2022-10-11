<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo IMC</title>



<body>
@extends('layout.templete')
@section('conteudo')

    <h1>Calculo de IMC</h1>


    @if($imc >=  18.5 && $imc <= 24.9)
        <div class="alert alert-success">
            {{$resultado}}
        </div>
    @endif
    @if($imc <= 18.4 or $imc >= 25)
        <div class="alert alert-danger">
            {{$resultado}}
        </div>
    @endif



@endsection
</body>
</html>
