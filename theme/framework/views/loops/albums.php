<?php
/**
 * Gallery / Albums
 * @since 1.7
 */
function miss_push_row( $in ) {
	$template = '<div class="row">{{ content }}</div>';
	return str_replace( '{{ content }}', $in, $template );
}
function miss_push_span( $class, $in ) {
	$template = '<div class="{{ class }}">{{ content }}</div>';
	return str_replace(
		Array( '{{ class }}', '{{ content }}' ),
		Array( $class, $in),
	$template );
}
$miss_map  = Array(
	1 => Array(
		'size' => Array( 'w' => 568, 'h' => 468 ),
	),
	2 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	3 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	4 => Array(
		'size' => Array( 'w' => 269, 'h' => 468 ),
	),
	5 => Array(
		'size' => Array( 'w' => 269, 'h' => 468 ),
	),
	6 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	7 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	8 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	9 => Array(
		'size' => Array( 'w' => 568, 'h' => 468 ),
	),
	10 => Array(
		'size' => Array( 'w' => 269, 'h' => 216 ),
	),
	11 => Array(
		'size' => Array( 'w' => 269, 'h' => 468 ),
	)

);
$miss_grid = Array(
	1 => Array(
		'class' => 'alb alb-1 span6',
	),
	2 => Array(
		'class' => 'alb alb-2 span3',
	),
	3 => Array(
		'class' => 'alb alb-3 span3',
	),
	4 => Array(
		'class' => 'alb alb-4 span3',
	),
	5 => Array(
		'class' => 'alb alb-5 span3',
	),
	6 => Array(
		'class' => 'alb alb-6 span3',
	),
	7 => Array(
		'class' => 'alb alb-7 span3',
	),
	8 => Array(
		'class' => 'alb alb-8 span3',
	),
	9 => Array(
		'class' => 'alb alb-9 span6',
	),
	10 => Array(
		'class' => 'alb alb-10 span3',
	),
	11 => Array(
		'class' => 'alb alb-11 span3',
	),
	12 => Array(
		'class' => 'alb alb-12 span6',
	),
	13 => Array(
		'class' => 'alb alb-13 span3',
	),
	14 => Array(
		'class' => 'alb alb-14 span3',
	),
	15 => Array(
		'class' => 'alb alb-15 span3',
	),
);
function miss_eleven_column( $in = Array(), $grid, $map ) { 
	$out = '';
	$img = array();
	$i = 1;
	$tpl = '<a href="{{ uri }}" class="image-resize w"><img src="{{ src }}" class="image-resize w" /><div class="preview_info_wrap"><div class="btn2 more">More</div></div></a>';
	foreach( $in as $image ) {

		$img[$i] = str_replace( Array( '{{ uri }}', '{{ src }}' ), Array( $image[0], miss_wp_image( $image[1], $map[$i]['size']['w'], $map[$i]['size']['h'] ) ), $tpl );
		$i++;
	}
	$defaults = Array(
		0 => '',
		1 => '',
		2 => '',
		3 => '',
		4 => '',
		5 => '',
		6 => '',
		7 => '',
		8 => '',
		9 => '',
		10 => '',
		11=> ''
	);
/* 	$img = wp_parse_args( $defaults, $img ); */
	$columns = '';
	$columns .= miss_push_span( $grid[1]['class'], isset ( $img[1] ) ? $img[1] : '' );
	$columns .= miss_push_span(
		$grid[2]['class'],
		miss_push_row(
			miss_push_span( $grid[3]['class'], isset ( $img[2] ) ? $img[2] : '' )
		) .
		miss_push_row(
			miss_push_span( $grid[4]['class'], isset ( $img[3] ) ? $img[3] : '' )
		)
	);
	$columns .= miss_push_span( $grid[5]['class'], isset ( $img[4] ) ? $img[4] : '' );
	
	$row1 = miss_push_row( $columns );
	
	$columns = '';
	
	$columns .= miss_push_span(
		$grid[6]['class'],
		miss_push_row(
			miss_push_span( $grid[7]['class'], isset ( $img[5] ) ? $img[5] : '' )
		) .
		miss_push_row(
			miss_push_span( $grid[8]['class'], isset ( $img[6] ) ? $img[6] : '' )
		)
	);
	
	$columns .= miss_push_span(
		$grid[9]['class'],
		miss_push_row(
			miss_push_span( $grid[10]['class'], isset ( $img[7] ) ? $img[7] : '' ) . 
			miss_push_span( $grid[11]['class'],  isset ( $img[8] ) ? $img[8] : '' )
		) .
		miss_push_row(
			miss_push_span( $grid[12]['class'], isset ( $img[9] ) ? $img[9] : '' )
		)
	);
	
	$columns .= miss_push_span(
		$grid[13]['class'],
		miss_push_row(
			miss_push_span( $grid[14]['class'], isset ( $img[10] ) ? $img[10] : '' )
		) .
		miss_push_row(
			miss_push_span( $grid[15]['class'], isset ( $img[11] ) ? $img[11] : '' )
		)
	);
	
	$row2 = miss_push_row( $columns );
		return $row1 . $row2;
}
$i = 0;
$rows = Array();
$rowId = 0;
/*
                  if ($query->have_posts()) {
                  	$tamplate = '<a href="{{ uri }}"><img="{{ src }}" /></a>';
                      while ($query->have_posts()) {
                         $images = new miss_gallery_attachments( $limit = 5, $order = 'ASC', $post_id = get_the_ID() );
	                  }
*/
	                  /* end: while */
/* 	              } */
	              /* end: $query->have_posts() */

?>
<style>
.alb.alb-1, .alb.alb-3, .alb.alb-5 {
	margin-top: 36px;
}
.alb.alb-1, .alb.alb-3, .alb.alb-4, .alb.alb-5, .alb.alb-7, .alb.alb-10, .alb.alb-11, .alb.alb-14 {
	margin-bottom: 36px;
}
.alb.alb-11 {
	text-align: right;
}

</style>
<div class="loop_module miss_gallery">
  <div class="row">
    <div class="span12">
        <!-- Content -->
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
          <?php endwhile; ?>

                <?php
				$args = Array(
					'post_type' => 'miss_gallery',
					'posts_per_page' => 9999,
					'order' => 'desc'
				);
				$query = new WP_Query();
				$query->query( $args );
				$tpl = '<a href="{{ uri }}" class="has_preview image-resize w"><img src="{{ src }}" class="image-resize w" /></a>';
				if ($query->have_posts()) {
                    while ($query->have_posts()) {
                          $query->the_post();
                          $images = new miss_gallery_attachments( $limit = 1, $order = 'ASC', $post_id = get_the_ID() );
						$link = get_permalink();

						if ( count( $images->get_media() ) > 0 ) {
							foreach ( $images->get_media() as $image ) {
								if ( has_post_thumbnail()) {
									$thumb = $image->guid;
								} else {
									$thumb = $image->guid;
								}
							}
/* 							echo str_replace( array( '{{ uri }}', '{{ src }}' ), array( $link, $thumb ), $template ); */
							$rows[$rowId][$i][] = $link;
							$rows[$rowId][$i][] = $thumb;

//							$rows[$rowId][$i] = str_replace( Array( '{{ uri }}', '{{ src }}' ), Array( $link, $thumb ), $tpl );
							$i++;
							if ( $i > 10 ) {
								$i = 0;
								$rowId++;
							}
						   }
                        }
                     }
				foreach ( $rows as $row ) {
					echo miss_eleven_column( $row, $miss_grid, $miss_map );
				}
                ?>
    </div><!-- /.span12 -->
  </div><!-- /.row -->

</div>
