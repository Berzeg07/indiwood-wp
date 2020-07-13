    <div class="footer">
        <p class="footer-copy">© INDIWOOD. ООО «Индивуд». Все права защищены. 2020</p>
        <div class="logo logo_footer">
            <div class="logo__name">Indiwood</div>
            <div class="logo__article">individual wood solutions</div>
        </div>
    </div>

    <!-- Форма заявки -->
    <?php get_template_part('template-parts/form-modal'); ?>
	
    <?php wp_footer(); ?>
    
    <script>
        var currentBlockScroll = localStorage.getItem('scroll_block');
        if(currentBlockScroll != null){
            currentBlockoffset = $(currentBlockScroll).offset().top;
            $("html, body").animate({
                scrollTop: currentBlockoffset - 66,
            }, 500);
        }
    </script>

</body>

</html>
