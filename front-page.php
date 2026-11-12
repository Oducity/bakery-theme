<?php echo 'FAQ loaded'; ?>
<?php get_header(); ?>

<main id="main">

    <section class="intro">
        <div class="container">
            <h1>Welcome to Our Bakery</h1>
            <p>We are a family-owned bakery that has been serving the community for over 20 years. We pride ourselves on using only the finest ingredients to create delicious pastries and breads.</p>
            <a class="btn" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Order Now</a>
        </div>
    </section>

    <section class="featured">
        <div class="container">
            <h2>Fresh From the Oven</h2>
            <?php get_template_part( 'template-parts/slider' ); ?>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2>Our Products</h2>
            <ul class="product-list">
                <li>Artisan Bread</li>
                <li>Croissants</li>
                <li>Cakes</li>
                <li>Cookie Boxes</li>
            </ul>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <h2>Gallery</h2>
            <?php get_template_part( 'template-parts/gallery' ); ?>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <?php get_template_part( 'template-parts/faq' ); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>