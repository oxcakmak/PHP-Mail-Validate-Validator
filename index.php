<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

$supportedMails = array('gmail.com','yahoo.com','hotmail.com','outlook.com','msn.com','yandex.com');
function validateMail($email, $domains) { foreach ($domains as $domain) { $pos = strpos($email, $domain, strlen($email) - strlen($domain)); if ($pos === false){ continue; } if ($pos == 0 || $email[(int) $pos - 1] == "@" || $email[(int) $pos - 1] == "."){ return true; } } return false; }
?>
