<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="conteudo d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                <h2 class="title title-second">Organize</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use sua conta de e-mail:</p>

                 <!-- Session Status -->
                 <x-auth-session-status class="mb-4" :status="session('status')" />

                 <!-- Validation Errors -->
                 <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <form method="POST" class="form justify-content-center align-items-center" action="{{ route('login') }}">
                    @csrf

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password" name="password">
                    </label>

                    @if (Route::has('password.request'))
                    <a class="password" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                    @endif
            
                    <button class="btn btn-second" type="submit">entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="/js/app.js"></script>

</body>
</html>


