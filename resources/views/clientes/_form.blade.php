@csrf

@if($errors->any())

    <div class="alert alert-error">

        <ul>

            @foreach($errors->all() as $erro)

                <li>{{ $erro }}</li>

            @endforeach

        </ul>

    </div>

@endif


<div class="form-group">

    <label>Nome</label>

    <input
        type="text"
        name="nome"
        value="{{ old('nome', $cliente->nome ?? '') }}"
        required
    >

</div>


<div class="form-group">

    <label>CPF</label>

    <input
        type="text"
        name="cpf"
        value="{{ old('cpf', $cliente->cpf ?? '') }}"
        required
    >

</div>


<div class="form-group">

    <label>E-mail</label>

    <input
        type="email"
        name="email"
        value="{{ old('email', $cliente->email ?? '') }}"
        required
    >

</div>


<div class="form-group">

    <label>Telefone</label>

    <input
        type="text"
        name="telefone"
        value="{{ old('telefone', $cliente->telefone ?? '') }}"
    >

</div>


<div class="form-group">

    <label>Endereço</label>

    <input
        type="text"
        name="endereco"
        value="{{ old('endereco', $cliente->endereco ?? '') }}"
    >

</div>


<button class="btn btn-primary" type="submit">

    Salvar

</button>
