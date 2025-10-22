<?php
include('layout/header.php');
?>

<!-- Page content -->
<div class="custom py-2">
    <div class="container">
        <!-- Page Title -->
        <div class="mb-5">
            <h1 class="display-5 fw-bold news-title">Aktuelle Neuigkeiten</h1>
        </div>

        <?php foreach ($news as $new) : ?>
            <!-- News -->
            <div class="card mb-5 shadow-sm border-0">
                <div class="row g-0 align-items-center">
                <div class="col-md-3">
                    <img src="<?= ($new['image'] !== '' ? $new['image'] : '/files/news/placeholder.jpg'); ?>" class="img-fluid rounded-start" alt="Featured News">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                    <h2 class="card-title"><?= $new['title'] ?></h2>
                    <p class="card-text text-muted small mb-2">am <?= $new['date']->format('d.m.Y'); ?></p>
                    <p class="card-text"><?= $new['description'] ?></p>
                    <!-- <a href="/news/neue-messtechnik/" class="btn btn-primary btn-sm">Weiterlesen</a> -->
                    </div>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php
include('layout/footer.php');
?>