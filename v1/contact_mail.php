﻿<?php
$toEmail = "mikulas@stec.sk";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>Vaša správa bola odoslaná.</p>";
} else {
print "<p class='Error'>Vyskytol sa problém, kontaktujte nás iným spôsobom.</p>";
}
?>