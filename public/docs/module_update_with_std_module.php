<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../../views/head.php'; ?>

        <title>Einface Update-Implementierung mit dem Modified Standard Modul - MMLC - Modified Module Loader Client</title>
        <meta name="description" content="Modul-Updates für modified Shop Module mit wenig Code implementieren.">
        
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
                            <li><a href="#add-version">1. Modul und Version hinzufügen</a></li>
                            <li><a href="#adjust-constructor">2. Konstruktor anpassen</a></li>
                            <li><a href="#add-update-steps">3. Update-Schritte definieren</a></li>
                            <li><a href="#example">Beispiel</a></li>
                        </ol>
                    <nav>
                </aside>

                <main>
                    <section>
                        <h2>Modul-Updates mit dem Modifed Standard Modul implementieren</h2>

                        <p>Das Standard-Modul für modified ermöglicht es, einen Update-Button und einen zugehörigen Update-Prozess im Admin-Bereich deines Shops mit minimalem Codeaufwand zu implementieren. Hier sind die Schritte, die du befolgen musst.</p>
                    </section>

                    <section>
                        <h3 id="add-version">
                            1. Modul und Version hinzufügen
                            <a href="#add-version" class="anchor">#</a>
                        </h3>

                        <p>Um mit diesem Feature zu beginnen, gib in deiner Modulklasse die aktuelle Version in SemVer (Semantic Versioning) Schreibweise an. Dies ermöglicht es dem System, die aktuelle Version deines Moduls zu verfolgen.</p>
                        
                        <?= loadExample2('/stdmodule_update_code_01.php', 'php'); ?>
                    </section>

                    <section>
                        <h3 id="adjust-constructor">
                            2. Konstruktor anpassen
                            <a href="#adjust-constructor" class="anchor">#</a>
                        </h3>

                        <p>Im Konstruktor deines Moduls füge die Methode <code>$this->checkForUpdate(true)</code> hinzu. Das <code>true</code> bewirkt, dass der Update-Button im Admin-Bereich angezeigt wird, wenn ein Update für dein Modul verfügbar ist. Wenn du <code>false</code> verwendest, wird lediglich ein Hinweis auf ein verfügbares Update angezeigt.</p>

                        <?= loadExample2('/stdmodule_update_code_02.php', 'php'); ?>
                    </section>

                    <section>
                        <h3 id="add-update-steps">
                            3. Update-Schritte definieren
                            <a href="#add-update-steps" class="anchor">#</a>
                        </h3>

                        <p>In der Methode <code>protected function updateSteps()</code> kannst du festlegen, welche Schritte ausgeführt werden sollen, wenn der Nutzer auf den Update-Button klickt. In dieser Methode kannst du die Hilfsmethoden <code>$this-&gt;getVersion()</code> und <code>$this-&gt;setVersion()</code> verwenden. Die Methode <code>updateSteps()</code> sollte den Wert <code>StdModule::UPDATE_SUCCESS</code> zurückgeben, wenn das Update erfolgreich abgeschlossen wurde, oder <code>StdModule::UPDATE_NOTHING</code>, wenn kein Update erforderlich ist.</p>

                        <p>Hier ist ein Beispiel, wie du diese Methode nutzen könntest:</p>

                        <?= loadExample2('/stdmodule_update_code_03.php', 'php'); ?>

                        <p>Dieses Vorgehen ermöglicht es dir, Updates für dein Modul effizient zu verwalten und sicherzustellen, dass die neueste Version in deinem Shop korrekt installiert wird. Beachte, dass du die Konstante <code>public const VERSION = &#39;1.0.0&#39;</code> und die Update-Schritte in <code>protected function updateSteps()</code> für jede neue Version deines Moduls gemäß den Änderungen in deinem Modul anpassen und ergänzen musst.</p>
                    </section>

                    <section>
                        <h3 id="example">
                            Beispiel
                            <a href="#example" class="anchor">#</a>
                        </h3>

                        <p>Hier noch einmal alle nötigen Ändnerungen zusammen in einem Beispiel:</p>

                        <?= loadExample2('/stdmodule_update_code_04.php', 'php'); ?>
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
