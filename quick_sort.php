<?
class QuickSortAlgo
{
	protected $items;
	protected $items_count;

	public function __construct($array)
	{
		$this->items = $array ;
		$this->items_count = count($array);
	}

	public function isEmpty()
	{
		return count($this->items) < 1 ? true : false ;
	}

	public function sortItems()
	{
		if($this->isEmpty()){
			echo "Array is empty"; 
			exit;
		}

		if($this->items_count <= 1){
	        $this->items;
	    }
	    else{
	    	$pivot = $this->items[0] ;
	    	$left = array() ;
	    	$right = array() ;
	    	for($i=1; $i < $this->items_count; $i++)
	    	{
	    		if($this->items[$i] < $pivot)
	    		{
	    			$left[] = $this->items[$i] ;
	    		}else{
	    			$right[] = $this->items[$i] ; 
	    		}
	    	}
	    	array_merge($this->sortItems($left),array($pivot),$this->sortItems($right)) ;
	    }
	    
		echo "sorting done <br />";
	}

	public function swap(&$x,&$y)
	{
		$temp = $x;
		$x = $y ;
		$y = $temp ;
	}

	public function print()
	{
		for ($i=0; $i < $this->items_count ; $i++) { 
			echo $this->items[$i] ." <br />" ;
		}
	}
}

$array = [20,10,30,60,50,40] ;
$obj = new QuickSortAlgo($array) ;
$obj->sortItems();
echo $obj->print();

?>