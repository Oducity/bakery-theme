<?php
$images = array(
    array( 'file' => 'sourdough.webp',  'alt' => 'Freshly baked sourdough loaves on a wooden board' ),
    array( 'file' => 'croissants.webp', 'alt' => 'Golden butter croissants on a cooling rack' ),
    array( 'file' => 'cake.webp',       'alt' => 'Chocolate celebration cake with fresh berries' ),
    array( 'file' => 'cookies.webp',    'alt' => 'Gift box of assorted cookies' ),
    array( 'file' => 'baguettes.webp',  'alt' => 'Crusty baguettes in a bakery basket' ),
    array( 'file' => 'cupcakes.webp',   'alt' => 'Tray of frosted cupcakes' ),
);
?>

<div class="gallery">
    <?php foreach ( $images as $image ) : ?>
        <figure class="gallery-item">
            <img
                src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $image['file'] ) ); ?>"
                alt="<?php echo esc_attr( $image['alt'] ); ?>"
                width="600"
                height="450"
                loading="lazy"
                decoding="async"
            >
        </figure>
    <?php endforeach; ?>
</div>