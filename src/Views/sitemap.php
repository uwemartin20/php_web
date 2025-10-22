<?php
include('layout/header.php');
?>

<!-- Page content -->
<div class="custom py-2">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- LEFT COLUMN (buttons) -->
            <div class="col-md-3">
                <div class="mod_article">
                    <div class="ce_image button-left mb-4">
                        <figure class="image_container">
                            <a href="/unternehmen/ausbildung" class="d-block">
                            <img src="/files/layout/ausbildung-button.jpg"
                                alt="Ausbildung"
                                class="img-fluid rounded shadow-sm">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- ARTICLE: Unternehmen -->
            <div class="col-md-9">
                <article id="unternehmen-content" class="mod_article">
                    <!-- Text Section -->
                    <div class="ce_text textblock2 bg-light p-4">
                        <h1 class="mb-4">Sitemap - alles auf einen Blick</h1>
                        <ul class="list-unstyled px-4">
                            <?php foreach ($sitemap as $title => $data): ?>
                                <?php if (is_array($data) && isset($data['url'])): ?>
                                    <li class="mb-2">
                                        <a href="<?= htmlspecialchars($data['url']) ?>" class="fw-bold">
                                            <?= htmlspecialchars($title) ?>
                                        </a>
                                        <?php if (!empty($data['children'])): ?>
                                            <ul class="ps-4 mt-2">
                                                <?php foreach ($data['children'] as $subTitle => $subUrl): ?>
                                                    <li class="mb-2">
                                                        <a href="<?= htmlspecialchars($subUrl) ?>">
                                                            <?= htmlspecialchars($subTitle) ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php else: ?>
                                    <li class="mb-2 fw-bold">
                                        <a href="<?= htmlspecialchars($data) ?>">
                                            <?= htmlspecialchars($title) ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
            </div>
            <!-- END ARTICLE -->

        </div>
    </div>
</div>

<?php
include('layout/footer.php');
?>
