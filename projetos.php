<?php
$currentPage = 'Projetos';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Projetos</title>
</head>

<body>

    <main>
        <nav class="purple-bg" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Projetos</li>
            </ol>
        </nav>

        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/img/others/projetos1.jpg" alt="projetos-1">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light text-center">TechVantage </h1>
                    <p>A TechVantage é uma empresa líder em soluções tecnológicas, dedicada a ajudar organizações a
                        alcançar seu máximo potencial por meio da implementação estratégica de tecnologia avançada.
                        Nossa equipe de especialistas altamente qualificados está comprometida em oferecer soluções
                        personalizadas e inovadoras para atender às demandas específicas de cada cliente</p>
                </div>
            </div>
        </div>

        <div class="col-12 bg-dark pb-0">
            <div class="row m-0 p-0">
                <h3 class="text-center display-6 mt-3 pt-0 text-white">Quem confia no nosso trabalho</h3>
                <p class="text-center text-white">Nossos clientes variam de startups a empresas estabelecidas em
                    vários
                    setores. Alguns de nossos clientes incluem</p>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center my-5">
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light text-center">TechVantage </h1>
                    <p>A TechVantage é uma empresa líder em soluções tecnológicas, dedicada a ajudar organizações a
                        alcançar seu máximo potencial por meio da implementação estratégica de tecnologia avançada.
                        Nossa equipe de especialistas altamente qualificados está comprometida em oferecer soluções
                        personalizadas e inovadoras para atender às demandas específicas de cada cliente</p>
                </div>
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/img/others/projetos2.webp" alt="projetos-2">
                </div>
            </div>
        </div>

        <div id="notificacoes" class="jumbotron p-5 purple-bg">
            <h1 class="display-4">Seu site em 1 dia<span class="badge badge-secondary" id="badgeNotificacao"></span>
            </h1>
            <p class="lead">Desenvolvemos um projeto onde conseguimos desenvolver seu site em apenas 1 dia. Apenas
                modelos pré-prontos.</p>
            <hr class="my-4">
            <p>Clique abaixo para realizar seu orçamento!</p>
            <p class="lead">
                <a id="btnAdicionarNotificacao" class="btn btn-primary btn-lg cor-botao" role="button"
                    onclick="adicionarNotificacao()">Saiba Mais</a>
            </p>
        </div>

        <div class="container">
            <div class="row p-5">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/others/projetos1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Inovação</h5>
                            <p class="card-text">Estamos constantemente explorando novas tecnologias e metodologias para
                                oferecer soluções inovadoras e alavancar o potencial de nossos clientes.</p>
                            <a href="#" class="btn btn-primary cor-botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/others/projetos2.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Excelência</h5>
                            <p class="card-text">Buscamos continuamente a excelência em tudo o que fazemos, desde a
                                concepção de produtos até a entrega de serviços, garantindo a satisfação de nossos
                                clientes.</p>
                            <a href="#" class="btn btn-primary cor-botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/others/projetos2.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Colaboração</h5>
                            <p class="card-text">Acreditamos no poder da colaboração e trabalhamos em estreita parceria
                                com nossos clientes para entender suas necessidades e oferecer soluções personalizadas.
                            </p>
                            <a href="#" class="btn btn-primary cor-botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/slider/slider2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Confiança</h5>
                            <p class="card-text">Construímos relacionamentos sólidos e duradouros com nossos clientes,
                                baseados na confiança, integridade e transparência em todas as interações.</p>
                            <a href="#" class="btn btn-primary cor-botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>