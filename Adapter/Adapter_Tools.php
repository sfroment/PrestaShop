<?php

class Adapter_Tools
{
	public function ps_round($value, $precision = 0, $round_mode = null)
	{
		return call_user_func_array(array('Tools', 'ps_round'), func_get_args());
	}
}