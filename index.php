<?php

$url = "http://www.google.com/";

header('Location: ' . $url);
?><html>
<head><script type="text/javascript">window.location.href = "<?=$url?>";</script></head>
<body></body>
</html>
<?php 
exit;
?>