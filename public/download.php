<?php
require_once '../src/functions.php';

if (checkDownloadAccess()) {
    startDownload();
}
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once 'inc/head.php'; ?>

        <title>Download - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-download">
            <header>
                <?php require_once 'inc/navigation2.php'; ?>
            </header>

            <div class="content">
                <main>
                    <p>
                        <h2>MMLC Installer Download</h2>

                        <form class="" action="" method="post">
                            <input type="hidden" name="action" value="download">
                            <input type="hidden" name="user" value="beta-user">
                            <input type="hidden" name="password" value="beta-password">

                            <button type="submit">Download mmlc_installer.php (Version 0.6.0 | 11 kB)</button>
                            <small>Info: Die mmlc_installer.php Datei Version 0.6.0 kann alle MMLC Versionen ab 1.14.0 installieren. Zur <a href="/documentation.php#system-requirements">Installationsanleitung</a>.</small>
                        </form>
                    </p>

                    <p>
                        <p>Nach der Installation solltest du folgende Seite sehen:</p>
                        <img src="/images/MMLC_Anmeldung.png" class="imagePreview" alt="Am MMLC anmelden">
                    </p>
                </main>
            </div>

            <footer>
                <?php include '../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
