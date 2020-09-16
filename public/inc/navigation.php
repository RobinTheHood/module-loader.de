<?php
    /**
     * To do:
     * add support for sub menus
     * add breadcrumbs
     */

    $menuItems = [
        '/index.php' => 'Home',
        '/modules' => 'Module',
        '/download.php' => 'Download',
        '/documentation.php' => 'Dokumentation',
        '/docs/index.php' => 'Entwickler',
    ];
?>

<ul>
    <li><img src="/images/mmlc-logo-transparent.png"></li>

    <?php
        foreach ($menuItems as $href => $value) {
            $menuItemsClasses = [];

            /**
             * Make menu item active if it's current document
             */
            if ($href === $_SERVER['SCRIPT_NAME']) {
                $menuItemsClasses[] = 'active';
            }

            echo '<li class="' . implode(' ', $menuItemsClasses) . '"><a href="' . $href . '">' . $value . '</a></li>';
        }
    ?>
</ul>
