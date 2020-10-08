<?php
/**
 * To do:
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

function ourArrayKeyFirst(array $arr) {
    foreach($arr as $key => $unused) {
        return $key;
    }
    return NULL;
}

/**
 * createMenu
 */
function createMenu(array $menuItems) {
    echo '<ul>';

    foreach ($menuItems as $href => $value) {
        $li = '';
        $liClass = [];

        /**
         * Determine if the item has a sub menu
         *
         * @var array $href the current item has sub items
         * @var string $href the current item has no sub items
         */
        if (is_array($value)) {
            $valueHref = ourArrayKeyFirst($value); // if we use 7.3, than we kann use 'array_key_first(...)'
            $valueFirst = array_slice($value, 0, 1)[$valueHref]; // required php 7.3
            $valueRest = array_slice($value, 1);

            if ($valueHref === $_SERVER['SCRIPT_NAME']) {
                $liClass[] = 'active';
            }

            echo '<li class="' . implode(' ', $liClass) . '">';
            echo '<a href="' . $valueHref . '">' . $valueFirst . '<i class="fas fa-chevron-down"></i></a>';
            createMenu($valueRest);
            echo '</li>';
        } else {
            /**
             * Make menu item active if it's current document
             */
            $li = '<li>';

            if (empty($href)) {
                $li .= $value;
            }
            else {
                if ($href === $_SERVER['SCRIPT_NAME']) {
                    $liClass[] = 'active';
                }

                $li .= '<a href="' . $href . '">' . $value . '</a>';
            }

            $li = str_replace('<li>', '<li class="' . implode(' ', $liClass) . '">', $li);
            $li .= '</li>';
        }

        echo $li;
    }

    echo '</ul>';
}
