<?
class SelectionAlgo
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

		$min_index = 0 ;
		for($i=0; $i < $this->items_count - 1 ; $i++){
			$min_index = $i ;
			for($j =$i+1; $j < $this->items_count; $j++)
			{
				if($this->items[$j] < $this->items[$min_index])
				{
					$min_index = $j ;
					$this->swap($this->items[$min_index],$this->items[$i]) ;
				}
			}
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
$obj = new SelectionAlgo($array) ;
$obj->sortItems();
echo $obj->print();

?>