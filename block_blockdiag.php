<?php
class block_blockdiag extends block_base {
	public function init() {
		$this->title = get_string('blockdiag', 'block_blockdiag');
	}
	
// The PHP tag and the curly bracket for the class definition 
// will only be closed after there is another function added in the next section.

	public function get_content() {
		if ($this->content !== null) {
			return $this->content;
		}
	 
		$this->content         = new stdClass;
		$this->content->text   = $this->config->text;
		$this->content->footer = 'これはフッタ';

		return $this->content;
	}


	function instance_allow_config() {
		return true;
	}
}
// Here's the closing bracket for the class definition

?>
