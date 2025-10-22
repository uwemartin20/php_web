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
                            <img src="/files/leistungen/rapid-prototyping/rapid-prototyping-banner.jpg" 
                                class="img-fluid rounded w-100" 
                                alt="rapid-prototyping-banner">
                            <figcaption class="caption position-absolute start-0 text-white px-3 py-2 text-uppercase fw-semibold">
                                Rapid Prototyping
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-justify p-3">
                        <p>Immer kürzer werdende Produktentwicklungszeiten aus allen Bereichen, erfordern</p>
                        <ul>
                            <li>wirtschaftliche Lösungen,</li>
                            <li>seriennahe Materialeigenschaften,</li>
                            <li>schnelle Umsetzung und Lieferung,</li>
                            <li>kostengünstige Bauweisen,</li>
                            <li>hohe Flexibilität,</li>
                            <li>hohe Passgenauigkeiten,</li>
                        </ul>
                        <p>mit unserer Dienstleistung helfen wir Ihnen das für Sie am besten geeignetste Verfahren zu finden.</p>
                        <p>Wir garantieren, anwendungsorientierte gefertigte Bauteile innerhalb kürzester Zeit unter Einhaltung gestellter Vorgaben zu liefern.</p>
                        <p>Möglich sind Losgrößen ab 1 Stück bis Kleinserien. Kontaktieren Sie uns. Gerne beraten wir Sie unverbindlich und fachgerecht.</p>  
                    </div>
                </div>
                <div class="konstruktion-section-head p-2 my-2">
                    <h2 class="text-light mt-2">Beispiele Rapid Prototyping</h2>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">DMLS Bauteil (Direct Metal Laser Sintering)</h2>
                    <p>
                        Beispiel eines Lüfterrades-aus DMLS-Verfahren. Das Bauteil besteht aus Aluminium (AlSi10Mg) und kann direkt für Versuchszwecke eingesetzt werden.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/RapidPrototyping-DMLS-Alu-L.jpg" alt="rapid-prototyping-dmls">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">SLS Bauteil (Selektives Laser Sintern)</h2>
                    <p>
                        Beispiel von Modellen aus SLS-Verfahren. Vorteil: Belastbares und für Funktionsversuche gut geeignetes Material (PA, PS).
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/rapid-prototyping-sls-bauteil.jpg" alt="rapid-prototyping-sls-bauteil">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">FDM Bauteil (Fused Deposition Modeling)</h2>
                    <p>
                        Beispiel von Lüfterrädern aus FDM-Verfahren. Vorteil: Simulierter Originalwerkstoff  in ABS und PP möglich. Verwendbar für realitätsnahe Bauteil- und Prüfversuche um Rückschlüsse für Serie zu erhalten.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/rapid-prototyping-fdm-bauteil.jpg" alt="rapid-prototyping-fdm-bauteil">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">DMLS Bauteil (Direct Metal Sintering)</h2>
                    <p>
                        Beispiel einer aus DMLS-Verfahren gefertigten Metallform für Spritzguss-Bauteile. Vorteil: Originalwerkstoffe sind direkt einsetzbar. Somit sind Bauteil- und Prüfversuche für Rückschlüsse zur Serie möglich.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/rapid-prototyping-dmls-bauteil.jpg" alt="rapid-prototyping-dmls-bauteil">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Vakuumgussbauteil (Vaku)</h2>
                    <p>
                        Beispiel eines  aus Silikonform unter Vakuum hergestellten Bauteiles. Vorteil: Hochgenaue Bauteilabgüsse durch Mischung von PU-Harz-Rezepturen welche annähernde Eigenschaften zu  Originalwerkstoffen abbilden lassen. Somit sind Bauteil- und Prüfversuche für Rückschlüsse zur Serie möglich.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/rapid-prototyping-vakuumguss-bauteil.jpg" alt="rapid-prototyping-vakuumguss">
                    </figure>
                </div>
                <div class="mod_article konstruktion bg-light p-2 mt-2">
                    <h2 class="font-weight-bold pt-4">Sandprint-Verfahren (SPV)</h2>
                    <p>
                        Die Möglichkeiten des Sandprint-Verfahrens lassen alle Freiheitsgrenzen wahr werden. Die direkte Herstellung von Gussformen aus Sand ermöglichen Ihnen enorme Zeit- und Kostenvorteile bei der Gussteilherstellung. Gerne entwicklen wir auch für Sie Formen- oder Bauteile zur Gussbauteilherstellung.
                    </p>
                    <figure class="section-image">
                        <img class="w-100" src="/files/leistungen/rapid-prototyping/rapid-prototyping-sandprint-verfahren.jpg" alt="rapid-prototyping-sandprint">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('layout/footer.php');
?>