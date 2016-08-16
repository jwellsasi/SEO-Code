<?php
	// Show the "amphtml" canonical only on post pages where they are able to be rendered
	if ( is_single() ) {
		// First check for ? in URI; If has ? in URI then use & in front of parameter instead
		if (false !== strpos($_SERVER['REQUEST_URI'], '?')) {
		   $amphtml = "<link rel='amphtml' href='http://www.americansignaturefurniture.com/blog".$_SERVER['REQUEST_URI']."&amp=1'>";
		   //$amphtml = "<link rel='amphtml' href='".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?amp=1'>";
		   echo $amphtml;
		}
		// Assemble amphtml canonical with ? in front of the parameter
		else {
		   $amphtml = "<link rel='amphtml' href='http://www.americansignaturefurniture.com/blog".$_SERVER['REQUEST_URI']."?amp=1'>";
		   //$amphtml = "<link rel='amphtml' href='".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?amp=1'>";
		   echo $amphtml;			
		}
	}
?>