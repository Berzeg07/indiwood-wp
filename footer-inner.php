
    <!-- Форма заявки -->
    <?php get_template_part('template-parts/form-modal'); ?>
	
    <?php wp_footer(); ?>
    
    <script>
        $('.service-tabs a').click(function(e) {
            e.preventDefault();
            $('.service-tabs a').removeClass('is-active');
            $(this).addClass('is-active');
            var tab = $(this).attr('href');
            $('.service-info__tab').not(tab).css({
                'display': 'none'
            });
            $(tab).fadeIn(400);
        });
        var tabClass = '.' + localStorage.getItem('tab_link');
        $(tabClass).click();

        $('.inner_menu a').click(function(e){
            e.preventDefault();
            var attrLink = $(this).attr('href');
            localStorage.setItem('scroll_block', attrLink);
            $(location).attr('href', '/');
        });
        
        $('.inner-link-back').click(function(){
            localStorage.setItem('scroll_block', null);
        });
    </script>

</body>

</html>
