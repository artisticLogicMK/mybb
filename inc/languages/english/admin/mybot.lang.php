<?php
$l['mybot'] = "MyBot";
$l['mybot_permission'] = "Can configure MyBot?";


/* Admin Modul */
$l['mybot_overview'] = "Overview of all rules";
$l['mybot_addrule'] = "Add new rule";
$l['mybot_addrule_desc'] = "Here you can add a new rule";
$l['mybot_post'] = "Post as bot";
$l['mybot_post_desc'] = "Here you can post as bot";
$l['mybot_documentation'] = "Documentation";
$l['mybot_documentation_desc'] = "Here you can see all variables, which you can use in various texts";
$l['mybot_cache_reload'] = "Reload Cache";
$l['mybot_no_id'] = "No id given";
$l['mybot_no_rules'] = "No rules available";

/* Auflistung */
$l['mybot_title'] = "Title";
$l['mybot_conditions'] = "Condition";
$l['mybot_conditions_user'] = "User";
$l['mybot_conditions_group'] = "Usergroup";
$l['mybot_conditions_forum'] = "Forum";
$l['mybot_conditions_string'] = "String";
$l['mybot_conditions_string_reverse'] = "Reversed String";
$l['mybot_conditions_postlimit'] = "Below {1} Posts";
$l['mybot_conditions_prefix'] = "Prefix";
$l['mybot_actions'] = "Actions";
$l['mybot_actions_answer'] = "Answer";
$l['mybot_actions_move'] = "Move";
$l['mybot_actions_delete'] = "Delete";
$l['mybot_actions_softdelete'] = "Soft Delete";
$l['mybot_actions_stick'] = "Stick";
$l['mybot_actions_close'] = "Open/Close";
$l['mybot_actions_report'] = "Report";
$l['mybot_actions_approve'] = "(Un)approve";
$l['mybot_actions_pm'] = "Write PM";

/* Cache Update */
$l['mybot_cache_reloaded'] = "Reloaded Cache";

/* Documentation */
$l['mybot_variable'] = "Variable";
$l['mybot_description'] = "Description";
$l['mybot_global'] = "Global variables";
$l['mybot_doc_boardname'] = "The name of your Board";
$l['mybot_doc_botname'] = "The name of your bot";
$l['mybot_register'] = "Variables for registration";
$l['mybot_doc_registered'] = "The name of the new registered";
$l['mybot_doc_regid'] = "The ID of the new registered";
$l['mybot_birthday'] = "Variables for birthday";
$l['mybot_doc_birthday'] = "The name of the user who has birthday";
$l['mybot_doc_bid'] = "The ID of the user who has birthday";
$l['mybot_thread'] = "Variables for threads";
$l['mybot_doc_user'] = "The name of the poster";
$l['mybot_doc_userlink'] = "The name of the poster with MyCode Link to his profile";
$l['mybot_doc_subject'] = "The subject of the post";
$l['mybot_doc_id'] = "The internal ID of the post";
$l['mybot_doc_link'] = "MyCode link to the post. The subject is the text which is shown";
$l['mybot_doc_date'] = "Date of the post";
$l['mybot_doc_time'] = "Time of the post";
$l['mybot_doc_message'] = "The complete message of the post";
$l['mybot_doc_uid'] = "The User ID";
$l['mybot_doc_timestamp'] = "Timestamp of the post";
$l['mybot_doc_thread'] = "All variables for the last post are also available for the thread.<br />Example:<br />{lastpost->user} will replaced by the name of the user who have written the last post. {thread->user} will replaced by the name of the user who have written the first post";
$l['mybot_doc_forum'] = "The forum in which the thread is posted";
$l['mybot_doc_answers'] = "Number of answers";
$l['mybot_doc_views'] = "Number of views";
$l['mybot_doc_foundstring'] = "The first string found, if the corresponding function is used. The order is given here by the ACP";

