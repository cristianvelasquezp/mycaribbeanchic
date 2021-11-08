<footer class="footer">
    <div class="container">
        <div class="footer__container">
            <div class="footer__content special-perks">
                <h4>Special Perks</h4>
                <p>Receive $10 Off your first order and gain exclusive early access to new arrivals, sales and more!</p>
            </div>
            <div class="footer__content">
                <h4>Support</h4>
                <?php wp_nav_menu(array(
                        'theme_location' => 'supportMenu',
                )) ?>
            </div>
            <div class="footer__content">
                <h4>Quick Links</h4>
                <?php wp_nav_menu(array(
                    'theme_location' => 'quickLinksMenu',
                )) ?>
            </div>
            <div class="footer__content">
                <h4>Contact Us</h4>
                <ul class="menu">
                    <li><a href="mailto:sales@mycaribbeanchic.com">sales@mycaribbeanchic.com</a></li>
                    <li><a href="tel:+12392760425">+1 (239) 276 0425</a></li>
                    <li><p>Satellite Beach, FL 32937</p></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>