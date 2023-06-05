<?php
$currentPage = 'Inicio';
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
    <title>TechVantage</title>
</head>

<body>

    <main>
        <!-- Carrossel Slider com Bootstrap -->
        <div id="meuCarrossel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slider/slider1.webp" class="d-block" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/slider2.jpg" class="d-block" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/slider3.png" class="d-block" alt="Slide 3">
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-bs-target="#meuCarrossel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#meuCarrossel" data-bs-slide-to="1"></li>
                <li data-bs-target="#meuCarrossel" data-bs-slide-to="2"></li>
            </ol>

            <a class="carousel-control-prev" href="#meuCarrossel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#meuCarrossel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </a>
        </div>

        <div class="container-fluid purple-bg px-5">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-4">
                    <img class="img-fluid m-3" src="/assets/img/div1.svg" alt="Imagem">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 p-5 text-center">
                    <h4 class="display-6">Sua empresa está precisando de desenvolvedores?</h4>
                    <hr>
                    <p>Contrate desenvolvedores treinados e preparados para resolver problemas. Nossos profissionais
                        contam com uma equipe de suporte técnico e recebem treinamentos recorrentes de soft-skills para
                        oferecer à você uma nova experiência em contratação de pessoas.</p>
                    <div class="login-button ">
                        <button><a href="login.html">Fale com um especialista</a></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container icon-text">
            <div class="row">
                <div class="col-12 text-center p-5">
                    <h1>OFERTAS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-bag-check icone"></i>
                        <h3>Desenvolvimento Ágil</h3>
                    </div>
                    <p>O desenvolvimento de software mudou muito nos últimos anos. As equipes modernas são 100% digitais
                        e ágeis (também conhecidas
                        como <em><strong>Squads</strong></em> ou <em><strong>Digital Pods</strong></em>). Saiba como a
                        Visionnaire pode ajudar a sua
                        empresa a entrar na era digital ágil.
                    </p>
                </div>
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-chat-right-dots icone"></i>
                        <h3>Software sob Medida</h3>
                    </div>
                    <p>Muitas vezes é necessário desenvolver um software da maneira que o cliente deseja,
                        <strong>Customizado</strong> para suas
                        necessidades. Nesses casos a Visionnaire tem uma alta experiência entregando sistemas de
                        <strong>Qualidade</strong> dentro
                        dos prazos e orçamentos.
                    </p>
                </div>
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-pencil-square icone"></i>
                        <h3>Projetos de Software</h3>
                    </div>
                    <p>Temos experiência no desenvolvimento de <strong>Grandes Projetos</strong> de software que
                        requerem modernidade e integrações.
                        Desenvolvemos sistemas de alta complexidade nos ramos financeiro, telecomunicações e saúde, os
                        quais atingem <strong>Milhões
                            de Usuários</strong>.
                    </p>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-lock icone"></i>
                        <h3>Desenvolvimento de Software de Escopo Aberto</h3>
                    </div>
                    <p>O modelo de desenvolvimento com escopo aberto permite <strong>Agilidade</strong> e
                        <strong>Velocidade</strong>, sem perder
                        na qualidade. A Visionnaire te auxilia em projetos nos quais a prioridade é tempo, com equipes
                        talentosas e de alto desempenho.
                    </p>
                </div>
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-unlock icone"></i>
                        <h3>Desenvolvimento de Software de Escopo Fechado</h3>
                    </div>
                    <p>Desenvolvemos sistemas dentro do seu <em>budget</em>, respeitando prazos e com
                        <strong>Entregas</strong> frequentes. Seja
                        por empreitada ou por encomenda, somos sua melhor opção para sistemas cuja prioridade está no
                        <strong>Orçamento</strong>.
                    </p>
                </div>
                <div class="col-4 div-icons p-3">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-telephone icone"></i>
                        <h3>Desenvolvimento de Aplicativos</h3>
                    </div>
                    <p>Vivemos na era da <strong>Mobilidade</strong>, onde a funcionalidade que você precisa está na
                        palma da sua mão. A Visionnaire
                        desenvolve <em><strong>Apps</strong></em> de forma nativa ou híbrida e integrados a soluções na
                        nuvem, viabilizando a sua
                        estratégia digital móvel.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-image">
            <div class="d-flex flex-column align-items-center justify-content-center h-100 text-white">
                <h1>QUER DESENVOLVER UM SOFTWARE?</h1>
                <div class="login-button">
                    <button><a href="login.html">Fale com um especialista</a></button>
                </div>
            </div>
        </div>

        <div class="container-fluid px-5">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 p-5">
                    <h4 class="display-6">Os melhores squads para a sua empresa</h4>
                    <hr>
                    <p>O processo precisa ser feito pelas pessoas, com as pessoas. Por isso, com a TechVantage você tem
                        acesso a squads remotos de alta performance com profissionais engajados.</p>
                    <ul>
                        <li>Um squad completo</li>
                        <li>Flexibilidade para calibrar seu time sob demanda</li>
                        <li>Baixo turnover, realocação rápida e segura</li>
                        <li>Treinamento constante</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-4">
                    <img class="img-fluid m-3" src="/assets/img/div2.svg" alt="Imagem">
                </div>
            </div>
        </div>

        <div class="col-12 bg-dark pb-0">
            <div class="row m-0 p-0">
                <h3 class="text-center display-6 mt-3 pt-0 text-white">Quem confia no nosso trabalho</h3>
                <p class="text-center text-white">Nossos clientes variam de startups a empresas estabelecidas em vários
                    setores. Alguns de nossos clientes incluem</p>
            </div>
        </div>

        <!--  
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="">
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        -->

    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>