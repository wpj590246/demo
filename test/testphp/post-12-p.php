<?php
	$maxpages = 20;
	$perpage = 10;
	$post = $_POST['page'] ? $_POST['page'] : 1;
	$reg = '{[\s\S]*?([\d]+)$}';
	preg_match($reg, $post, $matches);
	$post = $matches[1]>$maxpages ? $maxpages : $matches[1];
	$half_page = intval($perpage/2); //2
	if ($post-$half_page >= 1 ) {
		if ($post <= $maxpages-$half_page)
			
			$start_page = $post-$half_page;
		else 
			$start_page = $maxpages-$perpage;
		
	} else {
		$start_page = 1;
	}
		
	$end_page =  $start_page+$perpage<=$maxpages ? $start_page+$perpage: $maxpages;
	
	
?>
	<div class="pager">
			
			<?php 
				if ($post-1>=1) 
					echo '<a class="pre" href="'.($start_page-1).'">前一页</a>';
				
				
				for ($i=$start_page ;$i<=$end_page;$i++) {
					if ($post == $i)
						echo '<a class="current" href="'.$i.'">'.$i.'</a>';
					else
					
						echo '<a href="'.$i.'">'.$i.'</a>';
				}
				
				if ($post+1<=$maxpages) 
					echo '<a class="next" href="'.($post+1).'">后一页</a>';
				echo '<input type="text" id="any_page" value="'.$post.'"/>';
								
			?>

			
			
	</div>