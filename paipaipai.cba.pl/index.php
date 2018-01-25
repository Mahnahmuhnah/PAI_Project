<?php

	$host = "mysql.cba.pl";
	$db_user = "paiprojekt21";
	$db_pass = "Mareczek93";
	$db_database = "paiprojekt21";
        $link = mysql_connect($db_host,$db_user,$db_pass) or die('Nie moĹĽna poĹ‚acznyÄ‡ siÄ™ z bazÄ… danych. SprĂłbuj ponownie poĹşniej.');
        mysql_select_db($db_database,$link);
        mysql_query("SET names utf-8");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"  />
	<meta name="Description" content="Best cycling passes in the world" />
	<meta name="Keywords" content="Cycling,road,passes,hills,mountains" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Best Cycling Passes</title>

        <link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
       <link rel="Shortcut icon" href="icon.jpg" />

       <script src="java_script/jquery-1.4.4.min.js" type="text/javascript" charset="utf-8"></script>
       <script src="java_script/jquery.scrollTo-min.js" type="text/javascript" charset="utf-8"></script>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	<script src="jquery.scrollTo.min.js"></script>
	
	<script>
		
		jQuery(function($)
		{
			
			$('#lhome').click(function() { $.scrollTo($('#home'), 500); });
			$('#lstelvio').click(function() { $.scrollTo($('#stelvio'), 500); });
			$('#lgavia').click(function() { $.scrollTo($('#gavia'), 500); });
			$('#lgiau').click(function() { $.scrollTo($('#giau'), 500); });
			$('#lsuggestions').click(function() { $.scrollTo($('#suggestions'), 500); });		
		}
		);
		
	
	</script>
 
       
