@extends('site.layouts.basicClient')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card rounded-3 text-black">
                <div class="row g-0">

                    <div class="col-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/logoLibrary.png') }}" style="width: 200px;"
                                                alt="logo">
                                        </div>
                                        <h2 class="px-5" style="color:#040657;">Registra-se</h2>
                                    </div>
                                    <div class="text-center px-5">
                                        <img src="{{ asset('img/client/register.svg') }}" style="width: 320px;"
                                            alt="logo">
                                    </div>
                                </div>

                            </div>

                            <form class="row needs-validation d-flex justify-content-center" id="registerForm" action={{ route('site.register') }}
                                method="post">
                                @csrf
                                <div class="form-outline  col-7">
                                    <label class="form-label  mt-3" for="form2Example11">Nome do
                                        usuario</label>
                                    <input type="text" id="form2Example11" class="form-control" name="username"
                                        placeholder="digite nome do usuario" required />
                                    <div class="valid-feedback">
                                        Nome do usuario preenchido!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira o nome do usuario.
                                    </div>
                                </div>
                                <div class="form-outline col-7">
                                    <label class="form-label  mt-3" for="validationCustom01">Email</label>
                                    <input type="email" id="validationCustom01" class="form-control" name="email"
                                        placeholder="digite seu email" required />
                                    <div class="valid-feedback">
                                        Email preenchido!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira um email.
                                    </div>
                                </div>
                                <div class="form-outline my-3 col-7">
                                    <label for="validationCustom02" class="form-label">Senha</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="validationCustom02" name="password"
                                            aria-describedby="toggleButton" placeholder="Digite sua senha" required />
                                        <button class="btn btn-outline-secondary" type="button" id="toggleButton"><img
                                                src="{{ asset('img/client/eye.svg') }}" alt="eye" width="20"
                                                class="text-light"></button>
                                    </div>
                                    <div class="valid-feedback">
                                        Senha preenchida!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira a senha do usuário.
                                    </div>
                                </div>

                                <script>
                                    // Função para alternar a visibilidade da senha
                                    document.getElementById("toggleButton").addEventListener("click", function() {
                                        const passwordInput = document.getElementById("validationCustom02");
                                        const eyeIcon = this.querySelector("img");

                                        if (passwordInput.type === "password") {
                                            passwordInput.type = "text";
                                            eyeIcon.classList.remove("bi-eye-slash");
                                            eyeIcon.classList.add("bi-eye");
                                        } else {
                                            passwordInput.type = "password";
                                            eyeIcon.classList.remove("bi-eye");
                                            eyeIcon.classList.add("bi-eye-slash");
                                        }
                                    });
                                </script>

                                <div class="container text-center mt-3 col-7">
                                    <button class="btn btn-primary mb-3" type="submit">Cadastrar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const registerForm = document.getElementById('registerForm');

        registerForm.addEventListener('submit', function(event) {
            if (!registerForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                console.log('Formulário enviado!');
            }

            registerForm.classList.add('was-validated');
        });
    </script>
    @include('site.client._partials.footer')
@endsection
