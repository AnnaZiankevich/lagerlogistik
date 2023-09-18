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
define( 'DB_NAME', 'lagerlogistik_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>tn aM<Eo|SO8Fld,Jm4X,M$%{AIafC%bh=TGN,ZZrglC7aLu-Oxn:J^3*C86R;]' );
define( 'SECURE_AUTH_KEY',  'xko{qk3!,Q2Bc}(PI)]U6t)Qr5Jpygj_QeXxAXEZJ>.`RH&~yo5`O|V)`#$4OEaK' );
define( 'LOGGED_IN_KEY',    ']vApa/jbuOKI+GXr=r?}d9wy@yx2$54F>cU4(Zp+HKkTYgx_M-!nY0wd[vL*2lTU' );
define( 'NONCE_KEY',        'F4mP(eZFg:t3b<=52eOpz3rt/+5(QFZT+1g4*bdP{>frLET(:2+U>_a-$6p=&a?t' );
define( 'AUTH_SALT',        'U1IVErM ?fC0zYtw5JH*Ko`G6{3rw)3Fc]Y5eHt&BLJK J,f82` 3}<1_mB6nd:?' );
define( 'SECURE_AUTH_SALT', 'OEr!|U9LgcU?>$q99Q=`^t[3:g2AzTQ`VY+e6*IfLv0y9!T`&}GROm{3~(V=cHA+' );
define( 'LOGGED_IN_SALT',   'wq@H5Om0pdF_f73K_V$6%YhD#g~e^ ,`)P?P;&5M`wga1!m6|_ScTL2+:+E94H:p' );
define( 'NONCE_SALT',       'jA4WXU7hz:?1gnD)nNv9que~qQfZ0j%y=/qH5<;7@2@xz,F]8bh~x`+Q>.,8oH6_' );

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
