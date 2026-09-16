<?php
declare(strict_types=1);

require_once __DIR__.'/../app/bootstrap.php';
require_once __DIR__.'/../app/auth.php';
require_once __DIR__.'/../app/layout.php';

if (isset($_GET['asset']) && $_GET['asset']==='app.css') {
    header('Content-Type: text/css; charset=utf-8');
    readfile(__DIR__.'/app.css');
    exit;
}

if (($_GET['action'] ?? '') === 'logout') {
    logout_user();
    header('Location: ?page=login');
    exit;
}

$page = (string)($_GET['page'] ?? 'home');

if ($page === 'login') {
    if (current_user()) {
        header('Location: ?page=home');
        exit;
    }

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        csrf_check();

        if (login_attempt(
            trim((string)($_POST['username'] ?? '')),
            (string)($_POST['password'] ?? '')
        )) {
            header('Location: ?page=home');
            exit;
        }

        $error = 'Anmeldung nicht möglich.';
    }

    layout_start('Anmeldung');
    ?>
    <section class="login card">
      <h1>WIRKSTÄTTEN-DNA</h1><p>LEITSTAND</p>
      <?php if ($error): ?><div class="error"><?= e($error) ?></div><?php endif; ?>
      <form method="post">
        <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <label>Benutzername<input name="username" autocomplete="username" required></label>
        <label>Passwort<input type="password" name="password" autocomplete="current-password" required></label>
        <button type="submit">ANMELDEN</button>
      </form>
    </section>
    <?php
    layout_end();
    exit;
}

$user = require_login();

/*
 * Zentrale Routendefinition:
 * Der technische Routenschlüssel ist unabhängig von der sichtbaren
 * deutschen Bezeichnung. Dadurch bleiben Navigation, Kacheln,
 * Validierung und Seitenlogik konsistent.
 */
$cards = [
    'home' => [
        'label' => 'AKTUELL',
        'description' => 'Systemstatus, letzter Stand und nächste Arbeitspunkte.'
    ],
    'continue' => [
        'label' => 'WEITERARBEITEN',
        'description' => 'Genau dort weiterarbeiten, wo zuletzt aufgehört wurde.'
    ],
    'open' => [
        'label' => 'OFFEN',
        'description' => 'Unfertige Arbeiten, Entscheidungen und Prüfungen.'
    ],
    'knowledge' => [
        'label' => 'WISSEN',
        'description' => 'Fakten, Erfahrung, Lösungen, Fehler und Erkenntnisse.'
    ],
    'projects' => [
        'label' => 'PROJEKTE',
        'description' => 'Projektverlauf, Dokumente, Wissen und Entscheidungen.'
    ],
    'capture' => [
        'label' => 'ERFASSEN',
        'description' => 'Text, Foto, Sprache oder Dokument – zunächst ungeprüft.'
    ],
    'documents' => [
        'label' => 'DOKUMENTE',
        'description' => 'Zentrale Dokumente mit Version und SHA-256.'
    ],
    'decisions' => [
        'label' => 'ENTSCHEIDUNGEN',
        'description' => 'Entscheidung, Begründung und verworfene Alternativen.'
    ],
    'security' => [
        'label' => 'SICHERHEIT',
        'description' => 'Zugriffe, Audit und Schutzstatus.'
    ],
    'help' => [
        'label' => 'HILFE',
        'description' => 'Kommandos, Regeln und Bedienung.'
    ],
];

if (!isset($cards[$page])) {
    $page = 'home';
}

layout_start($cards[$page]['label'], $user);

