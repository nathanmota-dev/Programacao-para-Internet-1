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
                <img src="assets/img/svg/pc.svg" alt="esquerda">
            </div>

            <div id="container">

                <form id="login_form">
                    <div id="form_header">
                        <h1>Login</h1>
                    </div>

                    <div id="inputs">
                        <div class="input-box">
                            <label for="email">
                                E-mail
                                <div class="input-field">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" id="email" name="email">
                                </div>
                            </label>
                        </div>


                        <div class="input-box">
                            <label for="password">
                                Senha
                                <div class="input-field">
                                    <i class="fa-solid fa-key"></i>
                                    <input type="password" id="password" name="password">
                                </div>
                            </label>

                            <div id="forgot_password">
                                <a href="register.php">
                                    Ainda não tem conta?
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="login_button">
                        Login
                    </button>
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