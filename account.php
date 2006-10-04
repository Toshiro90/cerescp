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
include_once 'query.php'; // imports queries
include_once 'functions.php';

if ($CONFIG_disable_account)
	redir("motd.php", "main_div", "Disabled");

if (!empty($CONFIG_max_accounts)) {
	$query = sprintf(MAX_ACCOUNTS);
	$result = execute_query($query, 'account.php');
	$maxaccounts = $result->fetch_row();
	if ($maxaccounts[0] >= $CONFIG_max_accounts)
		redir("motd.php", "main_div", $lang['ACCOUNT_MAX_REACHED']);
}

if (isset($GET_opt)) {
	if ($GET_opt == 1 && isset($GET_frm_name) && !strcmp($GET_frm_name, "account")) {
		$session = $_SESSION[$CONFIG_name.'sessioncode'];
		if ($CONFIG_auth_image && function_exists("gd_info")
			&& strtoupper($GET_code) != substr(strtoupper(md5("Mytext".$session['account'])), 0,6))
			alert($lang['INCORRECT_CODE']);

		if (inject($GET_username) || inject($GET_password) || inject($GET_email))
			alert($lang['INCORRECT_CHARACTER']);

		if (strlen(trim($GET_username)) < 4 || strlen(trim($GET_username)) > 23)
			alert($lang['USERNAME_LENGTH']);

		if ($CONFIG_safe_pass && (strlen(trim($GET_password)) < 6 || strlen(trim($GET_password)) > 23))
			alert($lang['PASSWORD_LENGTH']);

		if (strlen(trim($GET_password)) < 4 || strlen(trim($GET_password)) > 23)
			alert($lang['PASSWORD_LENGTH_OLD']);

		if (!strcmp($GET_password, $GET_username)) // passwords e username iguais
			alert($lang['PASSWORD_REJECTED']);

		if (strcmp($GET_password, $GET_confirm))
			alert($lang['PASSWORD_NOT_MATCH']);

		if ($CONFIG_safe_pass && thepass(trim($GET_password)))
			alert($lang['PASSWORD_REJECTED']);

		if (strlen($GET_email) < 7 || !strstr($GET_email, '@'))
			alert($lang['EMAIL_NEEDED']);

		$query = sprintf(CHECK_USERID, trim($GET_username));
		$result = execute_query($query, 'account.php');

		if ($result->count())
			alert($lang['USERNAME_IN_USE']);

		if ($GET_sex) 
			$GET_sex = 'F';
		else
			$GET_sex = 'M';

		if ($CONFIG_md5_pass)
			$GET_password = md5($GET_password);

		$query = sprintf(INSERT_CHAR, trim($GET_username), trim($GET_password), $GET_sex, $GET_email, $_SERVER['REMOTE_ADDR']);
		$result = execute_query($query, 'account.php');

		$query = sprintf(CHECK_ACCOUNTID, trim($GET_username), trim($GET_password));
		$result = execute_query($query, 'account.php');
		
		if ($line = $result->fetch_row()) {
			redir("motd.php", "main_div", $lang['ACCOUNT_CREATED']);
		} else
			redir("motd.php", "main_div", $lang['ACCOUNT_PROBLEM']);

	}
}

if (isset($_SESSION[$CONFIG_name.'sessioncode']))
	$session = $_SESSION[$CONFIG_name.'sessioncode'];
$session['account'] = rand(12345, 99999);
$_SESSION[$CONFIG_name.'sessioncode'] = $session;

	opentable($lang['NEW_ACCOUNT']);
	echo "
	<form id=\"account\" onSubmit=\"return GET_ajax('account.php','main_div','account');\"><table>
	<tr><td align=\"right\">".$lang['USERNAME'].":</td><td align=\"left\">
	<input type=\"text\" name=\"username\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['PASSWORD'].":</td><td align=\"left\">
	<input type=password name=\"password\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['CONFIRM'].":</td><td align=\"left\">
	<input type=password name=\"confirm\" maxlength=\"23\" size=\"23\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	</td></tr>
	<tr><td align=\"right\">".$lang['SEX'].":</td><td align=\"left\">
	<select name=\"sex\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	<option value=\"0\">".$lang['SEX_MALE']."<option value=\"1\">".$lang['SEX_FEMALE']."</select></td></tr>
	<tr><td align=\"right\">".$lang['MAIL'].":</td><td align=\"left\">
	<input type=\"text\" name=\"email\" maxlength=\"40\" size=\"40\" onKeyPress=\"return force(this.name,this.form.id,event);\">
	<input type=\"hidden\" name=\"opt\" value=\"1\"></td></tr>
	<input type=\"hidden\" name=\"ipaddress\" value=\"".$_SERVER['REMOTE_ADDR']."\">";
	if ($CONFIG_auth_image && function_exists("gd_info")) { 
		echo "<tr><td align=right>".$lang['CODE'].":</td>
		<td align=\"left\">
		<input type=\"text\" name=\"code\" maxlength=\"6\" size=\"6\" onKeyPress=\"return force(this.name,this.form.id,event);\">
		&nbsp;<img src=\"img.php?img=account\" alt=\"".$lang['SECURITY_CODE']."\"></td></tr>";
	}

	echo "
	<tr><td>&nbsp;</td><td><input type=\"submit\" name=\"create\" value=\"".$lang['CREATE']."\"></td></tr>
	</table></form>
	";
	closetable();
?>
