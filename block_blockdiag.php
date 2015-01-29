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
		$this->content->text   = '<div style="text-align: center;">';
		$this->content->text  .= '<form mothod="post">入力フォーム<br>';
		$this->content->text  .= '<textarea name="command" rows="4">';
		$this->content->text  .= '</textarea><br><input type="submit" value="変換">';
		$this->content->text  .= '<br><hr>出力された図<br>';
		$this->content->text  .= '<form mothod="post"><input type="submit" value="保存"></form>';
		$this->content->text  .= '</form></div>';
//		$this->content->text  .= '';
		$this->content->footer = 'これはフッタ';

		return $this->content;
	}


	function instance_allow_config() {
		return true;
	}
}
// Here's the closing bracket for the class definition

?>
