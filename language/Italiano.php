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

//Non cambiare le tags come %s e %d o %%

//misc
$lang['LOGGED'] = 'Ora se connesso.';
$lang['LOGGEDOFF'] = 'Ora sei disconnesso.';
$lang['COOKIE_REJECTED'] = 'Cookie rifiutato.';
$lang['INCORRECT_CHARACTER'] = 'Rilevato Character invalido.';
$lang['UNKNOWN_MAIL'] = 'email rifiutata.';
$lang['INCORRECT_CODE'] = 'Codice Non valido.';
$lang['INCORRECT_PASSWORD'] = 'Password non valida.';
$lang['PASSWORD_CHANGED'] = 'Password cambiata.';
$lang['CHANGE_PASSWORD'] = 'Cambia Password';
$lang['USERNAME_LENGTH'] = 'Il tuo nome d\'account deve essere fra 4 e 23 caratteri.';
$lang['PASSWORD_LENGTH_OLD'] = 'La password deve essere fra 4 e 23 caratteri.';
$lang['PASSWORD_LENGTH'] = 'La password deve essere fra 6 e 23 caratteri.';
$lang['WRONG_USERNAME_PASSWORD'] = 'Nome d\'account/Password errati.';
$lang['USERNAME'] = 'Nome d\'account';
$lang['PASSWORD'] = 'Password';
$lang['NEW_PASSWORD'] = 'Nuova Password';
$lang['CONFIRM'] = 'Conferma';
$lang['CODE'] = 'Codice';
$lang['SECURITY_CODE'] = 'Codice di sicurezza';
$lang['RECOVER'] = 'Recupera';
$lang['PASSWORD_NOT_MATCH'] = 'Passwords diverse.';
$lang['PASSWORD_REJECTED'] = 'Password rifiutata: Non sicura.\nDeve avere 2 lettere, 2 numeri e almeno 6 caratteri.\nEs: cake48';
$lang['EMAIL_NEEDED'] = 'Necessita di un email.';
$lang['INVALID_BIRTHDAY'] = 'Data di nascita non corretta.';
$lang['SEX'] = 'Sesso';
$lang['REAL_SEX'] = 'Vero sesso';
$lang['JANUARY'] = 'Gennaio';
$lang['FEBRUARY'] = 'Febbraio';
$lang['MARCH'] = 'Marzo';
$lang['APRIL'] = 'Aprile';
$lang['MAY'] = 'Maggio';
$lang['JUNE'] = 'Giugno';
$lang['JULY'] = 'Luglio';
$lang['AUGUST'] = 'Agosto';
$lang['SEPTEMBER'] = 'Settembre';
$lang['OCTOBER'] = 'Ottobre';
$lang['NOVEMBER'] = 'Novembre';
$lang['DECEMBER'] = 'Dicembre';
$lang['MAIL'] = 'E-Mail';
$lang['CREATE'] = 'Crea';
$lang['NEED_TO_LOGIN'] = 'Devi essere connesso per accedere a questa pagina.';
$lang['NEED_TO_LOGIN_F'] = 'Devi essere connesso per questa funzione.';
$lang['DB_ERROR'] = 'Spiacente! Errore del DB rilevato. Ti preghiamo di riprovare pi� tardi.';
$lang['TXT_ERROR'] = 'Errore nel file di testo.';
$lang['NEED_TO_LOGOUT_F'] = 'Devi essere disconnesso dal gioco per questa funzione.';
$lang['CHANGE'] = 'Cambia';
$lang['SUNDAY'] = 'Domenica';
$lang['MONDAY'] = 'Luned�';
$lang['TUESDAY'] = 'Marted�';
$lang['WEDNSDAY'] = 'Mercoled�';
$lang['THURSDAY'] = 'Gioved�';
$lang['FRIDAY'] = 'Venerd�';
$lang['SATURDAY'] = 'Sabato';
$lang['BLOCKED'] = 'Sei stato bloccato, riprova fra %d min';
$lang['LEVEL'] = 'Level'; // TODO: translate
$lang['GMLEVEL'] = 'GM Level'; // TODO: translate
$lang['SHOW_ALL'] = 'Show All'; // TODO: translate

