<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>moduleinfo.json - Developer - MMLC - Modified Module Loader Client</title>

        <script src="/js/highlight.min.js"></script>
        <link rel="stylesheet" href="/css/github-dark.min.css">
    </head>
    <body>
        <div class="page-wrapper page-docs-moduleinfo">
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
                            <li><a href="#example">Beispiel</a></li>
                            <li><a href="#structure">Der Aufbau</a></li>
                            <li><a href="#name">name</a></li>
                            <li><a href="#archiveName">archiveName</a></li>
                            <li><a href="#sourceDir">sourceDir</a></li>
                            <li><a href="#version">version</a></li>
                            <li><a href="#shortDescription">shortDescription</a></li>
                            <li><a href="#description">description</a></li>
                            <li><a href="#installation">installation</a></li>
                            <li><a href="#developer">developer</a></li>
                            <li><a href="#developerWebsite">developerWebsite</a></li>
                            <li><a href="#website">website</a></li>
                            <li><a href="#category">category</a></li>
                            <li><a href="#price">price</a></li>
                            <li><a href="#tags">tags</a></li>
                            <li><a href="#require">require</a></li>
                            <li><a href="#modifiedCompatibility">modifiedCompatibility</a></li>
                            <li><a href="#php">php</a></li>
                            <li><a href="#mmlc">mmlc</a></li>
                            <li><a href="#date">date</a></li>
                            <li><a href="#autoload">autoload</a></li>
                        </ul>
                    </nav>
                </aside>

                <main>
                    <section>
                        <h2>Die moduleinfo.json</h2>

                        <?php //require_once '../inc/notice_work_in_progress.php'; ?>

                        <p>Jedes Modul, das mit dem MMLC funktionieren soll braucht eine <code>moduleinfo.json</code> Datei. In dieser Datei werden die wichtigsten Angaben und Einstellungen für den MMLC zum Modul konfiguriert. In diesem Abschnitt werden die Felder und dessen Funktionen in der <code>moduleinfo.json</code> beschrieben.</p>
                    </section>

                    <section>
                        <h3 id="example">
                            Beispiel
                            <a href="#example" class="anchor">#</a>
                        </h3>

                        <p>Eine Vollständige <code>moduleinfo.json</code> könnte wie folgt aussehen.</p>
                        <?= loadExample2('moduleinfo_example.json', 'json'); ?>
                    </section>

                    <section>
                        <h3 id="structure">
                            Der Aufbau
                            <a href="#structure" class="anchor">#</a>
                        </h3>

                        <p>Bei der <code>moduleinfo.json</code> handelt es sich um eine Datei im JSON Format. Die Datei hat Ähnlichkeit mit einer <code>composer.json</code> Datei.</p>
                    </section>

                    <section>
                        <h4 id="name">
                            name
                            <a href="#name" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld steht der Name des Moduls, so wie er für den User im MMLC angezeigt werden soll.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"name": "My first Module"</code>
                    </section>

                    <section>
                        <h4 id="archiveName">
                            archiveName
                            <a href="#archiveName" class="anchor">#</a>
                        </h4>

                        <p>Hierbei handelt es sich um den eindeutigen technischen Namen des Moduls. Der <code>archiveName</code> setzt sich aus dem vendorName und dem moduleName getrennt mit einem Slashzeichen zusammen.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"archiveName": "mycompany/my-first-module"</code>
                    </section>

                    <section>
                        <h4 id="sourceDir">
                            sourceDir
                            <a href="#sourceDir" class="anchor">#</a>
                        </h4>

                        <p>Mit diesem Feld kann festgelegt werden, aus welchem Verzeichnis die Dateien aus dem Modul in den Shop kopiert werden sollen.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"sourceDir": "new_files"</code>
                    </section>

                    <section>
                        <h4 id="version">
                            version
                            <a href="#version" class="anchor">#</a>
                        </h4>

                        <p>Die Version des Moduls in Semver Konvention. Alternativ (und empfohlen) kann hier der Wert <code>auto</code> eingetragen werden. Das hat zur Folge, dass die Version automatisch aus einem git Tag entnommen wird und nicht mehr explizit angegeben werden muss.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"version": "auto"</code>
                    </section>

                    <section>
                        <h4 id="shortDescription">
                            shortDescription
                            <a href="#shortDescription" class="anchor">#</a>
                        </h4>

                        <p>Mit diesem Feld kann die Kurzbeschreibung festgelegt werden die im MMLC in der Übersichtsseite angezeigt wird.</p>
                    </section>

                    <section>
                        <h4 id="description">
                            description
                            <a href="#description" class="anchor">#</a>
                        </h4>

                        <p>Mit diesem Feld kann die Beschreibung festgelegt werden, die im MMLC auf einer Moduldetailseite angezeigt wird.</p>
                    </section>

                    <section>
                        <h4 id="installation">
                            installation
                            <a href="#installation" class="anchor">#</a>
                        </h4>

                        <p>Mit diesem Feld kann die Installationsanleitung für das Modul angegeben werden. Als Alternative hierzu bietet sich an die Anleitung in die Datei <code>install.md</code> zu schreiben.</p>
                    </section>

                    <section>
                        <h4 id="developer">
                            developer
                            <a href="#developer" class="anchor">#</a>
                        </h4>

                        <p>Der Entwickler des Moduls. Z. B. der Name des Autors, des Programmieres oder der Firma.<p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"developer": "Robin Wieschendorf"</code>
                    </section>

                    <section>
                        <h4 id="developerWebsite">
                            developerWebsite
                            <a href="#developerWebsite" class="anchor">#</a>
                        </h4>

                        <p>Die Webseite / Url auf die verlinkt werden soll, wenn man auf den Developer klickt.<p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"developerWebsite": "https://robin-wieschendorf.de"</code>
                    </section>

                    <section>
                        <h4 id="website">
                            website
                            <a href="#website" class="anchor">#</a>
                        </h4>

                        <p>Die Webseite / Url auf der man sich über das Modul informieren kann.<p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"website": "https://github.com/RobinTheHood/modified-std-module"</code>
                    </section>

                    <section>
                        <h4 id="category">
                            category
                            <a href="#category" class="anchor">#</a>
                        </h4>

                        <p>
                            Mit dem Feld <code>category</code> kann festgelegt werden, in welcher Kategorie das Modul im MMLC angezeigt wird. Wird kein Wert für das Feld angegeben oder ein ungültiger Wert landet das Modul in der Kategorie <strong>Sonstige Module</strong>. Folgende gültige Werte stehen zur Auswahl:
                        </p>

                        <ul>
                            <li><code>import/export</code> für <strong>Import/Export</strong></li>
                            <li><code>language</code> für <strong>Sprachpaket</strong></li>
                            <li><code>persistance</code> für <strong>Datenbank Module</strong></li>
                            <li><code>productivity</code> für <strong>Produktivität</strong></li>
                            <li><code>promotion/marketing</code> für <strong>Promotion & Marketing</strong></li>
                            <li><code>productinfos</code> für <strong>Zusatzinformationen & Produkt-Tabs</strong></li>
                            <li><code>shipping</code> für <strong>Versand Module</strong></li>
                            <li><code>payment</code> für <strong>Zahlungs Module</strong></li>
                            <li><code>library</code> für <strong>Programmcode Bibliotheken</strong></li>
                            <li><code>nocategory</code> für <strong>Sonstige Module</strong></li>
                        </ul>

                        <p>Hier ein Beispiel für ein Modul, das in der Kategorie <strong>Produktivität</strong> angezeigt werden soll:</p>
                        <code class="block">"category": "productivity"</code>
                    </section>

                    <section>
                        <h4 id="price">
                            price
                            <a href="#price" class="anchor">#</a>
                        </h4>

                        <p>Hier kann eingetragen werden, zu welchem Betrag das Modul verkauft wird. Der Betrag muss in englischer Schreibweise ohne Währungzeichen geschrieben werden. Wird hier kein Wert eingetragen, zeigt der MMLC "Preis auf Anfrage" an. Wird hier der Wert <code>free</code> eingetragen, handelt es sich um ein kostenloses Modul.<p>

                        <p>Hier ein Beispiel für ein Modul, das 29,90 € anzeigen soll:</p>
                        <code class="block">"price": "29.00"</code>
                    </section>

                    <section>
                        <h4 id="tags">
                            tags (ab Version 1.18.0)
                            <a href="#tags" class="anchor">#</a>
                        </h4>

                        <p>Mit diesem Feld können weitere Suchwörter hinzugefügt werden, die mit dem Modul verknüpft werden. Die Tags müssen mit Komma getrennt werden.<p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">"tags": "versand, shipping, paket"</code>
                    </section>

                    <section>
                        <h4 id="require">
                            require
                            <a href="#require" class="anchor">#</a>
                        </h4>

                        <p>Hier kann eingetragen werden von welchen Modulen das Modul abhängt. Die abhängigen Module werden automatisch mitinstalliert, wenn das Modul installiert wird.<p>

                        <p>Hier ein Beispiel von einem Modul, das von den Modulen <code>composer/autoload ab Version 1.1.0</code> und <code>robinthehood/modified-std-module ab Version 0.1.0</code> abhängig ist.</p>
