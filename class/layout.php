<?php
class Layout {
	public function render($layoutName='')
	{
		$layout  = $this->layoutHead;
		$layout .= $this->layoutBody;
		$layout .= $this->layoutScripts;
		return $layout;
	}
}