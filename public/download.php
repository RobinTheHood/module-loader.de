<?php
require_once '../src/functions.php';

if (checkDownloadAccess()) {
    startDownload();
}
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../views/head.php'; ?>

        <title>Download - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-download">
            <header>
                <?php require_once '../views/navigation.php'; ?>
            </header>

            <div class="content">
                <main>
                    <p>
                        <h2>MMLC Installer Download</h2>

                        <form class="" action="" method="post">
                            <input type="hidden" name="action" value="download">
                            <input type="hidden" name="user" value="beta-user">
                            <input type="hidden" name="password" value="beta-password">

                            <button type="submit">Download (11 kB)</button>
                            <small style="margin-top: 5px; text-align: center; display: block;">Voraussetzungen: PHP >=7.4, modified 2.0.3.0 bis 3.0.0 - Zur <a href="/documentation.php#system-requirements">Installationsanleitung</a>.</small>
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
