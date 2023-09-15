@if (isset($customers->id))
    <form class="needs-validation" method="post" id="costumerForm" action="{{ route('customer.update', $customers->id) }}"
        novalidate="">
        @csrf
        @method('PUT')
    @else
        <form class="needs-validation" method="post" id="costumerForm" action="{{ route('customer.store') }}"
            novalidate="">
            @csrf
@endif
<div class="row g-3">
    <div class="col-sm-6">
        <label for="validationCustom01" class="form-label ">Nome completo</label>
        <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="fulano da silva "
            value="" required="">
        <div class="valid-feedback">
            Nome preenchido!
        </div>
        <div class="invalid-feedback">
            É necessario digitar o nome.
        </div>
    </div>

    <div class="col-sm-4">
        <label for="validationCustom02" class="form-label ">Telefone</label>
        <input type="number" class="form-control" name="phone_number" id="validationCustom02" placeholder="00 00000000"
            maxlength="14" required="">
        <div class="valid-feedback">
            Telefone preenchido!
        </div>
        <div class="invalid-feedback">
            É necessario digitar o número de telefone.
        </div>
        <script>
            // Evita que o usuário digite mais do que 14 dígitos
            document.getElementById('validationCustom02').addEventListener('input', function() {
                if (this.value.length > this.maxLength) {
                    this.value = this.value.slice(0, this.maxLength);
                }
            });
        </script>

    </div>

    <div class="col-sm-6 mt-2">
        <label for="validationCustom03" class="form-label ">Email</label>
        <input type="email" class="form-control" name="email" valueid="validationCustom03"
            placeholder="you@example.com" required="">
        <div class="valid-feedback">
            Email preenchido!
        </div>
        <div class="invalid-feedback">
            Por favor, entre com um email válido.
        </div>
    </div>

    <div class="col-sm-4 mt-2">
        <label for="validationCustom04" class="form-label ">CPF</label>
        <input type="number" class="form-control" name="cpf" id="validationCustom04"
            placeholder="12345678909 (sem ponto e hífen)" maxlength="15" required="">
        <div class="valid-feedback">
            CPF preenchido!
        </div>
        <div class="invalid-feedback">
            É necessario digitar o cpf.
        </div>
        <script>
            // Evita que o usuário digite mais do que 15 dígitos
            document.getElementById('validationCustom04').addEventListener('input', function() {
                if (this.value.length > this.maxLength) {
                    this.value = this.value.slice(0, this.maxLength);
                }
            });
        </script>
    </div>

    <div class="col-8 mt-2">
        <label for="validationCustom05" class="form-label">Endereço</label>
        <input type="text" class="form-control" name="address" id="validationCustom05" placeholder="Main ST 1234"
            required="">
        <div class="valid-feedback">
            Endereço preenchido!
        </div>
        <div class="invalid-feedback">
            Por favor, entre com endereço valido.
        </div>
    </div>
</div>
@if (isset($customers->id))
    <button class="w-20 my-4 btn btn-primary btn-ls" type="submit">Editar</button>
@else
    <button class="w-20 my-4 btn btn-primary btn-ls" type="submit">Enviar</button>
@endif
</form>
