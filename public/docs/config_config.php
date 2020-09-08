<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../inc/head.php'; ?>

        <title>config.php - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="pageWrapper">
            <header>
                <?php require_once '../inc/pageTitle.php'; ?>

                <nav>
                    <?php require_once '../inc/navigation.php'; ?>
                </nav>
            </header>

            <?php require_once '../inc/contribute_info.php'; ?>

            <main>
                <section>
                    <h2>Die config/config.php Datei</h2>

                    <p>In der <code>config.php</code> Datei kannst du Einstellungen zu deinem MMLC machen. Die <code>config.php</code> befindet unter dem Verzeichnis <code>Shop-Root-Verzeichnis/ModifiedModuleLoaderClient/config/config.php</code>. <i>Seit der Version 1.19.0 kannst du auch einige dieser Einstellungen direkt in der Oberfläche des MMLCs tätigen.</i> Welche Einstellungen du in dieser Datei machen kannst, beschreibt diese Seite.</p>

                    <section>
                        <h3>Übersicht</h3>
                        <ul>
                            <li><a href="#structure">Der Aufbau</a></li>
                            <li><a href="#username">username</a></li>
                            <li><a href="#password">password</a></li>
                            <li><a href="#accessToken">accessToken</a></li>
                            <li><a href="#modulesLocalDir">modulesLocalDir</a></li>
                            <li><a href="#remoteAddress">remoteAddress</a></li>
                            <li><a href="#installMode">installMode</a></li>
                            <li><a href="#selfUpdate">selfUpdate</a></li>
                            <li><a href="#exceptionMonitorIp">exceptionMonitorIp</a></li>
                            <li><a href="#exceptionMonitorDomain">exceptionMonitorDomain</a></li>
                            <li><a href="#exceptionMonitorMail">exceptionMonitorMail</a></li>
                            <li><a href="#adminDir">adminDir</a></li>
                        </ul>
                    </section>

                    <section>
                        <h3 id="structure">
                            Der Aufbau
                            <a href="#structure" class="anchor">#</a>
                        </h3>
                        
                        <p>Bei der <code>config.php</code> Datei handelt es sich um eine normale PHP. Die Einstellungen werden in einem Array vorgenommen. Du kannst in dieser Datei auch PHP-Kommentare verwenden.</p>
                    <section>

                    <h3>Die Felder</h3>

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

                        <p>Du kannst ein Password-Hash wie folgt manuell generieren:</p>
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

                    <section>
                        <h4 id="exceptionMonitorDomain">
                            exceptionMonitorDomain (ab Version 1.18.0)
                            <a href="#exceptionMonitorDomain" class="anchor">#</a>
                        </h4>

                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorDomain' => 'modified.localhost'</code>
                    </section>

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
            </main>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
