<?php
    require_once("src/lib/AppData.php");
    //namespace TecnicalNS;
	/**
	* Application test Case
	*/

	class AppDataTest extends PHPUnit_Framework_TestCase {

		public function setUp(){}

        /**
         * Test that the array has a length of 3
         */
		public function testArraySize() {
			$arr = new AppData();
			$this->assertEquals(3, count($arr->getArr()));
		}

        // Test that sub-arrays has expected keys
        public function testAssocArrayKeys() {
            print("Testing Assoc Array Keys");
            $arr = (new AppData())->assocArr;
            $len = sizeof($arr);

            for ($i=0; $i<$len; $i++){
                $a = $arr[$i];
                $this->assertArrayHasKey("Name", $a);
                $this->assertArrayHasKey("Color", $a);
                $this->assertArrayHasKey("Element", $a);
                $this->assertArrayHasKey("Likes", $a);
            }
        }
	}

/*
    class AppData {
        private $arr;

        function __construct() {
            $this->arr = array(
                array(
                    'Name' => 'Trixie',
                    'Color' => 'Green',
                    'Element' => 'Earth',
                    'Likes' => 'Flowers'
                ),
                array(
                    'Name' => 'Tinkerbell',
                    'Element' => 'Air',
                    'Likes' => 'Singning',
                    'Color' => 'Blue'
                ),
                array(
                    'Element' => 'Water',
                    'Likes' => 'Dancing',
                    'Name' => 'Blum',
                    'Color' => 'Pink'
                ),
            );
        }

        public function __get($name) {
            if ($name=="assocArr")
                return $this->arr;

            return null;
        }

        public function getArr(){
            return $this->arr;
        }
    }
*/

?>