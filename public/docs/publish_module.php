<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>modified eCommerce Shop Modul veröffentlichen - Developer - MMLC - Modified Module Loader Client</title>
        <meta name="description" content="In diesem Tutorial lernst du, wie du dein modified eCommerce Shop Modul veröffentlichst.">
    </head>
    <body>
        <div class="page-wrapper page-docs-publish-module">
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
                            <li><a href="#git_plattform">Wähle deine Plattform</a></li>
                            <li>
                                <a href="#github_public_repository">GitHub - Öffentliches Repository</a>
                                <ul>
                                    <!-- <li><a href="#git">Eigener Git Server</a></li> -->
                                    <li><a href="#github_public_repository">Neues Repository erstellen</a></li>
                                </ul>
                            </li>
                            <li><a href="#github_private_repository">GitHub - Privates Repository</a></li>
                            <li><a href="#gitlab_public_repository">GitLab - Öffentliches Repository</a></li>
                            <li><a href="#gitlab_private_repository">GitLab - Privates Repository</a></li>
                            <li><a href="#tag_version">Versionsnummer vergeben</a></li>
                            <li><a href="#create_mmls_account">MMLS Accout erstellen</a></li>
                            <li><a href="#create_mmls_entry">MMLS Eintrag erstellen</a></li>
                            <li><a href="#update_mmls_entry">MMLS Eintrag aktualisieren</a></li>
                        </ol>
                    </nav>
                </aside>

                <main>
                    <section>
                        <h2>Tutorial: Dein erstes modified eCommerce Shop Modul veröffentlichen</h2>
                        <p><strong>Bearbeitungszeit: ca. 25 min.</strong></p>

                        <?php //equire_once '../inc/notice_work_in_progress.php'; ?>

                        <p>In diesem Tutorial lernst du, wie du dein modified eCommerce Shop Modul für den MMLC veröffentlichst. Durch eine Veröffentlichung steht allen MMLC-Nutzern dein Modul zum Download über den MMLC zur Verfügung.</p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Natürlich kannst du festlegen, ob ein Modul nur für bestimmte Nutzer sichtbar ist oder ob dein Modul kostenpflichtig erworben werden muss. Was du hierfür zusätzlich machen musst, erfährst du unter <a href="#">XXX</a>.</p>
                        </div>
                    </section>

                    <section>
                        <h3 id="preconditions">
                            Vorbedingungen
                            <a href="#preconditions" class="anchor">#</a>
                        </h3>

                        <p>Damit du mit diesem Tutorial starten kannst, benötigst du ein Modul, dass du für den MMLC vorbereitet hast. Wenn du noch kein Modul für den MMLC programmiert hast, zeigt dir folgendes Tutorial, wie du das machen kannst. <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a>.</p>

                        <p>Du musst dich in der Konsole / Eingabeaufforderung durch deine Verzeichnise mit dem Befehl <code>cd</code> navigieren können.</p>

                        <p>Zudem benötigst du für dieses Tutorial einige einfache Git-Grundlagen. Du solltest Git-Repositors initialisieren können, Commits in dein lokales Git-Repository machen können und dein Repository per push zu einem entfernten Server (wie GitHub, GitLab, etc.) senden können. Aus diesem Grund musst du Git auf deinem System installiert haben. In diesem Tutorial verwenden wir die Konsole, um Git-Befehle einzugeben und zu nutzen. Du kannst natürlich auch einen grafischen Git-Client deiner Wahl verwenden (wie z. B. SourceTree oder GitHub Desktop). In diesem Tutorial nutzen wir jedoch den üblichen Weg über die Konsole.</p>
                        
                        <p>Wenn du dich mit Git noch nicht auskennst, schaue dir ein paar Einsteiger-Tutorials im Internet an. Hier gibt es eine große Anzahl an guten Tutorials, die dir beim Erlernen von Git helfen. Du benötigst nur die gängigen Einsteiger-Themen, um mit diesem Tutorial zu starten.</p>
                    </section>
                        
                    <section>
                        <h3 id="lets_go">
                            Los gehts
                            <a href="#lets_go" class="anchor">#</a>
                        </h3>

                        <p>Stelle dir vor, du hast eine Firma mit dem Namen "My Company" und diese Firma möchte ihr neues Modul mit dem Namen "Mein erstes Modul" veröffentlichen. Wenn du noch kein Modul mit dem MMLC entwickelt hast, erfährst du hierzu mehr unter: <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a>.</p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Wenn in diesem Tutorial das Root-Verzeichnis von deinem Modified Shop gemeint ist, schreiben wir <code>SHOP_ROOT</code>. In dem Root-Verzeichnis liegt dein <code>ModifiedModuleLoaderClient</code>. Wenn nichts anderes erwähnt wird, werden alle Pfadangaben in diesem Tutorial relativ zu dem Verzeichnis <code>ModifiedModuleLoaderClient</code> angegeben. Zudem verwenden wir in diesem Tutorial als Beispiel das Modul aus dem <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a> mit dem <code>archiveName</code> <code>mycompany/my-first-module</code>.</p>
                        </div>
                    </section>
                        
                    <section>
                        <h3 id="git_plattform">
                            Wähle deine Plattform
                            <a href="#git_plattform" class="anchor">#</a>
                        </h3>

                        <p>Damit du ein Modul im MMLC veröffentlichen kannst, musst du dein Modul zunächst per Git hosten. Git ist ein sehr praktisches und wichtiges Werkzeug und gehört mittlerweile zur Standardausrüstung fast aller Entwickler. Du kannst eine beliebige Git-Hosting-Plattform verwedenen oder deinen eigenen Git-Server. Wichtig ist, dass du dein Git-Repository so konfigurieren kannst, dass eine externe Software dein Git-Repository clonen darf.</p>
                        
                        <p>Dieses Tutorial zeigt dir die nötigen Schritte für die beiden gängigsten Git-Hosting-Plattformen <strong>GitHub</strong> und <strong>GitLab</strong>. Wenn du nicht genau weißt, welche Plattform du verwenden sollst, empfehlen wir dir mit einem kostenlosen öffentlichen GitHub Repository zu starten. GitHub ist der größte und bekannteste Anbieter und du findest hier viel Hilfe, wenn du mal nicht weiter kommst.</p>

                        <ul>
                            <li><a href="#github_public_repository">GitHub - Öffentliches Repository</a></li>
                            <li><a href="#github_private_repository">GitHub - Privates Repository</a></li>
                            <li>GitLab - Offentliches Repository</li>
                            <li>GitLab - Privates Repository</li>
                        </ul>

                        <!-- <h4 id="git">Git</h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div> -->
                    </section>
                        
                    <section>
                        <h3 id="github_public_repository">
                            GitHub - Öffentliches Repository
                            <a href="#github_public_repository" class="anchor">#</a>
                        </h3>

                        <p>Wenn du bereits ein Account bei GitHub hast, kannst du diesen Account auch für deine Module verwenden, die du im MMLC veröffentlichen möchtest. Wenn du noch keinen Account bei GitHub hast, ist jetzt der Zeitpunkt, an dem du dir einen GitHub-Account erstellen musst, um mit diesem Tutorial weitermachen zu können. Du kannst diesen GitHub-Account auch jederzeit für Projekte verwenden, die du abseits des MMLCs realisierst. Nachdem du dir einen kostenlosen Account bei GitHub angelegt hast, geht's dann hier im Tutorial weiter.</p>

                        <h4 id="github_public_repository">Neues Repository erstellen</h4>
                        
                        <p>Als nächstes musst du ein öffentliches Git-Repository auf GitHub für dein Modul erstellen. Das Repository kannst du beliebig benennen, es bietet sich jedoch an, den technischen <a href="/docs/naming_convention.php">ModulNamen</a> <code>moduleName</code> deines Moduls zu verwenden. Im <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a> wurde der <code>moduleName</code> <code>my-first-module</code> verwendet.</p>

                        <p>Wähle <strong>Public</strong> als Einstellung für dein Repository aus und lasse alle anderen Optionen unausgewählt. Das erleichert uns die nächsten Schritte. Du kannst die von GitHub vorgeschlagenen Dateien noch später hinzufügen. Wenn du möchtest, kannst du jedoch schon an dieser Stelle eine kurze Beschreibung hinzufügen, was dein Modul kann. Das geht aber auch später und ist erst einmal nicht wichtig. Klicke dann auf <strong>Create repository</strong>.</p>

                        <p><img class="imagePreview" src="/images/Github_Oeffentliches_Repository_erstellen.png" alt="GitHub Öffentliches Repository erstellen"></p>

                        <p>Am besten du schaust jetzt einmal lokal auf deinem Rechner nach, ob du in deinem Modul bereits ein Git-Repository initialisiert hast. Dazu navigierst du mit der Konsole in dein Modul-Ordner und gibst da den Befehl <code>git status</code> ein.</p>

                        <?php echo loadExample('/publish_module_010.sh'); ?>


                        <!--
                        - Schauen ob bereits ein ein locales GitRepository initialisiert ist.
                        - Wenn ja: Remote hinzufügen 
                        - Wenn nein: Git Repository initialisieren und Remote hinzufügen
                        - Repository pushen
                        - Auf GitHub kontrollieren, ob push da ist
                        - Git local tag machen
                        - Git tag pushen
                        - Erwähnen das die Tags auch bei github angezeigt werden und dort gemacht werden können.
                        -->

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>


                        <p> Jetzt kannst du mit dem Schritt <a href="#tag_version">Versionsnummer vergeben</a> weitermachen.</p>
                    </section>
                        
                    <section>
                        <h3 id="github_private_repository">
                            GitHub - Privates Repository
                            <a href="#github_private_repository" class="anchor">#</a>
                        </h3>

                        <p>
                            Bei privaten GitHub Repositories musst du einen AccessKey erstellen, damit der MMLS Zugriff auf deine Repositories erhält. Einer Anleitung, wie du einen AccessKey auf GitHub erstellst erhällst du unter: <a href="https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line">https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line</a>.
                        </p>

                        <p>
                            Bei den Optionen reicht es aus, wenn du lediglich einen Haken bei <code>repo (Full control of private repositories)</code>setzt.
                        </p>

                        <p><img class="imagePreview" src="/images/Github_Private_Repository_Settings.png" alt="GitHub privates Repository"></p>

                        <p>
                            Jetzt kannst du auf dein Repository zugreifen, indem du vor <code>github.com/...</code> deinen GitHub <code>USER_NAME</code>, gefolgt von einem <strong>Doppelpunkt</strong>, gefolgt von deinem neuen <code>TOKEN</code>, gefolgt von einem <strong>@-Zeichen</strong> schreibst.
                        </p>

                        <p>
                            Hier ein Beispiel: <strong>https://<code>USER_NAME</code>:<code>TOKEN</code>@github.com/mycompany/my-first-module.git</strong>
                        </p>
                    </section>
                        
                    <section>
                        <h3 id="gitlab_public_repository">
                            GitLab - Öffentliches Repository
                            <a href="#gitlab_public_repository" class="anchor">#</a>
                        </h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h3 id="gitlab_private_repository">GitLab - Privates Repository</h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>
                    </section>
                        
                    <section>
                        <h3 id="tag_version">
                            Versionsnummer vergeben
                            <a href="#tag_version" class="anchor">#</a>
                        </h3>

                        <p>
                            Es ist wichtig, dass du deinem Modul eine oder mehrere Versionsnummern gibst. Versionen werden über <strong>git tags</strong> verwaltet. Das Format der Versionsnummer muss der <strong>Semantic Versioning (SemVer) Spezifikation</strong> entsprechen. Informationen zu SemVer findest du unter <a href="https://semver.org/lang/de/">semver.org</a>.
                        </p>

                        <p>
                            In der <strong>moduleinfo.json</strong> deines Moduls solltest du im Feld <code>version</code> den Wert <code>auto</code> eintragen. Diese Einstellung sorgt dafür, dass der MMLS sich an den Releases / Veröffentlichungen deines Git-Repositorys orientiert.
                        </p>

                        <p>
                            Einen neuen Release / eine Veröffentlichung machst du, indem du einen Commit mit einer Versionsnummer taggst. Wenn du z. B. dein Modul in der Version <code>1.0.0</code> veröffentlichen möchtest, wählst du einen passenden Commit aus und taggst diesen mit <code>1.0.0</code>.
                        </p>

                        <p>
                            Hier findest du ein <a href="https://github.com/RobinTheHood/modified-std-module/tags">Beispiel wie es beim Modul robinthehood/modified-std-module</a> gemacht wurde.
                        </p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Wenn du in deinem Git-Repository keine Versionsnummern vergibst, wird der MMLS keine Versionen finden, die er an den MMLC ausspielen kann.</p>
                        </div>
                    </section>
                        
                    <section>
                        <h3 id="create_mmls_account">
                            MMLS Accout erstellen
                            <a href="#create_mmls_account" class="anchor">#</a>
                        </h3>

                        <p>Account erstellen auf <a href="https://app.module-loader.de">app.module-loader.de</a></p>

                        <p>
                            Damit deine Module für alle MMLC Nutzer verfügbar werden, musst du dem MMLC mitteilen, wo der MMLC diese Module findet. Hierzu befragt der MMLC den Modified Module Loader Server (MMLS). Der MMLS ist die zentrale Vermittlungsstelle, welche die Module an alle MMLCs verteilt.
                        </p>

                        <p>
                            Wir erstellen hierzu einen Account bei <a href="https://app.module-loader.de">app.module-loader.de</a>. Du musst beim Erstellen deines Accounts einen <code>vendorName</code> wählen. Dieser <code>vendorName</code> muss der Gleiche sein, den du für deine Module verwendest. Im Root-Verzeichnis deiner Module befindet sich jeweils die <code>moduleinfo.json</code> Datei, die du erstellt hast. Hier gibt es einen Eintrag <code>archiveName</code>. Dieser Name ist zusammengesetzt aus <code>vendorName</code> / <code>moduleName</code>.
                        </p>

                        <div class="notice warning">
                            <p><strong>Wichtig:</strong> Du (oder dein Unternehmen) musst den <code>vendorNamen</code> deiner Module verwenden. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.</p>
                        </div>

                        <p><img src="/images/Create_MMLS_Account.png" class="imagePreview" alt="MMLS Account erstellen"></p>
                    </section>
                        
                    <section>
                        <h3 id="create_mmls_entry">
                            MMLS Eintrag erstellen
                            <a href="#create_mmls_entry" class="anchor">#</a>
                        </h3>

                        <p>Nachdem du dir einen Account im MMLS erstellt hast, kannst du dein Modul-Archive zum MMLS hinzufügen. Hierfür musst du die Werte für <code>type</code>, <code>moduleName</code> und <code>source</code> richtig ausfüllen, damit der MMLS und der MMLC dein Modul finden.</p>

                        <h4 id="type_value">type</h4>

                        <p>Hier kannst du <code>git</code>, <code>github</code> oder <code>gitlab</code> auswählen. Wähle hier die Plattform aus auf der sich dein Git-Repository befindet. Wenn deine Plattform nicht dabei ist oder du einen eigenen Git-Server betreibst wähle hier <code>git</code> aus.</p>

                        <h4 id="moduleName_value">moduelName</h4>

                        <p>Hier musst du den technischen <code>moduleName</code> eintragen, den du in deiner <code>moduleinfo.json</code> vergeben hast. In der <code>moduleinfo.json</code> findest du den <code>archiveName</code>. Dieser setzt sich zusammen aus deinem <code>vendorName</code> und dem vom MMLS benötigten <code>moduleName</code>. Mehr dazu finest du unter <a href="/docs/moduleinfo.php#archiveName">Die moduleinfo.json</a>.</p>

                        <h4 id="source_value">source</h4>

                        <p>Hier gibst du die Url zu deinem Git-Repository ein. Bei privaten nicht öffentlichen Repositories musst du zusätzlich zur Url oft einen Username und Token mit angeben. Wie das bei einem privaten Git-Repositiory auf GitHub funktioniert ist weiter oben in diesem Tutorial beschrieben.</p>

                        <p>Wenn du ein öffentliches Repository auf GitHub erstellt hast, kannst du die <code>https-url</code> zu deinem Repository direkt von GitHub kopieren. In unserem Beispiel wäre das die Url <code>https://github.com/RobinTheHood/my-first-module.git</code>. Das folgende Bild zeigt dir, wo auf GitHub du die Url findest. Wähle hier <code>HTTPS</code> aus.</p>

                        <p><img src="/images/Github_https_git_path.png" class="imagePreview" alt="MMLS Account erstellen"></p>

                        <p>Nun haben wir alle Daten für unseren neuen Eintrag zusammen. In unserem Beispiel mit dem öffentlichen GitHub-Repository, müssen wir die Eingabe wie im folgendem Screenshot dargestellt ausfüllen.</p>

                        <p><img src="/images/MMLS_add_new_github_public_entry.png" class="imagePreview" alt="MMLS mit Daten für ein GitHub Repository"></p>
                    </section>
                        
                    <section>
                        <h3 id="update_mmls_entry">
                            MMLS Eintrag aktualisieren
                            <a href="#update_mmls_entry" class="anchor">#</a>
                        </h3>

                        <p>Nachdem wir usneren Eintrag vollstänig ausgefüllt haben können wir uns alle nötigen Releases aus unserem Git-Repository holen.</p>

                        <p><img src="/images/MMLS_entry_before_first_release.png" class="imagePreview" alt="MMLS Eintrag vor dem ersten Update"></p>

                        <p>Dazu klicken wir auf Update. Nun synchronisiert der MMLS den Eintrag mit allen Tags/Versionen aus dem Git-Repository. Im folgendem Beispiel kannst du sehen, dass der MMLS jetzt die Version 0.1.0 erfolgreich kennt.</p>

                        <p><img src="/images/MMLS_entry_after_first_update.png" class="imagePreview" alt="MMLS Eintrag nach dem ersten Update"></p>
                    </section>

                    <!-- <section id="preconditions">
                        <h3>Vorbedingungen</h3>

                        <ul>
                            <li>Du hast eine <a href="/docs/local_dev_environment.php">lokale Enwicklungsumgebung</a> aufgesetzt.</li>
                            <li>Du hast eine modified-shop Version 2.0.3.0 oder höher installiert.</li>
                            <li>Du hast den MMLC 1.15.0 oder höher installiert und kannst Module installieren.</li>
                            <li>Du hast einen Code Editor wie VS Code, Atom etc.</li>
                            <li>(Optional aber empfohlen) Du hast git installiert und kannst die einfachen Basics.</li>
                        </ul>
                    </section> -->
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
