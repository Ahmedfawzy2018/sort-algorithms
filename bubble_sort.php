<?
class BubbleAlgo
{
	protected $items;
	protected $items_count;
	protected $flag = true;

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

		for($i=0; $i < $this->items_count - 1 ; $i++){
			for($j =0; $j < $this->items_count - $i - 1; $j++)
			{
				if($this->items[$j] > $this->items[$j+1])
				{
					$this->swap($this->items[$j],$this->items[$j+1]) ;
					$this->flag = false ;
				}
			}

			if($this->flag == true)
				break;
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
 
$array = [100,60,30,20,50,40] ;
$obj = new BubbleAlgo($array) ;
$obj->sortItems();
echo $obj->print();

?>