<?php
include('layout/header.php');
?>


<!-- BANNERS / SLIDESHOW -->
<div id="bannerCarousel" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
        <?php foreach ($banners as $index => $src): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <img src="<?= $src ?>" class="d-block w-100" alt="Banner <?= $index + 1 ?>" style="max-height: 500px; object-fit: cover;">
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- 4-bauteil leistungen -->
<div class="mod_article block startseite">
    <div class="row g-3 startseite-subnav">
        <div class="col-6 col-md-3 subnav position-relative">
        <figure class="image_container">
            <a href="/leistung/konstruktion/" class="d-block text-decoration-none">
            <img src="/files/leistungen/konstruktion/konstruktion-button.jpg" alt="Konstruktion" class="img-fluid">
            <figcaption class="caption">Konstruktion</figcaption>
            </a>
        </figure>
        </div>

        <div class="col-6 col-md-3 subnav position-relative">
        <figure class="image_container">
            <a href="/leistung/rapid-prototyping/" class="d-block text-decoration-none">
            <img src="/files/leistungen/rapid-prototyping/rapid-prototyping-button.jpg" alt="Rapid Prototyping" class="img-fluid">
            <figcaption class="caption">Rapid Prototyping</figcaption>
            </a>
        </figure>
        </div>

        <div class="col-6 col-md-3 subnav position-relative">
        <figure class="image_container">
            <a href="/leistung/mobile-messtechnik" class="d-block text-decoration-none">
            <img src="/files/leistungen/mobile-messtechnik/mobile-messtechnik-button.jpg" alt="Mobile Messtechnik" class="img-fluid">
            <figcaption class="caption">Mobile Messtechnik</figcaption>
            </a>
        </figure>
        </div>

        <div class="col-6 col-md-3 subnav position-relative">
        <figure class="image_container">
            <a href="/leistung/reverse-engineering/" class="d-block text-decoration-none">
            <img src="/files/leistungen/reverse-engineering/Kotfluegel_GTO_Banner-2.gif" alt="Rev Engineering" class="img-fluid">
            <figcaption class="caption">Rev Engineering</figcaption>
            </a>
        </figure>
        </div>

    </div>
</div>

<!-- unternehmen vorstellung -->
<div class="mod_article last block py-5">
    <div class="container">
        <div class="row g-4">

        <!-- LEFT COLUMN: Text -->
        <div class="col-md-9 bg-light p-4">
            <div class="ce_text textblock">
            <h1 class="mb-4">Willkommen bei der ZiMaTec GmbH</h1>

            <p class="text-justify">
                Als Spezialist für die Ausarbeitung technischer Lösungen uns gestellter Problemszenarien, bieten wir
                eine durchgängige Dienstleistung unter Einsatz modernster Systeme der Messtechnik sowie CAD-Systemen, an.
                Hierbei setzen unsere kreativen Mitarbeiter die langjährige Erfahrung aus zahlreichen Projekten zur
                zielführenden Lösung ein.
            </p>

            <p class="text-justify">
                Dies kann bspw. ein akut auftretendes Problem während der Fertigung sein, der Ausfall eines Mitarbeiters
                ihrer Konstruktionsabteilung, oder kurzzeitig fehlende Kapazitäten bei Auftragsüberhängen. Für Sie
                erarbeiten wir für viele Problemstellungen eine zielführende Lösung.
            </p>

            <p class="text-justify">
                Egal ob Fertigungsproblem oder Erstellung einer Konstruktion für Bauteile und Werkzeuge aus Guss- oder
                Spritzgussverfahren. Oder die optische flächenhafte Vermessung komplizierter Objekte zur Erstbemusterung
                oder Ermittlung der Geometrie- und Maßhaltigkeit. Wir haben für alles eine Idee - Lösung.
            </p>

            <p class="text-justify">
                Sie möchten uns kennenlernen? Nehmen Sie mit uns Kontakt auf und vereinbaren ein für Sie vollkommen
                unverbindliches Beratungsgespräch. Wir freuen uns über Ihren Anruf.
            </p>
            </div>
        </div>

        <!-- RIGHT COLUMN: News -->
        <div class="col-md-3">
            <div class="mod_newslist">

            <div class="layout_short block mb-4 p-4 bg-light">
                <h2 class="h5">
                <a href="/news/" class="text-dark text-decoration-none text-primary fw-bold" title="Den Artikel lesen: Werkzeugabweichung">
                    Werkzeugabweichung
                </a>
                </h2>
                <div class="teaser mb-2">
                <p>
                    Wussten Sie schon,<br>
                    dass es möglich ist, anhand der Werkstückabweichungen eine korrigierte Werkzeugkontur zu errechnen.
                </p>
                </div>
                <p class="more mb-0">
                <a href="/news/" class="text-decoration-none">Weiterlesen …</a>
                </p>
            </div>

            <div class="layout_short block p-4 bg-light">
                <h2 class="h5">
                <a href="/news/" class="text-dark text-decoration-none text-primary fw-bold" title="Den Artikel lesen: Werkzeugverschleiss">
                    Werkzeugverschleiss
                </a>
                </h2>
                <div class="teaser mb-2">
                <p>
                    Wussten Sie schon,<br>
                    dass es möglich ist, mit unserem System Werkzeugverschleiss messbar zu machen, um innerhalb kürzester
                    Zeit Änderungen umzusetzen sowie die Standzeiten zu reduzieren?
                </p>
                </div>
                <p class="more mb-0">
                <a href="/news/" class="text-decoration-none">Weiterlesen …</a>
                </p>
            </div>

            </div>
        </div>

        </div>
    </div>
</div>

<?php
include('layout/footer.php');
?>