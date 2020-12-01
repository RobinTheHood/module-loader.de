<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>Verzeichnisstruktur - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-docs-module-structure">
            <header>
                    <?php require_once '../../views/navigation.php'; ?>
            </header>

            <div class="content">
                <aside>
                    <nav>
                        <h3 id="content">
                            Inhalt
                            <a href="#content" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li><a href="#structure">...</a></li>
                        </ul>
                    </nav>
                </aside>

                <main>
                    <?php //require_once '../inc/notice_work_in_progress.php'; ?>

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

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
