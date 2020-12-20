<?php
    if(is_category()){
        $category = get_category($cat);
        $cat_id   = $category->cat_ID;
        $cat_name = $category->cat_name;
        $cat_slug = $category->slug;
    }
    if(is_archive()){
        $postType = get_queried_object();
    }
    if(is_tag()){
        $tag_name = single_tag_title("", false);
    }
    if(is_tax()){
        $taxonomy = $wp_query->get_queried_object();
        $tax_name = $taxonomy->name;
        $tax_slug = $taxonomy->slug;
        $tax_id = $taxonomy->term_id;
    }
    if(is_search()){
        $search_word = get_search_query();
    }
    if(is_month()){
        $year = get_query_var('year');
        $month = get_query_var('monthnum');
        $month_title = $year . "年" . $month . "月";
    }
    if(is_author()){
        $author = get_the_author();
    }
?>
<div id="hero" class="
    <?php
        if(is_single()){
            echo "singlehero";
        }
        if(is_tag()){
            echo "tag " . $tag_name;
        }
        if(is_tax()){
            echo $tax_slug;
        }
        if(is_search()){
            echo "search";
        }
        if(is_month()){
            echo "month";
        }
        if(is_author()){
            echo "author";
        }
    ?>">

    <div id="hero-inner">
    <?php if(is_tax()){
        $term_idsp = "games_".$tax_id;
        $package = get_field('package',$term_idsp);
        $packagesp = wp_get_attachment_image_src($package, 'full');
    } ?>

    <div id="hero-left">
        <h1>
            <?php
                if(is_category()){
                    echo $cat_name;
                }
                if(is_archive()){
                    echo esc_html($postType->labels->singular_name);
                }
                if(is_tag()){
                    echo $tag_name;
                }
                if(is_tax()){
                    echo $tax_name . "のニュース・役立ち記事一覧";

                    if(is_search()){
                        echo " / ";
                    }
                }
                if(is_search()){
                    echo "「" . $search_word . "」" . "を含む記事";
                }
                if(is_month()){
                    echo $month_title . "の記事";
                }
                if(is_author()){
                    echo $author . "が投稿した記事";
                }
            ?>
        </h1>
        <div id="hero-border"></div>
        <?php
            if(is_category()){
                echo category_description();
            }
            if(is_archive() && !is_tax()){
                echo "<p>" . $postType->labels->singular_name . "の一覧です。</p>";
            }
            if(is_tax()){
                echo term_description();
            }
            if(is_search()){
                echo "<p>" . $wp_query->found_posts . "件の記事が見つかりました。</p>";
            }
            if(is_tag()){
                echo "<p>「" . $tag_name . "」タグが付けられた記事は" . $wp_query->found_posts . "件あります。</p>";
            }
            if(is_month()){
                echo "<p>" . $month_title . "に投稿された記事は" . $wp_query->found_posts . "件あります</p>";
            }
            if(is_author()){
                echo "<p>" . $author . "が投稿した記事は" . $wp_query->found_posts . "件あります</p>";
            }
        ?>
    </div>
    <?php if(is_tax()): ?>
    <div id="hero_right">
        <img id="hero_image" src="<?php echo $packagesp[0]; ?>" />
    </div>
    <?php endif; ?>

    </div>
</div>