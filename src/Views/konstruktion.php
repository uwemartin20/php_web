<?php
include('layout/header.php');
?>

<!-- Page content -->
<div class="custom py-2">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- LEFT COLUMN -->
            <?php
            include('component/leistung_nav.php');
            ?>
            <!-- RIGHT COLUMN -->
            <div class="col-md-9">
                <div class="bg-light">
                    <div class="position-relative">
                        <figure class="leistung-figure mb-0">
                            <img src="/files/leistungen/konstruktion/konstruktion-banner.jpg" 
                                class="img-fluid rounded w-100" 
                                alt="Konstruktion Sonderwerkzeug">
                            <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold">
                                Konstruktion
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-justify p-3">
                        <p>Wir erarbeiten in Dienstleistung, innovative Produkte vom Konzept bis zur Serienfreigabe.</p>
                        <p>Unsere vielseitigen und komplexen Projektaufträge erhalten wir aus verschiedensten Bereichen, wie bspw.</p>
                        <ul>
                            <li>Gießereiindustrie</li>
                            <li>Kunststoffindustrie</li>
                            <li>Automobilindustrie</li>
                            <li>Konsumgüter- und Maschinenbauindustrie,</li>
                            <li>etc...</li>
                        </ul>
                    </div>
                    <div class="text-justify p-3">
                        <p>Unser Dienstleistungsangebot</p>
                        <ul>
                            <li>Konzeptionierung und Entwicklung</li>
                            <li>Freiformflächen und Solidmodellierung</li>
                            <li>Fertigungs- und Normgerechte Konstruktion von Guss- und Spritzgussbauteilen</li>
                            <li>Werkzeugkonstruktion zur Herstellung von Spritzgussartikel (1K, 2K)</li>
                            <li>Modell- und Werkzeugkonstruktion zur Herstellung von Gussbauteilen (Alu, Stahl, Guss)</li>
                            <li>Konstruktion von Lehren und Vorrichtungen<br> (Rapid-Prototyping, Kleinserien)</li>
                            <li>Bauteilentwicklung (CFK/GFK) zur Substitution von Metallbauteilen</li>
                            <li>Zeichnungserstellung</li>
                        </ul>
                        <p>Unsere CAD Systeme:</p>
                        <div class="ce_text_content">
                            <ul>
                                <li>SolidWorks</li>
                                <li>DesignX</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="konstruktion-section-head p-2 my-2">
                    <h2 class="text-light mt-2">Beispiele unserer Konstruktionen</h2>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Konstruktion von Sonderwerkzeugen</h2>
                    <p>
                        Beispiel eines taktgesteuerten Sonderwerkzeuges mit Rollenantrieb in gerenderter Darstellung.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/konstruktion/konstruktion-sonderwerkzeuge.jpg" alt="konstruktion-sonderwerkzeuge">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Konstruktion und Bauteil</h2>
                    <p>
                        Beispiel: Konstruktion einer Haube, Rendering sowie gefertigtem CFK-Werkzeug
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/konstruktion/konstruktion-bauteil.jpg" alt="konstruktion-bauteil">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Konstruktion und Werkzeugbau</h2>
                    <p>
                        Beispiel eines Kunststoffspritzgusswerkzeuges in Explosionsdarstellung
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/konstruktion/konstruktion-werkzeugbau-explosion.jpg" alt="konstruktion-werkzeug-explosion">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Sonderkonstruktion Klebelehre</h2>
                    <p>
                        Sonderkonstruktion einer Klebelehre für Kunststoffbauteile.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/konstruktion/Klebevorrichtung.jpg" alt="klebevorrichtung">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Konstruktion und Werkzeugbau</h2>
                    <p>
                        Beispiel eines Kunststoffspritzgusswerkzeuges sowie verschiedene Werkzeugkonstruktionen
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/konstruktion/konstruktion-werkzeugbau.jpg" alt="konstruktion-werkzeugbau">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('layout/footer.php');
?>