<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#c0172d">
    <title>Detalhes do evento | Eventeen</title>
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
            <section class="app-surface" aria-label="Detalhes do evento">
                <div class="app-event-hero">
                    <div class="app-event-hero__badge" aria-hidden="true">✦</div>
                    <div class="app-event-hero__content">
                        <p class="app-event-hero__eyebrow">Palestra</p>
                        <h2>Design para dados</h2>
                    </div>
                </div>

                <div class="app-detail-list">
                    <div class="app-detail-item">
                        <div class="app-detail-item__icon" aria-hidden="true">📅</div>
                        <div>
                            <strong>Data</strong>
                            18 de setembro · 19h
                        </div>
                    </div>

                    <div class="app-detail-item">
                        <div class="app-detail-item__icon" aria-hidden="true">📍</div>
                        <div>
                            <strong>Local</strong>
                            Auditório principal
                        </div>
                    </div>

                    <div class="app-detail-item">
                        <div class="app-detail-item__icon" aria-hidden="true">⏱️</div>
                        <div>
                            <strong>Duração</strong>
                            2 horas
                        </div>
                    </div>

                    <div class="app-detail-item">
                        <div class="app-detail-item__icon" aria-hidden="true">🎓</div>
                        <div>
                            <strong>Organizador</strong>
                            Núcleo de Inovação
                        </div>
                    </div>
                </div>

                <div class="app-action-group">
                    <a class="app-button" href="minhas-inscricoes.php">Inscrever-se</a>
                    <button class="app-button app-button--secondary" type="button">Salvar evento</button>
                    <button class="app-button app-button--ghost" type="button">Compartilhar</button>
                </div>
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
