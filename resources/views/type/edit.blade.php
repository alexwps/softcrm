@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Atendimento</title>

</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4" style="color: black; font-size: 24px;">Editar Tipo de Atendimento</h2>
        <form class="form-box" action="{{ route('type.update', $type->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" value="{{ $type->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-save">Salvar</button>
                <a href="{{ route('type.index') }}" class="btn btn-secondary btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
<style>
    a {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-control {
        padding: 8;
    }

    .form-group {
        padding: 10;
    }

    .form-box {
        background-color: white;
        /* Fundo branco para contraste */
        padding: 30px;
        /* Aumenta o espaçamento interno */
        border-radius: 12px;
        /* Cantos mais arredondados */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        /* Sombra um pouco mais forte */
        width: 100%;
        max-width: 500px;
        /* Aumenta a largura máxima */
        box-sizing: border-box;
        /* Inclui padding na largura total */
        margin: 40px auto;
        /* Centraliza e adiciona mais espaçamento vertical */
    }



    .btn-save {
        background-color: #007bff;
        /* Azul chamativo */
        color: white;
        /* Cor do texto */
        border: none;
        /* Remove bordas padrão */
        border-radius: 6px;
        /* Cantos arredondados */
        padding: 12px 20px;
        /* Aumenta o espaçamento interno */
        font-size: 1.1rem;
        /* Tamanho do texto maior */
        cursor: pointer;
        /* Mostra que o botão é clicável */
        transition: background-color 0.3s ease;
        /* Animação suave */
        width: 100%;
        /* Botão ocupa toda a largura do formulário */
    }

    input,
    select {
        margin-bottom: 20px;
        width: 100%;
        /* Campos ocupam toda a largura do formulário */
        padding: 12px;
        /* Aumenta o espaço interno dos campos */
        font-size: 1rem;
        /* Tamanho da fonte maior */
        border: 1px solid #ccc;
        /* Borda leve */
        border-radius: 6px;
        /* Cantos arredondados */
        margin-bottom: 20px;
        /* Espaçamento entre os campos */
        box-sizing: border-box;
    }

    label {

        font-size: 1.1rem;
        /* Tamanho maior para os rótulos */
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        /* Força os rótulos a ficarem em linha separada */
    }

    .table-container .form-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;

    }

    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        flex-direction: column;
        margin: 0;
    }

    .table-action {
        width: 100%;
        max-width: 1000px;
    }

    .table-action .btn {
        margin: 0;
    }

    h2 {
        font-weight: bold;
        color: #343a40;
        margin-bottom: 20px;
        /* Espaçamento abaixo do título */
    }

    .btn {
        margin-top: 10px;
        margin: 5px 1px;
        /* Espaçamento entre os botões */
        padding: 10px 16px;
        /* Aumenta o espaçamento interno dos botões */
        border-radius: 5px;
        /* Arredondamento dos botões */
        font-size: 14px;
        /* Tamanho da fonte dos botões */
    }

    .btn-group {
        display: flex;
        /* Os botões ficarão alinhados na horizontal */
        justify-content: center;
        /* Centraliza o grupo de botões */
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #212529;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
</style>
@endsection