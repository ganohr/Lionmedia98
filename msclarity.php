<?php
function ganohrs_msclarity_print_script() {
	$msclarity_id = get_option('lionmedia98_seo_msclarity_id');
	if (!isset($msclarity_id) || !strlen($msclarity_id)) {
		return;
	}
	?>
<script type="text/javascript">
	(function(c,l,a,r,i,t,y){
		c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
		t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
		y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
	})(window, document, "clarity", "script", "<?php echo $msclarity_id; ?>");
</script><?php
}
ganohrs_msclarity_print_script();
