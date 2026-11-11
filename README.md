Accessibility. aria-expanded, aria-controls and the hidden attribute let screen readers announce each panel’s state, and the buttons work with the keyboard for free.
I added PHP array and loop which is easy to upgrade later to the optional FAQ custom post type.
Conditional loading. The script only loads on the front page, which increases loading speed and improves Lighthouse scores.
implementing loading="lazy" makes the browser load an image only when it’s near the viewport, which saves bandwidth on first load
defining width and height attributes let the browser reserve space before the image arrives. That prevents layout shift, which is part of Core Web Vitals (CLS)
decoding="async" lets the browser decode images without blocking rendering.
get_theme_file_uri() builds the correct URL from the theme folder, and esc_url() and esc_attr() escape the output.
Used AI to generate 6 image files which i referenced in gallery.php file using images array variable
Note:
    Lighthouse score;
        before fixing SSL certificate and the redirect issues; Performance: 99, Accessibility: 96, Best Practices: 78, and SEO: 92
    Lighthouse score;
        after fixing the SSL certificate to trusted, Performance: 100, Accessibility: 96, Best Practices: 100, and SEO: 92
    Lighthouse score;
        after fixing meta description dynamically, Performance: 99, Accessibility: 96, Best Practices: 100, and SEO: 100