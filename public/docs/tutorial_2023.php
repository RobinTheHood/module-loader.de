<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>Dein erstes modified eCommerce Shop Modul prorgrammieren - MMLC - Modified Module Loader Client</title>
        <meta name="description" content="In diesem Tutorial lernst du, wie du ein eigenes Modul für einen modified eCommerce Shop programmierst.">

        <script src="/js/highlight.min.js"></script>
        <link rel="stylesheet" href="/css/github-dark.min.css">
    </head>
    <body>
        <div class="page-wrapper page-docs-tutorial">
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
                            <li><a href="#publish_module">Modul veröffentlichen</a></li>
                        </ol>
                    <nav>
                </aside>

                <main>
                    <section>
                        <h2>Tutorial: Dein erstes modified eCommerce Shop Modul mit dem MMLC programmieren</h2>
                        <p><strong>Bearbeitungszeit: ca. 25 min.</strong></p>

                        <p>In diesem Tutorial lernst du, wie du per Hand ein eigenes Modul für einen modified eCommerce Shop mit der Hilfe des MMLC programmieren kannst. Dazu werden dir alle Schritte gezeigt, die du hierfür kennen solltest. Es ist empfehlenswert, das einmal selber zu machen, um ein generelles Verständnis für die einzelnen Komponenten zu erlangen.</p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Dies ist die aktuelle Version des Tutorials. Wenn du die Version aus dem Jahr 2020 suchsts findest du diese hier: <a href="/docs/tutorial_2020.php">Tutorial Version 2022</a>
                        </div>

                        <div class="notice info">
                            <p><strong>Info:</strong> Mit der Anleitung <a href="https://docs.module-loader.de" target="_blank">"Einstieg in die Modulentwicklung für modified Shops"</a> bieten wir dir zusätzlich eine umfangreiche Dokumentation an, die dir dabei helfen soll, Module für das modified System zu programmieren.</a>
                        </div>
                    </section>

                    <section>
                        <h3 id="preconditions">
                            Vorbedingungen
                            <a href="#preconditions" class="anchor">#</a>
                        </h3>

                        <ul>
                            <li>Du hast eine lokale Enwicklungsumgebung aufgesetzt.</li>
                            <li>Du hast eine modified-shop Version 2.0.7.2 oder höher installiert.</li>
                            <li>Du hast den MMLC 1.21.0 oder höher installiert und kannst Module installieren.</li>
                            <li>Du hast einen Code Editor wie VS Code installiert.</li>
                            <li>(Optional aber empfohlen) Du hast git installiert und kannst die einfachen Basics.</li>
                        </ul>
                    </section>

                    <section>
                        <h3 id="lets_go">
                            Los gehts
                            <a href="#lets_go" class="anchor">#</a>
                        </h3>

                        <p>Stelle dir vor du hast eine Firma mit dem Namen "My Company" und diese Firma möchte ein neues Modul mit dem Namen "Mein erstes Modul" entwickeln.</p>
                    </section>

                    <section>
                        <h3 id="create_structure">
                            Verzeichnisstruktur erstellen
                            <a href="#create_structure" class="anchor">#</a>
                        </h3>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Wenn in diesem Tutorial das Root-Verzeichnis von deinem Modified Shop gemeint ist, schreiben wir <code>SHOP_ROOT</code>. In dem Root-Verzeichnis liegt dein <code>ModifiedModuleLoaderClient</code>. Wenn nichts anderes erwähnt wird, werden alle Pfadangaben in diesem Tutorial relativ zu dem Verzeichnis <code>ModifiedModuleLoaderClient</code> angegeben.</p>
                        </div>

                        <p>
                            Gehe in das Verzeichnis <code>ModifiedModuleLoaderClient</code>, welches du im Root-Verzeichnis deines Shops findest.
                        </p>

                        <p>
                            Wir erstellen als erstes einen neuen Vendor-Ordner im Verzeichnis <code>./Modules</code>. Den Ordner nennen wir <code>mycompany</code>. In diesem Vendor-Ordner liegen später alle Module, die du entwickelst. Module von anderen Entwicklern, liegen in deren jeweiligen Vendor-Ordnern, welche sich ebenfalls in dem Verzeichnis <code>./Modules</code> befinden. Wenn du noch keine Module von einem anderen Entwickler installiert hast, gibt es nur deinen Vendor-Ordner.
                        </p>

                        <p><img src="/images/tutorial_010.png" class="imagePreview" alt=""></p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Du (oder dein Unternehmen) solltet euch einen Vendor-Ordner-Namen aussuchen, den nur ihr verwendet. Verwende für den Namen nur kleine Buchstaben von <code>a</code> bis <code>z</code> und keine anderen Zeichen. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.</p>
                        </div>


                        <p>Als nächstes erstellen wir einen neuen Modul-Ordner im Verzeichnis <code>./Modules/mycompany</code>. Den Modul-Ordner nennen wir <code>my-first-module</code>.</p>

                        <p><img src="/images/tutorial_020.png" class="imagePreview" alt=""></p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Du kannst dir deinen Modul-Namen frei aussuchen. Am besten ist ein kurzer Name in englischer Sprache. Verwende für den Modul-Namen nur kleine Buchstaben von <code>a</code> bis <code>z</code> und <code>-</code>. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.</p>
                        </div>

                        <p>Bei dem Modul-Namen handelt es sich um den technischen Namen des Moduls. Das ist nicht der Name, der dem User später angezeigt wird. Den Anzeigename legen wir im nächsten Schritt fest. Die Verzeichnisstruktur sollte jetzt folgendermaßen aussehen:</p>

                        <?= loadExample2('/tutorial_005.txt', 'plain'); ?>
                    </section>

                    <section>
                        <h3 id="create_moduleinfo">
                            moduleinfo.json erstellen
                            <a href="#create_moduleinfo" class="anchor">#</a>
                        </h3>

                        <p>Nun erstellen wir in dem neuen Modul-Ordner die <code>moduleinfo.json</code> Datei.</p>

                        <p><img src="/images/tutorial_030.png" class="imagePreview" alt=""></p>

                        <p>Die <code>moduleinfo.json</code> Datei füllen wir mit folgendem Inhalt und vergiss die gescheiften Klammern am Anfang und am Ende nicht:</p>

                        <?= loadExample2('/tutorial_010.json', 'json'); ?>

                        <p>Das Feld <code>name</code> können wir frei wählen. Das ist der Anzeigename für den User im MMLC. Das Feld <code>archiveName</code> muss der Vendor-Ordner-Name und der Modul-Ordner-Name getrennt mit einem Slash-Zeichen sein. In unserem Fall ist das <code>mycompany/my-first-module</code>.</p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Trage im Array <code>modifiedCompatibility</code> die Modified-Shop Version ein, unter der du das Modul entwickelst. Steht hier eine andere Version, zeigt dir der MMLC an, dass das Modul nicht kompatible ist.</p>
                        </div>

                        <div class="notice info">
                            <p><strong>Info:</strong> Du kannst in dem Array <code>modifiedCompatibility</code> auch mehrere Modified Versionen eintragen, mit denen das Modul kompatible ist. Zum Beispiel: <code>"2.0.7.1", "2.0.7.2", "3.0.0"</code>. Teste dein Modul mit allen Modifed Versionen, die du hier einträgst, damit der User nicht enttäuscht ist, wenn diese Angaben nicht stimmen.</p>
                        </div>

                        <p>Nachdem du die Datei gespeichert hast, wird dir das Modul im MMLC unter "Sonstige Module" angezeigt. Gehe in den MMLC, um dir das Modul anzeigen zu lassen.</p>

                        <p><img src="/images/tutorial_040.png" class="imagePreview" alt=""></p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Damit das Modul unter einer anderen Kategorie angezeigt wird, kannst du in der <code>moduleinfo.json</code> das Feld <code>category</code> hinzufügen. Die möglichen Kategorien findest du unter <a href="/docs/moduleinfo.php#category">moduleinfo.json</a>.</p>
                        </div>
                    </section>

                    <section>
                        <h3 id="create_git_repository">
                            Git Repository erstellen (optional aber empfohlen)
                            <a href="#create_git_repository" class="anchor">#</a>
                        </h3>

                        <p>Wenn bis hierhin alles geklappt hat, ist es eine gute Gelegenheit den aktuellen Zwischenstand mit git zu speichern. Erstelle im Verzeichnis <code>./Modules/mycompany/my-first-module</code> ein neues git-Repository. Das kannst du z. B. über die Konsole machen oder mit einem git-Tool wie SourceTree. Hier das Beispiel mit der Konsole:</p>

                        <?= loadExample2('/tutorial_015.sh', 'bash'); ?>

                        <div class="notice info">
                            <p><strong>Tipp: </strong> Schau mal auf <a href="https://www.conventionalcommits.org/" target="_blank">https://www.conventionalcommits.org/</a> vorbei. Hier wird dir beschrieben, wie du gute Commit-Messages schreiben kannst. Die Seite erklärt dir auch, wieso wir das Kürzel <code>feat:</code> vor unserer Commit-Message verwendet haben.</p>
                        </div>
                    </section>
                    
                    <section>
                        <h3 id="create_system_files">
                            Dateien für ein System Modul erstellen
                            <a href="#create_system_files" class="anchor">#</a>
                        </h3>

                        <p>Wenn du es bis hier geschafft hast, können wir uns an die Arbeit machen, alle nötigen Dateien zu erstellen, die ein Modified Shop für ein System Modul benötigt.</p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Damit in diesem Tutorial nicht jedes Mal der ganze Verzeichnis-Pfad <code>./Modules/mycompany/my-first-module</code> ausgeschrieben werden muss, kürzen wir diesen Pfad ab jetzt mit <code>...</code> ab.</p>
                        </div>

                        <p>Wie wir in der <code>moduleinfo.json</code> Datei sehen können, haben wir für das Feld <code>sourceDir</code> das Verzeichnis <code>src</code> eingetragen. In diesem Verzeichnis befinden sich später alle Dateien, die der MMLC in das Modified Shop System bei einer Installation kopieren soll. Da wir dieses Verzeichnis noch nicht angelegt haben, legen wir nun das Verzeichnis <code>src</code> in <code>./Modules/mycompany/my-first-module</code> bzw. in <code>...</code> an.</p>

                        <p><img src="/images/tutorial_050.png" class="imagePreview" alt=""></p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Anstelle von <code>src</code> könntest du auch einen anderen Ordner-Namen wie <code>new_files</code>angeben. Damit alle Module möglichst einheitlich aufgebaut sind, ist die Konvention des MMLC diesen Ordner mit <code>src</code> zu benennen.</p>
                        </div>

                        <p>Für ein System Modul benötigt das Modified System eine PHP Datei in dem Verzeichnis <code>SHOP_ROOT/admin/includes/modules/system/</code>. Damit der MMLC diese Datei in dieses Verzeichnis kopiert, müssen wir das Verzeichnis in <code>.../new_files</code> anlegen. Wir legen also die Verzeichnisstruktur <code>.../new_files/admin/includes/modules/system/</code> an.</p>

                        <p><img src="/images/tutorial_060.png" class="imagePreview" alt=""></p>

                        <p>Jetzt können wir anfangen unsere erste PHP <strong>HookFile</strong> Datei zu erzeugen. Eine <strong>HookFile</strong> Datei ist eine Datei, die der MMLC bei der Installation eines Moduls in den Shop kopiert und nicht im Ordner <code>SHOP_ROOT/vendor-mmlc</code> landet. Der Dateiname einer <strong>HookFile</strong> sollte wenn möglich immer mit dem <strong>VendorPrefix</strong> beginnen. Für den <strong>VendorName</strong> <code>mycompany</code> bietet sich das <strong>VendorPrefix</strong> <code>mc</code> an.</p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Fast alle HookFiles verwenden die Namenskonvention <strong>HookFileName</strong> die wie folgt definiert ist: <code>VendorPrefix</code> <code>_</code> <code>ModuleName in snake_case</code> <code>.Dateisuffix</code>. Für weitere Informationen siehe <a href="/docs/naming_convention.php">Naming Convention</a>.</p>
                        </div>

                        <p>Mit diesem Wissen nennen wir die neue Datei <code>mc_my_first_module.php</code> und speichern diese in das eben erstellte Verzeichnis <code>.../src/admin/includes/modules/system/</code>. Jetzt sollte deine Verzeichnisstruktur folgendermaßen aussehen:</p>

                        <?= loadExample2('/tutorial_025.txt', 'plain'); ?>
                    </section>

                    <section>
                        <h3 id="std_class">
                            Die StdModule Klasse
                            <a href="#std_class" class="anchor">#</a>
                        </h3>

                        <p>In die Datei <code>mc_my_first_module.php</code> schreiben wir folgenden PHP Code:</p>

                        <?= loadExample2('/tutorial_020.php', 'php'); ?>

                        <p>Durch diese Datei wird uns das Module im Shopbackend unter dem Menüpunkt <i>Module > System Module</i> angezeigt. Damit diese Datei mit den wenigen Zeilen Programmcode auskommt, verwenden wir das Library Modul <code>Standard Modul für Modified</code>. Was dieses Modul genau macht und wie du es verwenden kannst ist unter XXX beschrieben. </p>

                        <p>Für uns ist erst einmal wichtig, dass wir das Modul mit der Konstanten <code>MODULE_MC_MY_FIRST_MODULE</code> initialisieren.</p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Beschreiben, wie sich die Konstante <code>MODULE_MC_MY_FIRST_MODULE</code> zusammen setzt. <i>Dokumentation in Arbeit ... Siehe docs.module-loader.de</i></p>
                        </div>
                    </section>
                    
                    <section>
                        <h3 id="add_dependencies">
                            Abhängige Module in die moduleinfo.json hinzufügen
                            <a href="#add_dependencies" class="anchor">#</a>
                        </h3>

                        <p>Damit wir das Modul <code>Standard Modul für Modified</code> verwenden können, müssen wir es als Abhängigkeit in unserer <code>moduleinfo.json</code> hinzufügen. Auch brauchen wir das <code>Composer Autoload</code> Library Modul. Beide Module fügen wir durch das <code>require</code> Array in unserer <code>moduleinfo.json</code> hinzu.</p>

                        <?= loadExample2('/tutorial_030.json', 'json'); ?>

                        <p>Danach sollte die gesamte <code>moduleinfo.json</code> wie folgt aussehen:</p>

                        <?= loadExample2('/tutorial_040.json', 'json'); ?>
                    </section>

                    <section>
                        <h3 id="create_lang_file">
                            Sprachdatei für das System-Modul erstellen
                            <a href="#create_lang_file" class="anchor">#</a>
                        </h3>

                        <p>User System Modul benötigt noch eine Sprachdatei, damit der User etwas angezeigt bekommt. Die Sprachdatei muss später in dem Verzeichnis <code>SHOP_ROOT/lang/german/modules/system</code> liegen. Damit der MMLC diese Datei in dieses Verzeichnis kopiert, müssen wir das Verzeichnis in <code>.../src</code> anlegen. Wir legen also die Verzeichnisstruktur <code>.../src/lang/german/modules/system/</code> an.</p>

                        <p><img src="/images/tutorial_070.png" class="imagePreview" alt=""></p>

                        <p>Die Sprachdatei bennen wir wieder nach der HookFileName Convention <code>mc_my_first_module.php</code> und speichern diese in das eben erstellte Verzeichnis <code>.../src/lang/german/modules/system/</code>. Jetzt sollte deine Verzeichnisstruktur folgendermaßen aussehen:</p>

                        <?= loadExample2('/tutorial_050.txt', 'plain'); ?>

                        <p>Der Inhalt der Datei sieht wie folgt aus:</p>

                        <?= loadExample2('/tutorial_060.php', 'php'); ?>
                    </section>

                    <section>
                        <h3 id="link_configuration">
                            MMLC config.php von copy auf link umstellen
                            <a href="#link_configuration" class="anchor">#</a>
                        </h3>

                        <p>Wenn du es bis hier geschafft hast, könnten wir jetzt bereits unser neues Modul mit dem MMLC installieren. Das Problem ist nur, dass wir bei jeder Änderung, die wir an einer Datei in unserem Ordner <code>src</code> machen würden, wieder erneut auf "Installieren" im MMLC klicken müssten. Das macht auf Dauer keinen Spaß.</p>

                        <p>Aus diesem Grund können wir bei der Entwicklung von Modulen den MMLC so konfigurieren, dass er die Dateien aus dem <code>src</code> Ordner nicht in den <code>SHOPT_ROOT</code> kopiert, sondern die Dateien nur verlinkt. Das hat den großen Vorteil, dass jede Änderung, die wir an einer Datei im Ordner <code>src</code> machen auch direkt in der entsprechenden Datei in <code>SHOP_ROOT</code> verfügbar wird. Lediglich, wenn wir eine neue Datei im Ornder <code>src</code> hinzufügen, müssen wir einmal auf "Installieren" oder auf "Änderungen verwerfen" im MMLC klicken, damit der MMLC auch diese neue Datei in den <code>SHOPT_ROOT</code> verlinkt.</p>

                        <p>Die Konfiguration hierfür können wir in der <code>/config/config.php</code>  deines MMLCs vornehmen. Ändere das Feld <code>installMode</code> auf den Wert <code>link</code>. Jetzt verlinkt der MMLC deine Dateien, anstatt die Dateien zu kopieren.</p>

                        <p>Deine <code>config.php</code> sollte wie folgt aussehen:</p>

                        <?= loadExample2('/tutorial_070.php', 'php'); ?>
                    </section>

                    <section>
                        <h3 id="install_module_at_mmlc">
                            Modul im MMLC installieren
                            <a href="#install_module_at_mmlc" class="anchor">#</a>
                        </h3>

                        <p>Nach dem wir alle Dateien für unser Systemmodul erstellt haben und die nötigen Einstellungen im MMLC gemacht haben, können wir unser Modul installieren. Dazu rufen wir wieder den MMLC auf, suchen in der Suche unser Moduel "Mein erstes Modul" und klicken es an. Jetzt können wir auf der Moduldetailseite unser Modul installieren.</p>
                    </section>

                    <section>
                        <h3 id="install_module_at_shop">
                            Modul im Shopbackend installieren
                            <a href="#install_module_at_shop" class="anchor">#</a>
                        </h3>

                        <p>Damit wir das Modul nutzen können, müssen wir unser Modul ebenfalls im Shopbackend installieren. Das Modul befindet sich unter <i>Admin > Module > System Module</i>. <i>(Dein Modul erscheint möglicherweise etwas weiter unten in der Liste.)</i></p>

                        <p><img src="/images/tutorial_090.png" class="imagePreview" alt=""></p>
                    </section>

                    <section>
                        <h3 id="publish_module">
                            Modul veröffentlichen
                            <a href="#publish_module" class="anchor">#</a>
                        </h3>

                        <p>Herzlichen Glückwunsch, wenn du es bis hierher geschaft hast. Du hast dein erstes Modul für den MMLC programmiert. Es ist nur sehr schade, wenn keiner etwas davon erfährt. Als nächstes kannst du dir anschauen, wie du dein Modul im MMLC veröffentlichst, so das es bei allen im MMLC erscheint, die den MMLC installiert haben.</p>

                        <p><a href="/docs/publish_module.php">Tutorial: Dein erstes Modul veröffentlichen</a></p>
                    </section>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
        <script>hljs.highlightAll();</script>
    </body>
</html>
