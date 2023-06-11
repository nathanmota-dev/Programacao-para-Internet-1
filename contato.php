<?php
$currentPage = 'Contato';
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
    <title>Contato</title>
</head>

<body>

    <main>
        <div class="body-register">
            <div class="container-register">
                <div class="form-image">
                    <img src="assets/img/svg/contact.svg" alt="esquerda">
                </div>
                <div id="form-data" class="form">
                    <form action="conectarForm.php" id="formulario" method="POST">
                        <div class="form-header">
                            <div class="title">
                                <h1>Entre em contato conosco</h1>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label for="firstname">Nome</label>
                                <input id="firstname" class="required" type="text" name="nome"
                                    placeholder="Digite seu primeiro nome" oninput="nameValidate()">
                                <span class="span-required">Nome deve conter no mínino 3 caracteres</span>
                            </div>

                            <div class="input-box">
                                <label for="email">E-mail</label>
                                <input id="email" class="required" type="email" name="email"
                                    placeholder="Digite seu e-mail" oninput="emailValidate()">
                                <span class="span-required">Digite um email válido</span>
                            </div>

                            <div class="input-box">
                                <label for="number">Celular</label>
                                <input id="number" class="required" type="cel" name="celular"
                                    placeholder="(xx) xxxx-xxxx" oninput="phoneValidade()">
                                <span class="span-required">Digite um número de celular válido</span>
                            </div>

                            <div class="input-box">
                                <label for="subject">Assunto</label>
                                <input id="subject" class="required" type="text" name="assunto"
                                    placeholder="Digite o assunto" oninput="subjectValidate()">
                                <span class="span-required">Digite um assunto</span>
                            </div>

                            <div class="input-box">
                                <label for="message">Mensagem</label>
                                <input id="message" class="required" type="text" name="mensagem"
                                    placeholder="Digite a mensagem" oninput="messageValidate()">
                                <span class="span-required">Digite uma mensagem</span>
                            </div>

                        </div>

                        <div class="gender-inputs">
                            <div class="gender-title">
                                <h6>Gênero</h6>
                                <span id="gender-error" class="span-required">Selecione uma opção de gênero</span>
                            </div>

                            <div class="gender-group">
                                <div class="gender-input">
                                    <input type="radio" name="gender" id="male" value="Masculino">
                                    <label for="male">Masculino</label>
                                </div>

                                <div class="gender-input">
                                    <input type="radio" name="gender" id="female" value="Feminino">
                                    <label for="female">Feminino</label>
                                </div>

                                <div class="gender-input">
                                    <input type="radio" name="gender" id="others" value="Outros">
                                    <label for="others">Outros</label>
                                </div>

                                <div class="gender-input">
                                    <input type="radio" name="gender" id="none" value="Prefiro não dizer">
                                    <label for="none">Prefiro não dizer</label>
                                </div>
                            </div>
                        </div>

                        <div class="gender-inputs">
                            <div class="gender-title espaco">
                                <h6>Interesses</h6>
                                <span id="interests-error" class="span-required">Selecione pelo menos uma opção de
                                    interesse</span>
                            </div>

                            <div class="gender-group">
                                <div class="gender-input">
                                    <input type="checkbox" name="interests[]" id="interests-software"
                                        value="Desenvolvimento de Software">
                                    <label for="interests-software">Desenvolvimento de Software</label>
                                </div>

                                <div class="gender-input">
                                    <input type="checkbox" name="interests[]" id="interests-ux" value="Design de UX">
                                    <label for="interests-ux">Design de UX</label>
                                </div>

                                <div class="gender-input">
                                    <input type="checkbox" name="interests[]" id="interests-consultoria"
                                        value="Consultoria Empresarial">
                                    <label for="interests-consultoria">Consultoria Empresarial</label>
                                </div>

                                <div class="gender-input">
                                    <input type="checkbox" name="interests[]" id="interests-seguranca"
                                        value="Segurança Cibernética">
                                    <label for="interests-seguranca">Segurança Cibernética</label>
                                </div>
                            </div>
                        </div>

                        <div class="continue-button">
                            <button id="clear-data" type="button" onclick="showModal()"><a href="#">Confirmar
                                    dados</a></button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Opções</h5>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>O que você deseja fazer?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary cor-botao"
                                            onclick="clearForm()">Limpar
                                            dados</button>
                                        <button type="button" class="btn btn-secondary" onclick="editForm()">Alterar
                                            dados</button>
                                        <button type="submit" name="submit" class="btn btn-primary cor-botao"
                                            onclick="submitForm()">Enviar
                                            formulário</button>
                                        <span class="span-required">Corriga os erros do formulário</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>

</html>