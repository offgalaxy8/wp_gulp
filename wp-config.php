<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WP_HOME', 'http://wpgulp.loc/');
define('WP_SITEURL', 'http://wpgulp.loc/');
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_loc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GCbDVY7>xF(3A&sN9bV;I=Gwrtw=M87kw:p;Pt4IN0fW*bQCT4HW1` w=%y?_}HA' );
define( 'SECURE_AUTH_KEY',  'F}^~]x-},C@:TrsI,fgX@/R,)eATIX`aO$^_R,_[BU;2O[nn3q5^{6=otco0(@d$' );
define( 'LOGGED_IN_KEY',    '6iN@@u3nnhDCL{9qgzy%pV(2hUo!&Fyd)13$2i=]jmR5M#AyMI_J,=:P#(BFy&ee' );
define( 'NONCE_KEY',        ', %6aE>wuuu9x v7=Y!V/W$;U36NK(H7{Ic0(7ERzXZUXMasYh4G:%cy}[ged!dJ' );
define( 'AUTH_SALT',        '<c (rNsbd_>&9c/h{9XEC]E97W{qQv3xULI<.UZs(E0@j pt%;D*{`{?!ifuC)j+' );
define( 'SECURE_AUTH_SALT', '4nn!`L8l.0;~Z]CJCyzr1r=hh:^8Yg!KGiJM4WK:f!w(|HW8Ihqwa0xiAj pEP~N' );
define( 'LOGGED_IN_SALT',   'i(LB~a*b#S>=^WJ,.uahX0--nnXf)}wQ;=zwU_z1>ECD]|IIo=q8UN*4D[e{)JGu' );
define( 'NONCE_SALT',       'N !{4&4maMgAJe/tp[Bbn`FJV@=;J#.#k_Q&jjq*9LX{Q1)i]R=1UO!<<_Y<eq&b' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
