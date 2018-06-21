<?php
/**
 * Template Name: Custom home
 *
 * @package TheGem
 */

get_header(); ?>

<div class="hero-image v2 fadeInUp"></div>

<div class="row hero-top text-center home-v2 m0">
  <div class="col-xs-12 col-md-4 col-md-push-4">
    <h2>OUR STORY</h2>
    <p>At Joyce Wang Studio, we tell stories with materials. We are motivated by pushing the possibilities of form and exploring different techniques to challenge what exists and find new ways of expressing ideas in space. Our love for Terrazzo is at the heart of our new collection: FLINT. </p>
  </div>
</div>

<div id="main-content" class="main-content home-v2">

<?php
  while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
  endwhile;
?>
<!-- -------------------------------------------------------------------------------- -->
<div class="text-center home-v2">
  <img class="homepage-img one" src="/wp-content/uploads/2018/06/homepage-1.png">

  <p>With Flint, our aim is to bring out the more precious qualities of Terrazzo, elevating it from a surface material into a collection of furniture, lighting and objects that accentuate its multi-faceted character. Designing elements with a material more commonly associated with flooring and wall surfaces encourages us to engage with it more intimately. We look more closely, we touch it, and we appreciate its finer qualities. There is a special beauty in the juxtaposition of using an old material in a new way. </p>

  <img class="homepage-img two" src="/wp-content/uploads/2018/06/homepage-2.png">

  <p>Experimenting and prototyping in Hong Kong with a range of tools, technology and techniques we have developed Flint in collaboration with a third generation Italian terrazzo manufacturer. Our mission has been to introduce a level of refinement in form and finish to challenge people’s perceptions of the humble material. In place of monolithic, rectilinear blocks, we have crafted domed geometry, curves, bevelled edges and tapered silhouettes. The collection has a pleasingly sculpted feeling, simultaneously delicate and robust. In this context terrazzo feels effortlessly timeless and intriguingly contemporary too. </p>

  <div class="slider-wrapper">
    <!-- [layerslider id="2"] -->
    <?php //layerslider(1) ?>
    <?php echo do_shortcode('[metaslider id="283"]'); ?>
  </div>

  <p>The Flint collection will be available in three colour variations: black marble chips set in grey cement; black and white marble chips set in green cement; and white marble chips set in pink cement. The studio’s signature metalwork detailing is evident with joints in the furniture appearing stapled in solid brass, revealing stroke, cross and ring motifs in section. The resulting collection has been designed to complement as broad a range of cultural and stylistic settings as possible. </p>

  <img class="homepage-img four" src="/wp-content/uploads/2018/06/homepage-4.png">

  <h2>TERRAZZO: A BRIEF ODE</h2>

  <p>First developed in 15th century Italy as a way to salvage marble off-cuts, Terrazzo spread globally, used as a hard surface material, bringing a softer touch to urban spaces that require durability for heavy footfall. Less precious than marble, but more interesting than concrete, terrazzo has its own personality: practical and playful in equal measure. Impressively, for a historic manmade material, it is inherently sustainable: the production process is devoid of toxicity and all aggregates used can be recycled. Whether it is lining 1960s municipal buildings in Hong Kong or paving the London Underground, it brings decorative subtlety to functional spaces with its randomised splatter of colourful chips, set in concrete and polished until even. </p>

  <div class="add-to-cart-wrapper">
    <button><a href="/?product=beanie">SHOP NOW</a></button>
  </div>

  <div class="scroll-to-top js-scroll-to-top">
    <div><img src="/wp-content/uploads/2018/06/home_mobile_back_to_top_icon.png" /></div>
    <div>back to top</div>
  </div>

</div>
 <!-- -------------------------------------------------------------------------------- -->

</div><!-- #main-content -->

<?php
get_footer();
