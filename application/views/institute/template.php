<?php

 $this->load->view('institute/header');
 
 echo '
 <div class="content_wrapper">';
 $this->load->view('institute/leftmenu');
 echo '<div class="contentOuter" id="content">';
//$this->load->view($view);

 echo '<iframe src="about:blank" frameborder="0" id="contentFrame" name="contentFrame" style="width:100%" scrolling="no"></iframe>';
echo '</div>';
echo '</div>';


$this->load->view('institute/footer');

echo '</body></html>';
?>