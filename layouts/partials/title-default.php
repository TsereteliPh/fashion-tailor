<?php
if ( ! empty( $args['title']['text'] ) ) {
	echo sprintf(
		'<%1$s class="title title--default %2$s">
			%3$s
			<span>%4$s</span>
		</%1$s>',
		$args['title']['type'],
		$args['class'],
		$args['title']['text'],
		$args['title']['highlighted'],
	);
}
