<html><body><h1>It works!</h1>
<p>This is the default web page for this server.</p>
<p>The web server software is running but no content has been added, yet.</p>
<!--
<form action="up.php" method="post">
user:<input type="text" name="user">
<br/>
password:<input type="text" name="pwd">
<br/>
-->
<form action="charinfo.php"  method="post">
服务器：<input type="text" value="甜水绿洲" name="Realm">
<br/>
角色名：<input type="text" value="风暴的召唤" name="CharaName">
<br/>
<input type="submit" name="submit"/>
</form>

<?php
echo "this is php";
?>
</body>
</html>

