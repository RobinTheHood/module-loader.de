<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../inc/head.php'; ?>

        <title>Modul veröffentlichen - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <header>
            <nav>
                <?php require_once '../inc/navigation.php'; ?>
            </nav>
        </header>

        <div class="pageWrapper withSidebar">
            <aside class="sidebar">
                <h3>Inhalt</h3>

                <ol>
                    <li><a href="#preconditions">Vorbedingungen</a></li>
                    <li><a href="#lets_go">Los gehts</a></li>
                    <li>
                        <a href="#git_plattform">Wähle deine Plattform</a>
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
                    <li><a href="#update_mmls_entry">MMLS Eintrag aktualisieren</a></li>
                </ol>
            </aside>

            <div class="content">
                <?php require_once '../inc/contribute_info.php'; ?>

                <main>
                    <section>
                        <h2>Tutorial: Dein erstes Modul veröffentlichen</h2>
                        <p><strong>Bearbeitungszeit: ca. 25 min.</strong></p>

                        <p>In diesem Tutorial lernst du, wie du dein Modul veröffentlichst. Durch eine Veröffentlichung steht allen MMLC-Nutzern dein Modul zum Download über den MMLC zur Verfügung.</p>

                        <div class="notice info">
                            <p><strong>Info:</strong> Natürlich kannst du festlegen, ob ein Modul nur für bestimmte Nutzer sichtbar ist oder ob dein Modul kostenpflichtig erworben werden muss. Was du hierfür zusätzlich machen musst, erfährst du unter <a href="#">XXX</a>.</p>
                        </div>

                        <h3 id="preconditions">Vorbedingungen</h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h3 id="lets_go">Los gehts</h3>

                        <p>Stelle dir vor du hast eine Firma mit dem Namen "My Company" und diese Firma möchte ihr neues Modul mit dem Namen "Mein erstes Modul" veröffentlichen. Wenn du noch kein Modul mit dem MMLC entwickelt hast, erfährst du hierzu mehr unter: <a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a></p>

                        <h3 id="git_plattform">Wähle deine Plattform</h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h4 id="git">Git</h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h4 id="github_public_repository">GitHub - Öffentliches Repository</h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h4 id="github_private_repository">GitHub - Privates Repository</h4>

                        <p>
                            Bei privaten GitHub Repositories musst du einen AccessKey erstellen, damit der MMLS Zugriff auf deine Repositories erhält. Einer Anleitung, wie du einen AccessKey auf GitHub erstellst erfährst du unter: <a href="https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line">https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line</a>.
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

                        <h4 id="gitlab_public_repository">GitLab - Öffentliches Repository</h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h4 id="gitlab_private_repository">GitLab - Privates Repository</h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h3 id="tag_version">Versionsnummer vergeben</h3>

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
                            <strong>Wichtig:</strong> Wenn du in deinem Git-Repository keine Versionsnummern vergibst, wird der MMLS keine Versionen finden, die er an den MMLC ausspielen kann.
                        </div>

                        <h3 id="create_mmls_account">MMLS Accout erstellen</h3>

                        <p>Account erstellen auf <a href="https://app.module-loader.de">app.module-loader.de</a></p>

                        <p>
                            Damit deine Module für alle MMLC Nutzer verfügbar werden, musst du dem MMLC mitteilen, wo der MMLC diese Module findet. Hierzu befragt der MMLC den Modified Module Loader Server (MMLS). Der MMLS ist die zentrale Vermittlungsstelle, welche die Module an alle MMLC verteilt.
                        </p>

                        <p>
                            Wir erstellen hierzu einen Account bei <a href="https://app.module-loader.de">app.module-loader.de</a>. Du musst beim Erstellen deines Accounts einen <code>vendorName</code> wählen. Dieser <code>vendorName</code> muss der Gleiche sein, den du für deine Module verwendest. Im Root-Verzeichnis deiner Module befindet sich jeweils die <code>moduleinfo.json</code> Datei, die du erstellst hast. Hier gibt es einen Eintrag <code>archiveName</code>. Dieser Name ist zusammengesetzt aus <code>vendorName</code> / <code>moduleName</code>.
                        </p>

                        <div class="notice warning">
                            <strong>Wichtig:</strong> Du (oder dein Unternehmen) musst den <code>vendorNamen</code> deiner Module verwenden. Weitere Informationen findest du unter <a href="/docs/naming_convention.php">Naming Convention</a>.
                        </div>

                        <p><img src="/images/Create_MMLS_Account.png" class="imagePreview" alt"MMLS Account erstellen"></p>

                        <h3 id="create_mmls_entry">MMLS Eintrag erstellen</h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <h3 id="update_mmls_entry">MMLS Eintrag aktualisieren</h3>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>
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
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
