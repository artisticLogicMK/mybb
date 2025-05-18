<?php

class JB_MyBot_Actions_Move extends JB_MyBot_Actions_Base
{
	protected static $type = "move";

	public function doAction(&$pid, &$thread, &$info, &$date)
	{
		global $moderation;

		$info['tid'] = $moderation->move_thread($info['tid'], $this->getData());
		$thread = get_thread($info['tid']);
	}

	public static function generateAdditionalFields($data)
	{
		global $form, $form_container, $lang;

		$add_move = $form->generate_forum_select("move", $data['move']);
		$form_container->output_row($lang->mybot_add_move, $lang->mybot_add_move_desc, $add_move, '', array(), array('id' => 'move'));
	}

	public static function generatePeekers()
	{
		return 'new Peeker($("#action"), $("#move"), /move/);';
	}
}