<?php
    $title = "Home Page";
    $view = "partial/home-content.php"; // Defina o caminho para o conteúdo específico da página home
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Samanta's Portfolio</title>
    <link rel="stylesheet" href="assets/css/Minty.css">
    <!-- Adicione seus outros links de estilo aqui -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Samanta's Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Personal Blog</a>
                        </li>
                    </ul>
                <div class="contact-buttons d-flex">
                    </a>
                    <a class="btn btn-link text-light" href="https://github.com/samanta-bordallo" target="_blank">
                        <span><i class="bi bi-github"></i></span>
                    </a>
                    <a class="btn btn-link text-light" href="https://www.linkedin.com/in/samanta-bordallo-86805a117/" target="_blank">
                        <span><i class="bi bi-linkedin"></i></span>
                    </a>
                    <a class="btn btn-link text-light" href="mailto:bordallo.samanta@gmail.com">
                        <span><i class="bi bi-envelope"></i></span>
                    </a>
                    <a class="btn btn-link text-light" href="https://api.whatsapp.com/send?phone=913890678" target="_blank">
                        <span><i class="bi bi-whatsapp"></i></span>
                    </a>
                </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="text-center d-flex flex-row justify-content-center align-items-center" style="background-color: #aed9e0;">
        <div class="mr-4">
            <h1 class="display-4">Hello, Welcome to</h1>
            <h2 class="display-3">Samanta's portfolio!</h2>
        </div>
        <img src="assets/Imagens/SamantaImage.JPG" alt="Imagem" class="img-responsive" style="max-width: 50%;">
    </div>

    <div class="container">
        <main role="main" class="pb-3">
            <?php include $view; ?>
        </main>
    </div>

    <footer class="border-top footer text-muted bg-dark fixed-bottom">
        <div class="container-fluid text-light text-center">
            &copy; 2023 - Samanta's portfolio - Samanta Bordallo
        </div>
    </footer>


    <!-- Adicione seus scripts aqui -->
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="assets/js/site.js"></script>
</body>
</html>