/* Post as Bot */
$l['mybot_post_forum'] = "Forum";
$l['mybot_post_forum_desc'] = "In which forum should be posted?";
$l['mybot_post_forum_not'] = "Internal error [1]";
$l['mybot_post_subject'] = "Title";
$l['mybot_post_subject_desc'] = "The title of the thread";
$l['mybot_post_subject_not'] = "No title given";
$l['mybot_post_text'] = "Text";
$l['mybot_post_text_desc'] = "The post which should be post. MyCode and smileys are enabled. <br />Note: MyBot variables are not available here";
$l['mybot_post_text_not'] = "No text given";
$l['mybot_post_submit'] = "Submit post";
$l['mybot_post_category'] = "Your chosen forum is a category in which can't be posted.";
$l['mybot_post_inserted'] = "Post saved";

/* Add/Edit/Delete Rule */
$l['mybot_editrule'] = "Edit rule";
$l['mybot_add_title'] = "Title of the rule";
$l['mybot_add_title_desc'] = "Just needed for the listing";
$l['mybot_add_title_not'] = "Please enter a title";
$l['mybot_add_conditions'] = "Conditions";
$l['mybot_add_conditions_desc'] = "When should the rule be executed?<br />Use Crtl to select more than one condition";
$l['mybot_add_conditions_user'] = "If a specific user posts";
$l['mybot_add_conditions_group'] = "If a user in a specific usergroups posts";
$l['mybot_add_conditions_forum'] = "Just in specific forums";
$l['mybot_add_conditions_string'] = "If a specific string is in the message";
$l['mybot_add_conditions_postlimit'] = "Just below x Posts";
$l['mybot_add_conditions_prefix'] = "Just in threads with specific prefix";
$l['mybot_add_conditions_not'] = "Please select at least one condition";
$l['mybot_add_action'] = "Actions";
$l['mybot_add_action_desc'] = "What should the bot do?<br />Use Crtl to select more than one action";
$l['mybot_add_action_answer'] = "Answer";
$l['mybot_add_action_move'] = "Move thread";
$l['mybot_add_action_delete'] = "Delete post/thread";
$l['mybot_add_action_softdelete'] = "Soft Delete post/thread";
$l['mybot_add_action_stick'] = "Stick/Unstick thread";
$l['mybot_add_action_close'] = "Open/Close thread";
$l['mybot_add_action_report'] = "Report post";
$l['mybot_add_action_approve'] = "(Un)approve thread";
$l['mybot_add_action_pm'] = "Send PM";
$l['mybot_add_action_not'] = "Please select at least one action";
$l['thread_creator'] = "Thread Opener";
$l['mybot_add_user'] = "User";
$l['mybot_add_user_desc'] = "On what user should the bot react?";
$l['mybot_add_user_not'] = "Please select a user";
$l['mybot_add_group'] = "Usergroup";
$l['mybot_add_group_desc'] = "On what usergroup should the bot react?";
$l['mybot_add_group_not'] = "Please select a usergroup";
$l['mybot_add_forum'] = "Forum";
$l['mybot_add_forum_desc'] = "In which forum should the bot react?";
$l['mybot_add_forum_not'] = "Please select a forum";
$l['mybot_add_string'] = "String";
$l['mybot_add_string_desc'] = "Which string should appear in the post so the bot reacts?";
$l['mybot_add_string_not'] = "Please enter a string";
$l['mybot_add_string_reverse'] = "Reverse String?";
$l['mybot_add_string_reverse_desc'] = "The bot reacts when one of the string is NOT in the message";
$l['mybot_add_string_reverse_not'] = "Internal Error";
$l['mybot_add_postlimit'] = "Postlimit";
$l['mybot_add_postlimit_desc'] = "Until how many posts should the bot react?";
$l['mybot_add_postlimit_not'] = "Please enter a postlimit";
$l['mybot_add_prefix'] = "Prefix";
$l['mybot_add_prefix_desc'] = "On which prefixes should the bot react?";
$l['mybot_add_prefix_not'] = "Please select at least one prefix";
$l['mybot_add_answer'] = "Answer";
$l['mybot_add_answer_desc'] = "With what should the bot answer?<br />See the <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentation</a> for more information";
$l['mybot_add_answer_not'] = "Please enter an answer";
$l['mybot_add_move'] = "Move";
$l['mybot_add_move_desc'] = "Where should the thread be moved?";
$l['mybot_add_move_not'] = "Please select a forum where the thread should be moved";
$l['mybot_add_move_invalid'] = "You can't move a thread in this forum. Please select another";
$l['mybot_add_delete'] = "Delete";
$l['mybot_add_delete_desc'] = "Should the whole thread be deleted or just the last post?";
$l['mybot_add_delete_not'] = "Internal Error [1]";
$l['mybot_add_softdelete'] = "Soft Delete";
$l['mybot_add_softdelete_desc'] = "Should the whole thread be soft deleted or just the last post?";
$l['mybot_add_softdelete_not'] = "Internal Error [4]";
$l['thread'] = "Thread";
$l['post'] = "Post";
$l['mybot_add_report'] = "Report Reason";
$l['mybot_add_report_desc'] = "Enter a string which is saved as reason.";
$l['mybot_add_report_not'] = "Please enter a report reason.";
$l['mybot_add_approve'] = "(Un)approve";
$l['mybot_add_approve_desc'] = "Should this action impact only the last post or the whole thread?";
$l['mybot_add_approve_not'] = "Interner Fehler [2]";
$l['mybot_add_pm'] = "Private Message";
$l['mybot_add_pm_desc'] = "To whom should the message be sent?";
$l['mybot_add_pm_not'] = "Internal Error [3]";
$l['mybot_add_pm_last'] = "Last poster";
$l['mybot_add_pm_start'] = "Threadstarter";
$l['mybot_add_pm_other'] = "Other User";
$l['mybot_add_pm_user'] = "User";
$l['mybot_add_pm_user_desc'] = "To which user should the message be sent?";
$l['mybot_add_pm_user_not'] = "Please select a user";
$l['mybot_add_subject'] = "Subject";
$l['mybot_add_subject_desc'] = "Which subject should the message have?<br />See the <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentation</a> for more information";
$l['mybot_add_subject_not'] = "Please enter a subject";
$l['mybot_add_message'] = "Message";
$l['mybot_add_message_desc'] = "What should the bot write?<br />See the <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentation</a> for more information";
$l['mybot_add_message_not'] = "Please enter a message";
$l['mybot_add_added'] = "Added rule";
$l['mybot_add_edited'] = "Edited rule";
$l['mybot_delete_confirm'] = "Are you sure that you want to delete this rule?";
$l['mybot_delete_success'] = "Deleted rule";