</head>
<body>
<div class="wrapper">
	
		<div class="nav">
			<ol>
				<?php
                    $menu = array('home'=>'Home','stelvio'=>'Passo di Stelvio','gavia'=>'Passo di Gavia','giau'=>'Passo di Giau','suggestions'=>'Suggestions?','suggestions'=>'Suggestions?');
                    foreach ($menu as $key => $value):
                ?>
                <li><a id = "l<?php echo $key?>" href="#"> <?php echo $value?></a></li><?php endforeach ?>
			</ol>
		</div>	
		<div class="content">
			<div class="home" id="home">
			<h1><br><br>Mountain passes for cyclists</h1>
                        <p>Mountain passes make use of a gap, saddle or col (also sometimes a notch, the low point in a ridge). A topographic saddle is analogous to the mathematical concept of a saddle surface, with a saddle point marking the highest point between two valleys and the lowest point along a ridge.[2][3] On a topographic map, passes are characterized by contour lines with an hourglass shape, which indicates a low spot between two higher points.[4] Passes are often found just above the source of a river, constituting a drainage divide. A pass may be very short, consisting of steep slopes to the top of the pass, or may be a valley many kilometres long, whose highest point might only be identifiable by surveying. Roads have long been built – and more recently railways – through passes. Some high and rugged passes may have tunnels bored underneath to allow faster traffic flow throughout the year. The top of a pass is frequently the only flat ground in the area, a high vantage point, so it is sometimes a preferred site for buildings. If a national border follows a mountain range, a pass over the mountains is typically on the border, and there may be a border control or customs station, and possibly a military post as well. For instance Argentina and Chile share the world's third-longest international border, 5,300 kilometres (3,300 mi) long. The border runs north-south along the Andes mountains, with a total of 42 mountain passes.[5][6] On a road over a pass, it is customary to have a small roadside sign giving the name of the pass and its elevation above mean sea level. As well as offering relatively easy travel between valleys, passes also provide a route between two mountain tops with a minimum of descent. As a result, it is common for tracks to meet at a pass; this often makes them convenient routes even when travelling between a summit and the valley floor. Passes traditionally were places for trade routes, communications, cultural exchange, military expeditions etc. A typical example is the Brenner pass in the Alps. Some mountain passes above the tree line have problems with snow drift in the winter. This might be alleviated by building the road a few meters above the ground, which will make snow blow off the road.</p>
			</div>
			<div class = "stelvio" id="stelvio">
			<h1><br><br>Passo di Stelvio</h1>
			<p>The Stelvio Pass (Italian: Passo dello Stelvio [ˈpasso ˈdello ˈstɛlvjo]; German: Stilfser Joch; [ˈʃtɪlfsɐ jɔx]) is a mountain pass in northern Italy, at an elevation of 2,757 m (9,045 ft) above sea level. It is the highest paved mountain pass in the Eastern Alps, and the second highest in the Alps, just 45 m (148 ft) below France's Col de la Bonette (2,802 m (9,193 ft)).</br></br>
			The pass is located in the Ortler Alps in Italy between Stilfs ("Stelvio" in Italian) in South Tyrol and Bormio in the province of Sondrio. It is about 75 km (47 mi) from Bolzano and a mere 200 m from the Swiss border. The Umbrail Pass runs northwards from the Stelvio's western ramp, and the "Three Languages Peak" (Dreisprachenspitze) above the pass is so named because this is where the Italian, German, and Romansh languages meet.
			The road connects the Valtellina with the mid Venosta valley (the Vinschgau) and Meran. Adjacent to the pass road there is a large summer skiing area. Important mountains nearby include Ortler, Thurwieserspitze, Trafoier Eiswand, de:Monte Scorluzzo, Piz Umbrail, and Piz Cotschen/Rötlspitz/Punta Rosa.[1].</p>
			<p align="center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1hDj23a9y1c" frameborder="0" allowfullscreen></iframe>
                        </p>
			</div>
			<div class = "gavia" id="gavia">
			<h1><br><br>Passo di Gavia</h1>
			<p>Gavia Pass (Italian: Passo di Gavia) (el. 2621 m.) is a high mountain pass in the Italian Alps. It is the tenth highest paved road in the Alps. The pass lies in the Lombardy region and divides the province of Sondrio to the north and the province of Brescia to the south. The road over the pass (SS 300) connects Bormio to the northwest with Ponte di Legno to the south and is single track most on its southern section</br></br>
			The Gavia Pass is often on the route of the Giro d'Italia road bicycle race and is sometimes designated the Cima Coppi, the highest point of the race. On 5 June 1988, the race passed over the Gavia in a snowstorm, making for an epic stage won by Erik Breukink. American Andrew Hampsten, the second-place finisher, became the overall race leader and went on to win the Giro.
                        </p>
			<p align="center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oYDvatuTml8" frameborder="0" allowfullscreen></iframe>
                        </p>
			</div>
			<div class = "giau" id= "giau">
			<h1><br><br>Passo di Giau</h1>
			<p>The Giau Pass (Italian: Passo di Giau) (ladin lenguage:Jof de Giau) (el. 2236 m.) is a high mountain pass in the Dolomites in the province of Belluno in Italy. It connects Cortina d'Ampezzo and Colle Santa Lucia. It is located at the center of a vast mountain pasture at the foot of Nuvolau (2,574 m) and dell'Averau (2,647 m) from which you can easily reach the Monte Pore (2,405 m). Impressive is the view west towards Colle Santa Lucia with the Pale di San Martino, Cime D'Auta, Marmolada, Piz Boe and Setsass, just to the east towards the valley of Cortina d'Ampezzo, with Tofane, Croda Rossa, Pomagagnon, Cristallo, Croda da Lago, etc.</br></br>
			Passo Giau is comprised in the territories of Colle Santa Lucia, San Vito di Cadore and Cortina d'Ampezzo, in addition for a few hundred meters in the territory of Selva di Cadore. The road that goes up from Colle Santa Lucia has 29 tornanti and 3 tunnels for protection against avalanches, while the side towards Cortina is more easily passable. Is an interesting alternative to get to Cortina from Agordino area also because the road of Passo Giau, unlike the Passo Falzarego road is passable by trucks and coaches. However, despite the efforts made over the years, the winter season is often compromised by the avalanches that come down to block the uncovered parts of the road.
                        </p>
			<p align="center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/r41zHN2qNas" frameborder="0" allowfullscreen></iframe>
                        </p>
			</div>
			<div class = "suggestions" id="suggestions">
                        
			<h1><br><br>Suggestions</h1>
                <p> If you know any other passes for great cycling experience, send them!<br>
                <br>
                <form  action="index.php" method="post">
		        <input type="text" name="name" placeholder="Name" onfocus="this.placeholder=''" onblur="this.placeholder='Name'"><br>
			<br><input type="text" name="mail" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'"><br>
			<br><input type="text" name="pass" placeholder="Pass Name" onfocus="this.placeholder=''" onblur="this.placeholder='Pass name'"/><br>
			<br><input type="text" name="location" placeholder="Location" onfocus="this.placeholder=''" onblur="this.placeholder='Location'"/><br><br>
                        <input type="submit" value="Send suggestion" name="send"/>
			</form>
<?php
 if(isset($_POST['send'])){
          

	
        $name = $_POST['name'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$location = $_POST['location'];
	$zapytanie = "INSERT INTO passes (id, name, mail, pass, location) VALUES (NULL, '$name', '$mail', '$pass', '$location')";

        mysql_query($zapytanie);}
?> 
                       
             </p>
                        
			</div>

		</div>
		
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="footer">CyclingPaths &copy; 2016 Thank you for your visit!</div>
	</div>


</body>
</html>						