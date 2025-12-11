<?php get_header(); ?>

<div class="error-404-container">
    <div class="error-404-content">
        <h1 class="error-404-title">404</h1>
        <h2 class="error-404-subtitle">Hoppsan! Sidan hittades inte</h2>
        <p class="error-404-text">
            Sidan du letar efter verkar inte finnas. Den kan ha flyttats eller tagits bort.
        </p>
        
        <a href="<?php echo home_url(); ?>" class="error-404-button">
            ← Tillbaka till startsidan
        </a>
        
        <div class="error-404-links">
    <p>Kanske letar du efter någon av dessa sidor?</p>
    <ul>
        <li><a href="<?php echo home_url('/blogg'); ?>">Blogg</a></li>
        <li><a href="<?php echo home_url('/om-oss'); ?>">Om oss</a></li>
        <li><a href="<?php echo home_url('/kontakt'); ?>">Kontakt</a></li>
    </ul>
</div>
    </div>
</div>

<?php get_footer(); ?>