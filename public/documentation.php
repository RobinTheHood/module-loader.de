<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dokumentation / Anleitung - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MMLC - Modified Module Loader Client</h1>
            <a href="/">zurück zur Startseite</a>

            <p><i>Du bist Entwickler und möchtest Module entwickeln, dann schau dir die <a href="/docs/index.php">Information für Entwickler</a> an.</i></p>

            <h2>ModifiedModuleLoaderClient Anleitung</h2>

            <p>Diese Anleitung beschreibt dir den Umgang mit dem ModifiedModuleLoderClient (MMLC). Beim MMLC handelt es sich um die Clientvariante des ModifiedModuleLoaders (MML), die du dir auf deinem Server in deinen Shop installierst. Die Clientvariante kommuniziert per API mit einer Servervariante des ModifiedModuleLoaders. Der MMLC erreicht diese API unter <code>app.module-loader.de</code>. Die Servervariante musst und kannst du nicht installieren.</p>

            <h3>Community / Forum / Chat</h3>
            Wenn du zusätzliche Hilfe benötigst, stelle deine Frage sehr gerne auf <a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc</a>. Wir beantworten sie dir gerne. Wenn du dich fragst, wieso wir Discord verwenden, findest du hier die <a target="_blank" href="https://discord.com/open-source">Antwort auf deine Frage</a>.

            <h3>Installation</h3>

            <p>In diesem Abschnitt wird beschrieben, wie du den MMLC in deinen Shop installierst. Die Installation ist ganz einfach. Folgende Schritte musst du durchführen:</p>

            <p><i>Hinweis: In der folgenden Anleitung musst du <code>www.dein-shop.tld</code> durch deine Shop-Url ersetzen.</i></p>

            <ol>
                <li>Lade dir die <strong>mmlc_installer.php</strong> Datei kostenlos herunter. <a href="/download.php">Download Link</a></li>
                <li>Kopiere die <strong>mmlc_installer.php</strong> Datei in das Root-Verzeichnis deines Shops. Z. B. mit einem FTP-Client.</li>
                <li>Rufe den Installer im Browser über <strong>www.dein-shop.tld/mmlc_installer.php</strong> auf.</li>
                <li>Lege einen Benutzernamen und ein Passwort deiner Wahl für den Zugang zum MMLC fest.</li>
                <li>Nach der Installation erreichst du den MMLC unter <strong>www.dein-shop.tld/ModifiedModuleLoaderClient</strong>.</li>
            </ol>

            <h3>Deinstallation</h3>

            <p>Bereits installierte Module funktionieren auch nach der Deinstallation des MMLCs, falls du diese Module nicht vorher deinstallierst. Für eine komplette Deinstallation solltest du zuerst alle Module, die du mit dem MMLC installiert hast deinstallieren. Dieser Schritt ist optional, wird aber empfohlen, wenn du dein Shopsystem in den Zustand vor der Installation des MMLCs bringen möchtest. Danach kannst du einfach das Verzeichnis <code>/ModifiedModuleLoderClient</code> im Root-Verzeichnis deines Shops löschen. In diesem Verzeichnis befinden sich sämtliche Dateien zum MMLC.</p>

            <p><i>Tipp: In dem Root-Verzeichnis deines Shops, kann je nachdem welche Module du installiert hast, dass Verzeichnis <code>vendor-no-composer</code> installiert worden sein. Wenn du alle Module deinstalliert hast, sollte dieses Verzeichnis leer sein. Möchtest du den MMLC und all deine Module komplett entfernen, bietet es sich an zu kontrollieren, ob das Verzeichnis <code>vendor-no-composer</code> leer ist.</i></p>

            <h3>Allgemein</h3>

            <p>In diesem Abschnitt erfährst du einige Grundlagen zum MMLC. Wenn du den MMLC noch nicht installiert hast, lies dir den <em>Abschnitt „Installation“</em> durch.</p>

            <h4>Verzeichnisstruktur</h4>

            <p>In diesem Abschnitt erfährst, du wie die Verzeichnisstruktur unter <code>/ModifiedModuleLoderClient</code> aufgebaut ist und wozu diese dienen.</p>

            <ul>
                <li><strong>Archives</strong> - Beinhaltet die geladenen Module als gepackte <code>.tar</code> Dateien.</li>
                <li><strong>config</strong> - Beinhaltet Kofigurationsdateien wie z. B. die <code>config.php</code> Datei.</li>
                <li><strong>Modules</strong> - Beinhaltet die geladenen Module geordnet nach Entwickler.</li>
                <li><strong>scripts</strong> - Beinhaltet Scriptdateien für Entwickler, mit denen diese Module erstellen können.</li>
                <li><strong>src</strong> - Beinhaltet den Programmcode des MMLC.</li>
                <li><strong>vendor</strong> - Beinhaltet Programmbibliotheken, die der MMLC benötigt.</li>
            </ul>

            <p>Einige Module installieren zudem neue Programmdateien in das Verzeichnis <code>vendor-no-composer</code>, welches dazu im Root-Verzeichnis deines Shops angelegt wird.</p>

            <h4>Woher kommen die Module?</h4>

            <p>Die Module werden von unterschiedlichen Entwicklern für den MMLC programmiert. Die Servervariante des ModifiedModuleLoaders unter app.module-loader.de weiß, wo diese Entwickler ihre Module für den ModifiedModuleLoader bereitgestellt haben. Rufst du deinen MMLC auf deinem Server auf, fordert dein MMLC über eine API die Servervariante unter app.module-loader.de dazu auf, ihm Informationen über diese Module zu liefern. Wenn du ein Modul installierst, lädt dein MMLC das entsprechende Modul von app.module-loader.de und speichert es auf deinem Server in dem Verzeichnis <code>/ModifiedModuleLoderClient/Modules</code> ab.</p>

            <h4>Modulstatus</h4>

            <p>Ein Modul kann sich in einem der folgenden Status befinden:</p>

            <ul>
                <li><strong>Nicht geladen</strong> - Das Modul befindet sich nicht auf deinem Server.</li>
                <li><strong>Geladen</strong> - Das Modul befindet sich auf deinem Server unter <code>/ModifiedModuleLoderClient/Modules</code> ist aber nicht installiert.</li>
                <li><strong>Installiert</strong> - Das Modul befindet sich auf deinem Server und ist installiert.</li>
                <li><strong>Bearbeitet</strong> - Das Modul befindet sich auf deinem Server, ist installiert und du hast Moduldateien bearbeitet.</li>
            </ul>


            <h4>Modulversionen</h4>

            <p>Die Module des MMLCs können in unterschiedlichen Versionen vorliegen. Wird z. B. ein Programmfehler in einer Version entdeckt und korrigiert oder eine neue Funktion zu einem Modul hinzugefügt, wird dir das Modul in einer neuen Version zur Verfügung gestellt. Eine neue Version kannst du durch ein Update installieren. Schaue dir hierfür den <em>Abschnitt „Ein installiertes Modul aktualisieren“</em> an. Der MMLC verwendet für die Nummerierung der Versionen „Semantic Versioning“. Information hierzu findest du unter <a target="_blank" href="https://semver.org/lang/de/">https://semver.org/lang/de/</a></p>

            <h4>Abhängigkeiten</h4>

            <p>Die Module im MMLC können von anderen Modulen abhängen. Wenn du ein Modul installierst, werden automatisch alle abhängigen Module mitinstalliert. Dadurch, dass Module im MMLC auf die Funktionalität von anderen Modulen aufbauen können, lassen sich schneller, einfacher und fehlerfreier neue Module von unterschiedlichen Entwicklern erstellen, da nicht jeder Entwickler das Rad neu erfinden muss. Wie du dir die Abhängigkeiten zu einem Modul anzeigen lassen kannst, erfährst du im <em>Abschnitt „Modulinformationen anzeigen &gt; Tab - Details“</em>.</p>

            <h4>Library Module</h4>

            <p>Häufig haben Module des MMLCs sogenannte „Library Module“ als Abhängigkeiten. Library Module sind oft Module, die dein Shopsystem um nicht für dich sichtbare neue Funktionen erweitert, aber auf die Modulentwickler zugreifen können, um einfacher und schneller neue tolle Module zu entwickeln. Der MMLC handhabt Library Module genau so wie alle anderen Module. Bei der Bezeichnung „Library Modul“ handelt es sich also lediglich um den Namen einer Kategorie von Modulen, die nicht direkt sichtbar neue Funktionen für dich im Shop bereitstellen. In der Regel wird es nicht nötig sein ein Library Modul direkt zu installieren. Diese werden automatisch als Abhängigkeit anderer Module mitinstalliert.</p>

            <h4>Passwort manuell aktualiseren</h4>

            <p>Es kann passieren, dass du dich nicht mehr an deine Zugangsdaten (Benutzername oder Passwort) erinnerst, die du für den Zugang zum MMLC auf deinem Server benötigst. In diesem Fall kannst du die Zugangsdaten in der <code>config.php</code> des MMLCs aktualisieren. Hiefür musst du dir ein neues Passwort generieren. Das kannst du in der Console / Shell deines Betriebsystems mit folgendem Befehl machen:</p>

            <p><i>Hinweis: Du musst <strong>dein-neues-passwort</strong> durch ein Passwort deiner Wahl ersetzen.</i></p>

            <code class="block">php -r 'echo password_hash("dein-neues-passwort", PASSWORD_DEFAULT) . "\n";'</code>

            <p>Mit diesem Befehl wurde dein Passwort sicher verschlüsselt und unleserlich gemacht (man sagt auch gehashed). Kopiere anschließend diese kryptisch aussehende Zeichenkette (Hash) und ersetze damit in der Datei <code>/ModifiedModuleLoaderClient/config/config.php</code> den alten Hash im Eintrag <code>password => "..."</code>.</p>

            <h3>Übersichtsseite der Module</h3>

            <p>Wenn du den MMLC aufrufst gelangst du zuerst auf die Übersichtsseite, auf der <strong>alle</strong> Module die für deinen Shop zur Auswahl stehen aufgelistet sind. Die Module werden in der Übersicht gruppiert nach ihrer Kategorie angezeigt.</p>

            <p><em>Hinweis: Module die speziell für einen bestimmten Kunden entwickelt wurden, werden hier nur abhängig vom passenden AccessToken angezeigt. Siehe dazu den Abschnitt „AccessToken einrichten“</em>.</p>

            <h4>Suche nach Modulen</h4>

            <p>Um schneller ein bestimmtes Modul zu finden, kannst du über die Suche nach dem Modulnamen oder nach dem Archivnamen suchen. Der Archivname wird im <em>Abschnitt „Modulinformationen anzeigen &gt; Tab - Details“</em> beschrieben.</p>

            <h3>Modulinformationen auf der Modul-Detailseite</h3>

            <p>Klickst du ein Modul an, kommst du auf die Modul-Detailseite. Hier kannst du dir weitere Informationen (wie Beschreibungen oder Screenshots) zu dem Modul ansehen und das Modul laden, installieren, aktualisieren, reparieren oder deinstallieren.</p>

            <p>Auf der Modul-Detailseite sind die Informationen zum Modul in mehrere Tabs aufgeteilt. Im folgendem Abschnitt wird beschrieben, welche Informationen dir in dem jeweiligen Tab bereitgestellt werden.</p>

            <h4>Tab - Übersicht</h4>

            <ul>
                <li><strong>Version</strong> - Zeigt dir die ausgewählte Version des Moduls in Semver Konvention an. (<a target="_blank" href="https://semver.org/lang/de/">https://semver.org/lang/de/</a>)</li>
                <li><strong>Preis</strong> - Zeigt dir den Kaufpreis bei kostenplfichtigen Modulen an.</li>
                <li><strong>Kompatible mit Modified</strong> - Zeigt dir an, mit welchen Versionen des Shopsystems das Modul getestet wurde.</li>
                <li><strong>Entwickler</strong> - Zeigt dir den Entwickler an, von dem das Modul hergestellt wurde.</li>
                <li><strong>Beschreibung</strong> - Gibt dir einen Überblick über die Funktionen des Moduls.</li>
            </ul>

            <h4>Tab - Installation</h4>

            <p>Hier ist die Installtationanleitung des Moduls hinterlegt. Zu beachten ist auch, dass oft die Installationsanleitungen der Abhängigen Module <i>(siehe Abschnitt „Abhängigkeiten“ und Abschnitt „Modulinformationen anzeigen &gt; Tab Details“)</i> berücksichtigt werden müssen. Sollten für ein Modul Anpassungen an deinem Template nötigt sein, werden hier auch die Anpassungen beschrieben und erklärt, die du an deinem Template vornehmen musst. Am Ende finden sich die Infomationen zur Deinstallation des Moduls.</p>

            <h4>Tab - Bedienung</h4>

            <p>Hier ist die Bediengsanleitung des Modul hinterlegt.</p>

            <h4>Tab - Änderungsprotokoll</h4>

            <p>Das Änderungsprotokoll ist ein typisches Changelog. Hier kannst du dir die Änderungen, die neuen Funktionen und die behobenen Fehler je Version des Moduls ansehen.</p>

            <h4>Tab - Details</h4>

            <ul>
                <li><strong>Archivname</strong> - Zeigt dir den technischen Namen des Moduls an. Er setzt sich aus <i>VENDOR-NAME/MODULE-NAME</i> zusammen.</li>
                <li><strong>Version</strong> - Zeigt dir die ausgewählte Version des Moduls in Semver Konvention an. (<a target="_blank" href="https://semver.org/lang/de/">https://semver.org/lang/de/</a>)</li>
                <li><strong>Kompatible mit Modified</strong> - Zeigt dir an, mit welchen Versionen des Shopsystems das Modul getestet wurde.</li>
                <li><strong>Alle Versionen</strong> - Listet dir alle verfügbaren Versionen des Moduls auf. Klicke eine Version an um mehr Informationen zu erhalten.</li>
                <li><strong>Benötigt</strong> - Listet dir alle Module auf, die das Modul benötigt um korrekt zu arbeiten.</li>
                <li><strong>Benutzt von</strong> - Listet dir alle installierte Module auf, die dieses Modul verwenden.</li>
            </ul>

            <h4>Tab - Änderungen (nicht immer sichtbar)</h4>

            <p>Wenn du an den installierten Dateien eines Moduls Änderungen vorgenommen hast (z. B. um den Programmcode des Moduls an deine Bedürfnisse anzupassen), werden dir hier alle Änderungen angezeigt, die du an dem Modul vorgenommen hast. Geänderte Module können nicht aktualisiert werden. Hierzu musst du das Modul zuvor reparieren. Das bedeutet, dass alle Änderungen die du an dem Modul vorgenommen hast wieder rückgängig gemacht werden. Das Reparieren von Modulen kann der MMLC automatisch mit einem Klick für dich übernehmen. Schaue dir hierfür den <em>Abschnitt „Ein Modul reparieren“</em> an.</p>

            <h3>Ein neues Modul installieren</h3>

            <p>Module kannst du auf der Modul-Detailseite installieren. Klicke hierfür auf den Button „Downlad & Install“ (falls du das Modul noch nicht geladen hast) oder klicke auf den Button „Installieren“ (falls du das Modul bereits geladen aber noch nicht installiert hast). Bei der Installtion durch „Downlad & Install“ wird das Modul vom Server (app.module-loader.de) in den MMLC auf deinem Server geladen und anschließend in deinen Shop installiert. Bei der Installation durch „Installieren“ wird das bereits geladene Modul lediglich in deinem Shop installiert, aber nicht von app.module-loader.de geladen.</p>

            <p>Ein kostenpflichtiges Modul lässt sich nur laden und installieren, nachdem der Entwickler dieses Modul für dich freigeschaltet hat. Es wird dir zunächst kein Button zur Installation angezeigt. Setze dich mit dem Entwickler eines kostenpflichtigen Moduls in Verbindung, damit er dir das gewünschte Modul freischalten kann, danach steht dir die Funktion „Downlad & Install“ zur Verfügung.</p>

            <p>Nachdem der MMLC das Modul erfolgreich geladen und installiert hast, musst du noch die Anweisungen aus der Installationsanleitung <em>(siehe Abschnitt „Modulinformationen anzeigen &gt; Tab - Installation“)</em> durchführen, um die installtion des Moduls abzuschließen. Oft musst du ein System-Modul aktivieren oder Anpassungen an deinem Template durchführen, damit das Modul seine Arbeit aufnehmen kann.</p>

            <p><i>Hinweis: Wenn ein Modul bei der Installation neue Templatedateien im <code>templates</code> Verzeichnis deines Shops hinzufügt, werden diese Dateien ebenfalls automatisch in jedem Template hinzugefügt. Bei einer Aktualisierung eines Moduls, werden bis auf Dateien im <code>tpl_modified</code> Template, keine anderen Templatedateien aktualisiert, damit deine Änderungen nicht verloren gehen.</i></p>

            <h3>Ein installiertes Modul aktualisieren / update</h3>

            Nach einem Update könnten Änderungen an dem Template nötig werden, damit das Modul funktioniert.

            <p><i>Dokumentation in Arbeit ...</i></p>

            <p><i>Hinweis: Wenn ein Modul bei der Installation neue Templatedateien im <code>templates</code> Verzeichnis deines Shops hinzufügt, werden diese Dateien ebenfalls automatisch in jedem Template hinzugefügt. Bei einer Aktualisierung eines Moduls, werden bis auf Dateien im <code>tpl_modified</code> Template, keine anderen Templatedateien aktualisiert, damit deine Änderungen nicht verloren gehen.</i></p>

            <h3>Ein Modul reparieren</h3>

            <p>Wenn du Änderungen an den Programmcodedateien eines Moduls vorgenommen oder welche gelöscht hast, kannst du das Modul reparieren. Auf der Modul-Detailseite wird dir dann der Button „Änderungen verwerfen“ angezeigt. Klickst du auf den Button „Änderungen verwerfen“ werden alle Änderungen an dem Modul, die du vorgenommen hast rückgängig gemacht. Änderungen an Templatedaten werden hierduch nicht rückgängig gemacht. Ausgenommen hiervon sind die Templatedateien im Template <code>tpl_modified</code>.</p> 
                
            <p><strong>ACHTUNG:</strong> Nachdem du „Änderungen verwerfen“ durchgeführt hast und das Modul wieder im Urzustand ist, kann der MMLC deine Änderungen nicht wieder herstellen. Du musst eine seperate Sicherung deiner Änderungen durchführen, falls du diese behalten möchtest. Du kannst dir vorher im Tab „Geänderte Dateien“ die Dateien ansehen, die durch dich geändert wurden und diese im Bedarfsfall sichern.</p>

            <h3>Ein Modul deinstalieren</h3>

            <p>Bei der Deinstallation werden die installierten Dateien des Moduls aus dem Shop entfernt. Das Modul ist aber weiterhin im Verzeichnis <code>/ModifiedModuleLoaderClient/Modules</code> vorhanden für den Fall, dass das Modul wieder installiert werden soll. Es befindet sich in dem Status geladen. Möchtest du das Modul komplett von deinem Server entfernen, musst du auf „Modul löschen“ klicken. Für eine erneute Installation musst du jetzt das Modul erneut laden.</p>

            <h3>AccessToken</h3>

            <p>Damit du im MMLC kostenpflichtige Module laden kannst, musst du ein AccessToken in der Konfigurationsdatei deines MMLCs hinterlegen. Mit diesem Token kann dein MMLC sich bei der Servervariante des ModifiedModuleLoaders unter app.module-loader.de identifizieren und die Servervariante weiß anhand deines AccessTokens, welche Module du laden darfst und welche nicht. Zudem gibt es auch Module, die z. B. speziell für einen bestimmten Kunden oder speziell nur für dich gedacht sind. Diese Module soll kein anderer Nutzer des MMLCs sehen können. Durch deinen AccessToken weiß die Servervariante, welche Module er dir anzeigen und bereitstellen darf und welche nicht.</p>

            <p>Ein AccessToken kann je nach Version deines MMLCs automatisch generiert werden oder es wird dir ein neuer AccessToken vom Modul-Entwickler beim Kauf eines Moduls mitgeteilt. Wie du diesen AccessToken in die Konfigurationsdatei einträgst beschreibt der nächste <em>Abschnitt „AccessToken einrichten“</em>.</p>

            <h4>AccessToken einrichten</h4>

            <p>Du kannst in deinem MMLC unter <code>System</code> in der Menüleiste überprüfen, ob du bereits einen AccessToken hinterlegt hast. Um einen AccessToken zu hinterlegen führe folgende Schritte durch:</p>

            <ol>
                <li>Gehe in das Verzeichnis <code>/ModifiedModuleLoaderClient/config</code>.</li>
                <li>Öffne die Datei <code>config.php</code> mit einem Texteditor.</li>
                <li>(optional) Suche die Zeile <code>"accessToken" =&gt; "",</code> oder füge Sie hinzu, wenn sie nicht vorhanden ist.</li>
                <li>Füge zwischen den leeren Anführungszeichen in <code>"accessToken" =&gt; "",</code> deinen AccessToken ein.</li>
                <li>Speichere die Datei.</li>
            </ol>

            <h3>Deinen MMLC aktualisieren</h3>

            <p>Wir arbeiten ständig an dem MMLC, um Fehler zu beheben oder neue Funktionen hinzuzufügen. Wenn eine neue Version des MMLCs vorliegt, kannst du deinen MMLC einfach selbst mit einem Klick unter dem Menüpunkt <code>System</code> aktualisieren. Der MMLC verwendet für die Nummerierung seiner Versionen „Semantic Versioning“. Information hierzu findest du unter <a target="_blank" href="https://semver.org/lang/de/">https://semver.org/lang/de/</a></p>

            <h3>Fehler und Patches</h3>

            <p>Leider kann es immer mal vorkommen, das Fehler auftauchen. Manche Fehler lassen sich auch leider nicht durch ein Update des MMLCs korrigieren. Für diesen Fall stellen wir Patches bereit, die den MMLC aktualisieren. Hier ist eine Auflistung der aktuellen Patches:</p>

            <ul>
                <li>1.12.0 - In dieser Version gibt es einen Fehler mit dem SelfUpdate des MMLCs, sodass der MMLC nicht ordnungsgemäß aktualisiert werden kann.</li>
            </ul>
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
