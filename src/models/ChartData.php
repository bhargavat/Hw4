<?php


namespace cool_name_for_your_group\hw4\models;


use cool_name_for_your_group\hw4\models\Model as Model;

class ChartData extends Model
{
    public $connection;
    public $md5Value;
    public $chartTitle;
    public $chartData;
   
    function __construct()
    {
        $this->connection = $this->getCOnnection();

    }
	
     function writeChartData($data){
		$md5Value = $data[2];
		$chartTitle = $data[0];
		$chartData = $data[1];
		echo "<br/> data in model<br/>";
		print_r($data);
		echo "<br/>";
		if($this->connection->query("Insert into HW4.Chart_Data Values('".$md5Value."','".$chartTitle."','".$chartData."')")){
			$success = 1;
			return $success; 
		}		
	}
	function fetchChartData($hashValue){
		$allData = array();
		$query1 = $this->connection->query("select chart_title, chart_data from HW4.Chart_Data where chart_hash_value ='".$hashValue."'");
		if($result = mysqli_fetch_assoc($query1)){
			$allData[] = $hashValue;
			$allData[] = $result['chart_title'];
			$allData[] = $result['chart_data'];
		}
		else{
			$allData[] = "no Value Found";
		}
		return $allData;		
	}		
		
}
