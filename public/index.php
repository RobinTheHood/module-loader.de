<!DOCTYPE html>
<html lang="de" dir="ltr">
    <!-- Na, schaust du dir den HTML-Code an? Viel Spaß damit. -->
    <!-- Wenn du programmieren kannst und Module mit dem MMLC programmieren -->
    <!-- möchtest, dann melde dich bei uns. -->
    <head>
        <meta charset="utf-8">
        <title>MMLC - Modified Module Loader Client</title>
        <meta name="description" content="Der MMLC ist eine Software zur Verwalltung von Modulen in deinem modified eCommerce Shop.">
        <meta name="author" content="Robin Wieschendorf">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <div style="text-align: center">
                <h1>MMLC - Modified Module Loader Client</h1>
                <strong>Latest: 1.14.0</strong><br>
            </div>

            <div class="notice danger">
                <strong>Achtung:</strong> Der MMLC befindet sich noch in der <strong>closed beta</strong> Testphase. Diese Webseite bietet dir bereits jetzt erste Einblicke. Ausgewählte <strong>Beta-Tester</strong> bekommen die Möglichkeit das System auszuprobieren. Solltest du Fehler entdecken oder dich für den MMLC interessieren, würden wir uns über eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a> freuen.
            </div>

            <a class="button" href="/download.php">
                Download
            </a>

            <a class="button" href="/documentation.php">
                Dokumentation
            </a>

            <a class="button" href="/docs/index.php">
                Entwickler
            </a>


            <h2>Der MMLC ist eine Software zur Verwaltung von Modulen in deinem modified eCommerce Shop.</h2>
            <br>

            <p>
                Installiere dir <strong>kostenlos</strong> den MMLC und entdecke ein breites Angebot an Modulen. Mit dem MMLC kannst du Module für die modified eCommerce Shopsoftware kinderleicht mit einem Klick installieren und wieder deinstallieren.
            </p>
                
            <p>
                Du bist Entwickler? Auch für Entwickler wird das <a href="/docs/index.php">Entwickeln neuer Module mit dem MMLC</a> einfacher und mehr Spaß machen.
            </p>
            <br>
            

            <img src="/images/Modul_Detail_Seite.png">

            <h2>Installiere den MMLC</h2>
            <p><i>In der folgenden Anleitung musst du <code>www.dein-shop.tld</code> durch deine Shop-Url ersetzen.</i></p>

            <ol>
                <li>Lade dir die <strong>mmlc_installer.php</strong> Datei kostenlos herunter. <a href="/download.php">Download Link</a></li>
                <li>Kopiere die <strong>mmlc_installer.php</strong> Datei in das Root-Verzeichnis deines Shops. Z. B. mit einem FTP-Client.</li>
                <li>Rufe den Installer im Browser über <strong>www.dein-shop.tld/mmlc_installer.php</strong> auf.</li>
                <li>Nach der Installation erreichst du den MMLC unter <strong>www.dein-shop.tld/ModifiedModuleLoaderClient</strong></li>
            </ol>

            <p>Für mehr Informationen schaue dir die <a href="/documentation.php">Anleitung</a> an.</p>

            <h2>Was macht der MMLC?</h2>
            <p>
                Der MMLC listet dir kostenlose und kostenpflichtige Module auf, die du mit einem Klick laden und installieren kannst. Klickst du auf installieren, lädt der MMLC alle nötigen Dateien zu dem Modul auf deinen Server und installiert das Modul in deinen Shop. Dabei merkt sich der MMLC welche Dateien er installiert hat und kann diese Dateien bei einer Deinstallation wieder entfernen. Das ist ohne den MMLC nur aufwändig möglich.
            </p>

            <img src="/images/Modul_Uebersichtsseite.png">

            <h2>Was sind die Vorteile?</h2>
            <p>
                Im Ökosystem der modified eCommerce Shopsoftware werden Module oft aufwändig händisch installiert, indem du (oder ein Dienstleister) Dateien auf deinen Server in unterschiedliche Ordner kopieren musst. Dieses Vorgehen ist zeitaufwändig und fehleranfällig. Auch lassen sich so Module nur schwer durch Updates aktualisieren und noch aufwändiger wieder deinstallieren.
                <br><br>
                Der MMLC erledigt all diese Aufgaben vollautomatisch für dich. Auch kannst du innerhalb des MMLC nach Modulen suchen, die dich interssieren und dir schnell einen überblick über die Funktionen der Module holen.
                <br><br>
                Da alle Module im MMLC updatefähig programmiert werden, müssen keine Core-Dateien manuell bearbeitet werden. Solltest du doch einmal Anpassungen an einem Modul gemacht haben, zeigt dir der MMLC an, was du geändert hast und warnt dich, dass bei einem Update diese Änderungen verloren gehen könnten. Oder du kannst all deine individuellen Änderungen im Bedarfsfall mit nur einem Klick bewusst rückgängig machen und das original Modul wieder herstellen.
            </p>

            <img src="/images/Modul_Aenderungen.png">

            <h2>Von wem stammen die Module?</h2>
            <p>
                Die Module werden dir von unterschiedlichen Entwicklern bereitgestellt, die dir die Installtion von ihren Modulen erleichtern möchten. Hier findest du eine Liste mit Entwickeln, die bereits Module für den MMLC entwickeln.
            </p>

            <ul>
                <li><a href="https://www.first-web.de/modified-e-commerce-module.html">First-Web GmbH</a></li>
                <li><a href="https://www.sumw.de">SUMW - Software & Multimedia Wieschendorf</a></li>
            </ul>

            <p>Schreib uns eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a>, wenn du deine Module auch über den MMLC verfügbar machen oder mit in die Liste hier aufgenommen werden möchtest.</p>

            <h2>Müssen Anpassung an meinem Template gemacht werden?</h2>
            <p>
                Für den MMLC selbst müssen keine Anpassungen an deinem Template gemacht werden. <br><br>

                Leider bleibt es auch weiterhin nicht aus, dass einige Module nur mit Anpassungen an deinem Template funktionieren. Module die davon betroffen sind, versuchen jedoch die Änderungen, die du an deinem Template machen musst, so gring wie möglich zu halten und bringen im MMLC selbst eine Anleitung mit, wie du diese Anpassungen einfach eigenständig selbst durchführen kannst.<br><br>

                Die gute Nachricht ist, dass bei Anpassungen an deinem Template dein System updatefähig bleibt. Wir arbeiten weiterhin daran, dass der MMLC in Zukunft immer weniger Module beinhaltet, die Anpassungen an deinem Template benötigen.
            </p>

            <h2>Information für Modul - Entwickler</h2>

            <p>Du bist Entwickler und möchtest Module mit dem MMLC entwickeln, da freuen wir uns besonderns drüber. Schau dir die <a href="/docs/index.php">Information für Entwickler</a> an.</p>

            <p>
                Wenn du deine Module auch über den MMLC anbieten möchtest, dann ist es zurzeit noch am besten uns eine eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a> zu schreiben und wir helfen dir deine Module über den MMLC verfügbar zu machen.
            </p>

            <h2>Ich möchte mich gern am MMLC beteiligen</h2>
            <p>
                Wir freuen uns sehr, dass du dich für den MMLC interessierst und Lust hast dich am MMLC zu beteiligen. Es gibt viele Dinge zu denen du hier beitragen kannst. Sei es die Dokumentation zu erweitern oder den Programmcode zu verbessern und natürlich all die Dinge, die hier noch nicht aufgeführt sind. Wir freuen uns auch über kleine Beiträge.
            </p>

            <p>
                Wenn du uns helfen möchtest, wird das bald möglich sein. Gerade sind wir noch dabei das Projekt für GitHub vorzubereiten, damit es dort bald als Open-Source-Projekt veröffentlicht werden kann. Hab' bitte noch etwas Geduld. In der Zwischenzeit kannst du uns bereits eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a> senden.
            </p>

            <p>
                Wenn du dich an dieser Webseite und der Dokumentation beteiligen möchtest, findest du den Quellcode hierfür bereits auf <a href="https://github.com/RobinTheHood/module-loader.de">GitHub</a>.
            </p>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
