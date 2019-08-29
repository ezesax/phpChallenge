<?php
	class MultiplesClass{
		private $number;
		
		public function __construct($number, $multiples){
			$this->number = $number;
			$this->multiples = $multiples;
			$this->words = ['Linio', 'IT', 'Linianos'];
		}
		
		public function processNumber(){
			$result = $this->number;
			
			for($i = 0; $i < count($this->multiples); $i++){
				$j = 1;
				
				while($j <= $this->number){
					if($j * $this->multiples[$i] == $this->number){
						$result = $this->words[$i];
						break;
					}
					
					$j++;
				}
			}
			
			return $result;
		}
	}
?>