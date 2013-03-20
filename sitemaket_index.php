<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<title>Кулинарная Книга</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="container">
  
	<!-- ### Header ### -->
	
	<div id="header">
		<img src="images/logo.png" alt="logo" align="left"/>
        <img src="images/chicken_ranch_salad.png" alt="pic" width="186" height="154" align="right"/>

		<!-- ### Top Menu ### -->

		<div id="topmenu">	
	<?php include 'include/menu.html' ?>
		</div>
	</div>
	
	<!-- ### Content ### -->
	
	<div id="contentcontainer">
		
		<div id="content">
	
		<!-- ### Post Entry Begin ###  -->
		
		<div class="post">
			<h2><a href="#">Welcome to My Site или Добро Пожаловать</a></h2>
			<p class="posted">Среда, 28,02,13</p>

			<div class="entry">
			<?php include 'include/post1.html' ?>
            
			</div>
		</div>

		<!-- ### Post Entry End ### -->

		<!-- ### Post Entry Begin ###  -->

		<div class="post">
			
			<h2><a href="#">Lorem ipsum dolor</a></h2>
			<p class="posted">День недели, месяц число, год</p>

			<div class="entry">
            адынадын!11
			</div>
		</div>
		
		<!-- ### Post Entry End ###  -->

		<div class="postpagesnav"></div>
		
		</div>

		<!-- ### Sidebar Begin ### -->
		
		<div id="sidebar">
			
		<ul>

		<li><h2>Search</h2>
		<form id="searchform" method="get" action="#">
			<div>
			<input type="text" value="" name="s" id="searchfield" />
			<input type="hidden" id="searchsubmit" value="Search" />
			</div>
		</form>
		</li>
	
		<li>
		<h2>Категории</h2>
        <?php include 'include/kategorii.html' ?>
		</li>
	
		<li>
		<h2>Кухни</h2>
        <?php include 'include/kuhni.html' ?>
		</li>

	  	<li class="linkcat">
		<h2>Полезные страницы</h2>
		<?php include 'include/polpage.html' ?>
		</li>
		</ul>	
		
		</div>

		<!-- ### Sidebar End ### -->

	</div>
</div>	

<div id="footer">
	<?php include 'include/footer.html' ?>
</div>

</body>
</html>
