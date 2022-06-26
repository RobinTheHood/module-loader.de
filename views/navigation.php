<?php
    $menuEntries = [
        '/modules' => 'Module',
        '/download.php' => 'Download',
        '/documentation.php' => 'Dokumentation',
        '/docs/index.php' => 'Entwickler',
    ];

    $html = '';
    foreach ($menuEntries as $scriptName => $menuName) {
        if ($_SERVER['SCRIPT_NAME'] === $scriptName) {
            $html .= '<li class="active"><a href="' . $scriptName . '">' . $menuName . '</a></li>';
        } else {
            $html .= '<li><a href="' . $scriptName . '">' . $menuName . '</a></li>';
        }
    }
?>

<nav>
    <div class="logo">
        <a href="/index.php">
            <img src="/images/mmlc-logo-transparent.png">
            MMLC
        </a>
    </div>

    <ul class="nav-links">
        <?php echo $html; ?>
    </ul>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>