if ($page === 'home') {
    echo '<h1>AKTUELL</h1>';
    echo '<p class="lead">Der zentrale Einstieg in die WIRKSTÄTTEN-DNA.</p>';
    echo '<div class="grid">';

    foreach ($cards as $route => $card) {
        echo '<a class="tile" href="?page='.urlencode($route).'">';
        echo '<b>'.e($card['label']).'</b>';
        echo '<span>'.e($card['description']).'</span>';
        echo '</a>';
    }

    echo '</div>';

} elseif ($page === 'continue') {

    echo '<h1>WEITERARBEITEN</h1>';
    echo '<div class="card">';
    echo '<h2>Resume-Punkt</h2>';
    echo '<p>Noch kein produktiver Resume-Punkt gespeichert.</p>';
    echo '<p class="muted">Der Mechanismus wird mit dem Leitstand-Workflow ergänzt.</p>';
    echo '</div>';

} elseif ($page === 'open') {

    $n = (int)db()->query(
        "SELECT COUNT(*) FROM projects WHERE status IN ('OFFEN','IN_ARBEIT','PAUSIERT')"
    )->fetchColumn();

    echo '<h1>OFFEN</h1>';
    echo '<div class="metric card"><strong>'.$n.'</strong><span>offene/aktive Projekte</span></div>';

} elseif ($page === 'knowledge') {

    $rows = db()->query(
        "SELECT title,knowledge_type,status,updated_at
         FROM knowledge
         ORDER BY updated_at DESC
         LIMIT 20"
    )->fetchAll();

    echo '<h1>WISSEN</h1>';
    echo '<div class="card">';
    echo '<table><tr><th>Titel</th><th>Typ</th><th>Status</th><th>Geändert</th></tr>';

    foreach ($rows as $r) {
        echo '<tr>';
        echo '<td>'.e($r['title']).'</td>';
        echo '<td>'.e($r['knowledge_type']).'</td>';
        echo '<td>'.e($r['status']).'</td>';
        echo '<td>'.e($r['updated_at']).'</td>';
        echo '</tr>';
    }

    echo '</table></div>';

} elseif ($page === 'projects') {

    $rows = db()->query(
        "SELECT project_no,title,status,updated_at
         FROM projects
         ORDER BY updated_at DESC
         LIMIT 50"
    )->fetchAll();

    echo '<h1>PROJEKTE</h1>';
    echo '<div class="card">';
    echo '<table><tr><th>Nr.</th><th>Projekt</th><th>Status</th><th>Geändert</th></tr>';

    foreach ($rows as $r) {
        echo '<tr>';
        echo '<td>'.e($r['project_no']).'</td>';
        echo '<td>'.e($r['title']).'</td>';
        echo '<td>'.e($r['status']).'</td>';
        echo '<td>'.e($r['updated_at']).'</td>';
        echo '</tr>';
    }

    echo '</table></div>';

} elseif ($page === 'security') {

    echo '<h1>SICHERHEIT</h1>';
    echo '<div class="grid">';
    echo '<div class="tile"><b>AUTH</b><span>Serverseitige Anmeldung und Rollenprüfung.</span></div>';
    echo '<div class="tile"><b>AUDIT</b><span>Änderungen und Zugriffe werden protokolliert.</span></div>';
    echo '<div class="tile"><b>BACKUP</b><span>Backup-/Restore-Nachweise sind im Mastermodell vorgesehen.</span></div>';
    echo '</div>';

} elseif ($page === 'help') {

    echo '<h1>HILFE</h1>';
    echo '<div class="card">';
    echo '<p><b>DNA START</b> – zentralen Zustand prüfen und Arbeit aufnehmen.</p>';
    echo '<p><b>8</b> – weiterarbeiten, noch nicht freigegeben.</p>';
    echo '<p><b>GESAMTCHECK</b> – Gesamtprüfung.</p>';
    echo '<p><b>DNA STOP</b> – Arbeit kontrolliert beenden und Resume-Punkt sichern.</p>';
    echo '</div>';

} else {

    echo '<h1>'.e($cards[$page]['label']).'</h1>';
    echo '<div class="card">';
    echo '<p>'.e($cards[$page]['description']).'</p>';
    echo '<p class="muted">Dieser Funktionsbereich ist vorbereitet und wird im nächsten Arbeitspaket ausgebaut.</p>';
    echo '</div>';
}

layout_end();
