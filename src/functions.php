<?php

function loadExample($path)
{
    return loadCodeBlock(__DIR__ . '/../examples/' . $path);
}

function loadExample2(string $path, string $languageCode): string
{
    return loadCodeBlock2(__DIR__ . '/../examples/' . $path, $languageCode);
}

function loadCodeBlock($path)
{
    return '<code class="block">' . htmlentities(file_get_contents($path)) . '</code>';
}

function loadCodeBlock2(string $path, string $languageCode): string
{
    return '<pre><code class="block language-' . $languageCode . '">' . htmlentities(file_get_contents($path)) . '</code></pre>';
}

function startDownload()
{
    $fileName = 'mmlc_installer.php';

    header("Content-Type: application/x-httpd-php");
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    readfile(__DIR__ . '/../downloads/' . $fileName );
    exit();
}

function checkDownloadAccess()
{
    require '../config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($configuration['users'] as $userName => $password) {
            if ($_POST['user'] == '') {
                continue;
            }

            if ($_POST['password'] == '') {
                continue;
            }

            if ($_POST['user'] != $userName) {
                continue;
            }

            if ($_POST['password'] != $password) {
                continue;
            }

            return true;
        }
    }

    return false;
}
