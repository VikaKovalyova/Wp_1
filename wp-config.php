<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~:F^2w[Lr1N,0T>*eWqH*qNN3gUcG-]LR<cqL5:nVNc/=]$WZaj%Y._Z93H_I@[S' );
define( 'SECURE_AUTH_KEY',  'TMr?yAEzyqGJ{a~^X[@@Nf=s9RF5%@~bvLDouv17`UvC;?_,L>SDI9g}_wz (Cq{' );
define( 'LOGGED_IN_KEY',    'Ha.xy{NRJN{x(z!AfCfk f8Dn@THK+Z-2MjXy7dm{fgiHKapa=#*koN%QtWxf-$1' );
define( 'NONCE_KEY',        '$vjI4C?6wKQAS#;=ewN}GSCb=%1Z?F_06zbyp=9NqhTckHXJ)KTt/*2*bIxpvn3!' );
define( 'AUTH_SALT',        '6<Cz1i5&o~6yaV$:w{1(fSE0&eRQiv6}a|n`%$v|@K_>Vn/?INT;U+b0A1~Jb/iS' );
define( 'SECURE_AUTH_SALT', 'ul-NUpc1Th@7arBL)HI(77o47eHIQBQ{(QH~?5Ve=;4EU|ACW(yaT!At0wAz7yd)' );
define( 'LOGGED_IN_SALT',   '%~p}LFZ$h!xQ7s|t5%F3;jQ~Z+|!Z<ZV9DJZy&Vrf_roISj{63;BwT[$w+u^$?YL' );
define( 'NONCE_SALT',       'rGPA+Q; F;:)@u+$@CyM]+|<P^rm1WU)*LSrA|yEC3VwwMhjMU( l6c|5pD~.`dy' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
