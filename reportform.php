<?php
	$pagetitle = "Site Analysis";
	include 'header.php';
?>    
<?php
	// first site set of variables
	$SiteNameOne = $_POST["siteonename"];
	$HomepageOne = $_POST["homepageone"];
	$NavigationOne = $_POST["navone"];
	$TaskOne = $_POST["taskone"]; 
	$ContentOne = $_POST["contentone"];
	$SearchOne = $_POST["searchone"];
	$LayoutOne = $_POST["layoutone"];
	$HelpOne = $_POST["helpone"];
	$YslowOne = $_POST["yslowone"];
	$AccessOne = $_POST["accessone"];
	$ValidOne = $_POST["validone"];
	// second site set of variables
	$SiteNameTwo = $_POST["sitetwoname"];
	$HomepageTwo = $_POST["homepagtwo"];
	$NavigationTwo = $_POST["navtwo"];
	$TaskTwo = $_POST["tasktwo"];
	$ContentTwo = $_POST["contenttwo"];
	$SearchTwo = $_POST["searchtwo"];
	$LayoutTwo = $_POST["layouttwo"];
	$HelpTwo = $_POST["helptwo"];
	$YslowTwo = $_POST["yslowtwo"];
	$AccessTwo = $_POST["accesstwo"];
	$ValidTwo = $_POST["validtwo"];
?>
<!-- <?php
 // print_r($_POST);
?> -->
<header class="mainheader">
	<div class="row">
		<div class="large-12 columns">
			<h1 class="evaltitle"><i class="fi-filter"></i> <?php echo $pagetitle;?></h1>
		</div>	
	</div>	
