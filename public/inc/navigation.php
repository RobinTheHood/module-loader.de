<?php
/**
 * To do:
 * add support for sub menus
 * add breadcrumbs
 */
$menuItems = [
    '' => '<img src="/images/mmlc-logo-transparent.png">',
    '/index.php' => 'Home',
    '/modules' => 'Module',
    '/download.php' => 'Download',
    [
        '/documentation.php' => 'Dokumentation',
        '/documentation.php#system-requirements' => 'Systemvoraussetzungen',
        '/documentation.php#installation' => 'Installation',
        '/documentation.php#deinstallation' => 'Deinstallation',
        '/documentation.php#general' => 'Allgemein',
        '/documentation.php#module-overview-page' => 'Modulinformationen auf der Modul-Detailseite',
        '/documentation.php#module-informations' => 'Ein neues Modul installieren',
        '/documentation.php#update-a-module' => 'Ein installiertes Modul aktualisieren / update',
        '/documentation.php#repair-a-module' => 'Ein Modul reparieren',
        '/documentation.php#uninstall-a-module' => 'Ein Modul deinstalieren',
        '/documentation.php#accessToken' => 'AccessToken',
        '/documentation.php#update-mmlc' => 'Deinen MMLC aktualisieren',
        '/documentation.php#known-issues' => 'Fehler und Patches',
    ],
    '/docs/index.php' => 'Entwickler',
];

createMenu($menuItems);


/**
 * createMenu
 */
function createMenu(array $menuItems) {
    echo '<ul>';

    foreach ($menuItems as $href => $value) {
        $li = '';

        /**
         * Determine if the item has a sub menu
         *
         * @var array $href the current item has sub items
         * @var string $href the current item has no sub items
         */
        if (is_array($value)) {
            $valueFirst = array_slice($value, 0, 1)[array_key_first($value)]; // required php 7.3
            $valueRest = array_slice($value, 1);

            echo '<li>';
            echo '<a href="' . array_key_first($value) . '">' . $valueFirst . '<i class="fas fa-chevron-down"></i></a>';
            createMenu($valueRest);
            echo '</li>';
        }
        else {
            /**
             * Make menu item active if it's current document
             */
            $menuItemsClasses = [];

            if (empty($href)) {
                $li = '<li>';
                $li = str_replace('li', 'li class="' . implode(' ', $menuItemsClasses) . '"', $li);
                $li .= $value;
                $li .= '</li>';
            }
            else {
                if ($href === $_SERVER['SCRIPT_NAME']) {
                    $menuItemsClasses[] = 'active';
                }

                $li = '<li>';
                $li = str_replace('li', 'li class="' . implode(' ', $menuItemsClasses) . '"', $li);
                $li .= '<a href="' . $href . '">' . $value . '</a>';
                $li .= '</li>';
            }
        }

        echo $li;
    }

    echo '</ul>';
}
