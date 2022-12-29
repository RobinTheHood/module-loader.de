<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../views/head.php'; ?>

        <title>Passwort vergessen - Hash für den MMLC erzeugen / Anleitung - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-documentation">
            <header>
                <?php require_once '../views/navigation.php'; ?>
            </header>

            <div class="content">
                <aside>
                    <nav>
                        <h3 id="content">
                            Inhalt
                            <a href="#content" class="anchor">#</a>
                        </h3>
                        <ul>
                            <li><a href="#system-requirements">Schritt 1 - Passwort Hash erzeugen</a></li>
                            <li><a href="#installation">Schritt 2 - Passwort Hash verwenden</a></li>
                        </ul>
                    </nav>
                </aside>

                <main>
                    <article>
                        <h2>Passwort Hash für den MMLC erzeugen</h2>

                        <section>
                            <h3>Schritt 1 - Passwort Hash erzeugen</h3>

                            <p>
                                <style>
                                    form input[type=password] {
                                        width: 100%;
                                        border: 1px solid #cccccc;
                                        padding: 10px;
                                    }

                                    form input[type=submit] {
                                        background-color: #007bff;
                                        border: none;
                                        color: white;
                                        padding: 16px 32px;
                                        text-decoration: none;
                                        margin: 4px 2px;
                                        cursor: pointer;
                                        font-size: 16px;
                                    }
                                </style>
                                <form method="post" action="">
                                    Passwort:<br>
                                    <input type="password" name="password" value="">
                                    <br><br>

                                    Passwort wiederholen:<br>
                                    <input type="password" name="repassword" value="">

                                    <br><br>
                                    <input type="submit" value="Hash erzeugen">
                                </form>
                            </p>

                            <?php if (isset($_POST['password']) && $_POST['password'] && $_POST['password'] == $_POST['repassword']) {
                                echo 'Dein Passwort-Hash:<br>';
                                echo '<div style="padding: 20px; border: 1px solid #cccccc">';
                                echo password_hash($_POST['password'], PASSWORD_DEFAULT);
                                echo '</div>';
                            } ?>
                        </section>

                        <section>
                            <h3>Schritt 2 - Passwort Hash verwenden</h3>

                            <p>Kopiere anschließend diese kryptisch aussehende Zeichenkette (Passwor-Hash) und ersetze damit in der Datei <code>/ModifiedModuleLoaderClient/config/config.php</code> den alten Hash im Eintrag <code>password => "..."</code>.</p>
                        </section>
                </main>
            </div>
        </div>

       
    </div>
    </body>
</html>