//menu.php
$lang['MENU_HOME'] = 'Home';
$lang['MENU_MYACCOUNT'] = 'Mio Account';
$lang['MENU_MYCHARS'] = 'Miei Chars';
$lang['MENU_RANKING'] = 'Classifica';
$lang['MENU_INFORMATION'] = 'Informazioni';
$lang['MENU_PROBLEMS'] = 'Problemi';
$lang['MENU_MESSAGE'] = 'Messaggi';
$lang['MENU_CHANGEPASS'] = 'Cambia Password';
$lang['MENU_CHANGEMAIL'] = 'Cambia e-mail';
$lang['MENU_TRANFMONEY'] = 'Trasferisci soldi';
$lang['MENU_CHANGESLOT'] = 'Cambia Slot';
$lang['MENU_MARRIAGE'] = 'Matrimonio';
$lang['MENU_PLAYERLADDER'] = 'Classifica giocatori';
$lang['MENU_GUILDLADDER'] = 'Classifica gilde';
$lang['MENU_ZENYLADDER'] = 'Classifica Zenny';
$lang['MENU_WHOSONLINE'] = 'Chi � connesso?';
$lang['MENU_ABOUT'] = 'info';
$lang['MENU_RESETPOS'] = 'Resetta posizione';
$lang['MENU_RESETLOOK'] = 'Resetta look';
$lang['MENU_OTHER'] = 'Altro';
$lang['MENU_LINKS'] = 'Links';
$lang['MENU_STORAGE'] = 'Storage'; // TODO: translate
$lang['MENU_VENDING'] = 'Vending'; // TODO: translate
$lang['MENU_PURCHASING'] = 'Purchasing'; // TODO: translate
$lang['MENU_LOGS'] = 'Logs'; // TODO: translate
$lang['MENU_LOG_ATCOMMAND'] = 'Atcommand Logs'; // TODO: translate
$lang['MENU_LOG_CASH'] = 'Cash Logs'; // TODO: translate
$lang['MENU_LOG_CHAR'] = 'Char Logs'; // TODO: translate
$lang['MENU_LOG_BRANCH'] = 'Dead Branch Logs'; // TODO: translate
$lang['MENU_LOG_ITEM'] = 'Item Logs'; // TODO: translate
$lang['MENU_LOG_LOGIN'] = 'Login Logs'; // TODO: translate
$lang['MENU_LOG_MVP'] = 'MVP Logs'; // TODO: translate
$lang['MENU_LOG_NPC'] = 'NPC Logs'; // TODO: translate
$lang['MENU_LOG_ZENY'] = 'Zeny Logs'; // TODO: translate
$lang['MENU_ADMIN'] = 'Administration'; // TODO: translate
$lang['MENU_ADMIN_ACC'] = 'Accounts'; // TODO: translate
$lang['MENU_ADMIN_CHAR'] = 'Chars'; // TODO: translate

//common
$lang['NAME'] = 'Nome';
$lang['CLASS'] = 'Classe';
$lang['BLVLJLVL'] = 'Blvl/Jlvl';
$lang['MAP'] = 'Mappa';
$lang['UNKNOWN'] = 'Sconosciuto';
$lang['POS'] = 'Posizione';
$lang['ZENY'] = 'Zeny';
$lang['SLOT'] = 'Slot';
$lang['ONE_CHAR'] = 'Devi avere almeno un character.';
$lang['WOE_TIME'] = 'Non puoi usare questa funzione durante la WoE.';
$lang['SEARCH'] = 'Search'; // TODO: translate
$lang['DETAIL'] = 'Detail'; // TODO: translate
$lang['ACCOUNT_ID'] = 'Account ID'; // TODO: translate
$lang['CHAR_ID'] = 'Char ID'; // TODO: translate
$lang['MOB_ID'] = 'Mob ID'; // TODO: translate
$lang['TIME'] = 'Time'; // TODO: translate
$lang['REFRESH_PAGE'] = 'Refresh'; // TODO: translate
$lang['MESSAGE'] = 'Message'; // TODO: translate
$lang['COMMAND'] = 'Command'; // TODO: translate
$lang['TYPE'] = 'Type'; // TODO: translate
$lang['EXP'] = 'Experience'; // TODO: translate
$lang['ABR_EXP'] = 'Exp'; // TODO: translate
$lang['HAIR_COLOR'] = 'Hair Color'; // TODO: translate
$lang['HAIR_STYLE'] = 'Hair Style'; // TODO: translate
$lang['IP_ADDRESS'] = 'IP'; // TODO: translate
$lang['EDIT'] = 'Edit'; // TODO: translate
$lang['STATUS'] = 'Status'; // TODO: translate
$lang['STATUS_ON'] = 'On'; // TODO: translate
$lang['STATUS_OFF'] = 'Off'; // TODO: translate
$lang['LINK_BACK'] = 'Back'; // TODO: translate


