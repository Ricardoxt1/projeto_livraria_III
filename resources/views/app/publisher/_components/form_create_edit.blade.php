@if (isset($publishers->id))
    <form class="row g-3 needs-validation my-3" method="post" id="publisherForm" novalidate=""
        action="{{ route('publisher.create', $publishers->id) }}">
        @csrf
        @method('PUT')
    @else
        <form class="row g-3 needs-validation my-3" method="post" id="publisherForm" novalidate=""
            action="{{ route('publisher.store') }}">
            @csrf
@endif
<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome da editora</label>
    <input type="text" class="form-control" id="validationCustom01" name="name"
        placeholder="digite nome da editora" required="">
    <div class="valid-feedback">
        Nome da editora preenchido!
    </div>
    <div class="invalid-feedback">
        É necessario digitar o nome da editora.
    </div>
</div>

@if (isset($publishers->id))
    <div class="col-12">
        <button class="btn btn-primary mt-5" type="submit">Salvar</button>
    </div>
@else
    <div class="col-12">
        <button class="btn btn-primary mt-5" type="submit">Cadastrar</button>
    </div>
@endif
</form>
