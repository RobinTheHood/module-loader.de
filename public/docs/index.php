<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-docs-index">
            <header>
                <?php require_once '../../views/navigation.php'; ?>
            </header>

            <div class="content">
                <?php //require_once '../inc/notice_work_in_progress.php'; ?>

                <aside>
                    <nav>
                        <h3 id="content">
                            Inhalt
                            <a href="#content" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li>
                                <a href="#tutorials">Tutorials</a>
                                <ul>
                                    <li><a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a></li>
                                    <li><a href="/docs/publish_module.php">Tutorial: Dein erstes Modul veröffentlichen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#specs">Spezifikationen und Referenzen</a>
                                <ul>
                                    <li><a href="/docs/config_config.php">Konfiguration | config/config.php</a></li>
                                    <li><a href="/docs/moduleinfo.php">Die moduleinfo.json Datei</a></li>
                                    <li><a href="/docs/module_structure.php">Die Modul Verzeichnisstruktur</a></li>
                                    <li><a href="/docs/naming_convention.php">Naming Convention</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#more">Weitere Themen</a>
                                <ul>
                                    <li><a href="/docs/local_dev_environment.php">Tutorial: Lokale Entwicklungsumgebung einrichten</a></li>
                                    <li><a href="/docs/create_module_script.php">Tutorial: Modul erstellen mit createModule.sh</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </aside>

                <main>
                    <section>
                        <h2>Dokumentation für Modul Entwickler</h2>

                        <p>Mit dem MMLC kannst du nicht nur Module leichter installieren, sondern der MMLC kann dir auch deutlich die Arbeit dabei erleichtern, neue Module für die modified eCommerce Shopsoftware zu entwickeln.</p>

                        <!-- <img src="../images/Intro_Developer.png"> -->

                        <h3>Community / Forum / Chat</h3>
                        <p>
                            Auf unserem <strong><a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc DE/EN</a></strong> Community Server beantworten wir dir deine Fragen sehr gerne, wenn du zusätzliche Hilfe benötigst. Auf Discord kannst du dich auch mit anderen Entwickelrn und Usern austauschen. Wenn du dich fragst, wieso wir Discord verwenden, findest du <a target="_blank" href="https://discord.com/open-source">hier die Antwort</a> auf deine Frage.
                        </p>

                        <h3>Video Tutorials</h3>
                        <p>
                            <a target="_blank" href="https://youtu.be/VH4h3a8RCco"><img src="/images/youtube_tutorial.jpg" class="imagePreview" alt="Tutorial: Modul programmieren für den modified eCommerce Shop mit dem MMLC - deutsch"></a>
                        </p>

                        <h3 id="tutorials">
                            Tutorials
                            <a href="#tutorials" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li><a href="/docs/tutorial.php">Tutorial: Dein erstes Modul mit dem MMLC programmieren</a></li>
                            <li><a href="/docs/publish_module.php">Tutorial: Dein erstes Modul veröffentlichen</a></li>
                        </ul>

                        <h3 id="specs">
                            Spezifikationen und Referenzen
                            <a href="#specs" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li><a href="/docs/config_config.php">Konfiguration | config/config.php</a></li>
                            <li><a href="/docs/moduleinfo.php">Die moduleinfo.json Datei</a></li>
                            <li><a href="/docs/module_structure.php">Die Modul Verzeichnisstruktur</a></li>
                            <li><a href="/docs/naming_convention.php">Naming Convention</a></li>
                        </ul>

                        <h3 id="more">
                            Weitere Themen
                            <a href="#more" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li><a href="/docs/local_dev_environment.php">Tutorial: Lokale Entwicklungsumgebung einrichten</a></li>
                            <li><a href="/docs/create_module_script.php">Tutorial: Modul erstellen mit createModule.sh</a></li>
                        </ul>
                    </section>

                    <section>
                        <h2>Dokumentation für MMLC Entwickler</h2>

                        <p>
                            Wir freuen uns sehr, dass du dich für den MMLC interessierst und Lust hast dich am MMLC zu beteiligen. Es gibt viele Dinge zu denen du hier beitragen kannst. Sei es die Dokumentation zu erweitern oder den Programmcode zu verbessern und natürlich all die Dinge, die hier noch nicht aufgeführt sind. Wir freuen uns auch über kleine Beiträge.
                        </p>

                        <p>
                            Den MMLC findest du als Open-Source-Projekt auf <a target="_blank" href="https://github.com/RobinTheHood/ModifiedModuleLoaderClient">GitHub</a>. Hier kannst du Wünsche und Fehler als Issues eintragen. Oder du machst einen Pull request, wenn du bereits konkrete Quellcodeverbesserungen einreichen möchtest. Wenn du Hilfe brauchst, kannst du uns auch gerne bei <a target="_blank" href="https://discord.gg/9NqwJqP">Discord #mmlc</a> nach Rat fragen oder uns eine E-Mail an <a class="electronicMessage" data-href="aW5mb0Btb2R1bGUtbG9hZGVyLmRl" tabindex="0">info<span class="at"></span>module-loader<span class="dot"></span>de</a> senden.
                        </p>

                        <p>
                            Wenn du dich an dieser Webseite und der Dokumentation beteiligen möchtest, findest du den Quellcode hierfür ebenfalls auf <a target="_blank" href="https://github.com/RobinTheHood/module-loader.de">GitHub</a>.
                        </p>
                    </section>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
