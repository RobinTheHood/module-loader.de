<!DOCTYPE html>
<html lang="de" dir="ltr">
    <!-- Na, schaust du dir den HTML-Code an? Viel Spaß damit. -->
    <!-- Wenn du programmieren kannst und Module mit dem MMLC programmieren -->
    <!-- möchtest, dann melde dich bei uns. -->
    <head>
        <?php require_once 'inc/head.php'; ?>
        <meta name="description" content="Der MMLC ist eine Software zur Verwaltung von Modulen in deinem modified eCommerce Shop.">

        <title>MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <header>
            <nav>
                <?php require_once 'inc/navigation.php'; ?>
            </nav>
        </header>

        <div class="pageWrapper">
            <div class="content">
                <img id="logo" src="/images/mmlc-logo-transparent.png">

                <?php require_once 'inc/beta_info.php'; ?>

                <main>
                    <section>
                        <h2>Installiere den MMLC</h2>
                        <p><i>In der folgenden Anleitung musst du <code>www.dein-shop.tld</code> durch deine Shop-Url ersetzen.</i></p>

                        <ol>
                            <li>Lade dir die <strong>mmlc_installer.php</strong> Datei kostenlos herunter. <a href="/download.php">Download Link</a></li>
                            <li>Kopiere die <strong>mmlc_installer.php</strong> Datei in das Root-Verzeichnis deines Shops. Z. B. mit einem FTP-Client.</li>
                            <li>Rufe den Installer im Browser über <strong>www.dein-shop.tld/mmlc_installer.php</strong> auf.</li>
                            <li>Nach der Installation erreichst du den MMLC unter <strong>www.dein-shop.tld/ModifiedModuleLoaderClient</strong></li>
                        </ol>

                        <p><code>Tipp:</code> Installiere dir mit dem MMLC das Modul <strong>MMLC im Admin</strong>, dann kannst du den MMLC in Zukunft direkt aus dem Admin deines Shops aufrufen, statt die URL in deinen Browser eingeben zu müssen.</p>

                        <p>Für mehr Informationen schaue dir die <a href="/documentation.php#system-requirements">Anleitung</a> an.</p>
                    </section>

                    <section>
                        <h2>Der MMLC ist eine Software zur Verwaltung von Modulen in deinem modified eCommerce Shop.</h2>
                        <p>
                            <a target="_blank" href="https://youtu.be/mKlB27Vq9Uk"><img src="/images/youtube_overview.jpg" class="imagePreview" alt="Module für den Modified Shop - Funktionsübersicht des Modified Module Loader Client (MMLC)"></a>
                        </p>

                        <p>
                            Installiere dir <strong>kostenlos</strong> den MMLC und entdecke ein breites Angebot an Modulen. Mit dem MMLC kannst du Module für die modified eCommerce Shopsoftware kinderleicht mit einem Klick installieren und wieder deinstallieren.
                        </p>

                        <p>
                            Du bist Entwickler? Auch für Entwickler wird das <a href="/docs/index.php">Entwickeln neuer Module mit dem MMLC</a> einfacher und mehr Spaß machen.
                        </p>

                        <img src="/images/Modul_Detail_Seite.png" class="imagePreview" alt="MMLC Übersicht vom Modul Massenverarbeitung">
                    </section>

                    <section>
                        <h2>Was macht der MMLC?</h2>
                        <p>
                            Der MMLC listet dir kostenlose und kostenpflichtige Module auf, die du mit einem Klick laden und installieren kannst. Klickst du auf installieren, lädt der MMLC alle nötigen Dateien zu dem Modul auf deinen Server und installiert das Modul in deinen Shop. Dabei merkt sich der MMLC welche Dateien er installiert hat und kann diese Dateien bei einer Deinstallation wieder entfernen. Das ist ohne den MMLC nur aufwändig möglich.
                        </p>

                        <img src="/images/Modul_Uebersichtsseite.png" class="imagePreview" alt="MMLC Übersicht aller Module">
                    </section>

                    <section>
                        <h2>Was sind die Vorteile?</h2>
                        <p>
                            Im Ökosystem der modified eCommerce Shopsoftware werden Module oft aufwändig händisch installiert, indem du (oder ein Dienstleister) Dateien auf deinen Server in unterschiedliche Ordner kopieren musst. Dieses Vorgehen ist zeitaufwändig und fehleranfällig. Auch lassen sich so Module nur schwer durch Updates aktualisieren und noch aufwändiger wieder deinstallieren.
                        </p>

                        <p>
                            Der MMLC erledigt all diese Aufgaben vollautomatisch für dich. Auch kannst du innerhalb des MMLC nach Modulen suchen, die dich interssieren und dir schnell einen überblick über die Funktionen der Module holen.
                        </p>

                        <p>
                            Da alle Module im MMLC updatefähig programmiert werden, müssen keine Core-Dateien manuell bearbeitet werden. Solltest du doch einmal Anpassungen an einem Modul gemacht haben, zeigt dir der MMLC an, was du geändert hast und warnt dich, dass bei einem Update diese Änderungen verloren gehen könnten. Oder du kannst all deine individuellen Änderungen im Bedarfsfall mit nur einem Klick bewusst rückgängig machen und das original Modul wieder herstellen.
                        </p>

                        <img src="/images/Modul_Aenderungen.png" class="imagePreview" alt="MMLC Ansicht der geänderten Dateien am Beispiel vom Module Individuelle Sortierung">
                    </section>

                    <section>
                        <h2>Von wem stammen die Module?</h2>
                        <p>
                            Die Module werden dir von unterschiedlichen Entwicklern bereitgestellt, die dir die Installtion von ihren Modulen erleichtern möchten. Hier findest du eine Liste mit Entwickeln, die bereits Module für den MMLC entwickeln.
                        </p>

                        <ul>
                            <li><a href="https://www.first-web.de/modified-e-commerce-module.html">First-Web GmbH</a></li>
                            <li><a href="https://www.sumw.de">SUMW - Software & Multimedia Wieschendorf</a></li>
                            <li><a href="https://www.shopbetreuung.com">Fishnet Services</a></li>
                        </ul>

                        <p>Wenn du deine Module auch über den MMLC verfügbar machen willst oder mit in die Liste hier aufgenommen werden möchtest, findest du hierzu Information unter dem Menüpunkt <a href="/docs/index.php">Entwickler</a>. Bei Fragen schreib uns auf unserem <a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc DE/EN</a> Community Server oder sende uns eine E-Mail an <a class="electronicMessage" data-href="aW5mb0Btb2R1bGUtbG9hZGVyLmRl" tabindex="0">info<span class="at"></span>module-loader<span class="dot"></span>de</a>.</p>
                    </section>

                    <section>
                        <h2>Müssen Anpassung an meinem Template gemacht werden?</h2>
                        <p>
                            Für den MMLC selbst müssen keine Anpassungen an deinem Template gemacht werden. <br><br>

                            Leider bleibt es auch weiterhin nicht aus, dass einige Module nur mit Anpassungen an deinem Template funktionieren. Module die davon betroffen sind, versuchen jedoch die Änderungen, die du an deinem Template machen musst, so gring wie möglich zu halten und bringen im MMLC selbst eine Anleitung mit, wie du diese Anpassungen einfach eigenständig selbst durchführen kannst.<br><br>

                            Die gute Nachricht ist, dass bei Anpassungen an deinem Template dein System updatefähig bleibt. Wir arbeiten weiterhin daran, dass der MMLC in Zukunft immer weniger Module beinhaltet, die Anpassungen an deinem Template benötigen.
                        </p>
                    </section>

                    <section>
                        <h2>Information für Modul - Entwickler</h2>

                        <p>Du bist Entwickler und möchtest Module mit dem MMLC entwickeln, da freuen wir uns besonderns drüber. Schau dir die <a href="/docs/index.php">Information für Entwickler</a> an.</p>

                        <p>
                            Wenn du deine Module auch über den MMLC anbieten möchtest, dann ist es zurzeit noch am besten uns eine eine E-Mail an <a class="electronicMessage" data-href="aW5mb0Btb2R1bGUtbG9hZGVyLmRl" tabindex="0">info<span class="at"></span>module-loader<span class="dot"></span>de</a> zu schreiben und wir helfen dir deine Module über den MMLC verfügbar zu machen.
                        </p>
                    </section>

                    <section>
                        <h2>Ich möchte mich gern am MMLC beteiligen</h2>
                        <p>
                            Wir freuen uns sehr, dass du dich für den MMLC interessierst und Lust hast dich am MMLC zu beteiligen. Es gibt viele Dinge zu denen du hier beitragen kannst. Sei es die Dokumentation zu erweitern oder den Programmcode zu verbessern und natürlich all die Dinge, die hier noch nicht aufgeführt sind. Wir freuen uns auch über kleine Beiträge.
                        </p>

                        <p>
                            Den MMLC findest du als Open-Source-Projekt auf <a target="_blank" href="https://github.com/RobinTheHood/ModifiedModuleLoaderClient">GitHub</a>. Hier kannst du Wünsche und Fehler als Issues eintragen. Oder du machst einen Pull request, wenn du bereits konkrete Quellcodeverbesserungen einreichen möchtest. Wenn du Hilfe brauchst, kannst du uns auch gerne bei <a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc</a> nach Rat fragen oder uns eine E-Mail an <a class="electronicMessage" data-href="aW5mb0Btb2R1bGUtbG9hZGVyLmRl" tabindex="0">info<span class="at"></span>module-loader<span class="dot"></span>de</a> senden.
                        </p>

                        <p>
                            Wenn du dich an dieser Webseite und der Dokumentation beteiligen möchtest, findest du den Quellcode hierfür ebenfalls auf <a target="_blank" href="https://github.com/RobinTheHood/module-loader.de">GitHub</a>.
                        </p>
                    </section>
                </main>
            </div>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
