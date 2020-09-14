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
    <?php
        foreach ($menuItems as $href => $value) {
            $menuItemsClasses = array(
                'button',
            );

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