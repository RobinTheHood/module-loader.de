<?php require_once '../../src/functions.php'; ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <?php require_once '../inc/head.php'; ?>

        <title>Naming Conventions - Developer - MMLC - Modified Module Loader Client</title>
    </head>
    <body>
        <div class="page-wrapper page-docs-namingconventions">
            <header>
                <?php require_once '../inc/navigation2.php'; ?>
            </header>

            <div class="content">
                <aside>
                    <nav>
                        <h3 id="content">
                            Inhalt
                            <a href="#content" class="anchor">#</a>
                        </h3>

                        <ul>
                            <li><a href="#preconditions">...</a></li>
                        </ul>
                    </nav>
                </aside>

                <main>
                    <h2>Naming Conventions</h2>
                    <p>Der MMLC arbeiten nach dem Prinzip "Convention over configuration". Da der MMLC auf unterschiedlichen Technologien aufbaut und das modified eCommerce System keine Conventions festlegt, gibt es leider einige unterschiedliche Naming Conventions, an die du dich bei der Entwicklung von Modulen mit dem MMLC halten solltest oder sogar musst. Das ist aber immernoch besser als keine Conventions festzulegen. Hier ein Überblick, damit du schnell die passende Naming Convention findest:</p>

                    <?php //require_once '../inc/notice_work_in_progress.php'; ?>

                    <h3>Verwendung und Beispiele</h3>
                    <table>
                        <tr>
                            <td><strong>Verwendung</strong></td>
                            <td><strong>Convention</strong></td>
                            <td><strong>Beispiele</strong></td>
                        </tr>

                        <tr>
                            <td>VendorPrefix</td>
                            <td>snake_case</td>
                            <td>
                                <code>mc</code><br>
                                <code>cn</code>
                            </td>
                        </tr>

                        <tr>
                            <td>VendorName</td>
                            <td>lisp-case</td>
                            <td>
                                <code>mycompany</code><br>
                                <code>cool-nickname</code>
                            </td>
                        </tr>

                        <tr>
                            <td>ModulName</td>
                            <td>lisp-case</td>
                            <td>
                                <code>my-first-module</code><br>
                                <code>newsletter</code>
                            </td>
                        </tr>

                        <tr>
                            <td>ArchiveName<br><i>(VendorName/ModulName)</i></td>
                            <td>lisp-case</td>
                            <td>
                                <code>mycompany/my-first-module</code><br>
                                <code>cool-nickname/newsletter</code>
                            </td>
                        </tr>

                        <tr>
                            <td>HookFileName</td>
                            <td>snake_case</td>
                            <td>
                                <code>mc_my_first_module.php</code><br>
                                <code>cn_newsletter.php</code>
                            </td>
                        </tr>

                        <tr>
                            <td>Namespace</td>
                            <td>PascalCase</td>
                            <td>
                                <code>MyCompany</code><br>
                                <code>CoolNickname</code>
                            </td>
                        </tr>

                        <tr>
                            <td>vendor-no-composer</td>
                            <td>PascalCase</td>
                            <td>
                                <code>MyCompany</code><br>
                                <code>CoolNickname</code>
                            </td>
                        </tr>

                        <tr>
                            <td>Modul-Konstanten</td>
                            <td>Screaming Case</td>
                            <td>
                                <code>MODULE_MC_MY_FIRST_MODULE</code><br>
                                <code>MODULE_CN_NEWSLETTER</code>
                            </td>
                        </tr>
                    </table>

                    <h3>Beschreibung der Conventions</h3>

                    <h4>snake_case</h4>
                    <p>
                        Bei snake_case werden alle Zeichen in kleinen Buchstaben geschrieben. Als Trennzeichen zwischen den Wörtern kann der <strong>Unterstrich</strong> verwendet werden. Beispiele: <code>mc_my_first_module</code>, <code>cn_newsletter</code>
                    </p>

                    <h4>lisp-case</h4>
                    <p>
                        Bei lisp-case werden alle Zeichen in kleinen Buchstaben geschrieben. Als Trennzeichen zwischen den Wörtern kann der <strong>Bindestrich</strong> verwendet werden. Beispiele: <code>super-company</code>, <code>cool-nickname</code>
                    </p>


                    <h4>camelCase</h4>
                    <p>
                        Bei camelCase <i>(auch lower camel case)</i> werden alle Wörter zusammengeschrieben ohne Trennzeichen. Der erste Buchstabe des ersten Worts wird klein geschrieben. Die Anfangsbuchstaben der weiteren Wörter verwenden Großbuchstaben. Beispiele: <code>myVariable</code>, <code>mySuperNiceModule</code>
                    </p>

                    <h4>PascalCase</h4>
                    <p>
                        Bei PascalCase werden alle Wörter zusammengeschrieben ohne Trennzeichen. Der erste Buchstabe des ersten Worts wird groß geschrieben. Die Anfangsbuchstaben der weiteren Wörter verwenden ebenfalls Großbuchstaben. Beispiele: <code>MyCompany</code>, <code>CoolNickname</code>
                    </p>

                    <h4>Screaming Case</h4>
                    <p>
                        Alle Zeichen werden in Großbuchstaben geschrieben. Als Trennzeichen zwischen Wörtern kann der Unterstrich verwendet werden. Beispiele: <code>MODULE_MC_MY_FIRST_MODULE</code>, <code>MODULE_CN_NEWSLETTER</code>.
                    </p>
                </main>
            </div>

            <footer>
                <?php include '../../views/footer.php'; ?> 
            </footer>
        </div>
    </body>
</html>
