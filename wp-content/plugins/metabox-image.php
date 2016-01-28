<?php
/*
Plugin Name: Meta box hiện thị ảnh 
Author: Phạm Ngọc Hiếu
Description: thử làm cho vui
Author URI: Hiếu Gà
*/
/**
 Khai báo meta box
**/
function ngochieu_meta_box()
{
 add_meta_box( 'thong-tin', 'upload ảnh dưới chân trang này', 'ngochieu_output', 'post' );
}
add_action( 'add_meta_boxes', 'ngochieu_meta_box' );
/**
 Khai báo callback
 @param $post là đối tượng WP_Post để nhận thông tin của post
**/
function ngochieu_output( $post )
{
    /**
     * Hàm này thích hợp sử dụng nếu bạn cần lấy giá trị của một field nào đó dựa vào Post ID đang chứa field.
      Cách sử dụng: get_post_meta( $post, $meta_key, $single )
      Trong đó,
      $post: Là ID của bài viết cần lấy custom field.
      $meta_key: tên key của field cần lấy trong bài viết. Mặc định sẽ lấy toàn bộ field có trong post.
      $single: Tuỳ chọn hiển thị một giá trị hay một mảng giá trị. Mặc định là false (hiển thị mảng).
     */
    $link_download = get_post_meta( $post->ID, '_link_download', true );
 // Tạo trường Link Download
 echo ( '<label for="link_download">Link Download: </label>' );
 echo ('<input type="text" id="link_download" name="link_download" value="'.esc_attr( $link_download ).'" />');
}
/**
 Lưu dữ liệu meta box khi nhập vào
 @param post_id là ID của post hiện tại
**/
function thachpham_thongtin_save( $post_id )
{
 $link_download = sanitize_text_field( $_POST['link_download'] );
 update_post_meta( $post_id, '_link_download', $link_download );
}
add_action( 'save_post', 'thachpham_thongtin_save' );
?>
