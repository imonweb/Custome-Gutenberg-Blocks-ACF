<?php
/**
 *
 *  Layout of our travel block. 
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
**/

// echo '<pre>';
// var_dump($block);
// echo '</pre>';

// echo get_the_title($post_id);

// Create id attribute allowing for custom "anchor" value.
$id = 'travel-it-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'travel-it-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$daytime              = get_field('daytime');
$image                = get_field('image');
$days_activity_title  = get_field('days_activity_title');
$available_service    = get_field('available_service');
$am_description       = get_field('am_description');
$pm_description       = get_field('pm_description');
$overnight            = get_field('overnight');


?>
 

  <div id="<?php echo esc_attr($id);?>" class="<?php echo esc_attr($className); ?>">
    <span><?php echo esc_attr($daytime);?> </span>
    
    <?php // print_r( $image );?>

    <div class="img">
      <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
    </div>
    <!-- <img src="<?php echo esc_attr($image)[url];?>" alt="<?php echo esc_attr($image)[alt];?>" srcset=""> -->


    <div class="content-info">
      <p><?php echo esc_attr($days_activity_title);?></p>
      <p><strong>AM:</strong><?php echo esc_attr($am_description);?></p>
      <p><strong>PM:</strong><?php echo esc_attr($pm_description);?></p>
      <p><strong>Overnight:</strong><?php echo esc_attr($overnight);?></p>
    </div>
    <div class="services-info">
      <!-- <?php //print_r( $available_service ); ?></p> -->
      <!-- <?php //echo $available_service; ?></p> -->
      <p>Breakfast <span class="unavailable"></span></p>
      <p>Lunch <span class="available"></span></p>
      <p>Dinner <span class="available"></span></p>
    </div>
  </div>
  
 
  