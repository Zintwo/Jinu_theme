<?php
	defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );
	get_header();
?>
<script>
console.log('ACCESS DENIED');
alert('Access Denied');

function closewinow() {
	window.open('about:blank', '_self').close();
}
closewinow();
</script>
<?php get_footer(); ?>
