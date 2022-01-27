<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/first-aid-kit.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>

    <section class="initial back">
        <div class="nav-back">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <div class="w-full d-flex flex-column flex-lg-row align-items-center justify-content-between ">
                            <div class="w-full d-flex flex-wrap align-items-center justify-content-between">
                                <a class="navbar-brand" href="{{ route('index') }}#">Organize</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="w-full collapse navbar-collapse d-lg-flex flex-column flex-lg-row justify-content-lg-end" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    <a class="nav-link" href="{{ route('register') }}" id="btn-border">Cadastro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container container-fluid py-5 px-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" :value="old('email')" autofocus required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                </div>
                <div>
                    <button type="submit" class="btn btn-dark py-3 px-5">Logar</button>
                </div>
            </form>
        </div>
    </section>

    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/582c5cac37.js" crossorigin="anonymous"></script>
    
</body>
</html>