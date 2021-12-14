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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordPressData' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sb|`g>lJe*?UJ$2eT/kCyE*(XDB8tSTBVW8}q_$U(~O7!a#bhH-`IK1I_A^KlBb ' );
define( 'SECURE_AUTH_KEY',  'FD 6:nNt;pc|;>q{#N)^eM`b(b9+Dg&$n]t6TZmZ|Yc?l3Y}S!)BCEOQX(zd{>vA' );
define( 'LOGGED_IN_KEY',    '#sj?nSK$0R7|j2qGx&^t5tIohiN@%s)~.vF#bzOTe.#}5UVuMx<$3,7.o..5.O3p' );
define( 'NONCE_KEY',        '^jgM{qvY9NkYt.Xv<Ex.&V6([I}1dDosY%P^::x-6bGI1bBcfNq!.FqU2cO8e#6g' );
define( 'AUTH_SALT',        'V<NFy,A;YN{~9HP5^irK89A=bX+VFgN&zm9mJFFD^fT GkY,lIiIkv4Aw#zIwK?F' );
define( 'SECURE_AUTH_SALT', ']+NIuP{|&QLl$&4dKP`[QZbq5tlL.Id$)rF`}1uaIitKHcBot<uFMi9rh~WpuDXc' );
define( 'LOGGED_IN_SALT',   '.j 7947Exx6wi!P+DRinANE6oyX)mIC3UY?qZ@4~`~;|OfA.<V*h[6].hP2I#3>p' );
define( 'NONCE_SALT',       'My?PL8@cmJx:ljob;w??Tx#uj2`:m#V+AoMV%9oZ1FKU+&*>A7&+zg@(85-eQQ8H' );

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
