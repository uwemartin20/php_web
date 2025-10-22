<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title><?= $data['title'] ?? 'ZiMaTec' ?></title>
  <link rel="shortcut icon" href="#">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#002752">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

  <!-- HEADER -->
  <header class="bg-light border-bottom shadow-sm py-3">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
      
      <!-- Logo -->
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <img src="/files/layout/logo-team-zimmermann.png" alt="ZiMaTec Logo" height="60">
      </a>

      <!-- Contact info (desktop) -->
      <div class="d-none d-lg-block text-end">
        <div><strong>Telefon:</strong> 06374-913000</div>
        <div><strong>E-Mail:</strong> <a href="mailto:info@zimatec.de">info@zimatec.de</a></div>
      </div>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Navigation umschalten">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <?php
    // Define navigation items
    $navItems = [
        '' => 'Startseite',
        'unternehmen' => 'Unternehmen',
        'leistung' => 'Leistungen',
        'kunststoff' => 'Kunststoffnetzwerk',
        'kontakt' => 'Kontakt'
    ];
    ?>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 mt-lg-0">
      <div class="container">
        <div class="main-nav collapse navbar-collapse justify-content-center">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <?php foreach ($navItems as $item => $label): ?>
                <?php
                $isActive = (strtolower($label) === $page) ? 'active' : '';
                if (strtolower($label) === $page) $pagename = $item;
                $route = '/' . ($item ? $item . '/' : '');
                ?>
                <li class="nav-item px-4">
                <a class="nav-link <?= $isActive ?>" href="<?= $route ?>"><?= $label ?></a>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="bg-main">
    <div class="container py-5 ">

        <!-- Breadcrumb -->
        <?php if (!empty($page) && strtolower($page) !== 'startseite'): ?>
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb p-3">
                    <li class="breadcrumb-item">
                        <a href="/" class="text-dark text-decoration-none">Startseite</a>
                    </li>

                    <?php if (!empty($subpage)): ?>
                        <li class="breadcrumb-item">
                            <a href="/<?= urlencode(strtolower((isset($pagename) ? $pagename : $page))) ?>" class="text-dark text-decoration-none">
                                <?= htmlspecialchars(ucfirst($page)) ?>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= htmlspecialchars(ucfirst(str_replace('_', ' ', $subpage))) ?>
                        </li>
                    <?php else: ?>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= htmlspecialchars(ucfirst($page)) ?>
                        </li>
                    <?php endif; ?>
                </ol>
            </nav>
<?php endif; ?>
