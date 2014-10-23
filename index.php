<?php
	$pagetitle = "UX / IA Website Analysis Form";
	include 'header.php';
?>
   <header class="mainheader"> 
    <div class="row">
      <div class="large-12 columns">
        <h1 class="maintitle"><i class="fi-graph-pie"></i> <?php echo $pagetitle;?></h1>
      	<hr/>
		</div>
    </div>
   </header> 
    <div class="row panel">
		<div class="large-12 columns">   
			<div class="callout panel">   
        <h5>You'll see a fancy little report after you fill out this form. <i class="fi-like"></i></h5>
			</div>
        <form action="reportform.php" method="post">
				  <div class="row">
					<div class="large-12 columns">
					<h2 class="siteone_heading">Website 1</h2>
					<span class=" round radius label"><i class="fi-web"></i> Primary Site</span>
					<hr/>	
					</div>
				    <div class="large-6 medium-6 columns end">
				      <label name="siteonename">Name of Site</label>
				      <input type="text" name="siteonename" placeholder="start typing here..." />
				    </div>
				  </div>
				  <div class="row">
					<div class="large-12 columns">
					<h3><i class="fi-graph-trend"></i> Heuristics</h3>
					</div>
				    <div class="large-4 medium-3 columns">
					  <label for="homepageone">Homepage</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="homepageone" id="homepageone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="homepageone" id="homepageone" value="50" min="0" max="100"> -->
				    </div>
				    <div class="large-4 medium-3 columns">
					  <label for="navone">Navigation and IA</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="navone" id="navone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="navone" id="navone" value="50" min="0" max="100"> -->
				    </div>
				    <div class="large-4 medium-3 columns">
					  <label for="taskone">Task Completion</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="taskone" id="taskone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="taskone" id="taskone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="contentone">Content</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="contentone" id="contentone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="contentone" id="contentone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="searchone">Search Quality</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="searchone" id="searchone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="searchone" id="searchone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="layoutone">Layout and Design</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="layoutone" id="layoutone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="layoutone" id="layoutone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns end">
					  <label for="helpone">Help</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="helpone" id="helpone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="helpone" id="helpone" value="50" min="0" max="100"> -->
				    </div>
				</div>
				<div class="row">
					<div class="large-12 columns">
					<h3><i class="fi-graph-bar"></i> Speed | Accessibility | Validation</h3>
					</div>
					<div class="large-4 medium-3 columns">
					  <label for="yslowone">Speed</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="yslowone" id="yslowone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="yslowone" id="yslowone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="accessone">Accessibility</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="accessone" id="accessone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="accessone" id="accessone" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="validone">W3C Validation</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="validone" id="validone" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="validone" id="validone" value="50" min="0" max="100"> -->
				    </div>
				  </div>
				<hr/>
				  <div class="row">
					<div class="large-12 columns">
					<h2 class="sitetwo_heading">Website 2</h2>
					<span class="success round radius label"><i class="fi-web"></i> Comparable Site</span>
					<hr/>	
					</div>
				    <div class="large-6 medium-6 columns end">
				      <label name="sitetwoname">Name of Site</label>
				      <input type="text" name="sitetwoname" placeholder="start typing here..." />
				    </div>
				  </div>
				  <div class="row">
					<div class="large-12 columns">
					<h3><i class="fi-graph-trend"></i> Heuristics</h3>
					</div>
				    <div class="large-4 medium-3 columns">
					  <label for="homepagtwo">Homepage</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="homepagtwo" id="homepagtwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="homepagtwo" id="homepagtwo" value="50" min="0" max="100"> -->
				    </div>
				    <div class="large-4 medium-3 columns">
					  <label for="navtwo">Navigation and IA</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="navtwo" id="navtwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="navtwo" id="navtwo" value="50" min="0" max="100"> -->
				    </div>
				    <div class="large-4 medium-3 columns">
					  <label for="tasktwo">Task Completion</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="tasktwo" id="tasktwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="tasktwo" id="tasktwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="contenttwo">Content</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="contenttwo" id="contenttwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="contenttwo" id="contenttwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="searchtwo">Search Quality</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="searchtwo" id="searchtwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="searchtwo" id="searchtwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="layouttwo">Layout and Design</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="layouttwo" id="layouttwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="layouttwo" id="layouttwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns end">
					  <label for="helptwo">Help</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="helptwo" id="helptwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="helptwo" id="helptwo" value="50" min="0" max="100"> -->
				    </div>
				</div>
				<div class="row">
					<div class="large-12 columns">
					<h3><i class="fi-graph-bar"></i> Speed | Accessibility | Validation</h3>
					</div>
					<div class="large-4 medium-3 columns">
					  <label for="yslowtwo">Speed</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="yslowtwo" id="yslowtwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="yslowtwo" id="yslowtwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="accesstwo">Accessibility</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="accesstwo" id="accesstwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="accesstwo" id="accesstwo" value="50" min="0" max="100"> -->
				    </div>
					<div class="large-4 medium-3 columns">
					  <label for="validtwo">W3C Validation</label>
						<div class="range-slider round" data-slider>
						  <span class="range-slider-handle"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden" name="validtwo" id="validtwo" value="50" min="0" max="100">
						</div>
					  <!-- <input type="range" name="validtwo" id="validtwo" value="50" min="0" max="100"> -->
				    </div>
				  </div>

				  <div class="row">
				    <div class="large-12 columns">
					<hr/>
					<input class="button secondary expand round" type="submit" name="submit" value="Check Me Out!" />
				    </div>
				  </div>
				</form>
      		</div>     
		</div>	


<?php
include 'foot2.php';
include 'footer.php';
?>