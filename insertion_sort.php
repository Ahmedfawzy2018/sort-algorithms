<?
class InsertionAlgo
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

		$key = 0 ;
		$j = 0 ;
		for($i=1; $i < $this->items_count; $i++){
			$key =$this->items[$i];
			$j = $i -1 ;
			while($j >= 0 && $this->items[$j] > $key){
				$this->items[$j + 1] = $this->items[$j] ;
				$j = $j - 1 ;
			}

			$this->items[$j + 1] = $key ;
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

$array = [110,20,10,30,60,50,40] ;
$obj = new InsertionAlgo($array) ;
$obj->sortItems();
echo $obj->print();

?>