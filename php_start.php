<?php
    //ici le code
    include_once("./src/env.include.php");
?>
<?php
    include_once("./src/header.inc.php")
?>
<body>
    <header>
        <h1><?php print title.' version php '. $version?></h1>
    </header>
    <?php
    //ici le code
    include_once("./src/main.inc.php");
?>
</body>
</html>
    