<?php
class HelperBootstrapHtml {
	public function row($content)
	{
		return ''.
		'<div class="row">'.
			$content.
		'</div>'.
	}
	public function column($length, $content, $screen='md', $centered=false)
	{
		return ''.
		'<div class="col-'.$screen.'-'.$length.'">'.
			$content.
		'</div>'.
 	}
	public function container($content)
	{
		return ''.
		'<div class="container">'.
			'<div class="row">'.
				$content.
			'</div>'.
		'</div>';
	}
}