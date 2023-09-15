@if (isset($authors->id))
    @method('PUT')
    <form class="row g-3 needs-validation my-3" method="post" id="authorForm" novalidate=""
        {{-- action="{{ route('author' => $authors->id) }}"> --}}
        @csrf
    @else
        <form class="row g-3 needs-validation my-3" method="post" id="authorForm" novalidate=""
            action="{{ route('author.store') }}">
            @csrf
@endif

<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome do autor</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Digite seu nome"
        required="">
    <div class="valid-feedback">
        Nome preenchido!
    </div>
    <div class="invalid-feedback">
        É necessario inserir um nome.
    </div>
</div>

<div class="col-12">
    <button class="btn btn-primary mt-5" type="submit">Enviar</button>
</div>
</form>
