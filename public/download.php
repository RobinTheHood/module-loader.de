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
        <header>
            <nav>
                <?php require_once 'inc/navigation.php'; ?>
            </nav>
        </header>

        <div class="pageWrapper">
            <div class="content">

                <?php //require_once 'inc/beta_info.php'; ?>

                <main>
                    <section>
                        <h2>MMLC Installer Download</h2>

                        <form class="" action="" method="post">
                            <input type="hidden" name="action" value="download">
                            <input type="hidden" name="user" value="beta-user">
                            <input type="hidden" name="password" value="beta-password">

                            <button type="submit">Download mmlc_installer.php (Version 0.6.0 | 11 kB)</button>
                            <small>Info: Die mmlc_installer.php Datei Version 0.6.0 kann alle MMLC Versionen ab 1.14.0 installieren. Zur <a href="/documentation.php#system-requirements">Installationsanleitung</a>.</small>
                        </form>
                    </section>

                    <section>
                        <p>Nach der Installation solltest du folgende Seite sehen:</p>
                        <img src="/images/MMLC_Anmeldung.png" class="imagePreview" alt="Am MMLC anmelden">
                    </section>
                </main>
            </div>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
