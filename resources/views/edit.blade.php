<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editando</title>
</head>
<body>
    <div class="col-md-7 mt-5 mb-5 col-lg-5 container">
    <form method="POST" action="/update/{{ $cliente->id }}" class="needs-validation" novalidate>
    @csrf
    @method('PUT')
    <div class="row g-3">
            <div class="col-sm-6 validate-me">
              <label for="nome" class="form-label">Nome<span class="text-danger">*</span></label>
              <input required type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" >
              <div class="invalid-feedback">
                É necessário um nome.
              </div>
            </div>

            <div class="col-sm-6 validate-me">
              <label for="cpf" class="form-label">CPF</label>
              <input required type="text" class="form-control" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" value="{{ $cliente->cpf }}">
              <div class="invalid-feedback">
                CPF deve ter 11 dígitos.
              </div>
            </div>

            <div class="col-sm-6 validate-me">
              <label for="data_nascimento" class="form-label">Data de Nascimento</label>
              <input required type="date" class="form-control"  id="data_nascimento" name="data_nascimento" pattern="\d{2}/\d{2}/\d{4}" oninput="limitarAno(event)" max="1999-12-31" value="{{ $cliente->data_nascimento }}">
              <div class="invalid-feedback">
                 Por favor insira uma data menor que 01/01/2000.
              </div>
            </div>

            <div class="clearfix"></div>
            
            <div class="col-sm-6 validate-me">
              <label for="cep" class="form-label">CEP</label>
              <input required type="text" class="form-control" id="cep" name="cep" pattern="\d{5}-\d{3}" placeholder="00000-000" onblur="consultaCEP()" value="{{ $cliente->cep }}">
              <div class="invalid-feedback cep">
                 CEP invalido!
              </div>
            </div>

            <div class="col-sm-8">
              <label for="logradouro" class="form-label">Logradouro</label>
              <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Endereço" value="{{ $cliente->logradouro }}">
            </div>

            <div class="col-sm-3">
              <label for="numero" class="form-label">Numero</label>
              <input type="number" class="form-control" id="numero" name="numero" min="0" value="{{ $cliente->numero }}">
            </div>

            <div class="col-sm-3">
              <label for="complemento" class="form-label">Complemento</label>
              <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $cliente->complemento }}">
            </div>

            <div class="col-sm-5">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}">
            </div>

            <div class="col-sm-4">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $cliente->bairro }}">
            </div>

            <div class="col-sm-3">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado" value="{{ $cliente->estado }}">
            </div>
          </div>

          <hr class="my-4">
    <button type="submit" class="w-100 btn btn-primary btn-lg">Enviar</button>
</form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6-beta.14/jquery.inputmask.min.js"></script>

    <script src="{{ asset('js/scripts-form.js') }}"></script>
</body>
</html>

