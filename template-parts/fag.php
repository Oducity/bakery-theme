<?php
$faqs = array(
    array(
        'q' => 'Do you take custom cake orders?',
        'a' => 'Yes. Send us the details through the Contact Us page and we will confirm the design and price.',
    ),
    array(
        'q' => 'How far ahead should I order?',
        'a' => 'We recommend 3 days for custom cakes and 24 hours for bulk bread or pastry orders.',
    ),
    array(
        'q' => 'Do you have gluten-free options?',
        'a' => 'We offer a small gluten-free range. Please ask when ordering, as we bake in a shared kitchen.',
    ),
    array(
        'q' => 'Do you deliver?',
        'a' => 'We deliver within the local area for orders above a minimum amount. Contact us for details.',
    ),
);
?>

<div class="faq">
    <?php foreach ( $faqs as $i => $faq ) : ?>
        <div class="faq-item">
            <h3>
                <button class="faq-question" aria-expanded="false" aria-controls="faq-panel-<?php echo esc_attr( $i ); ?>" id="faq-btn-<?php echo esc_attr( $i ); ?>">
                    <?php echo esc_html( $faq['q'] ); ?>
                </button>
            </h3>
            <div class="faq-answer" id="faq-panel-<?php echo esc_attr( $i ); ?>" role="region" aria-labelledby="faq-btn-<?php echo esc_attr( $i ); ?>" hidden>
                <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>