<?php
/********************************************************************************
* Small Time
/*******************************************************************************
* Version 0.896
* Author:  IT-Master
* www.it-master.ch / info@it-master.ch
* Copyright (c), IT-Master, All rights reserved
*******************************************************************************/
if(strstr($_template->_bootstrap,'true')){
	echo '
<a style="float:left; margin: 2px; padding: 3px; background-color: #bebebe; width: 100%" href="index.php?group=2">
        -> Schnelles Einbuchen
</a>
<a style="float:left; margin: 2px; padding: 3px; background-color: #bebebe; width: 100%" href="index.php?group=-1">
       -> Mitarbeiter - Login
</a>
<span class="clearfix"></span>
	';
	
}else{
 echo '
 <a href="index.php?group=2">
	<img height="80" src="images/ico/groups.png" alt="" />
	<br>
		Mehrbenutzer - Login ...
</a>
<hr>
<a href="index.php?group=-1"><img height="80" src="images/ico/user-icon.png" alt="" /><br> Einzel - Login ...</a>
';	
}