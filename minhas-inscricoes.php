<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Minhas inscrições | Eventeen</title>
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
            <header class="app-header">
                <h1>Minhas inscrições</h1>
            </header>

            <section class="app-card" aria-label="Resumo de inscrições">
                <div class="app-stat-inline">
                    <span class="app-stat-inline__label">Inscrições ativas</span>
                    <span class="app-stat-inline__value">2</span>
                </div>
                <div class="app-stat-inline">
                    <span class="app-stat-inline__label">Pendentes</span>
                    <span class="app-stat-inline__value">1</span>
                </div>
            </section>

            <section class="app-section app-event-list" aria-label="Lista de inscrições">
                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">🧑‍💻</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Semana de Tecnologia 2026</h3>
                            <div class="app-event-card__details">
                                <span>📅 22 out</span>
                                <span>🕒 19h</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Auditório</span>
                            </div>
                            <span class="app-event-card__status">✓ Confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="cancelar-inscricao.php">Cancelar inscrição</a>
                </article>

                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">📊</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Oficina de Dados</h3>
                            <div class="app-event-card__details">
                                <span>📅 24 out</span>
                                <span>🕒 14h</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Laboratório 2</span>
                            </div>
                            <span class="app-event-card__status">✓ Confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="cancelar-inscricao.php">Cancelar inscrição</a>
                </article>
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
