<?php
    //ici le code
    include_once("./src/env.include.php");
?>
<?php
    include_once("./src/main_header.inc.php")
?>
<body>
    <header>
        <h1><?php print title.' version php '. $version?></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th role="columnheader">Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Python</td>
                        <td>Web &amp; application</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>C++</td>
                        <td>Application</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Node js</td>
                        <td>Web &amp; application</td>
                    </tr>
                    <tr>
                            <td>4</td>
                            <td>Php</td>
                            <td>Web &amp; application</td>
                        </tr>
                </tbody>
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <p>&copy; - Giusmili 2018</p>
        </footer>
    </main>
</body>
</html>
    <!--end-->
    <footer>
    <p>&copy; - Giusmili 2018 <?php print date('Y')?></p>
        
    </footer>
    <!-- donnée d'env php -->

</body>
</html>