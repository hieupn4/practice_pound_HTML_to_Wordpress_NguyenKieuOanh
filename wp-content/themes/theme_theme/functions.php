<?php
/**
 * từ wordpress 3.4 thì nên thêm hàm add_theme_support() vào trong file functions.php như thế này
 * để hỗ trợ tùy biến header
 * cụ thể hơn thì cái này dùng để tùy biến cho cái logo củ phần header
 */
add_theme_support( 'custom-header', array(
    'width' => 398,
    'height' => 94,
    'default-image'            => get_template_directory_uri() . '/image/picture_for_about/slogan.jpg',
    'header-text'            => false,
    'default-text-color'    => '',
    ));
/**
 * thêm dòng add theme support này là để xác định hộ trợ post-thumbnails trong theme (cái này chính là post ảnh đại diện cho post hoặc page trong theme)
 * vao trong post hoặc page là sẽ thấy cái phần Set Featured image, nó chính là một tên gọi khác của post-thumnails 
 */
add_theme_support('post-thumbnails');
//set_post_thumbnail_size(290 , 290);
set_post_thumbnail_size( 290, 290);
/** 
 * đăng ký một sidebar để đặt các widget lên, chú ý là các widget sẽ đặt lên sidebar
 * sidebar là vùng để chứa các widget, chúng ta đầu tiên là phải đăng ký vùng sidebar, sau khi đăng ký xong đặt sidebar
 * vào trang html, và sau đó là đặt các widget lên
 */
register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),// tên của sidebar, khu chứa widget
        'id' => 'sidebar-1', // id được dùng để gọi sidebar này ngoài theme
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),// mô tả về khu sidebar này
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
    ) );
/**
 * hàm đăng ký với admin một menu
 * như cái hàm này nghĩa là chúng ta tạo ra một thanh menu với id = menutop1, dùng để gọi ra trong theme
 */
register_nav_menus( array(
    'menutop1' =>_('Menu top 1'),
)
        );
?>