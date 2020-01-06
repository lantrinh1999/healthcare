<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp_healthcare' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LF(^SkmIqv1sQjvPS O:7(Z9pEL 2%=#kgDqhu :CcMfI%gXu8a1!>Q,hlTi9hkA' );
define( 'SECURE_AUTH_KEY',  'W+}dz/veij6#{eY<hj}SJw6GJX$If@@dYxIg*&!gbU~y^_KWe}mM>cYeVaidVtu/' );
define( 'LOGGED_IN_KEY',    'jTN4i0Ec6Fh@=j1,i^Y]%#Ked2+jJvHnPP+a4|wkD>+FxG$wpDX0tm}fbb?S6%R~' );
define( 'NONCE_KEY',        'yoYY3w/]pa]d&gs7?ecVnv=!wC8I&zLe`KWcj!a-0Sa&Ga-[Wj2v!xCTZW-o1+Sw' );
define( 'AUTH_SALT',        't;;)g/e*qN^6vGkgC,__vJA{DNlioSljP @yz>!6`f@_b,Q{vunyILmVOi8[laT=' );
define( 'SECURE_AUTH_SALT', '=}>hLq3Q4Xa4aA~yUA#ve);Pb(N<#MI@XJ<Poa~B]vIPK[4oW+[PECg$)7j=;=&!' );
define( 'LOGGED_IN_SALT',   '#w s+@/I`7yK-twR_8^LBSkf2gVSHB*NR!Z.t=}qa=Y 6}?;5K|Fy}N(C@EMF.]%' );
define( 'NONCE_SALT',       'U$8%Qzuy7$f<>.sO@;<~7@Cs.sn7cD>z6E^S1TbPw[*l9wA5wi[qlMb#0#3( S4(' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
