<form class="needs-validation" method="post" id="employeeForm" novalidate="">
    <div class="row g-3">

        <div class="col-sm-7">
            <label for="validationCustom01" class="form-label">Nome completo</label>
            <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Nome Completo"
                required="">
            <div class="valid-feedback">
                Nome preenchido!
            </div>
            <div class="invalid-feedback">
                É necessario digitar o nome do funcionário(a).
            </div>
        </div>

        <div class="col-sm-3">
            <label for="validationCustom02" class="form-label">PIS</label>
            <input type="number" class="form-control" maxlength="15" name="pis" id="validationCustom02"
                placeholder="12345678910" required="">
            <div class="valid-feedback">
                PIS preenchido!
            </div>
            <div class="invalid-feedback">
                É necessario digitar o seu telefone.
            </div>
            <script>
                // Evita que o usuário digite mais do que 15 dígitos
                document.getElementById('validationCustom02').addEventListener('input', function() {
                    if (this.value.length > this.maxLength) {
                        this.value = this.value.slice(0, this.maxLength);
                    }
                });
            </script>
        </div>
        <div class="col-sm-4 mt-2">
            <label for="validationCustom03" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="office" id="validationCustom03" placeholder="Vendedor"
                required="">
            <div class="valid-feedback">
                Cargo preenchido!
            </div>
            <div class="invalid-feedback">
                Por favor, digite o cargo do funcionário(a).
            </div>
        </div>

        <div class="col-sm-4 mt-2">
            <label for="validationCustom04" class="form-label">Departamento</label>
            <input type="text" class="form-control" name="departament" id="validationCustom04" placeholder="Vendas"
                required="">
            <div class="valid-feedback">
                Departamento preenchido!
            </div>
            <div class="invalid-feedback">
                Por favor, digite o departamento do funcionário(a).
            </div>
        </div>

        <div class="col-sm-2 mt-2">
            <label for="validationCustom05" class="form-label">Livraria</label><br>
            <select class="form-select" id="validationCustom05" name="library_id"
                aria-label="validationServer04Feedback" required="">
                <option selected="" disabled="" value="">Escolha...</option>
                <option value='1'>Livraria Pedbot</option>
            </select>
            <div class="valid-feedback">
                Livraria selecionada!
            </div>
            <div class="invalid-feedback">
                Necessário selecionar a livraria.
            </div>
        </div>
    </div>
    <button class="w-20 my-4 btn btn-primary btn-ls" type="submit">Enviar</button>
</form>
