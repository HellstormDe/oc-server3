<?php
/****************************************************************************
											./lang/de/ocstyle/removelogs.tpl.php
															-------------------
		begin                : July 9 2004

		For license information see doc/license.txt
 ****************************************************************************/

/****************************************************************************
	   
   Unicode Reminder メモ
                                      				                                
	 remove a cache log
		
 ****************************************************************************/
?>
<form action="removelog.php" method="post" enctype="application/x-www-form-urlencoded" name="removelog_form" dir="ltr">
<input type="hidden" name="commit" value="1"/>
<input type="hidden" name="logid" value="{logid}"/>
<table class="content">
	<tr><td class="header" colspan="2"><img src="lang/de/ocstyle/images/description/22x22-logs.png" border="0" width="32" height="32" alt="" title="" align="middle"> <b>{t}remove log entry for <a href="viewcache.php?cacheid={cacheid}">{cachename}</a>{/t}</b></td></tr>
	<tr><td class="spacer"></td></tr>

	<tr><td>{t}are you sure that this log entry shall be removed?{/t}</td></tr>
	<tr><td class="spacer"></td></tr>

	<tr>
		<td class="header-small">
			{logimage} {date} {typetext}
		</td>
	</tr>
	<tr><td class="spacer"></td></tr>
	<tr>
		<td>
			{logtext}
		</td>
	</tr>
	<tr><td class="spacer"></td></tr>

	<tr><td class="header-small">{t}do you want to send {log_user_name} a note?{/t}</td></tr>
	<tr>
		<td>
		<textarea class="logs" name="logowner_message"></textarea>
		</td>
	</tr>
	<tr><td class="spacer"></td></tr>

	<tr>
		<td class="header-small">
		<input type="submit" name="submit" value="{t}Remove log entry{/t}" style="width:120px"/>
		</td>
	</tr>
</table>
</form>