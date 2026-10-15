<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Entrar | Eventeen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="auth-page">
        <a class="marca" href="index.php" aria-label="Eventeen - página inicial">
            <img class="logo" src="img/logo-eventeen.png" alt="Eventeen">
        </a>

        <section class="auth-card" aria-labelledby="titulo">
            <header class="auth-header">
                <p class="eyebrow">Fatec Ourinhos</p>
                <h1 id="titulo">Bem-vindo ao Eventeen</h1>
                <p class="subtitulo">Eventos acadêmicos em um só lugar.</p>
            </header>

            <form class="auth-form" action="#" method="post">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" autocomplete="email" placeholder="seuemail@exemplo.com" required>
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" autocomplete="current-password" placeholder="Digite sua senha" required>
                </div>

                <label class="checkbox-linha" for="manter-conectado">
                    <input type="checkbox" id="manter-conectado" name="manter-conectado">
                    <span>Manter conectado</span>
                </label>

                <button type="submit" class="botao">Entrar</button>
            </form>

            <p class="rodape">Ainda não tem conta? <a href="cadastro.php">Criar conta</a></p>
        </section>

        <footer class="assinatura">Fatec Ourinhos</footer>
    </main>
</body>
</html>