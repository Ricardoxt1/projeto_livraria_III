<form class="row g-3 needs-validation my-3" method="post" id="authorForm" novalidate="">
    @csrf
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
