

               <div class="col-md-12">
                    <div class="col-md-12 ipb">

                        <div class="inner-post-content">
                            <?php
                            Funeral_title();
                            ?>

                            <div class="post-data-info">
                                <p><span><i class="fas fa-user"></i></span><?php Funeral_posted_by();?></p>
                                <p><span><i class="fas fa-calendar"></i></span><?php echo esc_html(get_the_date()) ; ?></p>
                                <p><span><i class="fas fa-folder-open"></i></span><?php echo get_the_category_list(', ') ; ?></p>

                            </div>
                            <div class="inner-posts-thumb">
                                <?php Funeral_post_thumbnail() ?>
                            </div>
                            <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Funeral' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div>
                    </div>
               </div>

