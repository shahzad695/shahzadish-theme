<?php get_header()?>
<div class="primary">
    <main>
        <section>

            <head>

                <h1>Sorry the page you are looking for cannot be found!!</h1>
            </head>
            <div class="page-content">
                <h2>Check the links below or search what you are looking for</h2>
                <?php get_search_form( )?>
                <?php the_widget('WP_Widget_Recent_Posts')?>
                <div>
                    <h3>Most used Categories</h3>
                    <ul>
                        <?php wp_list_categories([
                        'orderby'=>'count',
                        'order'=>'DESC',
                        'show_count'=>1,
                        'number'=>5,
                        ])?>
                    </ul>
                </div>

                <?php the_widget('WP_Widget_Archives', 'dropdown=1',"after_title=</h2>")?>
            </div>

        </section>
    </main>
</div>



<?php get_footer()?>