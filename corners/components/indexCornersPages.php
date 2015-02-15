<?php
namespace Veer\Components;

class indexCornersPages {   
    
	public $data;
	
	public $sumRow = 0;
	
	public $currentRow = 0;
	
    function __construct($params = null) {
        
		for($j = 0; $j <= 55; $j++)
		{
			$this->data['full'][] = rand(0, 1) == 1 ? 6 : 12;
		}
		
		foreach($this->data['full'] as $key => $value)
		{
			if($value == 6) $this->data['only6'][$key] = $key;
		}
		
    }    
    
	public function makeGrid()
	{ 
		a:
		reset($this->data['full']);	
		$takeOne = head($this->data['full']);
		$keyOne = key($this->data['full']);

		if(empty($takeOne)) return true;
		
		$future = $takeOne + $this->sumRow;
		
		if($future <= 24) { 
			$this->data['makeRow'][$this->currentRow][$keyOne] = $takeOne;
			
			if($future == 24) { $this->sumRow = 0; $this->currentRow = $this->currentRow + 1; } else {
				$this->sumRow = $future;
			}
			
			array_pull($this->data['full'], $keyOne);
			array_pull($this->data['only6'], $keyOne);

			goto a;
		}
		
		$take6 = head($this->data['only6']);

		if(!empty($take6))
		{
			$this->data['makeRow'][$this->currentRow][$take6] = 6;
			array_pull($this->data['only6'], $take6);
		}

		$this->sumRow = 0; $this->currentRow = $this->currentRow + 1;

		goto a;
	}
    
	
}