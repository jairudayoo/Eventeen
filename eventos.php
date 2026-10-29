<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Eventos | Eventeen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="app-body">
    <div class="app-shell app-shell--compact">
        <header class="app-topbar">
            <a class="app-brand" href="inicio-participante.php" aria-label="Página inicial Eventeen">
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
                <h1>Consulta de eventos</h1>
            </header>

            <div class="app-toolbar">
                <label class="app-search" aria-label="Buscar eventos">
                    <span aria-hidden="true">⌕</span>
                    <input type="search" value="" placeholder="Buscar eventos" aria-label="Buscar eventos">
                </label>
            </div>

            <div class="app-filter-list" aria-label="Filtros de eventos">
                <button class="app-filter app-filter--active" type="button">Todos</button>
                <button class="app-filter" type="button">Tecnologia</button>
                <button class="app-filter" type="button">Palestras</button>
                <button class="app-filter" type="button">Oficinas</button>
            </div>

            <section class="app-event-list" aria-label="Lista de eventos">
                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">📡</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Conexões Inteligentes</h3>
                            <div class="app-event-card__details">
                                <span>📅 04 nov</span>
                                <span>🕒 18h</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Bloco A</span>
                            </div>
                            <span class="app-event-card__status">Inscrições abertas</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="detalhes-evento.php">Detalhes</a>
                </article>

                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">💡</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">Inovação em IA</h3>
                            <div class="app-event-card__details">
                                <span>📅 12 nov</span>
                                <span>🕒 19h30</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Auditório</span>
                            </div>
                            <span class="app-event-card__status">Últimas vagas</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="detalhes-evento.php">Detalhes</a>
                </article>

                <article class="app-event-card">
                    <div class="app-event-card__inner">
                        <div class="app-event-card__art" aria-hidden="true">🧠</div>
                        <div class="app-event-card__meta">
                            <h3 class="app-event-card__title">UX para Produtos Digitais</h3>
                            <div class="app-event-card__details">
                                <span>📅 18 nov</span>
                                <span>🕒 15h</span>
                            </div>
                            <div class="app-event-card__details">
                                <span>📍 Sala 3</span>
                            </div>
                            <span class="app-event-card__status">Inscrições abertas</span>
                        </div>
                    </div>
                    <a class="app-event-card__cta" href="detalhes-evento.php">Detalhes</a>
                </article>
            </section>
        </main>

        <nav class="app-bottom-nav" aria-label="Navegação principal">
            <a class="app-nav-item" href="inicio-participante.php">
                <span class="app-nav-item__icon">⌂</span>
                <span>Início</span>
            </a>
            <a class="app-nav-item app-nav-item--active" href="eventos.php">
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
