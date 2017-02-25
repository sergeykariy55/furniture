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
define('DB_NAME', 'ch41700_furnitur');

/** Имя пользователя MySQL */
define('DB_USER', 'ch41700_furnitur');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '621968592');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '97p^=#1ib_cc8g|61<rglz?#l2)GnaA}>Ga,:I!5D8&em:efpjY0SAw<aakl9*{O');
define('SECURE_AUTH_KEY',  '2U1}T57:NhdS3tI-}wD4)5Va_59>Rqm[!+@{JZ|Vl{qjUZCk21U0J Twv/d%Nh8j');
define('LOGGED_IN_KEY',    'm.k nxK!0dp5n9y@Q4fgA0_]R,X9#bVI!6]6oSmy<M`ZvtM^y}+sUTv=.0r$3ZiB');
define('NONCE_KEY',        '>hy;{?4v.?wf8O}i;st# @O+s+?7ZU{W|=Ny5;o|9M0PB(AZtWDdg>n|{b%T1gIH');
define('AUTH_SALT',        'WO;=+c8_@EI^5-n`<PMHg# 9,r3N%{2r&FrVDZ1ealhVmxE&hi<dVb0{P`w]!+5H');
define('SECURE_AUTH_SALT', '*LW>xD8azn5,)v_hHe_^;;0d,y^?dAPRyeIfw3T8u`!|OzQ2ZK(Ab*|e&cHtv!K$');
define('LOGGED_IN_SALT',   '%ZNhAT&.vdq`Y+JN}xvc6IupG4@{nY>T]{Ff<=kX5+L;)n#[}t{r[Z!` F`ZjOWV');
define('NONCE_SALT',       'R[2s>YXdkd#:D9RK2v3UmTA?3a;Pl-ws,r]=jBF`NV4E2x>QKb%e7w6>E--Dv-^%');

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
