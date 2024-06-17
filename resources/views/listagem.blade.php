<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Listagem Clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        table{
            background-color: rgba(0, 0, 0, 0.6);;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0, 66, 133, 89%);">
    <div class="container" style="display: block">
            <a class="navbar-brand" href="#">Listagem</a>
            <a href="form" class="btn btn-light me-5">Adicionar cliente</a>
        </div>
    </nav>
    <div class="m-5">
        <table class="table text-white table-bg">
        <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->data_nascimento }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->logradouro }}</td>
                        <td>{{ $cliente->numero }}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->cidade }}</td>
                        <td>{{ $cliente->estado }}</td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
</body>