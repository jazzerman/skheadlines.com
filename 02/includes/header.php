<div id="header">	
	<div id="header_notes_wrapper">
		<div class="find_us">
			<div style="float: left; margin-right: 5px; ">Find us on:</div>
			<div style="float: right;">
				<a href="<?=$currentURL?>"><img src="images/facebook.png" style=""/></a>
				<a href="<?=$currentURL?>"><img src="images/twitter.png"/></a>		
			</div>		
		</div>	
			<div class="clr"></div>
			<div class="last_updated">
				Last Updated:
                                <?php
                                        date_default_timezone_set('EST');
                                        echo date(' F jS Y');
                                ?>
			</div>		
			<div class="clr"></div>
			<div class="search_form">
				<div id="container_input_search">
					<input type="text" id="input_search"/>
				</div>
				<a href="<?=$currentURL?>" id="search_btn">
					<img src="images/search.png"/>
				</a>
			</div>		
	</div>			
</div>
<!--
<div id="navigation">	
	<div id="nav_menu">	
		<ul id="menu_header_nav">
			<li id="home" class="current_page_item"><a href="<?php echo $baseURL; ?>">Beauty</a></li>
			<li id="diet"><a href="<?php echo $baseURL . 'index.php?page=diet'; ?>">Diet</a></li>
			<li id="fitness"><a href="<?php echo $baseURL . 'index.php?page=fitness'; ?>">Fitness</a></li>			
			<li id="nutrition"><a href="<?php echo $baseURL . 'index.php?page=nutrition'; ?>">Nutrition</a></li>
			<li id="mental-health"><a href="<?php echo $baseURL . 'index.php?page=mental-health'; ?>">Mental health</a></li>
			<li id="alternative-health"><a href="<?php echo $baseURL . 'index.php?page=alternative-health'; ?>">Alternative health</a></li>
			<li id="children-health"><a href="<?php echo $baseURL . "index.php?page=children-health"; ?>">Children's health</a></li>
		</ul>		
	</div>	
</div>
-->
<!--replace for navheader-->
<div id="nav_rep">
</div>
<!--end -->
<script type="text/javascript">
var search = 'Search ...';
/*searchform*/
$('#input_search').val(search);	

$('#input_search').blur(function(){
	var value = $('#input_search').val();
	if (value == "" || value == search)
		$('#input_search').val(search);		
});

$('#input_search').click(function(){		
	var value = $('#input_search').val();
	if (value == "" || value == search)	
		$('#input_search').val('');		
});
/*end searchform*/
</script>