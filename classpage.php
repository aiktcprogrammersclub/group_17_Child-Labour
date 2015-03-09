<?php
class Page
{
public $type = "default";
public $title = "Gas Agency System";
public $titleExtra = "";

public function getTop() {
$output = "";
$output .= $this->_getDocType();
$output .= $this->_getHtmlOpen();
$output .= $this->_getHead();
$output .= file_get_contents("pagetop.txt");
return $output;
} //end function getTop()

public function getTop1() {
$output = "";
$output .= $this->_getDocType();
$output .= $this->_getHtmlOpen();
$output .= $this->_getHead();
$output .= file_get_contents("pagetop1.txt");
return $output;
}

public function getTop2() {
$output = "";
$output .= $this->_getDocType();
$output .= $this->_getHtmlOpen();
$output .= $this->_getHead();
$output .= file_get_contents("pagetop2.txt");
return $output;
}

protected function _getDocType($doctype = "html5") {
if ($doctype == "html5") {
$dtd = "<!DOCTYPE html>";
}
return $dtd . "\n";
}
protected function _getHtmlOpen($lang = "en-us") {
if ($lang == "en-us") {
$htmlopen = "<html lang=\"en\">";
}
return $htmlopen . "\n";
}
protected function _getHead() {
$output = "";
if ($this->type == "contact") {
$output .= file_get_contents("pageheadcontact.txt");
} else {
$output .= file_get_contents("pagehead.txt");
}
if ($this->titleExtra != "") {
$title = $this->titleExtra . "|" . $this->title;
} else {
$title = $this->title;
}
$output .= "<title>" . $title . "</title>";
$output .= "</head>";
return $output;
} //end function _getHead()

public function getBottom() {
return file_get_contents("pagebottom.txt");
} //end function getBottom()

} //end Page class
?>