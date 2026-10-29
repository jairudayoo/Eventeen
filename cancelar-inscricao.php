<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Cancelar inscrição | Eventeen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="app-body">
    <div class="app-shell app-shell--compact">
        <header class="app-topbar">
            <a class="app-brand" href="inicio-participante.php" aria-label="Voltar para início">
                <span class="app-brand__mark">E</span>
                <span class="app-brand__name">Eventeen</span>
            </a>
            <div class="app-topbar__actions">
                <span class="app-pill">MC</span>
                <button class="app-menu" aria-label="Menu">☰</button>
            </div>
        </header>

        <main class="app-content">
            <section class="app-bottom-sheet" aria-label="Confirmar cancelamento">
                <h2 class="app-bottom-sheet__title">Cancelar inscrição?</h2>
                <p class="app-bottom-sheet__text">Ao confirmar, sua vaga será liberada para outros participantes e a inscrição será removida do seu histórico ativo.</p>

                <div class="app-card">
                    <div class="app-stat-inline">
                        <span class="app-stat-inline__label">Evento</span>
                        <span class="app-stat-inline__value">Semana de Tecnologia</span>
                    </div>
                    <div class="app-stat-inline">
                        <span class="app-stat-inline__label">Data</span>
                        <span class="app-stat-inline__value">22 out</span>
                    </div>
                </div>

                <div class="app-action-group">
                    <button class="app-button" type="button">Confirmar cancelamento</button>
                    <button class="app-button app-button--secondary" type="button">Voltar</button>
                </div>
            </section>
        </main>

        <nav class="app-bottom-nav" aria-label="Navegação principal">
            <a class="app-nav-item" href="inicio-participante.php">
                <span class="app-nav-item__icon">⌂</span>
                <span>Início</span>
            </a>
            <a class="app-nav-item" href="eventos.php">
                <span class="app-nav-item__icon">🗓️</span>
                <span>Eventos</span>
            </a>
            <a class="app-nav-item app-nav-item--active" href="minhas-inscricoes.php">
                <span class="app-nav-item__icon">🧾</span>
                <span>Inscrições</span>
            </a>
            <a class="app-nav-item" href="historico-certificados.php">
                <span class="app-nav-item__icon">⏱️</span>
                <span>Histórico</span>
            </a>
        </nav>
    </div>
</body>
</html>
