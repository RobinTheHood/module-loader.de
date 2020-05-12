<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tutorial - Developer - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MMLC - Modified Module Loader Client</h1>
            <a href="/docs/index.php">zurück zur Themenübersicht</a>


            <div class="notice danger">
                <strong>Hinweis:</strong> Das ist die erste Version dieses Tutorials. Mit deiner Hilfe können wir diese Seite weiter verbessern. Falls du Fehler entdeckst oder Fragen hast, schreibe uns eine E-Mail an <a href="mailto:info@module-loader.de">info@module-loader.de</a>.
            </div>

            <section id="intro">
                <h2>Tutorial: Dein erstes Modul mit dem MMLC programmieren</h2>
                <p><strong>Bearbeitungszeit: ca. 25 min.</strong></p>

                <p>In diesem Tutorial lernst du, wie du per Hand ein eigenes Modul mit der Hilfe des MMLC programmieren kannst. Dazu werden dir alle Schritte gezeigt, die du hierfür kennen solltest. Es ist empfehlenswert, das einmal selber zu machen, um ein generelles Verständnis für die einzelnen Komponenten zu erlangen.</p>

                <div class="notice info">
                    <strong>Info:</strong> Alternativ gibt es die Möglichkeit, sich die meiste Arbeit von einem Script abnehmen zu lassen. Dafür müsstest du lediglich <code>./scripts/createModule.sh mc mycompany my-first-module</code> in die Konsole eingeben. Das Script erzeugt dir alle Dateien mit Inhalt und ein fertiges System-Modul, dass du nach deinen Vorstellungen anpassen kannst. Weitere Informationen hierzu findest du unter <a href="/docs/create_module_script.php">Modul erstellen mit createModule.sh</a>.

                    <!-- oder die URL <code class="break">http://YOUR_DOMAIN/ModifiedModuleLoaderClient/?action=createModule&vendorPrefix=mc&vendorName=mycompany&moduleName=my-first-module</code> aufrufen, wenn du im MMLC eingeloggt bist. !-->
                </div>
            </section>

            <section id="content">
                <h3>Inhalt</h3>

                <ol>
                    <li><a href="#preconditions">Vorbedingungen</a></li>
                    <li><a href="#lets_go">Los gehts</a></li>
                    <li><a href="#create_structure">Verzeichnisstruktur erstellen</a></li>
                    <li><a href="#create_moduleinfo">moduleinfo.json erstellen</a></li>
                    <li><a href="#create_git_repository">Git Repository erstellen</a></li>
                    <li><a href="#create_system_files">Dateien für ein System Modul erstellen</a></li>
                    <li><a href="#std_class">Die StdModule Klasse</a></li>
                    <li><a href="#add_dependencies">Abhängige Module in die moduleinfo.json hinzufügen</a></li>
                    <li><a href="#create_lang_file">Sprachdatei für das System-Modul erstellen</a></li>
                    <li><a href="#link_configuration">MMLC config.php von copy auf link umstellen</a></li>
                    <li><a href="#install_module_at_mmlc">Modul im MMLC installieren</a></li>
                    <li><a href="#install_module_at_shop">Modul im Shopbackend installieren</a></li>
                </ol>
            </section>

            <section id="preconditions">
                <h3>Vorbedingungen</h3>

                <ul>
                    <li>Du hast eine <a href="/docs/local_dev_environment.php">lokale Enwicklungsumgebung</a> aufgesetzt.</li>
                    <li>Du hast eine modified-shop Version 2.0.3.0 oder höher installiert.</li>
                    <li>Du hast den MMLC 1.15.0 oder höher installiert und kannst Module installieren.</li>
                    <li>Du hast einen Code Editor wie VS Code, Atom etc.</li>
                    <li>(Optional aber empfohlen) Du hast git installiert und kannst die einfachen Basics.</li>
                </ul>
            </section>

            <section id="lets_go">
                <h3>Los gehts</h3>

                <p>Stelle dir vor du hast eine Firma mit dem Namen "My Company" und diese Firma möchte ein neues Modul mit dem Namen "Mein erstes Modul" entwickeln.</p>
            </section>

            <section id="create_structure">
                <h3>Verzeichnisstruktur erstellen</h3>

                <div class="notice warning">
                    <strong>Wichtig:</strong> Wenn in diesem Tutorial das Root-Verzeichnis von deinem Modified Shop gemeint ist, schreiben wir <code>SHOP_ROOT</code>. In dem Root-Verzeichnis liegt dein <code>ModifiedModuleLoaderClient</code>. Wenn nichts anderes erwähnt wird, werden alle Pfadangaben in diesem Tutorial relativ zu dem Verzeichnis <code>ModifiedModuleLoaderClient</code> angegeben.
                </div>

                <p>
                    Gehe in das Verzeichnis <code>ModifiedModuleLoaderClient</code>, welches du im Root-Verzeichnis deines Shops findest.
                </p>

                <p>
                    Wir erstellen als erstes einen neuen Vendor-Ordner im Verzeichnis <code>./Modules</code>. Den Ordner nennen wir <code>mycompany</code>. In diesem Vendor-Ordner liegen später alle Module, die du entwickelst. Module von anderen Entwicklern, liegen in deren jeweiligen Vendor-Ordnern, welche sich ebenfalls in dem Verzeichnis <code>./Modules</code> befinden. Wenn du noch keine Module von einem anderen Entwickler installiert hast, gibt es nur deinen Vendor-Ordner.
                </p>
                
                <img src="/images/tutorial_010.png">

                <div class="notice warning">
                    <strong>Wichtig:</strong> Du (oder dein Unternehmen) solltet euch einen Vendor-Ordner-Namen aussuchen, den nur ihr verwendet. Verwende für den Namen nur kleine Buchstaben von <code>a</code> bis <code>z</code> und keine anderen Zeichen. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.
                </div>


                <p>Als nächstes erstellen wir einen neuen Modul-Ordner im Verzeichnis <code>./Modules/mycompany</code>. Den Modul-Ordner nennen wir <code>my-first-module</code>.</p>
        
                <img src="/images/tutorial_020.png">

                <div class="notice warning">
                    <strong>Wichtig:</strong> Du kannst dir deinen Modul-Namen frei aussuchen. Am besten ist ein kurzer Name in englischer Sprache. Verwende für den Modul-Namen nur kleine Buchstaben von <code>a</code> bis <code>z</code> und <code>-</code>. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.
                </div>

                <p>Bei dem Modul-Namen handelt es sich um den technischen Namen des Moduls. Das ist nicht der Name, der dem User später angezeigt wird. Den Anzeigename legen wir im nächsten Schritt fest. Die Verzeichnisstruktur sollte jetzt folgendermaßen aussehen:</p>

                <?php echo loadExample('/tutorial_005.txt'); ?>
            </section>

            <section id="create_moduleinfo">
                <h3>moduleinfo.json erstellen</h3>

                <p>Nun erstellen wir in dem neuen Modul-Ordner die <code>moduleinfo.json</code> Datei.</p>

                <img src="/images/tutorial_030.png">

                <p>Die <code>moduleinfo.json</code> Datei füllen wir mit folgendem Inhalt und vergiss die gescheiften Klammern am Anfang und am Ende nicht:</p>

                <?php echo loadExample('/tutorial_010.json'); ?>

                <p>Das Feld <code>name</code> können wir frei wählen. Das ist der Anzeigename für den User im MMLC. Das Feld <code>archiveName</code> muss der Vendor-Ordner-Name und der Modul-Ordner-Name getrennt mit einem Slash-Zeichen sein. In unserem Fall ist das <code>mycompany/my-first-module</code>.</p>

                <div class="notice warning">
                    <strong>Wichtig:</strong> Trage im Array <code>modifiedCompatibility</code> die Modified-Shop Version ein, unter der du das Modul entwickelst. Steht hier eine andere Version, zeigt dir der MMLC an, dass das Modul nicht kompatible ist.
                </div> 

                <div class="notice info">
                    <strong>Info:</strong> Du kannst in dem Array <code>modifiedCompatibility</code> auch mehrere Modified Versionen eintragen, mit denen das Modul kompatible ist. Zum Beispiel: <code>"2.0.4.0", "2.0.4.1", "2.0.4.2"</code>. Teste dein Modul mit allen Modifed Versionen, die du hier einträgst, damit der User nicht enttäuscht ist, wenn diese Angaben nicht stimmen.
                </div>

                <p>Nachdem du die Datei gespeichert hast, wird dir das Modul im MMLC unter "Sonstige Module" angezeigt. Gehe in den MMLC, um dir das Modul anzeigen zu lassen.</p>

                <img class="border" src="/images/tutorial_040.png">

                <div class="notice info">
                    <strong>Info:</strong> Damit das Modul unter einer anderen Kategorie angezeigt wird, kannst du in der <code>moduleinfo.json</code> das Feld <code>category</code> hinzufügen. Die möglichen Kategorien findest du unter <a href="/docs/moduleinfo.php#category">moduleinfo.json</a>.
                </div>
            </section>

            <section id="create_git_repository">
                <h3>Git Repository erstellen (optional aber empfohlen)</h3>

                <p>Wenn bis hierhin alles geklappt hat, ist es eine gute Gelegenheit den aktuellen Zwischenstand mit git zu speichern. Erstelle im Verzeichnis <code>./Modules/mycompany/my-first-module</code> ein neues git-Repository. Das kannst du z. B. über die Konsole machen oder mit einem git-Tool wie SourceTree. Hier das Beispiel mit der Konsole:</p>

                <?php echo loadExample('/tutorial_015.sh'); ?>

                <div class="notice info">
                    <strong>Tipp: </strong> Schau mal auf <a href="https://www.conventionalcommits.org/" target="_blank">https://www.conventionalcommits.org/</a> vorbei. Hier wird dir beschrieben, wie du gute Commit-Messages schreiben kannst. Die Seite erklärt dir auch, wieso wir das Kürzel <code>feat:</code> vor unserer Commit-Message verwendet haben.
                </div>
            </section>

            <section id="create_system_files">
                <h3>Dateien für ein System Modul erstellen</h3>

                <p>Wenn du es bis hier geschafft hast, können wir uns an die Arbeit machen, alle nötigen Dateien zu erstellen, die ein Modified Shop für ein System Modul benötigt.</p>

                <div class="notice warning">
                    <strong>Wichtig:</strong> Damit in diesem Tutorial nicht jedes Mal der ganze Verzeichnis-Pfad <code>./Modules/mycompany/my-first-module</code> ausgeschrieben werden muss, kürzen wir diesen Pfad ab jetzt mit <code>...</code> ab.
                </div>

                <p>Wie wir in der <code>moduleinfo.json</code> Datei sehen können, haben wir für das Feld <code>sourceDir</code> das Verzeichnis <code>new_files</code> eingetragen. In diesem Verzeichnis befinden sich später alle Dateien, die der MMLC in das Modified Shop System bei einer Installation kopieren soll. Da wir dieses Verzeichnis noch nicht angelegt haben, legen wir nun das Verzeichnis <code>new_files</code> in <code>./Modules/mycompany/my-first-module</code> bzw. in <code>...</code> an.</p>

                <img class="border" src="/images/tutorial_050.png">

                <div class="notice info">
                    <strong>Info:</strong> Anstelle von <code>new_files</code> könntest du auch einen anderen Ordner-Namen angeben. Damit alle Module möglichst einheitlich aufgebaut sind, ist die Konvention des MMLC diesen Ordner mit <code>new_files</code> zu benennen.
                </div>

                <p>Für ein System Modul benötigt das Modified System eine PHP Datei in dem Verzeichnis <code>SHOP_ROOT/admin/includes/modules/system/</code>. Damit der MMLC diese Datei in dieses Verzeichnis kopiert, müssen wir das Verzeichnis in <code>.../new_files</code> anlegen. Wir legen also die Verzeichnisstruktur <code>.../new_files/admin/includes/modules/system/</code> an.</p>

                <img class="border" src="/images/tutorial_060.png">

                <p>Jetzt können wir anfangen unsere erste PHP <strong>HookFile</strong> Datei zu erzeugen. Eine <strong>HookFile</strong> Datei ist eine Datei, die der MMLC bei der Installation eines Moduls in den Shop kopiert und nicht im Ordner <code>SHOP_ROOT/vendor-no-composer</code> landet. Der Dateiname einer <strong>HookFile</strong> sollte wenn möglich immer mit dem <strong>VendorPrefix</strong> beginnen. Für den <strong>VendorName</strong> <code>mycompany</code> bietet sich das <strong>VendorPrefix</strong> <code>mc</code> an.</p>
                
                <div class="notice warning">
                    <strong>Wichtig:</strong> Fast alle HookFiles verwenden die Namenskonvention <strong>HookFileName</strong> die wie folgt definiert ist: <code>VendorPrefix</code> <code>_</code> <code>ModuleName in snake_case</code> <code>.Dateisuffix</code>. Für weitere Informationen siehe <a href="/docs/naming_convention.php">Naming Convention</a>.
                </div>

                <p>Mit diesem Wissen nennen wir die neue Datei <code>mc_my_first_module.php</code> und speichern diese in das eben erstellte Verzeichnis <code>.../new_files/admin/includes/modules/system/</code>. Jetzt sollte deine Verzeichnisstruktur folgendermaßen aussehen:</p>
                
                <?php echo loadExample('/tutorial_025.txt'); ?>
            </section>

            <section id="std_class">
                <h3>Die StdModule Klasse</h3>

                <p>In die Datei <code>mc_my_first_module.php</code> schreiben wir folgenden PHP Code:</p>

                <?php echo loadExample('/tutorial_020.php'); ?>

                <p>Durch diese Datei wird uns das Module im Shopbackend unter dem Menüpunkt <i>Module > System Module</i> angezeigt. Damit diese Datei mit den wenigen Zeilen Programmcode auskommt, verwenden wir das Library Modul <code>Standard Modul für Modified</code>. Was dieses Modul genau macht und wie du es verwenden kannst ist unter XXX beschrieben. </p>
                
                <p>Für uns ist erst einmal wichtig, dass wir das Modul mit der Konstanten <code>MODULE_MC_MY_FIRST_MODULE</code> initialisieren.</p>

                <div class="notice warning">
                    <strong>Wichtig:</strong> Beschreiben, wie sich die Konstante <code>MODULE_MC_MY_FIRST_MODULE</code> zusammen setzt. <i>Dokumentation in Arbeit ...</i>
                </div>
            </section>

            <section id="add_dependencies">
                <h3>Abhängige Module in die moduleinfo.json hinzufügen</h3>

                <p>Damit wir das Modul <code>Standard Modul für Modified</code> verwenden können, müssen wir es als Abhängigkeit in unserer <code>moduleinfo.json</code> hinzufügen. Auch brauchen wir das <code>Composer Autoload</code> Library Modul. Beide Module fügen wir durch das <code>require</code> Array in unserer <code>moduleinfo.json</code> hinzu.</p>

                <?php echo loadExample('/tutorial_030.json'); ?>

                <p>Danach sollte die gesamte <code>moduleinfo.json</code> wie folgt aussehen:</p>

                <?php echo loadExample('/tutorial_040.json'); ?>
            </section>

            <section id="create_lang_file">
                <h3>Sprachdatei für das System-Modul erstellen</h3>

                <p>User System Modul benötigt noch eine Sprachdatei, damit der der User etwas angezeigt bekommt. Die Sprachdatei muss später in dem Verzeichnis <code>SHOP_ROOT/lang/german/modules/system</code> liegen. Damit der MMLC diese Datei in dieses Verzeichnis kopiert, müssen wir das Verzeichnis in <code>.../new_files</code> anlegen. Wir legen also die Verzeichnisstruktur <code>.../new_files/lang/german/modules/system/</code> an.</p>

                <img class="border" src="/images/tutorial_070.png">

                <p>Die Sprachdatei bennen wir wieder nach der HookFileName Convention <code>mc_my_first_module.php</code> und speichern diese in das eben erstellte Verzeichnis <code>.../new_files/lang/german/modules/system/</code>. Jetzt sollte deine Verzeichnisstruktur folgendermaßen aussehen:</p>
                
                <?php echo loadExample('/tutorial_050.txt'); ?>

                <p>Der Inhalt der Datei sieht wie folgt aus:</p>

                <?php echo loadExample('/tutorial_060.php'); ?>
            </section>

            <section id="link_configuration">
                <h3>MMLC config.php von copy auf link umstellen</h3>

                <p>Wenn du es bis hier geschafft hast, könnten wir jetzt bereits unser neues Modul mit dem MMLC installieren. Das Problem ist nur, dass wir bei jeder Änderung, die wir an einer Datei in unserem Ordner <code>new_files</code> machen würden, wieder erneut auf "Installieren" im MMLC klicken müssten. Das macht auf Dauer keinen Spaß.</p>
                    
                <p>Aus diesem Grund können wir bei der Entwicklung von Modulen den MMLC so konfigurieren, dass er die Dateien aus dem <code>new_files</code> Ordner nicht in den <code>SHOPT_ROOT</code> kopiert, sondern die Dateien nur verlinkt. Das hat den großen Vorteil, dass jede Änderung, die wir an einer Datei im Ordner <code>new_files</code> machen auch direkt in der entsprechenden Datei in <code>SHOP_ROOT</code> verfügbar wird. Lediglich, wenn wir eine neue Datei im Ornder <code>new_files</code> hinzufügen, müssen wir einmal auf "Installieren" oder auf "Änderungen verwerfen" im MMLC klicken, damit der MMLC auch diese neue Datei in den <code>SHOPT_ROOT</code> verlinkt.</p>

                <p>Die Konfiguration hierfür können wir in der <code>/conifg/config.php</code>  deines MMLCs vornehmen. Ändere das Feld <code>installMode</code> auf den Wert <code>link</code>. Jetzt verlinkt der MMLC deine Dateien, anstatt die Dateien zu kopieren.</p>
                
                <p>Deine <code>config.php</code> sollte wie folgt aussehen:</p>

                <?php echo loadExample('/tutorial_070.php'); ?>
            </section>

            <section id="install_module_at_mmlc">
                <h3>Modul im MMLC installieren</h3>
                <p>Nach dem wir alle Dateien für unser Systemmodul erstellt haben und die nötigen Einstellungen im MMLC gemacht haben, können wir unser Modul installieren. Dazu rufen wir wieder den MMLC auf, suchen in der Suche unser Moduel "Mein erstes Modul" und klicken es an. Jetzt können wir auf der Moduldetailseite unser Modul installieren.</p>

                <!--
                <img class="border" src="">
                
                <p><i>Dokumentation in Arbeit ...</i></p>
                !-->
            </section>

            <section id="install_module_at_shop">
                <h3 id="">Modul im Shopbackend installieren</h3>
                <p>Damit wir das Modul nutzen können, müssen wir unser Modul ebenfalls im Shopbackend installieren. Das Modul befindet sich unter <i>Admin > Module > System Module</i>. <i>(Dein Modul erscheint möglicherweise etwas weiter unten in der Liste.)</i></p>

                <img class="border" src="/images/tutorial_090.png">
            </section>

            <!--
            <section>
                <h3 id="">Sonstige Themen (optional)</h3>
                <p>- Language-Datei anpassen ...</p>
                <p>- Syste Modul Config hinzufügen ...</p>
                <p>- Admin Datei hinzufügen ...</p>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>
            !-->
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
