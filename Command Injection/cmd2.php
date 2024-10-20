<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php  hint("will exec the arg specified in the POST parameter \"cmd\""); ?>

<form action="/CMD-2/index.php" method="POST">
    <input type="text" name="cmd">
</form>

<?php
    system($_POST["cmd"]);
 ?>

## FInal :
1.Command injection through cmd POST parameter . 
2.If it shows the out then no input sanitization and XSS is possible. 
