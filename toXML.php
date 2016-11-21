<?php
$data = '{"Jan": [5, 10, 15, 20] , "Feb":[20,10,"",22], "Mar":[5,3,"",4], "April":[10,"",1,2]}';

$out = json_decode($data, true);

$keys = array_keys($out); 
$values = array_values($out);

$title = 'Month v Value'; //need to change to query fetch from db

echo "<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE chart SYSTEM 'chart.dtd'>
<chart title='".$title."'>";
foreach ($keys as $index1=>$label) {
	// print $label;
	echo "<label text='".$label."'>";
foreach ($values as $index2=>$value){
		// print $values[$index1][$index2]." ";
    if(strlen($values[$index1][$index2]) > 0 ){
	echo '<value>'.$values[$index1][$index2].'</value>';
    }
}
	echo "</label>";
}
echo "</chart>";

/*
Sample XML code that conforms to chart.dtd:

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE chart SYSTEM "chart.dtd" >
<chart title="Month v. Value">
    <label text="Jan">
        <value>5</value>
        <value>7</value>
    </label>
    <label text="Dec">
        <value>2</value>
        <value>9</value>
        <value>10</value>
    </label>
</chart>

*/