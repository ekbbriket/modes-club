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
define('DB_NAME', 'modes');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T%tn$Blv~X/+N} q.@Psrb1q8]}IXjIi*_Pc0yFC^ke1(qe=!-E4m&3nWJ,-Sxnf');
define('SECURE_AUTH_KEY',  'tH}3afpG?2gMl?jS3{|eyN4C(mM0rl0Yqq^X}B-JGc>qPGyTeWm@H3>ZV7UVV2R&');
define('LOGGED_IN_KEY',    'Y<E$:4=Jrz| 4YO~nODQ|dbEP-Sr&x]3p_XuKO39tKeE[G!kB]dUTWHz``Gz$qX5');
define('NONCE_KEY',        'jV,8O!mtH]`8|@u0i%^<04$Ci/Y*xfuYA:g<#q3(R62<5N{!jgc3S4)F}A<n<tFa');
define('AUTH_SALT',        '5{V(F*M0eEUtHCN%e)*`/=q!nAN&OgpV2wPUs 2Yc1%5u/UY=m Ma0_Z;>BY1k,n');
define('SECURE_AUTH_SALT', '<`Je@.cc+E@b$w$vU,o>&4B37kL~Ifql[;#}Y7]VQI5Y,wvw,o4@4{/c1F]:KDYl');
define('LOGGED_IN_SALT',   'SSe?jL+ATr/y.K&MjRX%#^ u}r5E/1DS]m]DjRSx1>t4@AuxWun?Yn,N}^qxZq ?');
define('NONCE_SALT',       'a.~RJEO>:J_pL#-eU9*8A[1L@`>i6bN)p~vJ)n1T6rkbPJ$%BFTOl@Dhal&qe#ce');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
