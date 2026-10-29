<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Criar conta | Eventeen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="auth-page auth-page--cadastro">
        <a class="marca" href="index.php" aria-label="Eventeen - página inicial">
            <img class="logo" src="img/logo-eventeen.png" alt="Eventeen">
        </a>

        <section class="auth-card auth-card--cadastro" aria-labelledby="titulo">
            <header class="auth-header">
                <p class="eyebrow">Faça parte da nossa comunidade</p>
                <h1 id="titulo">Criar conta</h1>
                <p class="subtitulo">Seu acesso aos eventos acadêmicos.</p>
            </header>

            <form class="auth-form" action="inicio-participante.php" method="post">
                <div class="campo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" autocomplete="name" placeholder="Digite seu nome completo" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" autocomplete="email" placeholder="seuemail@exemplo.com" required>
                </div>

                <div class="campo">
                    <label for="matricula">Matrícula <span class="opcional">(opcional)</span></label>
                    <input type="text" id="matricula" name="matricula" autocomplete="off" placeholder="Digite sua matrícula">
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" autocomplete="new-password" minlength="8" placeholder="Crie uma senha" aria-describedby="senha-ajuda" required>
                    <small id="senha-ajuda" class="ajuda">Use pelo menos 8 caracteres.</small>
                </div>

                <div class="campo">
                    <label for="confirmar-senha">Confirmar senha</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" autocomplete="new-password" minlength="8" placeholder="Digite sua senha novamente" required>
                </div>

                <label class="checkbox-linha checkbox-linha--termos" for="termos">
                    <input type="checkbox" id="termos" name="termos" required>
                    <span>Concordo com os <strong>termos de uso</strong></span>
                </label>

                <button type="submit" class="botao">Criar conta</button>
            </form>

            <p class="rodape">Já tem uma conta? <a href="index.php">Entrar</a></p>
        </section>
    </main>

    <script>
        const senha = document.getElementById('senha');
        const confirmarSenha = document.getElementById('confirmar-senha');

        function validarSenhas() {
            confirmarSenha.setCustomValidity(
                confirmarSenha.value && confirmarSenha.value !== senha.value
                    ? 'As senhas não coincidem.'
                    : ''
            );
        }

        senha.addEventListener('input', validarSenhas);
        confirmarSenha.addEventListener('input', validarSenhas);
    </script>
</body>
</html>
