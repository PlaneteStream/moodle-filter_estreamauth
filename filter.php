<?php
// require_once('../../config.php');
defined('MOODLE_INTERNAL') || die();
class filter_estreamauth extends moodle_text_filter {

    private function userobfuscate($strx) {

        $strbase64chars = '0123456789aAbBcCDdEeFfgGHhiIJjKklLmMNnoOpPQqRrsSTtuUvVwWXxyYZz/+=';
        $strbase64string = base64_encode($strx);
        if ($strbase64string == '') {
            return '';
        }
        $strobfuscated = '';
        for ($i = 0; $i < strlen ($strbase64string); $i ++) {
            $intpos = strpos($strbase64chars, substr($strbase64string, $i, 1));
            if ($intpos == - 1) {
                return '';
            }
            $intpos += strlen($strbase64string ) + $i;
            $intpos = $intpos % strlen($strbase64chars);
            $strobfuscated .= substr($strbase64chars, $intpos, 1);

        }
        return urlencode($strobfuscated);
    }
	
    public function filter($text, array $options = array()) {
			global $USER;
            $delta = $this->userobfuscate($USER->username);
        return str_replace('ESDLTA', $delta, $text);
        }
}