/* Install Process */
$l['mybot_installing'] = "Install MyBot";
//$l['mybot_already_installed'] = "MyBot ist bereits installiert";
$l['mybot_create_user'] = "Create a new user";
$l['mybot_create_group'] = "Create a new group";
$l['mybot_user'] = "User";
$l['mybot_user_desc'] = "Which user should act as bot?";
$l['mybot_user_not'] = "Internal error [1]";
$l['mybot_username'] = "Username";
$l['mybot_username_desc'] = "How should the new user called?";
$l['mybot_username_not'] = "No username given";
$l['mybot_pw'] = "Password";
$l['mybot_pw_desc'] = "Please enter a password for the new User";
$l['mybot_pw_not'] = "No password given";
$l['mybot_email'] = "E-Mail";
$l['mybot_email_desc'] = "Please enter the e-mail for the new User";
$l['mybot_email_not'] = "No e-mail given";
$l['mybot_group'] = "Group";
$l['mybot_group_desc'] = "To which group should the new User belong?";
$l['mybot_group_not'] = "internal error [2]";
$l['mybot_groupname'] = "Groupname";
$l['mybot_groupname_desc'] = "How should the new group called?";
$l['mybot_groupname_not'] = "No groupname given";
$l['mybot_save'] = "Save";
$l['mybot_installed_group'] = "{1}<br />user \"{2}\" and group \"{3}\" added<br />Please edit this again";
$l['mybot_installed_user'] = "{1}<br />user \"{2}\" added<br />Please edit this again";
$l['mybot_installed'] = "MyBot has been successfully installed.";

$l['mybot_pl_missing'] = "The plugin depends on <a href='http://mods.mybb.com/view/pluginlibrary'>PluginLibrary</a>, which is missing. Please install it";
$l['mybot_pl_old'] = "The plugin depends on <a href='http://mods.mybb.com/view/pluginlibrary'>PluginLibrary</a>, which is too old. Please install a newer version (Version 8 or higher required)";
?>