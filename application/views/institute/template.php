<?php

 $this->load->view('institute/header');
 
 echo '
 <div class="content_wrapper">';
 $this->load->view('institute/leftmenu');
$this->load->view($view);

echo '</div>';


$this->load->view('institute/footer');

echo '</body></html>';
?>