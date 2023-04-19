<?php
function ganohrs_gatag_print_script() {
	$gaid = get_option('fit_access_gaid');
	if (!isset($gaid) || !strlen($gaid)) {
		return;
	}

	$ga_use = get_option('lionmedia98_seo_ga4');
	if (!isset($ga_use)) {
		$ga_use = 'ga4_ua';
	}

	$ga4_id = get_option('lionmedia98_seo_ga4_id');
	if (($ga_use === 'ga4' || $ga_use === 'ga4') && empty($ga4_id) && !empty($gaid)) {
		$ga4_id = $gaid;
		$ga_use = 'ga4';
	}

	if ($ga_use === 'ga4' || $ga_use === 'ga4_ua') { ?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga4_id ?>"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', "<?php echo $ga4_id ?>");
		</script>
		<?php
	}

	if ($ga_use === 'ga4_ua' || $ga_use === 'ua') { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', "<?php echo $gaid ?>", 'auto');
  ga('send', 'pageview');
</script>
		<?php
	}
}
ganohrs_gatag_print_script();