//items
$lang['ITEM_NAME'] = 'Item Name'; // TODO: translate
$lang['ITEM_AMOUNT'] = 'Amount'; // TODO: translate
$lang['ITEM_CARD'] = 'Card'; // TODO: translate
$lang['ITEM_SIGNED_BY'] = 'signed by'; // TODO: translate
$lang['ITEM_FORGED_BY'] = 'forged by'; // TODO: translate
$lang['ITEM_PET'] = 'Pet'; // TODO: translate
$lang['ITEM_TYPE'] = 'Type'; // TODO: translate
$lang['CASH_TYPE'] = 'Cash Type'; // TODO: translate

//whoisonline.php
$lang['WHOISONLINE_WHOISONLINE'] = 'Chi � connesso';
$lang['WHOISONLINE_COORDS'] = 'Coordinate';

//top100zeny.php
$lang['TOP100ZENY_TOP100ZENY'] = 'Top 100 Zeny';

//slot.php
$lang['SLOT_NOT_SELECTED'] = 'Nessun nuovo slot scelto.';
$lang['SLOT_CHANGE_FAILED'] = 'Cambiamento non riuscito.';
$lang['SLOT_WRONG_NUMBER'] = 'Numero slot non valido.';
$lang['SLOT_CHANGE_SLOT'] = 'Cambia Char Slot';
$lang['SLOT_NEW_SLOT'] = 'Nuovo Slot';
$lang['SLOT_PS1'] = '*Se lo slot scelto � gi� occupato, verranno scambiati';
$lang['SLOT_PS2'] = '*Puoi cambiare un Char alla volta';

//server_status.php
$lang['SERVERSTATUS_LOGIN'] = 'Login Server';
$lang['SERVERSTATUS_CHAR'] = 'Char Server';
$lang['SERVERSTATUS_MAP'] = 'Map Server';
$lang['SERVERSTATUS_ONLINE'] = 'In linea';
$lang['SERVERSTATUS_OFFLINE'] = 'Fuori linea';
$lang['SERVERSTATUS_USERSONLINE'] = 'Connesso';
$lang['AGIT'] = 'WoE';
$lang['AGIT_OFF'] = 'Off';
$lang['AGIT_ON'] = 'On';

//resetlook.php
$lang['RESETLOOK_RESET_LOOK'] = 'Reset del Look fallito.';
$lang['RESETLOOK_EQUIP_OK'] = 'L\'equip � stato resettato.';
$lang['RESETLOOK_HAIRC_OK'] = 'Hair Color � stato resettato.';
$lang['RESETLOOK_HAIRS_OK'] = 'Hair Style � stato resettato.';
$lang['RESETLOOK_CLOTHESC_OK'] = 'Clothes Color � stato resettato.';
$lang['RESETLOOK_SELECT'] = 'Scegli almeno un look da resettare.';
$lang['RESETLOOK_RESETLOOK'] = 'Resetta Look';
$lang['RESETLOOK_EQUIP'] = 'Equipment'; // TODO: translate
$lang['RESETLOOK_HAIRC'] = 'Hair Color'; // TODO: translate
$lang['RESETLOOK_HAIRS'] = 'Hair Style'; // TODO: translate
$lang['RESETLOOK_CLOTHESC'] = 'Clothes Color'; // TODO: translate

//recover.php
$lang['RECOVER_RECOVER'] = 'Recupera Password';

//position.php
$lang['POSITION_RESET_FAILED'] = 'Resetta la Posizione fallito.';
$lang['POSITION_NO_ZENY'] = 'zenny insuficienti.';
$lang['POSITION_OK'] = 'Posizione resettata.';
$lang['POSITION_ONE_CHAR'] = 'Devi avere almeno un character.';
$lang['POSITION_TITLE'] = 'Resetta Posizione';
$lang['POSITION_LEVEL'] = 'Level';
$lang['POSITION_SELECT'] = 'Scegli';
$lang['POSITION_RESET'] = 'Resetta';
$lang['POSITION_PS1'] = '*Ci sar� un prezzo di %d zeny per utilizzare questa funzione';
$lang['POSITION_JAIL'] = 'Non puoi usare questo mentre sei in galera.';

