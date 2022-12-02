<script src="js/jquery.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script src="js/jquery.easing.1.3.js"></script>		
<script type="text/javascript">
	$(document).ready(function(){
		$('#slideshowbox').cycle({  
		fx: 'fade',
		timeout: 2000, 
		timeoutFn: null,
		continuous: 0,
		speed: 1000,
		speedIn: null, 
		speedOut: null,
		next: '#slideshowbox',
		prev: null,
		prevNextClick: 1,
		pager: null,
		pagerClick: null,
		pagerEvent: 'click', 
		pagerAnchorBuilder: null,
		before: null,
		after: null,
		end: null,
		easing: null, 
		easeIn: null,
		easeOut: null,
		shuffle: null,
		animIn: null,
		animOut: null,
		cssBefore: null,
		cssAfter: null,
		fxFn: null,
		height: 'auto',
		startingSlide: 0,
		sync: 1,
		random: 0,
		fit: 0,
		containerResize: 1,
		pause: 1,
		pauseOnPagerHover: 0,
		autostop: 0,
		autostopCount: 0,
		delay: 0,
		slideExpr: null,
		cleartype: !$.support.opacity, 
		nowrap: 0,
		fastOnEvent: 0,
		randomizeEffects: 1,
		rev: 0,
		manualTrump: true,
		requeueOnImageNotLoaded: true,
		requeueTimeout: 250});
	})	 
</script>

<div style="overflow: hidden; position: relative;" id="slideshowbox" class="slideshowboxclass">
	<img src="images/slider/s2.jpg" border="0" />
	<img src="images/slider/s1.jpg" border="0" />
</div>