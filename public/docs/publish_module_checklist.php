<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>
        <title>Checkliste: Modified Module veröffentlichen im MMLC - Schritte zur Qualitätsverbesserung</title>
        <meta name="description" content="Erfahre, wie du ein Modul für das modified Shopsystem im MMLC veröffentlichst und die Qualität sowie Nutzererfahrung steigerst. Unsere Checkliste führt dich durch wichtige Schritte, wie Update-Mechanismus, Tests, Abhängigkeiten, Changelog, Fehlerkontrolle, Lokalisierung, Installation und Bedienung. Verbessere die Sichtbarkeit deines Moduls.">
    </head>
    <body>
        <div class="page-wrapper page-docs-publish-module-checklist">
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

                        <ol>
                            <li><a href="#overview">Checkliste in Kürze</a></li>
                            <li><a href="#update-mechanism">Update-Mechanismus integrieren</a></li>
                            <li><a href="#run-tests">Tests durchführen</a></li>
                            <li><a href="#update-dependencies">Abhängigkeiten in der module.json kontrollieren und aktualisieren</a></li>
                            <li><a href="#create-changelog">Changelog Eintrag erstellen</a></li>
                            <li><a href="#check-log-files">Fehlermeldungen in Logs kontrollieren und vermeiden</a></li>
                            <li><a href="#create-localization">Lokalisierung und Übersetzungen erstellen</a></li>
                            <li><a href="#create-docs-install">Installationsanleitung erstellen</a></li>
                            <li><a href="#create-docs-manual">Bedienungsanleitung erstellen</a></li>
                            <li><a href="#create-docs-description">Beschreibung erstellen</a></li>
                            <li><a href="#create-icon">Icon erstellen</a></li>
                        </ol>
                    </nav>
                </aside>

                <main>
                    <section>
                        <h2>Checkliste - modified Module veröffentlichen im MMLC</h2>

                        <?php //require_once '../../views/notice_work_in_progress.php'; ?>

                        <p>Bevor du ein Modul für das modified Shopsystem im MMLC veröffentlichst, solltest du einige entscheidende Schritte durchführen, um die Qualität und die Nutzererfahrung auf ein hohes Niveau zu bringen.</p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Wenn du wissen möchstest, wie der technische Ablauf einer Modulveröffentlichung im MMLC funktioniert. Schau dir das Tutorial <a href="/docs/publish_module.php">Tutorial: Dein erstes modified eCommerce Shop Modul veröffentlichen</a> an.</p>
                        </div>
                    </section>

                    <section>
                        <h3 id="overview">
                            Checkliste in Kürze
                            <a href="#overview" class="anchor">#</a>
                        </h3>

                        <p>Hier findest du die Checkliste in Kürze. Du kannst die Liste direkt abhaken.</p>

                        <ul style="list-style: none">
                            <li><input type="checkbox"> Update-Mechanismus integrieren</li>
                            <li><input type="checkbox"> Tests durchführen</li>
                            <li><input type="checkbox"> Abhängigkeiten in der module.json kontrollieren und aktualisieren</li>
                            <li><input type="checkbox"> Changelog Eintrag erstellen</li>
                            <li><input type="checkbox"> Fehlermeldungen in Logs kontrollieren und vermeiden</li>
                            <li><input type="checkbox"> Lokalisierung und Übersetzungen erstellen</li>
                            <li><input type="checkbox"> Installationsanleitung erstellen</li>
                            <li><input type="checkbox"> Bedienungsanleitung erstellen</li>
                            <li><input type="checkbox"> Beschreibung erstellen</li>
                            <li><input type="checkbox"> Icon erstellen</li>
                        </ul>
                    </section>
                        
                    <section>
                        <h3 id="update-mechanism">
                            Update-Mechanismus integrieren
                            <a href="#update-mechanism" class="anchor">#</a>
                        </h3>
                        
                        <p>Gewährleiste, dass dein Modul mithilfe des MMLC einfach aktualisiert werden kann. Bei Aktualisierungen ist es wichtig zu bedenken, dass nicht nur Quellcode-Dateien über den MMLC aktualisiert werden müssen, sondern sich auch Daten und Einstellungen in der Datenbank ändern können. Es ist entscheidend, dass dein Modul in der Lage ist, diese Anpassungen automatisch vorzunehmen, um einen reibungslosen Übergang für die Nutzer zu gewährleisten.</p>

                        <p>Wenn du das <a href="https://module-loader.de/modules/robinthehood/modified-std-module">Standard Modul für Modified</a> verwendest, stehen dir bereits vorgefertigte Hilfsmethoden zur Verfügung, die dir die Implementierung dieses Mechanismus erheblich erleichtern. Diese Hilfsmethoden sind speziell darauf ausgerichtet, Änderungen in der Datenbank und den Einstellungen nahtlos zu handhaben.</p>

                        <p>Ein weiterer wichtiger Schritt ist die Dokumentation im Changelog. Hier solltest du detailliert beschreiben, wie das Modul aktualisiert werden kann. Falls die Aktualisierung nur einen einfachen Klick im Backend auf &quot;Update&quot; erfordert, ergänze diesen Schritt ebenfalls im Changelog.</p>

                        <p>Eine klare und verständliche Anleitung zur Aktualisierung stellt sicher, dass Nutzer ohne Schwierigkeiten von ältere auf neuere Versionen deines Moduls umsteigen können.</p>
                    </section>
                        
                    <section>
                        <h3 id="run-tests">
                            Tests durchführen
                            <a href="#run-tests" class="anchor">#</a>
                        </h3>

                        <p>Führe vor der Veröffentlichung deines Moduls umfassende Tests durch, um sicherzustellen, dass es in einwandfreiem Zustand ist. Es ist besonders wichtig, die Kernfunktionalitäten gründlich zu überprüfen, da diese das Herzstück deines Moduls bilden. Um diesen Prozess effizient zu gestalten, empfiehlt es sich, eine Liste von Testszenarien zu erstellen, die manuell überprüft werden können. Diese Liste sollte dokumentiert und zu deinem Projekt gespeichert werden. Auf diese Weise kannst du bei kommenden Versionen deines Moduls dieselben Tests erneut durchführen, um sicherzustellen, dass keine neuen Probleme aufgetreten sind und die Qualität beibehalten wird.</p>
                        
                        <p>Eine zusätzliche Maßnahme zur Verbesserung der Testqualität ist die Implementierung automatisierter Tests. Hierbei stehen dir hilfreiche Tools wie <a href="https://phpunit.de">PHPUnit</a> und <a href="https://codeception.com">Codeception</a> zur Verfügung. Diese Tools ermöglichen es, wiederholbare Testszenarien zu erstellen und automatisch auszuführen. Automatisierte Tests können die Testabdeckung erhöhen und die Entdeckung von Fehlern erleichtern, insbesondere bei komplexen Modulen.</p>
                        
                        <p>Um sicherzustellen, dass dein Modul reibungslos funktioniert, solltest du es mindestens in folgender Umgebung testen:</p>
                        
                        <ul>
                            <li>Die aktuellste stabile Version des modified Shops</li>
                            <li>Die aktuellste von modified unterstützte PHP Version</li>
                            <li>Die aktuellste stabile Version des MMLC</li>
                        </ul>
                    </section>
                        
                    <section>
                        <h3 id="update-dependencies">
                            Abhängigkeiten in der moduleinfo.json kontrollieren und aktualisieren
                            <a href="#update-dependencies" class="anchor">#</a>
                        </h3>

                        <p>Aktualisiere deine <code>moduleinfo.json</code> Datei. Hier solltest du als erstes die folgenden Versionen eintragen, unter denen du das Modul getestet hast.</p>

                        <ul>
                            <li>MMLC Version</li>
                            <li>PHP Version</li>
                            <li>modified Version</li>
                        </ul>
                    </section>
                        
                    <section>
                        <h3 id="create-changelog">
                            Changelog Eintrag erstellen
                            <a href="#create-changelog" class="anchor">#</a>
                        </h3>

                        <p>Du kannst als Vorlage folgendes Dokument verwenden: <a href="https://github.com/ModifiedCommunityModules/recover-cart-sales/blob/master/changelog.md">https://github.com/ModifiedCommunityModules/recover-cart-sales/blob/master/changelog.md</a></p>
                    </section>
                        
                    <section>
                        <h3 id="check-log-files">
                            Fehlermeldungen in Logs kontrollieren und vermeiden
                            <a href="#check-log-files" class="anchor">#</a>
                        </h3>

                        <p>Eine sorgfältige Überwachung und Minimierung von Fehlermeldungen in den Logdateien ist ein wichtiger Schritt, um sicherzustellen, dass dein Modul reibungslos funktioniert und die Benutzererfahrung nicht beeinträchtigt wird.</p>
                        
                        <p>Begebe dich in das Verzeichnis <code>log</code> in deines modified Systems, in dem Protokolldateien (Logs) gespeichert werden. Dein Ziel sollte darin bestehen, die Anzahl der ERROR, WARNING oder NOTICE Meldungen, die von deinem Modul erzeugt werden, zu minimieren. Obwohl es nicht immer möglich ist, alle Fehlermeldungen zu vermeiden, ist es dennoch von großer Bedeutung, sie auf ein Minimum zu reduzieren.</p>
                    </section>
                        
                    <section>
                        <h3 id="create-localization">
                            Lokalisierung und Übersetzungen erstellen
                            <a href="#create-localization" class="anchor">#</a>
                        </h3>

                        <p>Die Bereitstellung von mehrsprachiger Unterstützung für dein Modul ist ein wesentlicher Schritt, um sicherzustellen, dass es in einer breiteren Benutzerbasis effektiv genutzt werden kann. Obwohl das modified System hauptsächlich im deutschen Sprachraum eingesetzt wird, gibt es dennoch eine internationale Gemeinschaft von Nutzern, die von dieser zusätzlichen Funktionalität profitieren kann. Passe dein Modul mindestens für folgende Sprachen an:</p>
                        
                        <ul>
                            <li>Deutsch</li>
                            <li>Englisch</li>
                        </ul>
                    </section>
                        
                    <section>
                        <h3 id="create-docs-install">
                            Installationsanleitung erstellen 
                            <a href="#create-docs-install" class="anchor">#</a>
                        </h3>

                        <p>Erstelle eine Installationsanleitung. Eine klare und umfassende Installationsanleitung ist von entscheidender Bedeutung, um die reibungslose Integration deines Moduls in die Shop-Umgebung zu gewährleisten. Du kannst die <a href="https://github.com/ModifiedCommunityModules/recover-cart-sales/blob/master/docs/install.md">Installationsanleitung für das Offene Warenkörbe Modul</a> als Vorlage verwenden.</p>

                        <p>Im MMLC kannst du dazu eine Markdown-Datei mit dem Namen <code>install.md</code> im Verzeichnis <code>docs</code> erstellen. Das Verzeichnis muss sich im Root-Verzeichnis des Moduls befinden.</p>
                    </section>
                        
                    <section>
                        <h3 id="create-docs-manual">
                            Bedienungsanleitung erstellen
                            <a href="#create-docs-manual" class="anchor">#</a>
                        </h3>

                        <p>Erstelle eine Bedienungsanleitung. Die Erstellung einer umfassenden Bedienungsanleitung für dein Modul ist von großer Bedeutung, um Benutzern bei der optimalen Nutzung deiner Erweiterung zu helfen.</p>

                        <p>Im MMLC kannst du dazu eine Markdown-Datei mit dem Namen <code>usage.md</code> im Verzeichnis <code>docs</code> erstellen. Das Verzeichnis muss sich im Root-Verzeichnis des Moduls befinden.</p>
                    </section>
                    
                    <section>
                        <h3 id="create-docs-description">
                            Beschreibung erstellen
                            <a href="#create-docs-description" class="anchor">#</a>
                        </h3>

                        <p>
                            Erstelle eine Beschreibung deines Moduls. Die Erstellung einer umfassenden Modulbeschreibung ist von Bedeutung, da sie Benutzern bei der Auswahl der Module unterstützt und ihnen ein klares Verständnis darüber vermittelt, was sie von deinem Modul erwarten können. Eine sorgfältig ausgearbeitete Beschreibung sollte relevante Informationen enthalten, die sowohl die Funktionalität als auch den Nutzen deines Moduls hervorheben.
                        </p>

                        <p>Im MMLC kannst du dazu eine Markdown-Datei mit dem Namen <code>description.md</code> im Verzeichnis <code>docs</code> erstellen. Das Verzeichnis muss sich im Root-Verzeichnis des Moduls befinden.</p>
                    </section>

                    <section>
                        <h3 id="create-icon">
                            Modul Icon erstellen
                            <a href="#create-icon" class="anchor">#</a>
                        </h3>

                        <p>Erstelle ein Icon für den MMLC und für das Modul in den Systemeinstellungen des modified Shops. Verwende jeweils das gleiche Icon, damit der Nutzer das Modul leichter erkennt. Die Erstellung eines eindeutigen Icons für dein Modul ist von großer Bedeutung, da es die Wiedererkennung erheblich steigert.</p>

                        <p>Im MMLC kannst du dazu eine PNG-Datei mit dem Namen <code>icon.png</code> im Root-Verzeichnis deines Moduls erstellen.</p>
                    </section>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
