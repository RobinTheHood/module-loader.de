<?php
require_once '../src/functions.php';

if (checkDownloadAccess()) {
    startDownload();
}
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php
        require_once 'inc/head.php';
        ?>

        <title>Download - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="pageWrapper">
            <header>
                <?php
                require_once 'inc/pageTitle.php';
                ?>

                <nav>
                    <?php
                    require_once 'inc/navigation.php';
                    ?>
                </nav>
            </header>

            <aside>
                <div class="notice danger">
                    <p><strong>Hinweis:</strong> Aktuell können nur <strong>Beta-Tester</strong> den MMLC herunterladen. Wenn du auch Beta-Tester werden möchtest freuen wir uns über eine Nachricht unter <a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc DE/EN</a> oder unter <a href="mailto:info@module-loader.de">info@module-loader.de</a>.</p>
                </div>
            </aside>

            <main>
                <section>
                    <form class="download" action="" method="post">
                        <h2>MMLC Installer Download</h2>

                        <input type="hidden" name="action" value="download">

                        <label for="user">Username</label><br>
                        <input type="text" name="user" value=""><br><br>

                        <label for="password">Password</label><br>
                        <input type="password" name="password" value=""><br><br>

                        <button type="submit">Start download</button>
                    </form>
                </section>
            </main>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
