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
                <div>

                    <div class="row">

                        <!-- Service Card 1 -->
                        <div class="col-md-6 pb-4 mx-auto">
                            <a href="/leistung/konstruktion/" class="text-decoration-none position-relative d-block text-center">
                                <figure class="leistung-figure mb-0">
                                <img src="/files/leistungen/konstruktion/konstruktion-button.jpg" 
                                    class="img-fluid rounded" 
                                    alt="Konstruktion Sonderwerkzeug" width="411" height="274">
                                <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold ms-4">
                                    Konstruktion
                                </figcaption>
                                </figure>
                            </a>
                        </div>

                        <!-- Service Card 2 -->
                        <div class="col-md-6 mx-auto">
                            <a href="/leistung/rapid_prototyping/" class="text-decoration-none position-relative d-block text-center">
                                <figure class="leistung-figure mb-0">
                                <img src="/files/leistungen/rapid-prototyping/rapid-prototyping-button.jpg" 
                                    class="img-fluid rounded" 
                                    alt="Rapid-Prototyping Gussgehäuse" width="411" height="274">
                                <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold ms-4">
                                    Rapid Prototyping
                                </figcaption>
                                </figure>
                            </a>
                        </div>

                        <!-- Service Card 3 -->
                        <div class="col-md-6 mx-auto">
                            <a href="/leistung/mobile_messtechnik/" class="text-decoration-none position-relative d-block text-center">
                                <figure class="leistung-figure mb-0">
                                <img src="/files/leistungen/mobile-messtechnik/mobile-messtechnik-button.jpg" 
                                    class="img-fluid rounded" 
                                    alt="Optische Vermessung GOM" width="411" height="274">
                                <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold ms-4">
                                    Mobile Messtechnik
                                </figcaption>
                                </figure>
                            </a>
                        </div>

                        <!-- Service Card 4 -->
                        <div class="col-md-6 mx-auto">
                        <a href="/leistung/reverse_engineering/" class="text-decoration-none position-relative d-block text-center">
                            <figure class="leistung-figure mb-0">
                            <img src="/files/leistungen/reverse-engineering/reverse-engineering-button.jpg" 
                                class="img-fluid rounded" 
                                alt="Reverse-Engineering Turbinenrad" width="411" height="274">
                            <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold ms-4">
                                Reverse Engineering
                            </figcaption>
                            </figure>
                        </a>
                        </div>

                    </div>

                    <!-- Clearfix not needed with Bootstrap grid -->

                    <div class="ce_text textblock mt-4 bg-light p-4">

                        <h1>Leistungen</h1>

                        <p class="text-justify">
                        Unsere Kernkompetenzen sind in 4 Kernbereiche (Konstruktion, Rapid-Protoyping, Mobile Messtechnik, Reverse-Enginieering) aufgeteilt, von denen Sie jeden eigenständig aber auch in Kombination in Anspruch nehmen können.
                        </p>

                        <ul class="text-justify">
                        <li>Sie suchen einen Dienstleistungspartner zu Konstruktionsarbeiten für Artikel-, Bauteil-, oder Werkzeugkonstruktionen?</li>
                        <li>Oder benötigen einen Funktionsprototypen aus 3D-Printing-Verfahren?</li>
                        <li>Vielleicht aber eine Kleinserie an Kunststoff- oder Aluminiumbauteilen welche direkt für Sie verbaubar sind?</li>
                        <li>Haben eine verschlissene Form oder ein von Hand angepasstes Werkzeug, möchten diese auf ihre Geometrieabweichung überprüfen oder gar an ihre CAD-Daten anpassen?</li>
                        <li>Sie benötigen einen Erstmusterprüfbericht für Ihre eigene Fertigung oder vom Lieferanten gefertigten Bauteile?</li>
                        <li>Vielleicht haben Sie auch ein selbst modelliertes Bauteil, welches Sie vervielfältigen möchten aber keine Möglichkeit zur Datengenerierung?</li>
                        </ul>

                        <p class="text-justify">
                        Zu all diesen Frage- und Problemstellungen stehen wir Ihnen gerne kompetent mit jeder Menge an Knowhow zur Verfügung. Gerne schaffen wir mit Ihnen zusammen neue Konzepte und Lösungen rund um Ihre Aufgaben- und Themenstellungen.
                        </p>

                        <p class="text-justify">
                        Welchen der für Sie zur Verfügung stehenden Auswahlbereiche Sie wählen oder für Sie am interessantesten erscheint, entscheiden Sie. Wir sind sicher auf den kommenden Seiten ein innovatives und spannendes Produkt- und Leistungsspektrum anbieten zu können, welches bestimmt keine Wünsche offen lässt.
                        </p>

                        <p class="text-justify">
                        Falls wir dennoch etwas vergessen haben und Sie in unserer Leistungsbeschreibung etwas vermissen, kontaktieren Sie uns einfach und teilen uns mit, was wir für Sie tun können. Wir sind sicher Ihnen weiterhelfen zu können um eine gute Lösung zu finden.
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