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
        <div class="pageWrapper">
            <header>
                <?php require_once 'inc/pageTitle.php'; ?>

                <nav>
                    <?php require_once 'inc/navigation.php'; ?>
                </nav>
            </header>

            <?php require_once 'inc/beta_info.php'; ?>

            <main>
                <section>
                    <h2>MMLC Installer Download</h2>

                    <form class="download" action="" method="post">
                        <input type="hidden" name="action" value="download">

                        <fieldset>
                            <label for="user">Username</label>
                            <input type="text" name="user" value="">
                        </fieldset>

                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" value="">
                        </fieldset>

                        <button type="submit">Start download</button>
                    </form>
                </section>

                <section>
                    <p>Nach der Installation solltest du folgende Seite sehen:</p>
                    <img src="/images/MMLC_Anmeldung.png" class="imagePreview" alt="Am MMLC anmelden">
                </section>
            </main>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
