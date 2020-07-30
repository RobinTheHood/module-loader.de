<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php
        require_once '../inc/head.php';
        ?>

        <title>moduleinfo.json - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="pageWrapper">
            <header>
                <?php
                require_once '../inc/pageTitle.php';
                ?>

                <nav>
                    <?php
                    require_once '../inc/navigation.php';
                    ?>
                </nav>
            </header>

            <aside>
                <div class="notice danger">
                    <p><strong>Hinweis:</strong> Diese Dokumentation ist noch unvollständig.</p>
                </div>
            </aside>

            <main>
                <section>
                    <h2>Die moduleinfo.json</h2>

                    <p>Jedes Modul, das mit dem MMLC funktionieren soll brauch eine <code>moduleinfo.json</code> Datei. In dieser Datei werden die wichtigsten Angaben und Einstellungen für den MMLC zum Modul konfiguriert. In diesem Abschnitt werden die Felder und dessen Funktionen in der <code>moduleinfo.json</code> beschrieben.

                    <h3>Der Aufbau</h3>
                    <p>Bei der <code>moduleinfo.json</code> handelt es sich um eine Datei im JSON Format. Die Datei hat Ähnlichkeit mit einer <code>composer.json</code> Datei.

                    <h3>Die Felder</h3>

                    <h4>name</h4>
                    <p>In diesem Feld steht der Name des Moduls, so wie er für den User im MMLC angezeigt werden soll.</p>

                    <p>Hier ein Beispiel:</p>
                    <code class="block">"name": "My first Module"</code>

                    <h4>archiveName</h4>
                    <p>Hierbei handelt es sich um den eindeutigen technischen Namen des Moduls. Der <code>archiveName</code> setzt sich aus dem vendorName und dem moduleName getrennt mit einem Slashzeichen zusammen.</p>

                    <p>Hier ein Beispiel:</p>
                    <code class="block">"archiveName": "mycompany/my-first-module"</code>

                    <h4>sourceDir</h4>
                    <p>Mit diesem Feld kann festgelegt werden, aus welchem Verzeichnis die Dateien aus dem Modul in den Shop kopiert werden sollen.</p>

                    <p>Hier ein Beispiel:</p>
                    <code class="block">"sourceDir": "new_files"</code>

                    <h4>version</h4>
                    <p>Die Version des Moduls in Semver Konvention. Alternativ (und empfohlen) kann hier der Wert <code>auto</code> eingetragen werden. Das hat zur Folge, dass die Version automatisch aus einem git Tag entnommen wird und nicht mehr explizit angegeben werden muss.</p>

                    <p>Hier ein Beispiel:</p>
                    <code class="block">"version": "auto"</code>

                    <h4>shortDescription</h4>
                    <p>Mit diesem Feld kann die Kurzbeschreibung festgelegt werden die im MMLC in der Übersichtsseite angezeigt wird.</p>

                    <h4>description</h4>
                    <p>Mit diesem Feld kann die Beschreibung festgelegt werden, die im MMLC auf einer Moduldetailseite angezeigt wird.</p>

                    <h4>installation</h4>
                    <p>Mit diesem Feld kann die Installationsanleitung für das Modul angegeben werden. Als Alternative hierzu bietet sich an die Anleitung in die Datei <code>install.md</code> zu schreiben.</p>

                    <h4>developer</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

                    <h4>developerWebsite</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

                    <h4>website</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

                    <h4 id="category">category</h4>
                    <p>
                        Mit dem Feld <code>category</code> kann festgelegt werden, in welcher Kategorie das Modul im MMLC angezeigt wird. Wird kein Wert für das Feld angegeben oder ein ungültiger Wert landet das Modul in der Kategorie <strong>Sonstige Module</strong>. Folgende gültige Werte stehen zur Auswahl:
                    </p>

                    <ul>
                        <li><code>import/export</code> für <strong>Import/Export</strong></li>
                        <li><code>persistance</code> für <strong>Datenbank Module</strong></li>
                        <li><code>productivity</code> für <strong>Produktivität</strong></li>
                        <li><code>promotion/marketing</code> für <strong>Promotion & Marketing</strong></li>
                        <li><code>productinfos</code> für <strong>Zusatzinformationen & Produkt-Tabs</strong></li>
                        <li><code>shipping</code> für <strong>Versand Module</strong></li>
                        <li><code>library</code> für <strong>Programmcode Bibliotheken</strong></li>
                        <li><code>nocategory</code> für <strong>Sonstige Module</strong></li>
                    </ul>

                    <p>Hier ein Beispiel für ein Modul, das in der Kategorie <strong>Produktivität</strong> angezeigt werden soll:</p>
                    <code class="block">"category": "productivity"</code>

                    <h4>price</h4>
                    <p>Hier kann eingetragen werden, zu welchem Betrag das Modul verkauft wird. Der Betrag muss in englischer Schreibweise ohne Währungzeichen geschrieben werden. Wird hier kein Wert eingetragen, zeigt der MMLC "Preis auf Anfrage" an. Wird hier der Wert <code>free</code> eingetragen, handelt es sich um ein kostenloses Modul.<p>

                    <p>Hier ein Beispiel für ein Modul, das 29,90 € anzeigen soll:</p>
                    <code class="block">"price": "29.00"</code>

                    <h4>require</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

                    <h4>modifiedCompatibility</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

                    <p>Hier ein Beispiel:</p>
<code class="block">modifiedCompatibility": [
    "2.0.3.0",
    "2.0.4.0",
    "2.0.4.1",
    "2.0.4.2"
]</code>

                    <h4>autoload</h4>
                    <div class="notice info">
                        <p>Dokumentation in Arbeit ...</p>
                    </div>

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

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
