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
    <?php include 'header.php'; ?>

    <main class="body-register">
        <div class="container-register">
            <div class="form-image">
                <img src="assets/img/undraw_cloud_hosting_7xb1.svg" alt="esquerda">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Primeiro nome</label>
                            <input id="firstname" type="text" name="first-name" placeholder="Digite seu primeiro nome"
                                required>
                        </div>

                        <div class="input-box">
                            <label for="lastname">Sobrenome</label>
                            <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome"
                                required>
                        </div>

                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Celular</label>
                            <input id="number" type="cel" name="number" placeholder="(xx) xxxx-xxxx" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input id="password" type="password" name="password" placeholder="Digite sua senha"
                                required>
                            <span class="span-required">A senha precisa ter no mínimo 8 caracteres</span>
                        </div>

                        <div class="input-box">
                            <label for="password">Confirme sua senha</label>
                            <input id="password" type="password" name="Confirmpassword" placeholder="Digite sua senha"
                                required>
                            <span class="span-required">As senhas precisam ser iguais!</span>
                        </div>
                    </div>

                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gêneros</h6>
                        </div>

                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" name="gender" id="male">
                                <label for="male">Masculino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="others">
                                <label for="others">Outros</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="none">
                                <label for="none">Prefiro não dizer</label>
                            </div>
                        </div>
                    </div>

                    <div class="continue-button">
                        <button><a href="#">Continuar</a></button>
                    </div>

                </form>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>