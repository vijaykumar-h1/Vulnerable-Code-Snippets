<?php     include("../common/header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php
hint("will exec the arg specified in the GET parameter \"cmd\"");
?>

<form action="/CMD-1/index.php" method="GET">
    <input type="text" name="cmd">
</form>

<?php
    system($_GET["cmd"]);
 ?>

## FInal :
1.Command injection through cmd GET parameter . 
2.If it shows the out then no input sanitization and XSS is possible. 
