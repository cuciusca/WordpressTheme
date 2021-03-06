    
</div>

<footer >
    <div class="bg-dark shadow-lg">
        <div id="social-footer-menu">
            <div class="container">
                <div class="row justify-content-center">
                    <a href="https://github.com/cuciusca">
                        <i class="fab fa-github fa-2x text-white"></i>
                    </a>   
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary">
        <div id="copy-footer-menu">
            <div class="container">
                <div class="row justify-content-center">
                    <a class="text-white" href="<?php echo esc_url(__('https://wordpress.org/', 'my')); ?>">
                        <?php printf(esc_html__('Proudly powered by %s', 'my'), 'WordPress'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>