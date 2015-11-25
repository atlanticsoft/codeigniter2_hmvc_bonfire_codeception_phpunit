<?php
class CITest extends \PHPUnit_Framework_TestCase
{
  private $CI;
  
    protected function setUp()
    {
      $this->CI = &get_instance();
      
    }
  
     public function testGetPost()
    {
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $_GET['foo'] = 'bar';
      $this->assertEquals('bar', $this->CI->input->get_post('foo'));
    }
  

    protected function tearDown()
    {
    }

    // tests
    public function testMe()
    {
    }
}
