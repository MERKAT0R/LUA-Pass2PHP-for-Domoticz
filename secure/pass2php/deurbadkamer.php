<?php
if($status=='Open'&&$auto){
	$deurbadkamer='Open';
	if($zon<100){
		if(time>strtotime('5:00')&&time<strtotime('10:00')){
			if(status('lichtbadkamer1')=='Off')sw('lichtbadkamer1','On');
			if(status('lichtbadkamer2')=='On')sw('lichtbadkamer2','Off');
		}else{
			if(status('lichtbadkamer2')=='Off')sw('lichtbadkamer2','On');
			if(status('lichtbadkamer1')=='On')sw('lichtbadkamer1','Off');
		}
	}
}else{
	$deurbadkamer='Closed';
}