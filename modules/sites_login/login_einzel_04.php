<?php
/********************************************************************************
* Login - Formular
/*******************************************************************************
* Version 0.896
* Author:  IT-Master
* www.it-master.ch / info@it-master.ch
* Copyright (c), IT-Master, All rights reserved
*******************************************************************************/
$_color['td_background_top']	= "#f9fd9f"; 	//Überschriften
$_color['td_background_tag']	= "#e3f3dd"; 	//Normal,Arbeitstag
$_CheckCode = "<br>
<form name='login' action='?' method='post' target='_self'>
	<table width=600 border=0 cellpadding=3 cellspacing=1>
	<tr>
		<td align=left COLSPAN=2 class=td_background_top width=60>Login</td>
	</tr><tr>
		<td align=left class=td_background_tag width=100>Loginname :</td>
		<td align=left class=td_background_tag ><input type='text' name='_n' value='' size='20' onfocus=\"this.value=''\" class='form-control'></td>
	</tr>
	<tr>
		<td align=left class=td_background_tag width=100>Passwort :</td>
		<td align=left class=td_background_tag ><input type='password' name='_p' value='' size='20' onfocus=\"this.value=''\" class='form-control'></td>
	</tr><tr>
		<td align=center COLSPAN=2 width=60>
			<input type='submit' name='login' value='Login' >
		</td>
	</tr>
	</table>
</form>";
//-----------------------------------------------------------------------------
echo $_CheckCode;