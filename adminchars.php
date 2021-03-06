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

if (!isset($GET_frm_name) && !isset($GET_page)) {
	caption($lang['ADMIN_CHARS']);
	echo '
	<form id="chars" onSubmit="return GET_ajax(\'adminchars.php\',\'accounts_div\',\'chars\');">
		<table class="maintable" style="width: auto">
			<tr>
				<td>'.$lang['SEARCH'].'</td><td>
				<input type="text" name="termo" maxlength="23" size="23">
				<select name="tipo">
					<option value="1">'.$lang['ACCOUNT_ID'].'</option>
					<option value="2">'.$lang['CHAR_ID'].'</option>
					<option selected="selected" value="3">'.$lang['NAME'].'</option>
				</select></td><td>
				<input type="submit" name="search" value="'.$lang['SEARCH'].'"></td>
				<td><span title="'.$lang['SHOW_ALL'].'" class="link" onClick="return LINK_ajax(\'adminchars.php?page=0\',\'accounts_div\');">'.$lang['SHOW_ALL'].'</span></td>
			</tr>
		</table>
	</form>

	<div id="accounts_div" style="color:#000000">';
	$begin = 1;
}

if (isset($GET_tipo)) {
	if (inject($GET_tipo))
		alert($lang['INCORRECT_CHARACTER']);

	if (strlen($GET_termo) < 3)
		alert(sprintf($lang['ADMIN_TYPE_MIN_CHARS'], 3));

	switch($GET_tipo) {
		case 1:
			$query = sprintf(CHARS_SEARCH_ACCOUNT_ID, trim($GET_termo));
			break;
		case 2:
			$query = sprintf(CHARS_SEARCH_CHAR_ID, trim($GET_termo));
			break;
		default:
			$query = sprintf(CHARS_SEARCH_NAME, trim($GET_termo));
			break;
	}
	$pages = 0;
	$back = 'frm_name='.$GET_frm_name.'&tipo='.$GET_tipo.'&termo='.$GET_termo;
} else {
	if (!isset($GET_page))
		$GET_page = 0;
	else if (notnumber($GET_page))
		alert($lang['INCORRECT_CHARACTER']);


	$query = sprintf(CHARS_TOTAL);
	$result = execute_query($query, 'adminchars.php');
	$result->fetch_row();
	$pages = (int)($result->row(0) / 100);
	
	$inicio = $GET_page * 100;
	$query = sprintf(CHARS_BROWSE, $inicio);

	$back = 'page='.$GET_page;
}

$back = base64_encode($back);
$result = execute_query($query, 'adminchars.php');

echo '
<table class="maintable dataformat">
	<tr>
		<th align="right">'.$lang['ACCOUNT_ID'].'</th>
		<th align="right">'.$lang['CHAR_ID'].'</th>';
if ($CONFIG_servermode == SERVER_HERCULES) {
	echo '<th align="center">'.$lang['SEX'].'</th>';
}		
echo '
		<th align="left">'.$lang['NAME'].'</th>
		<th align="left">'.$lang['CLASS'].'</th>
		<th align="center">'.$lang['BLVLJLVL'].'</th>
		<th align="left">'.$lang['STATUS'].'</th>
		<th>&nbsp;</th>
	</tr>
	';

$jobs = $_SESSION[$CONFIG_name.'jobs'];

while ($line = $result->fetch_row()) {
	if ($line[6] != 0)
		$online = '<font color="green">'.$lang['STATUS_ON'].'</font>';
	else
		$online = '<font color="red">'.$lang['STATUS_OFF'].'</font>';
	
	$job = $lang['UNKNOWN'];
	if (isset($jobs[$line[3]]))
		$job = $jobs[$line[3]];


	echo '
	<tr>
		<td align="right">'.$line[0].'</td>
		<td align="right">'.$line[1].'</td>';
if ($CONFIG_servermode == SERVER_HERCULES) {
	echo '<td align="center">'.$line[7].'</th>';
}		
echo '
		<td align="left">'.htmlformat($line[2]).'</td>
		<td align="left">'.$job.'</td>
		<td align="center">'.$line[4].'/'.$line[5].'</td>
		<td align="center">'.$online.'</td>
		<td align="center">
			<span title="Detailed Info" class="link" onClick="window.open(\'admincharinfo.php?id='.$line[1].'\', \'_blank\', \'height = 600, width = 800, menubar = no, status = no, titlebar = no, scrollbars = yes\');">'.$lang['DETAIL'].'</span>
		</td>

	</tr>
	';
}
echo '</table>';

if ($pages) {
	echo '
	<table class="maintable">
		<tr>
			<td>
				<span title="0" class="link" onClick="return LINK_ajax(\'adminchars.php?page=0\',\'accounts_div\');">&lt;&lt;</span>';

	for ($i = ($GET_page - 10); $i <= ($GET_page + 10); $i++) {
		echo ' ';
		if ($i >= 0 && $i != $GET_page && $i <= $pages)
			echo '<span title="'.$i.'" class="link" onClick="return LINK_ajax(\'adminchars.php?page='.$i.'\',\'accounts_div\');">'.$i.'</span>';
		else if ($i == $GET_page)
			echo '<b>'.$i.'</b>';
	}

	echo '
				<span title="'.$pages.'" class="link" onClick="return LINK_ajax(\'adminchars.php?page='.$pages.'\',\'accounts_div\');">&gt;&gt;</span>
			</td>
		</tr>
	</table>';
}


if (isset($begin)) {
	echo '</div>';
}

fim();
?>