//motd.php
$lang['NEWS_MESSAGE'] = 'Messaggio';

//money.php
$lang['MONEY_INCORRECT_NUMBER'] = 'rivelato numero non valido.';
$lang['MONEY_CHEAT_DETECTED'] = 'Rilevato Cheat.';
$lang['MONEY_OPER_IMPOSSIBLE'] = 'Questa operazione � impossibile.';
$lang['MONEY_OK'] = 'Soldi trasferiti.';
$lang['MONEY_AMMOUNT'] = 'Transfer le montant d\'argent.';
$lang['MONEY_AVAILABLE'] = 'Ammontare valido';
$lang['MONEY_TRANSFER'] = 'Ammontare da trasferire';
$lang['MONEY_CHANGE'] = 'Cambia';
$lang['MONEY_TWO_CHAR'] = 'Devi avere almeno 2 characters.';
$lang['MONEY_TRANSFER_FROM'] = 'Trasferire da';
$lang['MONEY_TRANSFER_TO'] = 'Trasferire a';
$lang['MONEY_PS1'] = '*Ci sar� un prezzo di %.2f%% per utilizzare questa funzione';
$lang['MONEY_SELECT'] = 'Select'; // TODO: translate
$lang['MONEY_NO_ZENY'] = 'zenny insuficienti.';

//marriage.php
$lang['MARRIAGE'] = 'Matrimonio';
$lang['MARRIAGE_COUPLE_OFF'] = 'Questa funzione pu� essere usata solo quando la coppia � offline. Il vostro partner � attualmente connesso.';
$lang['MARRIAGE_DIVORCE_OK'] = 'Il tuo character � adesso divorziato.';
$lang['MARRIAGE_NOTHING'] = 'Nulla sar� fatto.';
$lang['MARRIAGE_PARTNER'] = 'Partner';
$lang['MARRIAGE_DIVORCE'] = 'Divorzia';
$lang['MARRIAGE_SINGLE'] = 'Celibe';
$lang['MARRIAGE_PS1'] = '*Dovette essere disconnessi entrambi per confermare il divorzio';
$lang['MARRIAGE_PS2'] = '*Puoi cambiare solo un character per volta';
$lang['MARRIAGE_PS3'] = '*Sarai bannato 2 minuti per permettere il salvataggio';

//ladder.php
$lang['LADDER_TOP100'] = 'Classifica Ladder Top 100';
$lang['LADDER_GUILD'] = 'Gilda';
$lang['LADDER_STATUS'] = 'Stato';
$lang['LADDER_STATUS_ON'] = 'On';
$lang['LADDER_STATUS_OFF'] = 'Off';

//guild.php
$lang['GUILD_TOP50'] = 'Top 50 Guild Ladder';
$lang['GUILD_EMBLEM'] = 'Emblema';
$lang['GUILD_GNAME'] = 'Nome Gilda';
$lang['GUILD_GLEVEL'] = 'Livello';
$lang['GUILD_GEXPERIENCE'] = 'Esperienza';
$lang['GUILD_GAVLEVEL'] = 'Livello medio';
$lang['GUILD_GCASTLES'] = 'Castelli Gilda';
$lang['GUILD_GCASTLE'] = 'Castello';
$lang['GUILD_MEMBERS'] = 'Membri';

//changemail.php
$lang['CHANGEMAIL_MAIL_INVALID'] = 'La nuova email non � un email valida.';
$lang['CHANGEMAIL_CHANGEMAIL'] = 'Cambia E-Mail';
$lang['CHANGEMAIL_CHANGE'] = 'Cambia';
$lang['CHANGEMAIL_NEW_MAIL'] = 'Nuova e-mail';
$lang['CHANGEMAIL_CURRENT_MAIL'] = 'e-mail attuale';

//account.php
$lang['USERNAME_IN_USE'] = 'Nome gi� in uso.';
$lang['ABR_SEX_MALE'] = 'M';
$lang['ABR_SEX_FEMALE'] = 'F';
$lang['SEX_MALE'] = 'Maschio';
$lang['SEX_FEMALE'] = 'Femmina';
$lang['ACCOUNT_CREATED'] = 'Account Creato. Adesso puoi connetterti.';
$lang['ACCOUNT_PROBLEM'] = 'Errore nella creazione del conto, Riprova pi� tardi.';
$lang['INTERNAL_STATISTIC'] = '(per statistiche interne)';
$lang['BIRTHDAY'] = 'Data di nascita (AAAAMMGG)';
$lang['ACCOUNT_MAX_REACHED'] = 'Ci sono troppi accounts registrati, riprova pi� tardi.';

