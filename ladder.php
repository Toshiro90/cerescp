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
include_once 'lib/functions.php';

//if (!empty($_SESSION[$CONFIG_name.'account_id'])) {
//	if ($_SESSION[$CONFIG_name.'account_id'] > 0) {
		$jobs = $_SESSION[$CONFIG_name.'jobs'];
		if (!isset($GET_opt)) {
			caption($lang['LADDER_TOP100']);
			echo '
			<table class="maintable">
			<tr>
				<td align=center>
				<form id="ladder">
					<select name="opt" onChange="javascript:GET_ajax(\'ladder.php\', \'ladder_div\', \'ladder\');">
						<option selected="selected" value="0">'.$lang['SHOW_ALL'].'</option>
			';
			for ($i = 1; $i < 26; $i++) {
				if ($i != 13 && $i != 21 && $i != 22 && $i != 26)
					echo '<option value="'.$i.'">'.$jobs[$i].'</option>';
			}
			for ($i = 4001; $i < 4050; $i++) {
				if ($i != 4014 && $i != 4022 && $i != 4036 && $i != 4044 && $i != 4048)
					echo '<option value="'.$i.'">'.$jobs[$i].'</option>';
			}
			for ($i = 4054; $i < 4213; $i++)
			{
				if ($i != 4080 && $i != 4081 && $i != 4082 && $i != 4083 && $i != 4084 && $i != 4085 && $i != 4086  && $i != 4087 && $i != 4109 && $i != 4110 && $i != 4111 && $i != 4112 && !empty($jobs[$i]))
					echo '<option value="'.$i.'">'.$jobs[$i].'</option>';
			}
			echo '
					</select>
				</form>
				</td>
			</tr>
			</table>
	
			<div id="ladder_div">
			';
			$begin = 1;
			$GET_opt = 0;
		}
		
		if (notnumber($GET_opt))
			alert($lang['INCORRECT_CHARACTER']);

		$query = sprintf(LADDER_ALL);
		$string = 'All';

		if ($GET_opt > 0) {
			switch ($GET_opt) {
				case 7:
					$query = sprintf(LADDER_LKPA, $GET_opt, 13);
					break;
				case 14:
					$query = sprintf(LADDER_LKPA, $GET_opt, 21);
					break;
				case 4008:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4014);
					break;
				case 4015:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4022);
					break;
				case 4030:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4036);
					break;
				case 4037:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4044);
					break;
				case 4047:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4048);
					break;
				case 4056:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4084);
					break;
				case 4054:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4080);
					break;
				case 4058:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4086);
					break;
				case 4060:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4081);
					break;
				case 4062:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4085);
					break;
				case 4064:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4087);
					break;
				case 4066:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4082);
					break;
				case 4073:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4083);
					break;
				case 4096:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4109);
					break;
				case 4098:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4111);
					break;
				case 4100:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4112);
					break;
				case 4102:
					$query = sprintf(LADDER_LKPA, $GET_opt, 4110);
					break;
				default:
					$query = sprintf(LADDER_JOB, $GET_opt);
					break;
			}
			$string = $lang['UNKNOWN'];
			if (isset($jobs[$GET_opt]))
				$string = $jobs[$GET_opt];
		}

		$result = execute_query($query, 'ladder.php');
		echo '
		<table class="maintable dataformat">
		<tr>
			<th align="right">'.$lang['POS'].'</th>
			<th align="left">'.$lang['NAME'].'</th>
			<th align="left">'.$lang['CLASS'].'</th>
			<th align="center">'.$lang['BLVLJLVL'].'</th>
			<th align="left">'.$lang['LADDER_GUILD'].'</th>
			<th align="center">'.$lang['LADDER_STATUS'].'</th>
		</tr>
		';
		for ($i = 1; $i < 101; $i++) {
			if (!($line = $result->fetch_assoc()))
				break;

			$_SESSION[$CONFIG_name.'emblems'][$line['guild_id']] = $line['emblem_data'];

			$charname = htmlformat($line['name']);
			$gname = htmlformat($line['guild_name']);
			$job = $lang['UNKNOWN'];
			if (isset($jobs[$line['class']]))
				$job = $jobs[$line['class']];
			if (isset($_SESSION[$CONFIG_name.'account_id']) && $line['account_id'] == $_SESSION[$CONFIG_name.'account_id'])
				echo '<tr class="highlight">';
			else
				echo '<tr>';
			echo '
				<td align="right">'.$i.'</td>
				<td align="left">'.$charname.'</td>
				<td align="left">'.$job.'</td>
				<td align="center">'.$line['base_level'].'/'.$line['job_level'].'</td>';
			
			if ($line['guild_id'] > 0)
				echo '<td align="left"><img src="emblema.php?data='.$line['guild_id'].'" alt="'.$gname.'" class="emblem" />'.$gname.'</td>';
			else
				echo '<td align="left"><div class="emblem"></div></td>';

			if ($line['online'])
				echo '<td align="center"><font color="green">'.$lang['LADDER_STATUS_ON'].'</font></td>';
			else 
				echo '<td align="center"><font color="red">'.$lang['LADDER_STATUS_OFF'].'</font></td>';
			echo '
			</tr>';
		}
		echo '</table>';
		if (isset($begin)) {
			echo '</div>';
		}

//	}
	fim();
//}

//redir("index.php", "main_div, "You need to be logged to use this page.");
?>
