<?php
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("usercp_menu", "pm_pm", 9);

function pm_info()
{
	return array(
		"name"			=> "PM Menu Counter",
		"description"	=> "Shows the number of PM's in Folders",
		"website"		=> "http://jonesboard.de/",
		"author"		=> "Jones",
		"authorsite"	=> "http://jonesboard.de/",
		"version"		=> "1.0.1",
		"guid" 			=> "9b25ded9254013b742a41f37efe9140e",
		"compatibility" => "17*,18*",
		"myplugins_id"	=> "pm-menu-counter"
	);
}

function pm_activate()
{
	require MYBB_ROOT."inc/adminfunctions_templates.php";
	find_replace_templatesets("usercp_nav_messenger", "#".preg_quote('{$folderlinks}')."#i", '{$mybb->folderlinksnum}');	
	find_replace_templatesets("usercp_nav_messenger_folder", "#".preg_quote('<div>')."#i", '<div><span style="float:right;">({$unread}/{$numb})</span>');
}

function pm_deactivate()
{
	require MYBB_ROOT."inc/adminfunctions_templates.php";
	find_replace_templatesets("usercp_nav_messenger", "#".preg_quote('{$mybb->folderlinksnum}')."#i", '{$folderlinks}');
	find_replace_templatesets("usercp_nav_messenger_folder", "#".preg_quote('<span style="float:right;">({$unread}/{$numb})</span>')."#i", '');
}

function pm_pm()
{
	global $db, $mybb, $templates;

	$foldersexploded = explode("$%%$", $mybb->user['pmfolders']);
	foreach($foldersexploded as $key => $folders)
	{
		$folderinfo = explode("**", $folders, 2);
		$folderinfo[1] = get_pm_folder_name($folderinfo[0], $folderinfo[1]);
		if($folderinfo[0] == 4)
		{
			$class = "usercp_nav_trash_pmfolder";
		}
		else if($mybb->folderlinksnum)
		{
			$class = "usercp_nav_sub_pmfolder";
		}
		else
		{
			$class = "usercp_nav_pmfolder";
		}

		$numb = $db->query("SELECT * FROM ".TABLE_PREFIX."privatemessages WHERE uid='".$mybb->user['uid']."' AND folder='".$folderinfo[0]."'");
		$numb = $db->num_rows($numb);
		if($db->field_exists("unreadpms", "users") == true)
		{
			$query = $db->simple_select("privatemessages", "COUNT(pmid) AS pms_unread", "uid='".$mybb->user['uid']."' AND status='0' AND folder='".$folderinfo[0]."'");
			$unread = $db->fetch_array($query);
			$unread = $unread['pms_unread'];
		} else
			$unread=0;

		$folder_id = $folderinfo[0];
		$folder_name = $folderinfo[1];

		eval("\$mybb->folderlinksnum .= \"".$templates->get("usercp_nav_messenger_folder")."\";");
	}
}
?>