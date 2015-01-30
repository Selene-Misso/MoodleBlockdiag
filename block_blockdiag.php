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
		$this->content->text  .= '<form action="../blocks/blockdiag/convert.php" method="post" target="_blank">blockdiagのコマンドを入力<br>';
		$this->content->text  .= '<textarea name="command" rows="4" style="width: 100%;font-size: 12pt; font-family: monospace;">';
		$this->content->text  .= '</textarea><br><input type="submit" value="変換">';
		$this->content->text  .= '</form></div>';
		$this->content->footer = 'blockdiagの説明は<a href="http://blockdiag.com/ja/index.html">こちら</a>';

		return $this->content;
	}


	function instance_allow_config() {
		return true;
	}
}
// Here's the closing bracket for the class definition

?>
