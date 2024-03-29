<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>config.php - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-docs-config">
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
                            <li><a href="#structure">Der Aufbau</a></li>
                            <li><a href="#username">username</a></li>
                            <li><a href="#password">password</a></li>
                            <li><a href="#accessToken">accessToken</a></li>
                            <li><a href="#adminDir">adminDir</a></li>
                            <li><a href="#modulesLocalDir">modulesLocalDir</a></li>
                            <li><a href="#remoteAddress">remoteAddress</a></li>
                            <li><a href="#installMode">installMode</a></li>
                            <li><a href="#selfUpdate">selfUpdate</a></li>
                            <!-- <li><a href="#exceptionMonitorIp">exceptionMonitorIp</a></li> -->
                            <li><a href="#exceptionMonitorDomain">exceptionMonitorDomain</a></li>
                            <!-- <li><a href="#exceptionMonitorMail">exceptionMonitorMail</a></li> -->
                            <li><a href="#logging">logging</a></li>
                            <li><a href="#dependencyMode">dependencyMode</a></li>
                        </ul>
                    </nav>
                </aside>
            
                <main>
                    <section>
                        <h2>Die config/config.php Datei</h2>

                        <?php //require_once '../inc/notice_work_in_progress.php'; ?>

                        <p>In der <code>config.php</code> Datei kannst du Einstellungen zu deinem MMLC machen. Die <code>config.php</code> befindet unter dem Verzeichnis <code>Shop-Root-Verzeichnis/ModifiedModuleLoaderClient/config/config.php</code>. <i>Seit der Version 1.19.0 kannst du auch einige dieser Einstellungen direkt in der Oberfläche des MMLCs tätigen.</i> Welche Einstellungen du in dieser Datei machen kannst, beschreibt diese Seite.</p>
                    </section>

                    <section>
                        <h3 id="structure">
                            Der Aufbau
                            <a href="#structure" class="anchor">#</a>
                        </h3>

                        <p>Bei der <code>config.php</code> Datei handelt es sich um eine normale PHP. Die Einstellungen werden in einem Array vorgenommen. Du kannst in dieser Datei auch PHP-Kommentare verwenden.</p>
                    </section>

                    <section>
                        <h4 id="username">
                            username
                            <a href="#username" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld kannst du den Namen des Useres eintragen, der sich am MMLC einloggen kann, wenn du den MMLC direkt über <code>/ModifiedModuleLoaderClient</code> aufrufst. Bei der Installation über <code>mmlc_installer.php</code> musst du bereits einen Username festlegen. Diesen Usernamen trägt der Installer automatisch für dich hier ein.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'username' => 'user1'</code>
                    </section>

                    <section>
                        <h4 id="password">
                            password
                            <a href="#password" class="anchor">#</a>
                        </h4>

                        <p>In diesem Feld kannst du das <strong>Passwort als Hash</strong> des Useres eintragen, der sich am MMLC einloggen kann, wenn du den MMLC direkt über <code>/ModifiedModuleLoaderClient</code> aufrufst. Bei der Installation über <code>mmlc_installer.php</code> musst du bereits ein Password festlegen. Dieses Passwort trägt der Installer automatisch für dich hier ein.</p>

                        <p>Wenn du das Passwort ändern möchtest, kannst du das seit Version 1.19.0 auch direkt über die Einstellungen im MMLC machen. Wenn deine Version älter ist, musst du dein Passwort manuell ändern. Wie das geht, beschreibt der folgende Abschnitt.</p>

                        <p>Du kannst unseren PasswordHash-Generator verwenden: <a href="/password_generator.php">Online-Tool zur Passwort-Hash-Erstellung</a></p>

                        <p>Du kannst ein Password-Hash manuell generieren:</p>
                        <code class="block">php -r 'echo password_hash("dein-neues-passwort", PASSWORD_DEFAULT) . "\n";'</code>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'password' => '$2y$10$qcOZZm0VM9ZIq353a.1FQeZmLSho9y85hZBMIr6QquDadhcMdZ5Wa'</code>
                    </section>

                    <section>
                        <h4 id="accessToken">
                            accessToken
                            <a href="#accessToken" class="anchor">#</a>
                        </h4>

                        <p>Mit dem <a href="/documentation.php#accessToken">AccessToken kann sich der MMLC direkt beim MMLS authentifizieren</a>. Pass auf, dass du deinen AccessToken nicht verlierst in dem du ihn überschreibst. Bei der Installation über <code>mmlc_installer.php</code> wird für deinen MMLC automatisch ein AccessToken erzeugt.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'accessToken' => '...'</code>
                    </section>

                    <section>
                        <h4 id="adminDir">
                            adminDir (ab Version 1.19.0)
                            <a href="#adminDir" class="anchor">#</a>
                        </h4>

                        <p>Der MMLC versucht automatisch deinen Admin-Ordner zu erkennen, falls du diesen umbenannt hast. Wenn du möchtest, kannst du dem MMLC auch direkt mitteilen, wie dein Admin-Ordner heißt, dass kann unter Umständen deinen MMLC etwas beschleunigen.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'adminDir' => 'admin_123456'</code>
                    </section>

                    <section>
                        <h4 id="modulesLocalDir">
                            modulesLocalDir
                            <a href="#modulesLocalDir" class="anchor">#</a>
                        </h4>

                        <p>In diesem Ordner lädt der MMLC die Module vom MMLS hinuter. In der Regel musst du das Verzeichnis nicht ändern.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'modulesLocalDir' => 'Modules'</code>
                    </section>

                    <section>
                        <h4 id="remoteAddress">
                            remoteAddress
                            <a href="#remoteAddress" class="anchor">#</a>
                        </h4>

                        <p>Hierbei handelt es sich um die Adresse, unter der dein MMLC den MMLS erreichen kann. In der Regel musst du das Verzeichnis nicht ändern.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'remoteAddress' => 'https://app.module-loader.de/api.php'</code>
                    </section>

                    <section>
                        <h4 id="installMode">
                            installMode
                            <a href="#installMode" class="anchor">#</a>
                        </h4>

                        <p>Es gibt zwei Möglichkeiten, wie der MMLC Module in deinen Shop installieren kann. Bei der <code>copy</code> Variante werden alle Moduldateien in deinen Shop kopiert. Bei der <code>link</code> Variante, werden die Moduldateien nicht kopiert, sondern es werden symbolische Links auf die Moduldateien in deinen Shop erzeugt. Die <code>copy</code> Variante solltest du in deinem Live-Shop verweden. Die <code>link</code> Variante solltest du nur verwenden, wenn du mit dem MMLC Module entwickelst und auch mal etwas schiefgehen darf.</p>

                        <ul>
                            <li><code>copy</code> für <strong>copy - Variante (standard)</strong></li>
                            <li><code>link</code> für <strong>link - Variante</strong></li>
                        </ul>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'installMode' => 'copy'</code>
                    </section>

                    <section>
                        <h4 id="selfUpdate">
                            selfUpdate (ab Version 1.17.0)
                            <a href="#selfUpdate" class="anchor">#</a>
                        </h4>

                        <p>Mit dieser Option kannst du festlegen, welche Versionen vom MMLC dir bei einem Update zur Verfügung stehen. Bei <code>stable</code> werden dir nur MMLC Version zum Update vorgeschlagen, die wir ausführlich getestet haben. Wählst du hier den Wert <code>latest</code> aus, werden dir auch die neusten <code>alpha</code> und <code>beta</code>Versionen des MMLCs zum Update angeboten. Um Fehler zu vermeiden, empfehlen wir dir die <code>stable</code> Einstellung.</p>

                        <ul>
                            <li><code>stable</code> für <strong>getestete MMLC Versionen (standard)</strong></li>
                            <li><code>latest</code> für <strong>die neusten MMLC Versionen</strong></li>
                        </ul>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'selfUpdate' => 'stable'</code>
                    </section>

                    <?php /*
                    <section>
                        <h4 id="exceptionMonitorIp">
                            exceptionMonitorIp (ab Version 1.18.0)
                            <a href="#exceptionMonitorIp" class="anchor">#</a>
                        </h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorIp' => '127.0.0.1'</code>
                    </section>
                    */?>

                    <section>
                        <h4 id="exceptionMonitorDomain">
                            exceptionMonitorDomain (ab Version 1.18.0)
                            <a href="#exceptionMonitorDomain" class="anchor">#</a>
                        </h4>

                        <p>Je nach Serverkonfiguration auf dem dein MMLC läuft kann es passieren, dass ein nicht vorhersehbarer PHP Fehler auftritt. Z. B. wenn du den MMLC mit einer veralteten PHP laufen lässt. In diesem Fall wird dir keine aussagefähige Fehlermeldung oder im schlimmsten Fall eine weiße Seite im Browser angezeigt.</p>
                        
                        <p>Wenn du mehr Informationen zum Fehler im Browser erhalten möchtest, kannst du in der config.php die/deine Domain eintragen. In dieser Meldung können sensible Daten enthalten sein. Nur wenn der MMLC auf dieser Domain ausgeführt wird, wird dir eine ausführliche Fehlermeldung angezeigt.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorDomain' => 'www.my-domain.org'</code>
                    </section>

                    <?php /*
                    <section>
                        <h4 id="exceptionMonitorMail">
                            exceptionMonitorMail (ab Version 1.18.0)
                            <a href="#exceptionMonitorMail" class="anchor">#</a>
                        </h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorMail' => 'info@module-loader.de'</code>
                    </section>
                    */?>

                    <section>
                        <h4 id="logging">
                            logging (ab Version 1.21.0)
                            <a href="#logging" class="anchor">#</a>
                        </h4>

                        <p>Je nach Serverkonfiguration auf dem dein MMLC läuft kann es passieren, dass ein nicht vorhersehbarer PHP Fehler auftritt. Z. B. wenn du den MMLC mit einer veralteten PHP laufen lässt. In diesem Fall wird dir keine aussagefähige Fehlermeldung oder im schlimmsten Fall eine weiße Seite im Browser angezeigt.</p>
                        
                        <p>Wenn du mehr Informationen zum Fehler erhalten möchtest, kannst du in der config.php die/deine das Logging aktivieren. Die Logs befinden sich im Root-Verzeichnis deines MMLCs im Unterordner <code>logs/</code></p>

                        <ul>
                            <li><code>true</code> für <strong>Es werden Logs geschrieben</strong></li>
                            <li><code>false</code> für <strong>Es werden keine logs geschrieben</strong></li>
                        </ul>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'logging' => 'true'</code>
                    </section>

                    <section>
                        <h4 id="dependencyMode">
                            dependencyMode (ab Version 1.22.0)
                            <a href="#dependencyMode" class="anchor">#</a>
                        </h4>

                        <p>Du kannst zwischen <code>strict</code> und <code>lax</code> wählen. Mit strict werden die Abhänigkeiten von Modulen mit einer Version kleiner als 1.0.0 genauer kontrolliert. Wenn sich einige Module nicht installieren lassen, kannst du es mit lax versuchen. Beachte, dass im Lax-Modus die Wahrscheinlichkeit größer ist, dass verschiedene Module nicht miteinander harmonieren. Default: <code>lax</code></p>

                        <ul>
                            <li><code>lax</code> für <strong>Weniger genauere Abhängigkeitsprüfung bei Versionen kleiner 1.0.0</strong></li>
                            <li><code>strict</code> für <strong>Genauere Abhängigkeitsprüfung bei Versionen kleiner 1.0.0</strong></li>
                        </ul>
        
                        <p>Hier ein Beispiel:</p>
                        <code class="block">'dependencyMode' => 'strict'</code>
                    </section>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
