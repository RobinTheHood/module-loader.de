<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lokale Entwicklungsumgebung - Developer - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MMLC - Modified Module Loader Client</h1>
            <a href="/docs/index.php">zurück zur Themenübersicht</a>

            <div class="notice danger">
                <strong>Hinweis:</strong> Diese Dokumentation ist noch nicht vollständig.
            </div>

            <h2>Lokale Entwicklungsumgebung einrichten</h2>

            <div class="notice info">
                <strong>Info:</strong> Falls du dir bereits eine lokale Entwicklungsumgebung eingerichtet hast und lokal einen modified eCommerce Shop (>= 2.0.3.0) am Laufen hast, kannst du diesen Abschnitt überspringen und mit dem Abschnitt „MMLC installieren“ weiter machen.</a>.

                    <!-- oder die URL <code class="break">http://YOUR_DOMAIN/ModifiedModuleLoaderClient/?action=createModule&vendorPrefix=mc&vendorName=mycompany&moduleName=my-first-module</code> aufrufen, wenn du im MMLC eingeloggt bist. !-->
            </div>

            <p>Für das Erstellen von Modulen solltest du dir eine lokale Entwicklungsumgebung einrichten, das bedeutet, dass du erst einmal keinen externen Server benötigst, auf dem du ein modified eCommerce Shop installieren musst. Eine lokale Entwicklungsumgebung hat viele Vorteile und erleichtert dir deutlich die Arbeit. (TODO: Einige Gründe aufzählen, wieso eine lokale Entwicklungsumgebung besser ist.)

            <h4>Lokale Entwicklungsumgebung unter Mac (MAMP)</h4>

            <p>Wenn du einen Mac verwendest, um deine Module zu progammieren, empfehlen wir dir die Software MAMP als lokalen Apache/PHP und MySQL Server zu verwenden.</p>

            <ul>
                <li>Downloade & installiere dir MAMP von <a href="https://www.mamp.info/de/downloads/">https://www.mamp.info/de/downloads/</a></li>
            </ul>

            <p>Starte MAMP und stelle in den Einstellungen unter dem Tab „Ports“ den <code>Apache-Port auf 80</code> und den <code>MySQL-Port auf 3306</code>.</p>

            <!-- To do: Schatten im Bild entfernen -->
            <!-- Anschließend ersetzen: <img src="/images/MAMP_Ports.png" class="imagePreview"> -->
            <img src="/images/MAMP_Ports.png" class="imagePreview">

            <p>Unter dem Tab „PHP“ solltest du die neuste Version von PHP auswählen, die dir zur Auswahl steht. Hier solltest du mindestens PHP 7.2 auswählen.</p>

            <p>Unter dem Tab „Web-Server“ musst du jetzt das Root-Verzeichnis festlegen, in dem du deinen Shop installierst. Wir wählen hier für dieses Tutorial ein neues Verzeichnis das wir mit dem Namen <code>modified-shop</code> angelegt haben. (der vollständige Pfad lautet dann z. B. <code>/Users/Robin/Documents/modified-shop</code>)</p>

            <p><i>Dokumentation in Arbeit ...</i></p>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>