<code class="block">"require": {
    "composer/autoload": "^1.1.0",
    "robinthehood/modified-std-module": "^0.1.0"
}</code>
                    </section>

                    <section>
                        <h4 id="modifiedCompatibility">
                            modifiedCompatibility
                            <a href="#modifiedCompatibility" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld muss eingetragen, mit welcher Version oder mit welchen Versionen von modifed das Modul kompatible ist. Der die Versionen müssen als JsonArray eingetragen werden.</p>

                        <p>Hier ein Beispiel:</p>
<code class="block">"modifiedCompatibility": [
    "2.0.6.0",
    "2.0.7.0",
    "2.0.7.1",
    "2.0.7.2"
]</code>
                    </section>

                    <section>
                        <h4 id="php">
                            php
                            <a href="#php" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld kann eingetragen werden, mit welcher PHP Version das Modul kompatible ist. Die Version muss als <a href="https://getcomposer.org/doc/articles/versions.md" target="_blank">Composer-Version-Constraint</a> eingetragen werden.</p>

                        <p>Folgende Operatoren stehen zur Auswahl: <code>^</code> <code>></code> <code>>=</code> <code><</code> <code><=</code> <code>||</code>

                        <p>Hier ein Beispiel:</p>
<code class="block">"php": {
    "version": "^7.4 || ^8.0"
}</code>
                    </section>

                    <section>
                        <h4 id="mmlc">
                            mmlc
                            <a href="#mmlc" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld kann eingetragen werden, mit welcher MMLC Version das Modul kompatible ist. Die Version muss als <a href="https://getcomposer.org/doc/articles/versions.md" target="_blank">Composer-Version-Constraint</a> eingetragen werden.</p>

                        <p>Folgende Operatoren stehen zur Auswahl: <code>^</code> <code>></code> <code>>=</code> <code><</code> <code><=</code> <code>||</code>

                        <p>Hier ein Beispiel:</p>
