<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Início | Eventeen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="app-body">
    <div class="app-shell">
        <header class="app-topbar">
            <a class="app-brand" href="inicio-participante.php" aria-label="Evento Eventeen">
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
                <h1>Olá, Mariana!</h1>
                <p class="app-header__subtitle">Seu próximo encontro começa aqui.</p>
            </header>

            <section class="app-hero" aria-label="Explorar eventos">
                <div class="app-hero__copy">
                    <h2 class="app-hero__title">Descubra eventos acadêmicos</h2>
                    <p>Palestras e oficinas na Fatec Ourinhos.</p>
                    <a class="app-hero__button" href="eventos.php">Explorar eventos</a>
                </div>
                <div class="app-hero__icon" aria-hidden="true">🗓️</div>
            </section>

            <section class="app-stat-grid" aria-label="Resumo do participante">
                <article class="app-stat-card">
                    <div class="app-stat-card__value">2</div>
                    <div class="app-stat-card__label">Inscrições</div>
                </article>
                <article class="app-stat-card">
                    <div class="app-stat-card__value">5</div>
                    <div class="app-stat-card__label">Participações</div>
                </article>
                <article class="app-stat-card">
                    <div class="app-stat-card__value">3</div>
                    <div class="app-stat-card__label">Certificados</div>
                </article>
            </section>

            <section class="app-section app-event-list" aria-labelledby="meus-proximos-eventos">
                <h2 id="meus-proximos-eventos" class="app-section__title">Meus próximos eventos</h2>

                <article class="app-event-card" aria-label="Semana de Tecnologia 2026">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">&lt;/&gt;</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Semana de Tecnologia 2026</h3>
                            <div class="app-event-card__details">
                                <span>📅 22 out</span>
                                <span>🕒 19h</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Auditório</span>
                            </div>
                            <span class="app-event-card__status">✓ Inscrição confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="detalhes-evento.php">Ver evento</a>
                </article>

                <article class="app-event-card" aria-label="Oficina de Dados">
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
                            <span class="app-event-card__status">✓ Inscrição confirmada</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="detalhes-evento.php">Ver evento</a>
                </article>
            </section>
        </main>

        <nav class="app-bottom-nav" aria-label="Navegação principal">
            <a class="app-nav-item app-nav-item--active" href="inicio-participante.php">
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
            <a class="app-nav-item" href="historico-certificados.php">
                <span class="app-nav-item__icon">⏱️</span>
                <span>Histórico</span>
            </a>
        </nav>
    </div>
</body>
</html>
