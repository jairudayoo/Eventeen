<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Histórico e certificados | Eventeen</title>
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
                <h1>Histórico de participação</h1>
                <p class="app-header__subtitle">Fatec Ourinhos</p>
            </header>

            <section class="app-stat-grid app-stat-grid--horizontal" aria-label="Estatísticas do histórico">
                <article class="app-stat-card">
                    <div class="app-stat-card__value">5</div>
                    <div class="app-stat-card__label">Eventos</div>
                </article>
                <article class="app-stat-card">
                    <div class="app-stat-card__value">12 h</div>
                    <div class="app-stat-card__label">Registradas</div>
                </article>
                <article class="app-stat-card">
                    <div class="app-stat-card__value">3</div>
                    <div class="app-stat-card__label">Certificados</div>
                </article>
            </section>

            <div class="app-filter-list" aria-label="Filtros do histórico">
                <button class="app-filter app-filter--active" type="button">Todos os eventos</button>
            </div>

            <section class="app-section app-event-list" aria-label="Eventos participados">
                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">💡</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Centro de Inovação</h3>
                            <div class="app-event-card__details">
                                <span>📅 18 set</span>
                                <span>🕒 2h</span>
                            </div>
                            <span class="app-event-card__status">✓ Presença confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="#">Baixar certificado</a>
                </article>

                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">👥</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Trabalho em equipe</h3>
                            <div class="app-event-card__details">
                                <span>📅 18 set</span>
                                <span>🕒 2h</span>
                            </div>
                            <span class="app-event-card__status">✓ Presença confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="#">Baixar certificado</a>
                </article>

                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">📐</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Oficina de Projetos</h3>
                            <div class="app-event-card__details">
                                <span>📅 10 set</span>
                                <span>🕒 2h</span>
                            </div>
                            <span class="app-event-card__status">✕ Presença não confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="#">Certificado indisponível</a>
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
            <a class="app-nav-item" href="minhas-inscricoes.php">
                <span class="app-nav-item__icon">🧾</span>
                <span>Inscrições</span>
            </a>
            <a class="app-nav-item app-nav-item--active" href="historico-certificados.php">
                <span class="app-nav-item__icon">⏱️</span>
                <span>Histórico</span>
            </a>
        </nav>
    </div>
</body>
</html>
