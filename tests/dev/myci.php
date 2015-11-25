<?php
include('_bootstrap.php');
$CI =&get_instance();
$CI->load->library('users/auth');
$CI->auth->login("user","password",1); //login

$modules= new modules();
$mymodule = $modules->load('yourmodule/content');
$mymodule >load->model('yourmodule/your_model');

    
    $_POST['myvariable'] = 'variable';
    
     $mymodule >save_communication();
     $mymodule >your_model->find_by('message_id',$message_id);



