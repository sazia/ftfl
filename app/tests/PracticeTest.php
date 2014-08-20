<?php



class PracticeTest extends PHPUnit_Framework_TestCase{

    public function testHelloWorld(){

       // $greeting="Hello World";
        $this->assertEqual(Actual,optonalmessage);
    }
    public function testvalue(){

        $val = 0;
        $this->assertEquals(0, $val);
    }
    public function testNullValue(){
        $val = null;
         $this->assertSame(0, $val);
    }

public function testArrayvalue()
 {
    $names = ['Taylor', 'Shawn', 'Dayle'];
         $this->assertContains('Dayle', $names);
 }
    public function testArrayNotValue()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
         $this->assertNotContains('Troll', $names);
    }
    public function testFamilyRequiresParents()
 {
          $family = [
            'parents' => 'Joe',
              'children' => ['Timmy', 'Suzy']
                    ];

          $this->assertArrayHasKey('parents', $family);
            }

    public function testAge(){

              $age=30;
        $this->assertInternalType('integer',$age);


    }

    public function testStampMustBeInstanceOfDateTime()
 {
           $date = new DateFormatter(new DateTime);

          $this->assertInstanceOf('DateTime', $date->getStamp());
    }
    public function testCalculatesCommission()
 {
         $commission = new Commission;
           $commission->setSalePrice('fifteen dollars');
 }











}