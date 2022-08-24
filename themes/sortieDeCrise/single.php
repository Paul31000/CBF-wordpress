<?php
/** 
 * The single post.<br>
 * This file works as display full post content page and its comments.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
        </div>
        <div class="container-fluid" id="fond_gris">
            </br>
            <div class="single-info-post d-flex justify-content-center">
                <?php the_category();echo' / ';the_time('j F Y');?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-md-12 site-main" role="main">
                    <?php
                        the_content();
                ?> 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <?php
                        $prev_post = get_adjacent_post(false, '', true);
                        if(!empty($prev_post)) {                              
                            echo '<div class="link_sibling_art">';
                            echo    '<a href="' . get_permalink($prev_post->ID) . '">';
                            echo        '<div class="container-fluid">';
                            echo            '<div class="row">';
                            echo                '<div class="col-4">'; 
                            echo                       '<div id="image-precedent"></div>';
                            echo                '</div>';
                            echo                '<div class="col-8">';
                            echo                    '<div class="button_precedent">'; 
                            echo                        'ARTICLE PRÉCÉDENT';
                            echo                    '</div>' ;
                            echo                    '<div class="button-titre-precedent">';
                            echo                        $prev_post->post_title;
                            echo                    '</div>';
                            echo                '</div>'; 
                            echo            '</div>';
                            echo        '</div>';
                            echo     '</a>';
                            echo '</div>';
                        };
                    ?> 
                </div>
                <div class="col-12 col-sm-6">
                    <?php
                            $next_post = get_adjacent_post(false, '', false);
                            if(!empty($next_post)) {                              
                                echo '<div class="link_sibling_art">';
                                echo    '<a href="' . get_permalink($next_post->ID) . '">';
                                echo        '<div class="container-fluid">';
                                echo            '<div class="row ">';
                                echo                '<div class="col-8" >';
                                echo                    '<div class="row" >';
                                echo                        '<div class="col-12 button_precedent d-flex justify-content-end ">'; 
                                echo                            'ARTICLE SUIVANT';
                                echo                        '</div>' ;
                                echo                        '<div class="col-12 button-titre-precedent d-flex justify-content-end">';
                                echo                            $next_post->post_title;
                                echo                        '</div>';
                                echo                     '</div>';
                                echo                '</div>'; 
                                echo                '<div class="col-4">'; 
                                echo                       '<div id="image-suivant"></div>';
                                echo                '</div>';
                                echo            '</div>';
                                echo        '</div>';
                                echo     '</a>';
                                echo '</div>';
                            };
                        ?> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-6">
                    <div id="titre-mini-bibli">
                        Cela pourrait vous intéresser...
                    </div>                      
                </div>
                <div class="col-3" id="retour-home">
                    <a href="https://sortiedecrise.fr/actualites/">Tous les articles <img src="https://sortiedecrise.fr/wp-content/uploads/2021/10/fleche.svg"/></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bibli">
                
                    
                    <?php
                        $args = [
                            'post-status'=>'publish',
                            'posts_per_page'=>'3',
                            'order'=>'DESC',
                            'orderby'=>'date',
                        ];

                        // The Query
                        $query = new WP_Query( $args );
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $categories_title = '';
                            foreach(get_the_category() as $category) {
                                $categories_title .= '<span class="category_title">'.$category->cat_name.'</span>';
                            }

                            $html.= '<div class="un-mini-bibli col-12 col-md-4">';
                            $html.=      '<div class="mini-bibli-infos-article">';
                            $html.=              '<p>'.$categories_title.'</p>';
                            $html.=      '</div>';
                            $html.=      '<div class="mini-bibli-infos-article-titre">';
                            $html.=              '<p>'.get_the_title().'</p>';
                            $html.=      '</div>';
                            $html.=      '<div class="mini-bibli-infos-article-excerpt">';
                            $html.=              '<p>'.get_the_excerpt().'</p>';
                            $html.=      '</div>';
                            $html.=      '<div class="button-link-post">';
                            $html.=       '<a href="'.post_permalink().'"> En savoir +</a>';
                            $html.=      '</div>';
                            $html.= '</div>';
                            
                        }
                        echo $html;
                    ?>
            </div>
        </div>
<?php
get_sidebar('right');
get_footer();
?>