<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
an e-mail to cerescp@gmail.com
*/

session_start();
include_once 'config.php'; // loads config variables
include_once 'lib/query.php'; // imports queries
include_once 'lib/adminquery.php';
include_once 'lib/functions.php';

if (!isset($_SESSION[$CONFIG_name.'level']) || $_SESSION[$CONFIG_name.'level'] < $CONFIG['cp_admin'])
	die ('Not Authorized');


if (isset($GET_id)) {
	caption(sprintf($lang['ADMIN_ACCS_ID'], $GET_id));
	
	if (isset($GET_back)) {
		$back = base64_decode($GET_back);
		echo '<center><span title="'.$lang['ADMIN_ACCS_CHARS_EXPL'].'" class="link" onClick="return LINK_ajax(\'adminaccounts.php?'.$back.'\',\'accounts_div\');">&lt;- '.$lang['LINK_BACK'].'</span></center>';
	}
	
	$jobs = $_SESSION[$CONFIG_name.'jobs'];

	$query = sprintf(ACCCHARS_ID, trim($GET_id));
	$result = execute_query($query, 'adminaccchars.php');

	echo '
	<table class="maintable dataformat">
	<tr>
		<th align="right">'.$lang['SLOT'].'</th>
		<th align="left">'.$lang['CHAR_ID'].'</th>';
if ($CONFIG_servermode == SERVER_HERCULES) {
	echo '<th align="center">'.$lang['SEX'].'</th>';
}		
echo '
		<th align="left">'.$lang['NAME'].'</th>
		<th align="left">'.$lang['CLASS'].'</th>
		<th align="center">'.$lang['BLVLJLVL'].'</th>
		<th align="center">'.$lang['STATUS'].'</th>
		<th align="center">'.$lang['MAP'].'</th>
		<th align="center">coords</th>
		<th></th>
	</tr>
	';
	while ($line = $result->fetch_row()) {
		if ($line[6] != 0)
			$online = '<font color="green">'.$lang['STATUS_ON'].'</font>';
		else
			$online = '<font color="red">'.$lang['STATUS_OFF'].'</font>';

		echo '
		<tr>
			<td align="right">'.$line[1].'</td>
			<td align="right">'.$line[0].'</td>';
if ($CONFIG_servermode == SERVER_HERCULES) {
	echo '<td align="center">'.$line[10].'</th>';
}		
echo '
			<td align="left">'.htmlformat($line[2]).'</td>
			<td align="left">
		';
		if (isset($jobs[$line[3]]))
			echo $jobs[$line[3]];
		else
			echo $lang['UNKNOWN'];
		echo '
			</td>
			<td align="center">'.$line[4].'/'.$line[5].'</td>
			<td align="center">'.$online.'</td>
			<td align="center">'.$line[7].'</td>
			<td align="center">'.$line[8].','.$line[9].'</td>
			<td align="left">
			<span title="Detailed Info" class="link" onClick="window.open(\'admincharinfo.php?id='.$line[0].'\', \'_blank\', \'height = 600, width = 800, menubar = no, status = no, titlebar = no, scrollbars = yes\');">'.$lang['DETAIL'].'</span>

			</td>
		</tr>
		';
	}
	echo '</table>';
} else caption('Account - Not Found');
//			return LINK_ajax('admincharinfo.php?id='.$line[0],'chars_div');
echo '<div id="chars_div" style="color:#000000"></div>';

fim();
?>
