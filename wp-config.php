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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H[[Nt5}tMGDnVUw)u3Q? zr+c4,;0[O)Djivy.[HQC1Jzn~t|2qxUr#-%|ov81eJ' );
define( 'SECURE_AUTH_KEY',  'hypPFi6k1hOK>eO-_7fIZSGc4dGM,heL2I(p9@A&~1|ME`af)PmV#~0m bs]gN<D' );
define( 'LOGGED_IN_KEY',    'dtXm;Mq0F.%Uhp-3d/hlVB-Gk#@m[3lAj-[fO22}CAjINf}o*Wc,-2IOfkIFe<pA' );
define( 'NONCE_KEY',        'q%E3cEFdw $Z%qOiiyf9`_0Qgs@~!@%PEZA%lg_TM!@.uxhcevx{r&+fXY/OqC]+' );
define( 'AUTH_SALT',        'C^%3]X8}X`o(@}iVDt.AC4hMV7p1s4*kUjj_%$pSH6}giC-QKdv5aY(u;>KTNc<V' );
define( 'SECURE_AUTH_SALT', 'GReGk<_Q]TNb@Uy|lbd_?<@&v1CfKQ,{5E7@eDC:lRz[^$!z95Ayn%K2:);Q*nvi' );
define( 'LOGGED_IN_SALT',   '&=8WxFKL/ B6.Rcb}q,}Y,.TZwM#he:iF16WHKi+f2zEY?<GHB[+LJM3;LL=C6pN' );
define( 'NONCE_SALT',       'Jj_&#-,lr;CCHQikb@)N4! &3fAnrIGg<t)SFGh`e!_G]& TGeh^9<oUWAx?~V({' );

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
define('WP_HTTP_BLOCK_EXTERNAL', true);
define('WP_AUTO_UPDATE_CORE', false);