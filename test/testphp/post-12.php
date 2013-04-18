
<?php 
 $post = $_POST['page'] ? $_POST['page'] : 1;

if($post)  :?>
<div class="list">
	
	<ul>
		<li>page is <?= $post ;?></li>
		
	</ul>
	
</div>
<?php endif?>