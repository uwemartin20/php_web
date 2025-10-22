<?php
include('layout/header.php');
?>

<!-- Page content -->
<div class="custom py-2">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- LEFT COLUMN -->
            <div class="maps-column col-md-6">
                <h1 class="pb-3">Anfahrt</h1>
                <div class="ratio ratio-16x9 shadow-sm border rounded">
                    <iframe
                        src="https://www.google.com/maps?q=ZiMaTec%20GmbH,%20Auf%20dem%20Immel%209c,%2067685%20Weilerbach&output=embed"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="height: 500px;"
                    ></iframe>
                </div>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="col-md-6">
                <h1>Kommunikation</h1>
                <div class="container my-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                        <h4 class="card-title mb-3">Kontakt</h4>

                        <p class="mb-2 fw-semibold">ZiMaTec GmbH</p>
                        <p class="mb-3">
                            Auf dem Immel 9c<br>
                            67685 Weilerbach
                        </p>

                        <div class="row mb-2">
                            <div class="col-4 col-md-3 fw-semibold">Telefon:</div>
                            <div class="col-8 col-md-9">
                            <a href="tel:+496374913000" class="text-decoration-none text-dark">06374 - 91 30 00</a>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4 col-md-3 fw-semibold">Telefax:</div>
                            <div class="col-8 col-md-9">06374 - 91 30 13</div>
                        </div>

                        <div class="row">
                            <div class="col-4 col-md-3 fw-semibold">E-Mail:</div>
                            <div class="col-8 col-md-9">
                            <a href="mailto:info@zimatec.de" class="text-decoration-none">info@zimatec.de</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>


<?php
include('layout/footer.php');
?>