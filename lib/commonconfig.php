<?php
/*
Ceres Control Panel

This is a control panel program for eAthena and other Athena SQL based servers
Copyright (C) 2005 by Beowulf and Dekamaster

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

DEFINE('SERVER_UNKNOWN', 0); // Unknown
DEFINE('SERVER_EATHENA', 1); // eAthena
DEFINE('SERVER_RATHENA', 2); // rAthena
DEFINE('SERVER_HERCULES', 3); // Hercules

function servertype_by_value($s) {
	switch ((int)$s) {
		default:
		case SERVER_UNKNOWN:
			return 'SERVER_UNKNOWN';
		case SERVER_EATHENA:
			return 'SERVER_EATHENA';
		case SERVER_RATHENA:
			return 'SERVER_RATHENA';
		case SERVER_HERCULES:
			return 'SERVER_HERCULES';
	}
}


?>
