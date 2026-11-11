<?php
$slides = array(
    array( 'file' => 'slide-sourdough.webp',  'title' => 'Sourdough of the Day', 'text' => 'Slow-fermented and baked fresh every morning.', 'alt' => 'Sourdough loaves fresh from the oven' ),
    array( 'file' => 'slide-croissants.webp', 'title' => 'Butter Croissants',    'text' => 'Flaky, golden and best eaten warm.',            'alt' => 'Tray of golden butter croissants' ),
    array( 'file' => 'slide-cakes.webp',      'title' => 'Celebration Cakes',    'text' => 'Custom designs for birthdays and weddings.',    'alt' => 'Decorated celebration cake on a stand' ),
    array( 'file' => 'slide-seasonal.webp',   'title' => 'Seasonal Specials',    'text' => 'Limited bakes that change with the season.',    'alt' => 'Seasonal fruit tarts on a counter' ),
);
?>

<div class="slider" role="region" aria-roledescription="carousel" aria-label="Featured bakes">
    <div class="slider-track" tabindex="0">
        <?php foreach ( $slides as $i => $slide ) : ?>
            <figure class="slide" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( ( $i + 1 ) . ' of ' . count( $slides ) ); ?>">
                <img
                    src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $slide['file'] ) ); ?>"
                    alt="<?php echo esc_attr( $slide['alt'] ); ?>"
                    width="1200"
                    height="800"
                    decoding="async"
                    <?php echo 0 === $i ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
                >
                <figcaption>
                    <strong><?php echo esc_html( $slide['title'] ); ?></strong>
                    <span><?php echo esc_html( $slide['text'] ); ?></span>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>

    <div class="slider-controls">
        <button type="button" class="slider-btn" data-dir="-1" aria-label="Previous slide">&larr;</button>
        <button type="button" class="slider-btn" data-dir="1" aria-label="Next slide">&rarr;</button>
    </div>
</div>