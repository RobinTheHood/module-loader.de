<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Verzeichnisstruktur - Developer - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <?php require_once '../inc/navigation.php'; ?>
            </nav>
        </header>

        <div class="pageWrapper">
            <div class="content">
                <?php require_once '../inc/notice_work_in_progress.php'; ?>

                <main>
                    <section>
                        <h2>Verzeichnistruktur eines Moduls</h2>

                        <ul>
                            <li>moduleinfo.json: </li>
                            <li>modulehash.json: </li>
                            <li>changelog.md: </li>
                            <li>icon.png / icon.jpeg: </li>
                            <li>new_files: </li>
                            <li>docs/install.md: </li>
                            <li>docs/usage.md: </li>
                            <li>images: </li>
                        </ul>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>
                    </section>
                </main>
            </div>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
