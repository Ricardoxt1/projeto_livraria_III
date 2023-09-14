@extends('site.layouts.basic_client')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-12">
            <div class="card rounded-3 text-black">
                <div class="row g-0">

                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                                <img src="{{ asset('img/logoLibrary.png') }}" style="width: 185px;" alt="logo">
                                <h2 class="mt-1 mb-5 pb-1 ">Biblioteca Pedbot</h2>
                            </div>
                            @if ($erro && $erro !== '')
                                <div class="alert alert-danger text-center">{{ $erro }}</div>
                            @elseif ($sucess && $sucess !== '')
                                <div class="alert alert-success text-center">{{ $sucess }}</div>
                            @endif

                            <form class="needs-validatio was-validated" action={{ route('site.login') }} method="post">
                                @csrf
                                <div class="form-outline my-4">
                                    <label class="form-label is-invalid mt-3" for="form2Example11">Email</label>
                                    <input type="email" id="form2Example11" value="{{ old('email') }}" name="email"
                                        class="form-control" placeholder="digite nome do usuario" required />
                                    <div class="valid-feedback">
                                        Email preenchido!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira seu email.
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label is-invalid" for="form2Example22">Senha</label>
                                    <div class="input-group">
                                        <input type="password" id="form2Example22" value="{{ old('password') }}"
                                            name="password" class="form-control" aria-describedby="toggleButton"
                                            placeholder="Digite sua senha" required />
                                        <button class="btn btn-outline-secondary" type="button" id="toggleButton"><img
                                                src="{{ asset('img/client/eye.svg') }}" alt="eye" width="20"
                                                class="text-light"></button>
                                        <div class="valid-feedback">
                                            Senha preenchida!
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, insira a senha do usuario.
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-md mb-3" type="submit">Entrar</button>
                                    </div>

                                    <div class="d-inline align-items-center justify-content-center">
                                        <p class="mb-2">Ainda não é registrado?</p>

                                        <a href="/register"><button type="button" class="btn btn-outline-success">Criar
                                                conta</button></a>
                                    </div>
                                </div>
                                <script>
                                    // Função para alternar a visibilidade da senha
                                    document.getElementById("toggleButton").addEventListener("click", function() {
                                        const passwordInput = document.getElementById("form2Example22");
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
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <img src="https://images.unsplash.com/photo-1614849963640-9cc74b2a826f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            width="100%" height="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.client._partials.footer')
@endsection
