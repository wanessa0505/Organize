<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organize</title>
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="initial photo-landing">
        <div class="nav-back">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <div class="w-full d-flex flex-column flex-lg-row align-items-center justify-content-between ">
                            <div class="w-full d-flex flex-wrap align-items-center justify-content-between">
                                <a class="navbar-brand" href="{{ route('index') }}#">Organize</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="w-full collapse navbar-collapse d-lg-flex flex-column flex-lg-row justify-content-lg-end"
                                id="navbarNavAltMarkup">
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
        <div class="text-landing">
            <div class="container">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2>Organização Gera Produção</h2>
                    <p>Uma rotina bem planejada e organizada te dá segurança e praticidade.</p>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Comece a se organizar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>