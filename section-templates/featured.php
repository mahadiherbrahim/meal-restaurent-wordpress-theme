<?php  
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id,'featured-section', true );


    $meal_section = get_post($meal_section_id);
    $meal_section_title= $meal_section->post_title;
    $meal_section_content= $meal_section->post_content;

?>

<div class="section" data-aos="fade-up" id="<?php echo esc_attr( $meal_section->post_name ); ?>">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">
                            <?php echo esc_html( $meal_section_title ); ?>
                        </h2>
                        <p class="sub-heading mb-5">
                            <?php echo wp_kses_post( $meal_section_content ); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $meal_section_recipe = $meal_section_meta['featured_recipe'];
                        $meal_section_one = get_post($meal_section_recipe[1]['recipe']);
                        $meal_section_two = get_post($meal_section_recipe[5]['recipe']);
                        $meal_section_three = get_post($meal_section_recipe[6]['recipe']);
                    ?>
                    <div class="ftco-46">
                        <div class="ftco-46-row d-flex flex-column flex-lg-row">
                            <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_one,'large')); ?> );"></div>
                            <div class="ftco-46-text ftco-46-arrow-left">
                                <h4 class="ftco-46-subheading">
                                    <?php echo esc_html( meal_featured_recipe_cat($meal_section_two->ID) ); ?>
                                </h4>
                                <h3 class="ftco-46-heading">
                                    <?php echo esc_html( $meal_section_two->post_title ); ?>
                                </h3>
                                <p class="mb-5">
                                    <?php echo esc_html( $meal_section_two->post_excerpt ); ?>
                                </p>
                                <p><a href="<?php echo get_the_permalink($meal_section_two); ?>" class="btn-link"><?php echo __('Learn More','meal'); ?> <span
                                        class="ion-android-arrow-forward"></span></a></p>
                            </div>
                            <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_three,'large')); ?> );"></div>
                        </div>

                        <div class="ftco-46-row d-flex flex-column flex-lg-row">
                            <div class="ftco-46-text ftco-46-arrow-right">
                                <h4 class="ftco-46-subheading">
                                    <?php echo esc_html(  meal_featured_recipe_cat($meal_section_one->ID) ); ?>
                                </h4>
                                <h3 class="ftco-46-heading">
                                    <?php echo esc_html( $meal_section_one->post_title ); ?>
                                </h3>
                                <p class="mb-5">
                                    <?php echo esc_html( $meal_section_one->post_excerpt ); ?>
                                </p>
                                <p><a href="<?php echo get_the_permalink($meal_section_one); ?>" class="btn-link"><?php echo __('Learn More','meal'); ?><span
                                        class="ion-android-arrow-forward"></span></a></p>
                            </div>
                            <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_two,'large')); ?> );"></div>
                            <div class="ftco-46-text ftco-46-arrow-up">
                                <h4 class="ftco-46-subheading">
                                    <?php echo esc_html(  meal_featured_recipe_cat($meal_section_three->ID) ); ?>
                                </h4>
                                <h3 class="ftco-46-heading">
                                    <?php echo esc_html( $meal_section_three->post_title ); ?>
                                </h3>
                                <p class="mb-5">
                                    <?php echo esc_html( $meal_section_three->post_excerpt ); ?>
                                </p>
                                <p><a href="<?php echo get_the_permalink($meal_section_three); ?>" class="btn-link"><?php echo __('Learn More','meal'); ?> <span
                                        class="ion-android-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .section -->
