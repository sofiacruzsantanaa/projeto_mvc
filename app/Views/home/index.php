<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NutriVida</title>

    <link href="<?= asset('css/styles.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/estilo.css') ?>" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= url('/') ?>">
                NutriVida
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/') ?>">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Alimentação
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Receitas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Vídeos
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <header class="py-5">
        <div class="container px-4 px-lg-5">

            <div class="row gx-4 gx-lg-5 align-items-center">

                <div class="col-lg-6">

                    <h1 class="display-5 fw-bold">
                        Cuide da sua alimentação
                    </h1>

                    <p class="lead">
                        Informação, educação alimentar e dicas para uma
                        vida mais saudável.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg">
                        Conheça o projeto
                    </a>

                </div>

                <div class="col-lg-6">
                    <div class="bg-light p-5 rounded">
                        <h2>🍎 NutriVida</h2>

                        <p>
                            Um espaço educativo sobre saúde,
                            alimentação e bem-estar.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </header>


    <section class="py-5 bg-light">

        <div class="container px-4 px-lg-5">

            <div class="text-center mb-5">

                <h2>O que você vai encontrar?</h2>

                <p class="text-muted">
                    Conteúdos simples para aprender mais sobre alimentação e saúde.
                </p>

            </div>


            <div class="row gx-4 gx-lg-5">

                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body">

                            <h3 class="card-title">
                                🥗 Alimentação
                            </h3>

                            <p class="card-text">
                                Informações sobre alimentação equilibrada
                                e educação nutricional.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body">

                            <h3 class="card-title">
                                🍳 Receitas
                            </h3>

                            <p class="card-text">
                                Receitas simples e informações sobre
                                seus ingredientes.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body">

                            <h3 class="card-title">
                                🎥 Vídeos
                            </h3>

                            <p class="card-text">
                                Conteúdos educativos para aprender
                                de forma prática.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <footer class="py-4 bg-dark text-white">

        <div class="container text-center">

            <p class="mb-0">
                © 2026 NutriVida — Projeto educacional
            </p>

        </div>

    </footer>


    <script src="<?= asset('js/scripts.js') ?>"></script>

</body>

</html>