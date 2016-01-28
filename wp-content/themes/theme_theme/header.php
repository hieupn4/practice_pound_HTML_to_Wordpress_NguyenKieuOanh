
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  <?php language_attributes(); ?>> <!--xác định Ngôn ngữ của blog là php -->
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>"> <!-- charset của blog, mỗi blog đều gắn với mỗi loại ngôn ngữ khác nhau, tiếng anh, tiếng việt, ở đây chúng ta là tiếng việt -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- hàm bloginfo('styléheet_url') dùng để in ra đường dẫn tới file style.css -->
        <title> 
            <!-- đoạn code này để hiện thị tiêu đề bai viết trong thẻ title -->
            <?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display'); // bloginfo thì có thêm get_bloginfo ,thường thì get_bloginfo dùng để gán cho biến
            if ($site_description && ( is_home() || is_front_page() )) {
                echo " | $site_description";
            }
            if ($paged >= 2 || $page >= 2) {
                echo ' | ' . sprintf(__('Page %s', 'tipblog.com'), max($paged, $page));
            }
            ?>
        </title>
        <?php wp_head(); ?> <!--luôn luôn gọi hàm wp_head này trong phần header. Bởi nếu không có hàm này thì các script của plugin (giống như là module) sẽ không được thêm vào thẻ head. Ví dụ jquery của một plugin chẳng hạn  -->
    </head>
    <body <?php body_class(); ?>> <!-- Bạn phải luôn luôn gọi hàm body_class() này trong thẻ body, bởi trong quá trình thiết kế theme có phần đó là ảnh và màu nền của trang sẽ được gọi thông qua hàm này -->
        <div class="top_page"> 
            <div>
                <!-- hàm get để hiện thị thì luôn sử dụng echo để hiện thị ra -->
                <!-- get_option('home') nó sẽ vào bảng wp_options để truy vấn giá trị của thuộc tính home, ở đây nghĩa là lấy ra link đường dẫn dẫn tới trang home -->
                <!-- chú ý là bảng wp_options chứa những thông tin mặc định của trang web của bạn,ngay từ option nó cũng đã nói lên điều này  --> 
                <!-- chúng ta cần phải chú ý là tư tưởng của wordpress là để tạo ra một trang web để cho những người không biết về CNTT hay ko biết về lập trình web sử dụng, chính vì điều này cho nên nhiệm vụ của những người làm theme là tạo ra một giao diện mẫu , nhưng ko được phép fix cứng các giá trị, ví dụ như ...   -->
                <!--... ví dụ như chúng ta không được để src của thẻ img là một giá trị cụ thể nào đó, mà phải dùng hàm của wordpress để lấy nó ra từ CSDL  -->
                <!-- chẳng hạn như đoạn mã ngay dưới đây , src của anh tôi phải để là src=?php header_image();  chứ không thể để cứng là dantri.com.vn được  -->
                <!--.... bởi vì đến khi đưa cho người ta dùng , người ta muốn thay đổi logo của họ thì họ lại phỉa mở trang header.php này và và sửa lại giá trị src-->
                <!--...và đó là một việc quá sức với một người không chuyên về CNTT  -->
                <a href=”<?php echo get_option('home'); ?>” title=”<?php echo get_option('home'); ?>”><img src="<?php header_image(); ?>" alt="<?php echo get_option('home'); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"/></a>
                <!-- để hàm header_image trong đoạn mã ngya trên hoạt động được thi trong file function.php chúng ta phải thêm đoạn mã add_theme_support vào  -->
                <!--   <ul> -->
                    <!-- sau khi đã đăng ký thanh menu rồi thì chúng ta dùng đoạn mã sau để gọi menu ra,đặt vào chỗ nào thì nó hiện thị...  -->
                    <!--... chỗ đó,chẳng hạn như chỗ này thì mình đặt menu ngay trong phần header  -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menutop1', // tên location cần hiển thị
                        'container' => 'ul', // thẻ container của menu, nghĩa là cái ul sẽ bao quanh các thẻ li
                    ));
                    ?>
                 <!--   <li><a href="">about</a></li>
                    <li><a href="">blog</a></li>
                    <li><a href="">schedule</a></li>
                    <li><a href="">testimonials</a></li>
                    <li><a href="">lineage</a></li>
                    <li><a href="">contact</a></li>                     
                </ul> -->
                 <div> </div>
            </div>
        </div>
        <div class="banner_image">
            <!-- hàm sau là để hiện thị slidebar lên trang html của trang web -->
            <?php
            if(is_active_sidebar('sidebar-1')):
                dynamic_sidebar('sidebar-1');
            endif; 
            ?> 
            <p>serving all in need through the eyes and tools of Eastern  <br>
            philosophy, Yoga Therapy and Western psychology.</p>
        </div>
