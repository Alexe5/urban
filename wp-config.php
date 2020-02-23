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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'urbandb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'alexe' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Password$5' );

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
define( 'AUTH_KEY',         '[3=yIqHIyjAhEpczEPvq;/YtiE,nU|jm K0deS^+U- 6-1]K&v#,O!]v:Bpd`rc}' );
define( 'SECURE_AUTH_KEY',  'd<(/fO&WdJ>(4oq|hlx/cp,/^t#TF4G-Xdnjd({<V %#f%W[T;JiE:Ly@Si*{x=*' );
define( 'LOGGED_IN_KEY',    'GiO~Gd8uxg]X0]X3Fkx<UDq+g*|KBv^`LmZdeA*XS-(cONEFaK$738_l05:?m<o(' );
define( 'NONCE_KEY',        ';2`+AIT}$;G:1I@|Zqa-COBjv#aA#{c3yF!JJP?`jRX-8`K.eDlLO~P<_ c>l/-Q' );
define( 'AUTH_SALT',        '@TZx9y`50aH:G6kex;E:>bXOVIzr<~CQT^weplK^+,`z0N_]1s|C7gE:Li%J>Pi8' );
define( 'SECURE_AUTH_SALT', 'H2t`E4(X;;Ds #drZTh9Js8kh2]*,|p#zlj<i%O*C!KO/e]#rOi9Zf@:[%b,Oabf' );
define( 'LOGGED_IN_SALT',   'xZ$DV0.btyJyuB/nX$e.so1Qq}]3 nZ9#X?;PD%l<Wial88(7Xhk7$t6w3jE6mP>' );
define( 'NONCE_SALT',       'rQU2yV!IlNx6=-SH/SQ>C.qc.~t3ID>l w.fS}|-?@y;bOR%T{54lqAlQKV`vWA ' );

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