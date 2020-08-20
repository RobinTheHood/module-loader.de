<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php
        require_once '../inc/head.php';
        ?>

        <title>config.php - Developer - MMLC - Modified Module Loader Client</title>
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
                    <h2>Die config/config.php Datei</h2>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat exercitationem necessitatibus, ex obcaecati nobis at debitis quae vel laudantium voluptatem tempora odit sapiente itaque consectetur laboriosam? Minus laudantium non quia.</p>

                    <section>
                        <h3>Der Aufbau</h3>
                        <p>Bei der <code>config.php</code> Datei handelt es sich um eine PHP. Die Einstellungen werden in einem Array vorgenommen.</p>
                    <section>

                    <h3>Die Felder</h3>

                    <section>
                        <h4>username</h4>
                        <p>In diesem Feld kannst du den Namen des Useres eintragen, der sich am MMLC einloggen kann, wenn du den MMLC direkt über <code>/ModifiedModuleLoaderClient</code> aufrufst. Bei der Installation über <code>mmlc_installer.php</code> musst du bereits einen Username festlegen. Diesen Usernamen trägt der Installer automatisch für dich hier ein.</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'username' => 'user1'</code>
                    </section>

                    <section>
                        <h4>password</h4>
                        <p>In diesem Feld kannst du das <strong>Passwort als Hash</strong> des Useres eintragen, der sich am MMLC einloggen kann, wenn du den MMLC direkt über <code>/ModifiedModuleLoaderClient</code> aufrufst. Bei der Installation über <code>mmlc_installer.php</code> musst du bereits ein Password festlegen. Dieses Passwort trägt der Installer automatisch für dich hier ein.</p>

                        <p>Du kannst ein Password-Hash wie folgt generieren:</p>
                        <code class="block">php -r 'echo password_hash("dein-neues-passwort", PASSWORD_DEFAULT) . "\n";'</code>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'password' => '$2y$10$qcOZZm0VM9ZIq353a.1FQeZmLSho9y85hZBMIr6QquDadhcMdZ5Wa'</code>
                    </section>

                    <section>
                        <h4>accessToken</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'accessToken' => '...'</code>
                    </section>

                    <section>
                        <h4>modulesLocalDir</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'modulesLocalDir' => 'Modules'</code>
                    </section>

                    <section>
                        <h4>remoteAddress</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'remoteAddress' => 'https://app.module-loader.de/api.php'</code>
                    </section>

                    <section>
                        <h4>installMode</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <ul>
                            <li><code>copy</code> für <strong>...</strong></li>
                            <li><code>link</code> für <strong>...</strong></li>
                        </ul>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'installMode' => 'copy'</code>
                    </section>

                    <section>
                        <h4>selfUpdate (ab Version 1.17.0)</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <ul>
                            <li><code>stable</code> für <strong>...</strong></li>
                            <li><code>latest</code> für <strong>...</strong></li>
                        </ul>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'selfUpdate' => 'stable'</code>
                    </section>

                    <section>
                        <h4>exceptionMonitorIp (ab Version 1.18.0)</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorIp' => '127.0.0.1'</code>
                    </section>

                    <section>
                        <h4>exceptionMonitorDomain (ab Version 1.18.0)</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorDomain' => 'modified.localhost'</code>
                    </section>

                    <section>
                        <h4>exceptionMonitorMail (ab Version 1.18.0)</h4>
                        <div class="notice info">
                            <p>Dokumentation in Arbeit ...</p>
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic enim cum quidem quaerat quisquam aliquid, animi delectus officia inventore exercitationem! Deserunt consequuntur molestiae veritatis vel perspiciatis ipsam dolores est placeat?</p>

                        <p>Hier ein Beispiel:</p>
                        <code class="block">'exceptionMonitorMail' => 'info@module-loader.de'</code>
                    </section>
                <section>  
            </main>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