</header>	
    <div class="row">
      <div class="large-12 columns">
		<ul class="breadcrumbs">
		  <li><a href="uxform.php">UX / IA Form</a></li>
		  <li><?php echo $pagetitle;?></li>
		</ul>
	<h2><i class="fi-graph-trend"></i> Heuristics</h2>
		<hr/>
        <canvas id="canvas" height="650" width="650"></canvas>
		<hr/>
      </div>
    </div>
    <div class="row">
		<div class="large-6 medium-6 columns">
			<h2 class="siteone_heading"><?php echo  htmlspecialchars($SiteNameOne);?></h2>
			<p>
				<span class=" round radius label"><i class="fi-web"></i> Primary Site</span>
			</p>
			<table>
			  <thead class="siteone_tablehead">
			    <tr>
			      <th width="250">Category</th>
			      <th>Score (out of 100%)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Homepage</td>
			      <td><?php echo $HomepageOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Navigation and IA</td>
			      <td><?php echo $NavigationOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Task Completion</td>
			      <td><?php echo $TaskOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td><?php echo $ContentOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Search Quality</td>
			      <td><?php echo $SearchOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Layout and Design</td>
			      <td><?php echo $LayoutOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Help</td>
			      <td><?php echo $HelpOne;?>%</td>
			    </tr>
			  </tbody>
			</table>	
		</div>	
		<div class="large-6 medium-6 columns">
			<h2 class="sitetwo_heading"><?php echo  htmlspecialchars($SiteNameTwo);?></h2>
			<p>
				<span class="success round radius label"><i class="fi-web"></i> Comparable Site</span>
			</p>
			<table>
			  <thead class="sitetwo_tablehead">
				<tr>
			      <th width="250">Category</th>
			      <th>Score (out of 100%)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Homepage</td>
			      <td><?php echo $HomepageTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Navigation and IA</td>
			      <td><?php echo $NavigationTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Task Completion</td>
			      <td><?php echo $TaskTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Content</td>
			      <td><?php echo $ContentTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Search Quality</td>
			      <td><?php echo $SearchTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Layout and Design</td>
			      <td><?php echo $LayoutTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Help</td>
			      <td><?php echo $HelpTwo;?>%</td>
			    </tr>
			  </tbody>
			</table>
		</div>	
	</div>
	<div class="row">
      <div class="large-12 columns">
	<h2><i class="fi-graph-bar"></i> Speed | Accessibility | Validation</h2>
		<hr/>
        <canvas id="barcanvas" height="450" width="600"></canvas>
		<hr/>
      </div>
    </div>
    <div class="row">
		<div class="large-6 medium-6 columns">
			<h2 class="siteone_heading"><?php echo htmlspecialchars($SiteNameOne);?></h2>
			<p>
				<span class=" round radius label"><i class="fi-web"></i> Primary Site</span>
			</p>
			<table>
			  <thead class="siteone_tablehead">
			    <tr>
			      <th width="250">Category</th>
			      <th>Score (out of 100%)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Speed</td>
			      <td><?php echo $YslowOne;?>%</td>
			    </tr>
			    <tr>
			      <td>Accessibility</td>
			      <td><?php echo $AccessOne;?>%</td>
			    </tr>
			    <tr>
			      <td>W3C Validation</td>
			      <td><?php echo $ValidOne;?>%</td>
			    </tr>
			  </tbody>
			</table>
		</div>	
		<div class="large-6 medium-6 columns">
			<h2 class="sitetwo_heading"><?php echo  htmlspecialchars($SiteNameTwo);?></h2>
			<p>
				<span class="success round radius label"><i class="fi-web"></i> Comparable Site</span>
			</p>
			<table>
			  <thead class="sitetwo_tablehead">
			    <tr>
			      <th width="250">Category</th>
			      <th>Score (out of 100%)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Speed</td>
			      <td><?php echo $YslowTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>Accessibility</td>
			      <td><?php echo $AccessTwo;?>%</td>
			    </tr>
			    <tr>
			      <td>W3C Validation</td>
			      <td><?php echo $ValidTwo;?>%</td>
			    </tr>
			  </tbody>
			</table>
		</div>	
	</div>
	<script src="js/Chart.min.js"></script>
	<script>

		var radarChartData = {
			labels : ["Homepage","Navigation and IA","Task Completion","Content Quality","Search Quality","Layout and Design","Help"],
			datasets : [
				{
					fillColor : "rgba(149,16,86,0.5)",
					strokeColor : "rgba(149,16,86,1)",
					pointColor : "rgba(149,16,86,1)",
					pointStrokeColor : "#fff",
					data : [<?php echo $HomepageOne;?>,<?php echo $NavigationOne;?>,<?php echo $TaskOne;?>,<?php echo $ContentOne;?>,<?php echo $SearchOne;?>,<?php echo $LayoutOne;?>,<?php echo $HelpOne;?>]
				},
				{
					fillColor : "rgba(231,206,24,0.5)",
					strokeColor : "rgba(231,206,24,1)",
					pointColor : "rgba(231,206,24,1)",
					pointStrokeColor : "#fff",
					data : [<?php echo $HomepageTwo;?>,<?php echo $NavigationTwo;?>,<?php echo $TaskTwo;?>,<?php echo $ContentTwo;?>,<?php echo $SearchTwo;?>,<?php echo $LayoutTwo;?>,<?php echo $HelpTwo;?>]
				}
			]
			
		}

	var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
	
	</script>
	<script>

		var barChartData = {
			labels : ["Speed","Accessibility","Validation"],
			datasets : [
				{
					fillColor : "rgba(149,16,86,0.5)",
					strokeColor : "rgba(149,16,86,1)",
					data : [<?php echo $YslowOne;?>,<?php echo $AccessOne;?>,<?php echo $ValidOne;?>]
				},
				{
					fillColor : "rgba(231,206,24,0.5)",
					strokeColor : "rgba(231,206,24,1)",
					data : [<?php echo $YslowTwo;?>,<?php echo $AccessTwo;?>,<?php echo $ValidTwo;?>]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("barcanvas").getContext("2d")).Bar(barChartData);
	
	</script>	
<?php
 include 'footer.php';
?>	