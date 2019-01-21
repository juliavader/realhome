
        <div class="footer bg-dark pt-4 pb-sm-4 ">
            <div class="container ">
                <div class="row d-md-flex d-sm-block d-s-block d-xs-block text-sm-center">
                    <div class="col footer-sidebar1">

                            <?php
                            if(is_active_sidebar('footer-sidebar-1')){
                                dynamic_sidebar('footer-sidebar-1');
                            }
                            ?>

                    </div>
                    <div class="col footer-sidebar2">

                            <?php
                            if(is_active_sidebar('footer-sidebar-2')){
                                dynamic_sidebar('footer-sidebar-2');
                            }
                            ?>
                    </div>
                    <div class="col footer-sidebar3">

                        <?php
                        if(is_active_sidebar('footer-sidebar-3')){
                            dynamic_sidebar('footer-sidebar-3');
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php wp_footer() ;?>
        </div>





    </body>
</html>