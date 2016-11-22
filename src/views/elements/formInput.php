<?php

namespace cool_name_for_your_group\hw4\views\elements;

class formInput extends Element
{
    public function render($data)
    {
        ?>
        <form action="index.php" name="myForm" onsubmit="return textareaValidate()">
			<input type="hidden" name="s" value="submitChartValue">
            <?php 
				if($data[flag] == 1){
				echo '<input type="text" name="TitleValue" placeholder="Chart Title" value="'.$data[1].'"/><br/>';
				echo '<textarea name ="DataValues" placeholder="Jan,600,5.4,              Feb,450,5.0">'.$data[2].'</textarea><br/>';
				echo "<p>correct value<br/>".$data[correctValues]."</p> ";
            }
				else{
				?><input type="text" name="TitleValue" placeholder="Chart Title" /><br/>
				  <textarea name ="DataValues" placeholder="Jan,600,5.4,              Feb,450,5.0"></textarea><br/> 
			
			<?php }?>
				<button type="submit">Share</button>
				<p id="error"></p>
        </form>
        <?php
    }
}
