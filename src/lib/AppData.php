<?php
    //namespace TecnicalNS;
	/**
	*  Application data wrapper
	*/
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