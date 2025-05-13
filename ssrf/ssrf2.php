<?php
header("HTTP/1.1 302 Found");
header("Location: http://169.254.169.254/");
exit;  // 必须终止脚本执行
?>
