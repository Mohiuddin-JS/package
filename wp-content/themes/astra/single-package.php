<?php
/*
 * Template Name: Package
 * Template Post Type: post, page, product
 */
?>

 <?php get_header();  ?>


<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <?php  the_content();  ?>
                </div>
            
                </div>


<!-- Image section -->

<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-3 wp-block-columns-is-layout-flex md-img-gallery">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<figure class="wp-block-image size-full">


    <?php
$image = get_field('1st_image');

if ($image) {
   
    echo '<img fetchpriority="high" decoding="async" width="2560" height="1454"  src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" sizes="(max-width: 2560px) 100vw, 2560px"/>';
} else {
    
    echo '<p>No image available</p>';
}
?>
</figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-1 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<figure class="wp-block-image size-full">
    

<?php
$image = get_field('2nd_image');

if ($image) {
   
    echo '<img fetchpriority="high" decoding="async" width="2560" height="1454"  src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" sizes="(max-width: 2560px) 100vw, 2560px"/>';
} else {
    
    echo '<p>No image available</p>';
}
?>

</figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<figure class="wp-block-image size-full">
    
<?php
$image = get_field('3rd_image');

if ($image) {
   
    echo '<img fetchpriority="high" decoding="async" width="2560" height="1454"  src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" sizes="(max-width: 2560px) 100vw, 2560px"/>';
} else {
    
    echo '<p>No image available</p>';
}
?>

</figure>
</div>
</div>



<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-2 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<figure class="wp-block-image size-full">
    
<?php
$image = get_field('4th_image');

if ($image) {
   
    echo '<img fetchpriority="high" decoding="async" width="2560" height="1454"  src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" sizes="(max-width: 2560px) 100vw, 2560px"/>';
} else {
    
    echo '<p>No image available</p>';
}
?>

</figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<figure class="wp-block-image size-full">

<?php
$image = get_field('5th_image');

if ($image) {
   
    echo '<img fetchpriority="high" decoding="async" width="2560" height="1454"  src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" sizes="(max-width: 2560px) 100vw, 2560px"/>';
} else {
    
    echo '<p>No image available</p>';
}
?>

    </figure>
</div>
</div>
</div>
</div>








<!-- table section -->

<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-4 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
<div class="wp-block-gutena-tabs gutena-tabs-block gutena-tabs-block-f5933a-06"><ul class="gutena-tabs-tab tab-flex"><li class="gutena-tab-title active" data-tab="1"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Day by Day</div></div></div></li><li class="gutena-tab-title inactive" data-tab="2"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Flights</div></div></div></li><li class="gutena-tab-title inactive" data-tab="3"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Stays</div></div></div></li><li class="gutena-tab-title inactive" data-tab="4"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Transfer</div></div></div></li><li class="gutena-tab-title inactive" data-tab="5"><div class="gutena-tab-title-content icon-top"><div class="gutena-tab-title-text"><div>Activities</div></div></div></li></ul><div class="gutena-tabs-content is-layout-flow wp-block-gutena-tabs-is-layout-flow md-tab">
<div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-cd504c-dc active" data-tab="1">

<!-- tab item 1 start	 -->
	<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-5 wp-block-columns-is-layout-flex md-margin-minus">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<h2 class="wp-block-heading md-night-h">Paris -3 Night Stay</h2>



<figure class="wp-block-table">
	<table class="has-fixed-layout"><tbody>
		<tr><td><strong>Day1</strong></td>
			<td><?php
$activity = get_field('day_1_activities');
if ($activity) {
    echo $activity;
} else {
    echo '<p>No Activities</p>';
}
?></td>
			<td></td>
			
		</tr>
		<tr><td><strong>Day 2</strong></td>
			<td><?php
$activity = get_field('day_2_activities');
if ($activity) {
    echo $activity;
} else {
    echo '<p>No Activities</p>';
}
?></td>
			<td></td>
			
		</tr>
		<tr><td><strong>Day 3</strong></td>
			<td><?php
$activity = get_field('day_3_activities');
if ($activity) {
    echo $activity;
} else {
    echo '<p>No Activities</p>';
}
?></td>
			<td></td>
			
		</tr>
		</tbody></table></figure>
</div>
</div>
	
<!-- tab item 1 end	 -->
	
	
</div>



<div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-50c685-58 inactive" data-tab="2">
<p style="margin-top:0;margin-bottom:0">Add your content here…2</p>
</div>



<div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-be0a3b-59 inactive" data-tab="3">
<p style="margin-top:0;margin-bottom:0">Add your content here…3</p>
</div>



<div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-e38632-1c inactive" data-tab="4">
<p style="margin-top:0;margin-bottom:0">Add your content here…4</p>
</div>



<div class="wp-block-gutena-tab gutena-tab-block gutena-tab-block-92fa4b-09 inactive" data-tab="5">
<p style="margin-top:0;margin-bottom:0">Add your content here…5</p>
</div>
</div></div>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
<figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="256" height="256" src="http://localhost/package/wp-content/uploads/2024/01/icon-256x256-1.jpg" alt="" class="wp-image-11" srcset="http://localhost/package/wp-content/uploads/2024/01/icon-256x256-1.jpg 256w, http://localhost/package/wp-content/uploads/2024/01/icon-256x256-1-150x150.jpg 150w" sizes="(max-width: 256px) 100vw, 256px"></figure>
</div>
</div>






            <?php endwhile; ?>



<style>
@media (min-width: 922px){
.site-content .ast-container {
    display: flex;
    flex-direction: column;
}
}

	.md-img-gallery{
    border-radius: 10px !important;
    overflow: hidden;
    border: 1px solid;
	}
	.md-night-h{
		background-color: #F7F7F7;
	}
	.md-tab{
    border-radius: 10px !important;
    overflow: hidden;
    border: 1px solid;
		background-color: #ffffff;
	}
	
	table {
    margin: 0!important; 
    
}
	
	.gutena-tab-title-text{
    font-size: 18px!important;
    font-weight: 600!important;
		padding: 10px!important;
	}
		.gutena-tabs-block>.gutena-tabs-tab>.gutena-tab-title.active{
		color: #2EB277!important;
	}
	.md-margin-minus{
		margin-bottom:0 !important;
	}
	
</style>






    

        

<script src="http://localhost/package/wp-content/plugins/gutena-tabs/build/view.js?ver=167b9894338b621e4ae9" id="gutena-tabs-view-script-js" defer="" data-wp-strategy="defer"></script>



<?php get_footer();  ?>

            
