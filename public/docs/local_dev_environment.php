<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../inc/head.php'; ?>

        <title>Lokale Entwicklungsumgebung - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <header>
            <nav>
                <?php require_once '../inc/navigation.php'; ?>
            </nav>
        </header>

        <div class="pageWrapper">
            <div class="content">
                <?php require_once '../inc/notice_work_in_progress.php'; ?>

                <main>
                  <section>
                      <h2>Lokale Entwicklungsumgebung einrichten</h2>

                      <div class="notice info">
                          <p><strong>Info:</strong> Falls du dir bereits eine lokale Entwicklungsumgebung eingerichtet hast und lokal einen modified eCommerce Shop (>= 2.0.3.0) am Laufen hast, kannst du diesen Abschnitt überspringen und mit dem Abschnitt „MMLC installieren“ weiter machen.</p>

                          <!-- oder die URL <code class="break">http://YOUR_DOMAIN/ModifiedModuleLoaderClient/?action=createModule&vendorPrefix=mc&vendorName=mycompany&moduleName=my-first-module</code> aufrufen, wenn du im MMLC eingeloggt bist. !-->
                      </div>

                      <p>Für das Erstellen von Modulen solltest du dir eine lokale Entwicklungsumgebung einrichten, das bedeutet, dass du erst einmal keinen externen Server benötigst, auf dem du ein modified eCommerce Shop installieren musst. Eine lokale Entwicklungsumgebung hat viele Vorteile und erleichtert dir deutlich die Arbeit.</p>

                      <!-- (TODO: Einige Gründe aufzählen, wieso eine lokale Entwicklungsumgebung besser ist.) -->

                      <h4>Lokale Entwicklungsumgebung unter Mac (MAMP)</h4>

                      <p>Wenn du einen Mac verwendest, um deine Module zu progammieren, empfehlen wir dir die Software MAMP als lokalen Apache/PHP und MySQL Server zu verwenden.</p>

                      <ul>
                          <li>Downloade & installiere dir MAMP von <a href="https://www.mamp.info/de/downloads/">https://www.mamp.info/de/downloads/</a></li>
                      </ul>

                      <p>Starte MAMP und stelle in den Einstellungen unter dem Tab „Ports“ den <code>Apache-Port auf 80</code> und den <code>MySQL-Port auf 3306</code>.</p>

                      <p><img src="/images/MAMP_Ports.png" class="imagePreview"></p>

                      <p>Unter dem Tab „PHP“ solltest du die neuste Version von PHP auswählen, die dir zur Auswahl steht. Hier solltest du mindestens PHP 7.2 auswählen.</p>

                      <p>Unter dem Tab „Web-Server“ musst du jetzt das Root-Verzeichnis festlegen, in dem du deinen Shop installierst. Wir wählen hier für dieses Tutorial ein neues Verzeichnis das wir mit dem Namen <code>modified-shop</code> angelegt haben. (der vollständige Pfad lautet dann z. B. <code>/Users/Robin/Documents/modified-shop</code>)</p>

                      <div class="notice info">
                          <p>Dokumentation in Arbeit ...</p>
                      </div>
                  </section>
                </main>
            </div>
        </div>

        <?php include '../../views/footer.php'; ?>
    </body>
</html>
