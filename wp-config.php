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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/nbkukr/ecointel.com.ua/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'nbkukr_ecointel');

/** Имя пользователя MySQL */
define('DB_USER', 'nbkukr_aleksey');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'alex6313');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'T,(auk.E;49<3]vcCe{%~%|P(x9$28%|kO:%j0!L{BqBdUb|DSH*9mWd4ub0ILSd');
define('SECURE_AUTH_KEY',  '#xL!=N[w&L|+@!!d2dp|FoihrmAB>AK;T9)?&b,eS*r9@Cec:S&*T[U8t)c9egb5');
define('LOGGED_IN_KEY',    'BW$ht2^)/9p0a50TG%+B0NtGjA^HQyjqR|0:h:^f<>DSr}+#1p>0liJs%z<a7i]v');
define('NONCE_KEY',        'ZEK_*e,=%m#E[V3Kt3<7jX#+vvT#(qg%6SRD%nL0M2LirM^|kyj9,I-SW9KK.)fC');
define('AUTH_SALT',        '^=;^mW^@uL3a1U`uaW,q1Rue]UNbZ0Ek[VX!W)MS{=iCh8rFc,-:bczX%4B`Wp0>');
define('SECURE_AUTH_SALT', 'g{=THzFzBcp1,cweu6epo]R}w>-: {FNd}sI:wKD#Kc%{dYkA_>ac`L3)gd].Jxu');
define('LOGGED_IN_SALT',   '#9<_P#cryP3C)Nqt+=U$zzd}U338Z%~of=cuq6f9x rzpZ~l0,OMIbx1~euljT$P');
define('NONCE_SALT',       'N.*>AAW7i7sx$uR,qTmUe#v$)+^ryd].cC=X,EPvv>z>6B`$n{s.cHRPc7J-K)p`');

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