<code class="block">"mmlc": {
    "version": "^1.20.0"
}</code>
                    </section>

                    <section>
                        <h4 id="date">
                            date (ab Version 1.22.0)
                            <a href="#date" class="anchor">#</a>
                        </h4>

                        <p>Gibt das Datum und Uhrzeit an, seit dem die Modul Version veröffentlicht wurde. Dieser Wert kann lokal gesetzt werden, wird jedoch vom MMLS mit dem Datum des Git Version-Tags überschrieben. Format: <code>YYYY-MM-DD hh:mm:ss</code></p>

                        <p>Hier ein Beispiel:</p>
<code class="block">"date": "2023-12-24 16:30:21"</code>
                    </section>

                    <section>
                        <h4 id="autoload">
                            autoload
                            <a href="#autoload" class="anchor">#</a>
                        </h4>

                        <p>
                            PSR-4 Autload Einstellungen. An dieser Stelle verweisen wir auf die Anleitung von Composer <a href="https://getcomposer.org/doc/04-schema.md#psr-4" target="_blank">PSR-4 Autoload mapping for a PHP autoloader</a>.
                        </p>

                        <p>Hier ein Beispiel:</p>
<code class="block">"autoload": {
    "psr-4": {
        "MyNamespace\\": "/vendor-no-composer/mynamespace",
        "MyCompany\\": "/vendor-no-composer/mycompany"
    }
}</code>
                    </section>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
            <script>hljs.highlightAll();</script>
        </div>
    </body>
</html>
