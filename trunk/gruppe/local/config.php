<?php if (!defined('PmWiki')) exit();
## Use "Clean URLs".
$EnablePathInfo = 1;
$ScriptUrl = "http://www.amnesty-orscholz.de";
$PubDirUrl = 'http://www.amnesty-orscholz.de/pub';

$DefaultPasswords['admin'][] = crypt('mate-club');
$DefaultPasswords['edit'] = crypt('club-mate');


##############################
#### ZUSAETZLICHE RECIPES ####
##############################