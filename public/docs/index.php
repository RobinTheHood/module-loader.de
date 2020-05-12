<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Developer - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MMLC - Modified Module Loader Client</h1>
            <a href="/">zurück zur Startseite</a>

            <div class="notice danger">
                <strong>Hinweis:</strong> Diese Dokumentation ist noch nicht vollständig.
            </div>

            <h2>Dokumentation für Modul Entwickler</h2>

            <p>Mit dem MMLC kannst du nicht nur Module leichter installieren, sondern der MMLC kann dir auch deutlich die Arbeit dabei erleichtern, neue Module für die modified eCommerce Shopsoftware zu entwickeln.</p>

            <!-- <img src="../images/Intro_Developer.png"> -->

            <h3>HowTos</h3>
            <ul>
                <li><a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a></li>
                <li><a href="/docs/local_dev_environment.php">Tutorial: Lokale Entwicklungsumgebung einrichten</a></li>
                <li><a href="/docs/create_module_script.php">Tutorial: Modul erstellen mit createModule.sh</a></li>
                <li><a href="#">Tutorial: Dein erstes Modul veröffentlichen</a></li>
            </ul>

            <h3>References and internals</h3>
            <ul>
                <li><a href="/docs/module_structure.php">Die Modul Verzeichnisstruktur</a></li>
                <li><a href="/docs/moduleinfo.php">Die moduleinfo.json Datei</a></li>
                <li><a href="/docs/naming_convention.php">Naming Convention</a></li>
            </ul>

            <h2>Dokumentation für MMLC Entwickler</h2>

            <p>
                Wir freuen uns sehr, dass du dich für den MMLC interessierst und Lust hast dich am MMLC zu beteiligen. Es gibt viele Dinge zu denen du hier beitragen kannst. Sei es die Dokumentation zu erweitern oder den Programmcode zu verbessern und natürlich all die Dinge, die hier noch nicht aufgeführt sind. Wir freuen uns auch über kleine Beiträge.
            </p>

            <p>
                Wenn du uns helfen möchtest, wird das bald möglich sein. Gerade sind wir noch dabei das Projekt für GitHub vorzubereiten, damit es dort bald als Open-Source-Projekt veröffentlicht werden kann. Hab' bitte noch etwas Geduld. In der Zwischenzeit kannst du uns bereits eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a> senden.
            </p>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
