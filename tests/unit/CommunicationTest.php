<?php
class CITest extends \PHPUnit_Framework_TestCase
{
  private $CI;
  private $modules;
  private $communication;
  
    protected function setUp()
    {
      global $CI,$modules,$communication;
      
      $CI = &get_instance();   
      $CI->load->library('users/auth');
      $CI->auth->login("user","pass",1);
      $modules= new modules();
      $communication = $modules->load('communication/content');
      $communication->load->model('communication/communication_model');
      
    }
  
    protected function tearDown()
    {
    }

    // tests
   
    public function testSaveComunication()
    {
     global $CI,$communication;
    
    
    $_POST['message'] = 'my message';
    $_POST['save'] = 'Create Communication';
    $message_id = $communication->save_communication();
    $this->assertGreaterThan(0,$message_id);
    $my_message =$communication->communication_model->find_by('message_id',$message_id);
    
    $this->assertEquals('my message',$my_message->message);  
    }
    

  
    
    

  

}
