<?php
	// MyBB Registration Checkbox plugin code.
	// (C) 2015 CubicleSoft.  All Rights Reserved.
	//
	// This plugin is free to use with the MyBB forum software package.
	// Adds configuration options for setting the checkboxes during user registration.
	// That is, what checkboxes are checked by default.
	// Creative Commons License:  http://creativecommons.org/licenses/by-nc-nd/3.0/us
	// Developed by Thomas Hruska, CubicleSoft Core.

	// Disallow direct access to this file for security reasons.
	if (!defined("IN_MYBB"))
	{
		die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
	}

	// Admin hooks.
	$plugins->add_hook("admin_config_settings_change", "RegCheckbox_admin_config_settings");
	$plugins->add_hook("admin_config_settings_start", "RegCheckbox_admin_config_settings");

	// Registration hook.
	$plugins->add_hook("member_register_end", "RegCheckbox_member_register_end");

	function RegCheckbox_info()
	{
		global $lang;

		$lang->load("RegCheckbox_plugin_admin");

		return Array(
			"name" => $lang->RegCheckbox_plugin_Name,
			"description" => $lang->RegCheckbox_plugin_Desc,
			"website" => "http://mods.mybboard.net/view/registration-checkbox",
			"author" => $lang->RegCheckbox_plugin_Author,
			"authorsite" => "http://www.cubiclesoft.com/",
			"version" => "1.2",
			"guid" => "cf8afce2383f27bc69b00abd5685e011",
			"compatibility" => "14*,16*,18*"
		);
	}

	function RegCheckbox_install()
	{
		global $mybb, $db, $lang;

		// Delete existing settings (if any).
		$query = $db->simple_select("settinggroups", "gid", "name = 'RegCheckbox_plugin'");
		$gid = $db->fetch_field($query, "gid");
		if ($gid)  $db->delete_query("settings", "gid = '" . (int)$gid . "'");
		$db->delete_query("settinggroups", "name = 'RegCheckbox_plugin'");

		// Create new settings group.
		$query = $db->simple_select("settinggroups", "COUNT(*) as rows");
		$numrows = $db->fetch_field($query, "rows");
		$insertarray = Array(
			"name" => "RegCheckbox_plugin",
			"title" => "Registration Checkbox Configuration",
			"description" => "Sets up the default checkbox options for user registration",
			"disporder" => $numrows + 1,
			"isdefault" => 0
		);
		$db->insert_query("settinggroups", $insertarray);
		$gid = $db->insert_id();

		$lang->load("../member");

		// Create 'allownotices' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_allownotices",
			"title" => $db->escape_string($lang->allow_notices),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "1",
			"disporder" => 1,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		// Create 'hideemail' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_hideemail",
			"title" => $db->escape_string($lang->hide_email),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "0",
			"disporder" => 2,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		// Create 'receivepms' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_receivepms",
			"title" => $db->escape_string($lang->receive_pms),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "1",
			"disporder" => 3,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		// Create 'pmnotice' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_pmnotice",
			"title" => $db->escape_string($lang->pm_notice),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "1",
			"disporder" => 4,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		// Create 'emailpmnotify' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_emailpmnotify",
			"title" => $db->escape_string($lang->email_notify_newpm),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "0",
			"disporder" => 5,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		// Create 'invisible' setting.
		$insertarray = Array(
			"name" => "RegCheckbox_invisible",
			"title" => $db->escape_string($lang->invisible_mode),
			"description" => "Set the default checkbox status for this option",
			"optionscode" => "onoff",
			"value" => "0",
			"disporder" => 6,
			"gid" => (int)$gid
		);
		$db->insert_query("settings", $insertarray);

		rebuild_settings();
	}

	function RegCheckbox_is_installed()
	{
		global $db;

		$query = $db->simple_select("settings", "sid", "name = 'RegCheckbox_invisible'");
		$sid = $db->fetch_field($query, "sid");
		if ($sid)  return true;

		return false;
	}

	function RegCheckbox_uninstall()
	{
		global $db;

		// Delete existing settings (if any).
		$query = $db->simple_select("settinggroups", "gid", "name = 'RegCheckbox_plugin'");
		$gid = $db->fetch_field($query, "gid");
		if ($gid)  $db->delete_query("settings", "gid = '" . (int)$gid . "'");
		$db->delete_query("settinggroups", "name = 'RegCheckbox_plugin'");

		rebuild_settings();
	}

	function RegCheckbox_admin_config_settings()
	{
		global $lang;

		$lang->load("../member");
		$lang->load("RegCheckbox_plugin_admin");
	}

	function RegCheckbox_member_register_end()
	{
		global $mybb, $fromreg, $allownoticescheck, $hideemailcheck, $receivepmscheck, $pmnoticecheck, $emailpmnotifycheck, $invisiblecheck;

		if (!$fromreg)
		{
			$allownoticescheck = ($mybb->settings["RegCheckbox_allownotices"] ? " checked=\"checked\" " : "");
			$hideemailcheck = ($mybb->settings["RegCheckbox_hideemail"] ? " checked=\"checked\" " : "");
			// Apparently this variable is no longer used and someone forgot to remove it.
			// $emailnotifycheck = '';
			$receivepmscheck = ($mybb->settings["RegCheckbox_receivepms"] ? " checked=\"checked\" " : "");
			$pmnoticecheck = ($mybb->settings["RegCheckbox_pmnotice"] ? " checked=\"checked\" " : "");
			$emailpmnotifycheck = ($mybb->settings["RegCheckbox_emailpmnotify"] ? " checked=\"checked\" " : "");
			$invisiblecheck = ($mybb->settings["RegCheckbox_invisible"] ? " checked=\"checked\" " : "");
		}
	}
?>