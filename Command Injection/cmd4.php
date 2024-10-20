<?php     include("../common/header.php");   ?>
<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php  hint("will exec 'whois' with the arg specified in the POST parameter \"domain\""); ?>

<form action="/CMD-4/index.php" method="POST">
    <input type="text" name="domain">
</form>

<pre>
<?php
    system("whois " . $_POST["domain"]);
 ?>
</pre>

## FInal :
1.Command injection through cmd POST Domain parameter . 
2.If it shows the out then no input sanitization and XSS is possible. 
