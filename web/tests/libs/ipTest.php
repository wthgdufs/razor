<?php
/*========================================
 umsTest
 Test case of ums controller
 ========================================*/




class ipTest extends CIUnit_TestCase {
    public function __construct($name = NULL, array $data = array(), $dataName = '') {
        parent::__construct($name, $data, $dataName);
    }

    public function setUp() {
        
        parent::setUp();
        
    }
    

    public function testGeoIP() {
        
        require_once(dirname(__FILE__).'/../../application/libraries/GeoIpLibrary.php');
        $a = new GeoIpLibrary();
        //$a = $this->CI->load->library('geoiplibrary');
        
        $a->setIp("117.88.165.1");
        $this -> assertEquals('China',$a->country);
        $this -> assertEquals('Jiangsu',$a->region);
        $this -> assertEquals('Nanjing',$a->city);
    }
    
    public function testIPIP() {
        
        require_once(dirname(__FILE__).'/../../application/libraries/IpIpLibrary.php');
        $a = new IpIpLibrary();
        //$a = $this->CI->load->library('geoiplibrary');
        
        $a->setIp("117.88.165.1");
        $this -> assertEquals('中国',$a->country);
        $this -> assertEquals('江苏',$a->region);
        $this -> assertEquals('南京',$a->city);
    }

}
?>