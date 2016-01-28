<?php
/*
 Template Name: Contact
 */ ?>
<?php get_header(); 
while(have_posts()):
    the_post();
?>
<div class="content"> 
            <div>
                <!--tham khảo ở website sau :http://www.hoangweb.com/wordpress-site/su-dung-featured-images-hay-post-thumbnails-trong-wordpress  -->
                <!-- hàm này để hiện thị ảnh đại diện ra của bài viết ra-->
                <?php the_post_thumbnail('thumbnail');?>
                <div>
                    <h2> <?php the_title();?> </h2>
                   <?php the_content();?>
                </div>
            </div>
</div>
<?php endwhile; get_footer(); ?>