//index.php
$lang['NEW_ACCOUNT'] = 'Nueva Cuenta';
$lang['NEW_ACCOUNT'] = 'Nuovo Account';
$lang['RECOVER_PASSWORD'] = 'Recupera password';
$lang['RECOVER_PASSWORD_EXPL'] = 'Send the account info to your e-mail'; // TODO: translate

//links.php
$lang['LINKS_LINKS'] = 'Links';
$lang['LINKS_NAME'] = 'Nome';

//login.php
$lang['LOGIN'] = 'Login'; // TODO: translate
$lang['LOGIN_WELCOME'] = 'Benvenuto/a';
$lang['LOGIN_HELLO'] = 'Buongiorno';
$lang['LOGIN_REMEMBER'] = 'Non dimenticare';
$lang['LOGOFF'] = 'Logoff'; // TODO: translate
$lang['LOGOFF_EXPL'] = 'Logoff the server and, if any, reset the cookies'; // TODO: translate

//about.php
$lang['ABOUT_ABOUT'] = 'Info sul server';
$lang['ABOUT_SERVER_NAME'] = 'Nome del server';
$lang['ABOUT_RATE'] = 'Rate';
$lang['ABOUT_TOTAL_ACCOUNTS'] = 'Accounts totali';
$lang['ABOUT_TOTAL_CHAR'] = 'Totale Characters';
$lang['ABOUT_TOTAL_ZENY'] = 'Totale Zeny';
$lang['ABOUT_TOTAL_CLASS'] = 'Totale par classe';
$lang['ABOUT_WOE_TIMES'] = 'Orari delle WoE'; //tempo delle WoE

//ceres.php
$lang['ABOUT_CERES'] = 'Ceres Control Panel Information'; // TODO: translate
$lang['CERES_TITLE'] = 'Ceres Control Panel';

//storage.php
$lang['STORAGE'] = 'Storage'; // TODO: translate
$lang['STORAGE_YOUR'] = 'Your Storage'; // TODO: translate
$lang['STORAGE_COUNT'] = '%d items found'; // TODO: translate

//vending.php
$lang['VENDING'] = 'Vending'; // TODO: translate
$lang['VENDING_NOUSER'] = 'There is currently no character using vending.'; // TODO: translate

//purchasing.php
$lang['PURCHASING'] = 'Purchasing'; // TODO: translate
$lang['PURCHASING_NOUSER'] = 'There is currently no character having a purchasing store.'; // TODO: translate

//selectlang.php
$lang['LANGUAGE'] = 'Language'; // TODO: translate

//admin
$lang['ADMIN_TYPE_MIN_CHARS'] = 'Please type at least %d chars'; // TODO: translate

//adminaccounts.php
$lang['ADMIN_ACCS'] = 'View Accounts'; // TODO: translate
$lang['ADMIN_ACCS_CHARS'] = 'Chars'; // TODO: translate
$lang['ADMIN_ACCS_CHARS_EXPL'] = 'View Chars'; // TODO: translate
$lang['ADMIN_ACCS_BAN_UNBAN'] = '(Un)Ban'; // TODO: translate
$lang['ADMIN_ACCS_BAN_UNBAN_EXPL'] = 'Ban, Block, Unban or Unblock'; // TODO: translate
$lang['ADMIN_ACCS_EDIT'] = 'Account Edit'; // TODO: translate
$lang['ADMIN_ACCS_ID'] = 'Account - %d'; // TODO: translate
$lang['ADMIN_ACCS_BAN_BLOCK'] = 'Account BAN/BLOCK'; // TODO: translate

//adminchars.php
$lang['ADMIN_CHARS'] = 'View Chars'; // TODO: translate

//adminaccban.php
$lang['ADMIN_ACCBAN_LAST_LOGIN'] = 'Last Login'; // TODO: translate
$lang['ADMIN_ACCBAN_BAN_UNTIL'] = 'Ban until'; // TODO: translate
$lang['ADMIN_ACCBAN_BLOCK'] = 'Block'; // TODO: translate
$lang['ADMIN_ACCBAN_UNBLOCK'] = 'Unlock'; // TODO: translate

