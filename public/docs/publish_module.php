<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Modul veröffentlichen - Developer - MMLC - Modified Module Loader Client</title>
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
                <h2>Tutorial: Dein erstes Modul veröffentlichen</h2>
                <p><strong>Bearbeitungszeit: ca. 25 min.</strong></p>

                <p>In diesem Tutorial lernst du, wie du dein Modul veröffentlichst. Durch eine Veröffentlichung steht allen MMLC-Nutzern dein Modul zum Download über den MMLC zur Verfügung.</p>

                <div class="notice info">
                    <strong>Info:</strong> Natürlich kannst du festlegen, ob ein Modul nur für bestimmte Nutzer sichtbar ist oder ob dein Modul kostenpflichtig erworben werden muss. Was du hierfür zusätzlich machen musst, erfährst du unter <a href="#">XXX</a>.
                </div>
            </section>

            <section id="content">
                <h3>Inhalt</h3>

                <ol>
                    <li><a href="#preconditions">Vorbedingungen</a></li>
                    <li><a href="#lets_go">Los gehts</a></li>
                    <li>
                        <a href="git_plattform">Wähle deine Plattform</a>
                        <ul>
                            <li><a href="#git">Eigener Git Server</a></li>
                            <li><a href="#github_public_repository">GitHub - Öffentliches Repository</a></li>
                            <li><a href="#github_private_repository">GitHub - Privates Repository</a></li>
                            <li><a href="#gitlab_public_repository">GitLab - Öffentliches Repository</a></li>
                            <li><a href="#gitlab_private_repository">GitLab - Privates Repository</a></li>
                        </ul>
                    </li>
                    <li><a href="#tag_version">Versionsnummer vergeben</a></li>
                    <li><a href="#create_mmls_account">MMLS Accout erstellen</a></li>
                    <li><a href="#create_mmls_entry">MMLS Eintrag erstellen</a></li>
                    <li><a href="#update_mmls_entry">MMLS Eintrag aktuallisieren</a></li>
                </ol>
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

            <section id="lets_go">
                <h3>Los gehts</h3>

                <p>Stelle dir vor du hast eine Firma mit dem Namen "My Company" und diese Firma möchte ihr neues Modul mit dem Namen "Mein erstes Modul" veröffentlichen. Wenn du noch kein Modul mit dem MMLC entwickelt hast, erfährst du hierzu mehr unter: <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a></p>
            </section>

            <section id="git_plattform">
                <h3>Wähle deine Plattform</h3>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="git">
                <h4>Git</h4>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="github_public_repository">
                <h4>GitHub - Öffentliches Repository</h4>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="github_private_repository">
                <h4>GitHub - Privates Repository</h4>

                <p>
                    Bei privaten GitHub Repositories musst du einen AccessKey erstellen, damit der MMLS Zugriff auf deine Repositories erhält. Einer Anleitung, wie du einen AccessKey auf GitHub erstellst erfährst du unter: <a href="https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line">https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line</a>.
                </p>

                <p>
                    Bei den Optionen reicht es aus, wenn du lediglich einen Haken bei <code>repo (Full control of private repositories)</code>setzt.
                </p>

                <img style="width: 100%" class="border" src="/images/Github_Private_Repository_Settings.png">

                <p>
                    Jetzt kannst du auf dein Repository zugreifen, indem du vor <code>github.com/...</code> deinen GitHub <code>USER_NAME</code>, gefolgt von einem <strong>Doppelpunkt</strong>, gefolgt von deinem neuen <code>TOKEN</code>, gefolgt von einem <strong>@-Zeichen</strong> schreibst.
                </p>

                <p>
                    Hier ein Beispiel: <strong>https://<code>USER_NAME</code>:<code>TOKEN</code>@github.com/mycompany/my-first-module.git</strong>
                </p>
            </section>

            <section id="gitlab_public_repository">
                <h4>GitLab - Öffentliches Repository</h4>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="gitlab_private_repository">
                <h4>GitLab - Privates Repository</h4>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="tag_version">
                <h3>Versionsnummer vergeben</h3>

                <p>
                    Es ist wichtig, dass du deinem Modul eine oder mehrere Versionsnummern gibtst. Versionen werden über <strong>git tags</strong> verwaltet. Das Format deiner Versionsnummern muss der <strong>Semantic Versioning (SemVer) Spezifikation</strong> entsprechen. Informationen zu SemVer findest du unter <a href="https://semver.org/lang/de/">semver.org</a>.
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
                    <strong>Wichtig:</strong> Wenn du in deinem Git-Repository keine Versionsnummern vergibst, wird der MMLS keine Versionen finden, die er an den MMLC ausspielen kann.
                </div>
            </section>

            <section id="create_mmls_account">
                <h3>MMLS Accout erstellen</h3>
                
                <p>Account erstellen auf <a href="https://app.module-loader.de">app.module-loader.de</a></p>

                <p>
                    Damit deine Module für alle MMLC Nutzer verfügbar werden, musst du dem MMLC mitteilen, wo der MMLC diese Module findet. Hierzu befragt der MMLC den Modified Module Loader Server (MMLS). Der MMLS ist die zentrale Vermittlungsstelle, welche die Module an alle MMLC verteilt.
                </p>

                <p>
                    Wir erstellen hierzu einen Account bei <a href="https://app.module-loader.de">app.module-loader.de</a>. Du musst beim Erstellen deines Accounts einen <code>vendorName</code> wählen. Dieser <code>vendorName</code> muss der Gleiche sein, den du für deine Module verwendest. Im Root-Verzeichnis deiner Module befindet sich jeweils die <code>moduleinfo.json</code>, die du erstellst hast. Hier gibt es einen Eintrag <code>archiveName</code>. Dieser Name ist zusammengesetzt aus <code>vendorName</code> / <code>moduleName</code>.
                </p>

                <div class="notice warning">
                    <strong>Wichtig:</strong> Du (oder dein Unternehmen) müsst den <code>vendorNamen</code> eurer Module verwenden. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.
                </div>

                <br>

                <img style="width: 75%" class="border" src="/images/Create_MMLS_Account.png">
                
            </section>

            <section id="create_mmls_entry">
                <h3>MMLS Eintrag erstellen</h3>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>

            <section id="update_mmls_entry">
                <h3>MMLS Eintrag aktuallisieren</h3>

                <p><i>Dokumentation in Arbeit ...</i></p>
            </section>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
