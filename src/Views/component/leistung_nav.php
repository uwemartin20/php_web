<?php
$leistungNav = [
    'Konstruktion' => 'konstruktion',
    '5-Achs-Fraesbearbeitung' => 'fraesbearbeitung',
    'Rapid Prototyping' => 'rapid_prototyping',
    'Mobile Messtechnik' => 'mobile_messtechnik',
    'Reverse Engineering' => 'reverse_engineering'
];
?>

<div class="col-md-3">
  <nav class="mod_navigation block" aria-label="Leistungen Navigation">
    <ul class="nav flex-column leistung-nav" role="menubar">
      <?php foreach ($leistungNav as $label => $slug): ?>
        <?php 
            if(isset($subpage)):
                $isActive = ($subpage === $slug) ? 'active bg-secondary text-white' : 'text-light';
            else:
                $isActive = 'text-light';
            endif;
            $href = "/leistung/$slug/";
        ?>
        <li class="nav-item mx-2 w-100">
          <a href="<?= $href ?>" 
             class="nav-link fw-semibold py-3 <?= $isActive ?>" 
             role="menuitem">
            <?= htmlspecialchars($label) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</div>