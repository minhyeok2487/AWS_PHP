<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-07 01:53:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;user_table&quot; does not exist
LINE 2: FROM &quot;user_table&quot;
             ^ /var/www/html/php/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2022-09-07 01:53:21 --> Query error: ERROR:  relation "user_table" does not exist
LINE 2: FROM "user_table"
             ^ - Invalid query: SELECT *
FROM "user_table"
WHERE "user_no" = 'admin@admin.com'
ERROR - 2022-09-07 01:54:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;admin@admin.com&quot;
LINE 3: WHERE &quot;user_no&quot; = 'admin@admin.com'
                          ^ /var/www/html/php/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2022-09-07 01:54:47 --> Query error: ERROR:  invalid input syntax for type integer: "admin@admin.com"
LINE 3: WHERE "user_no" = 'admin@admin.com'
                          ^ - Invalid query: SELECT *
FROM "user_table"
WHERE "user_no" = 'admin@admin.com'
ERROR - 2022-09-07 01:55:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;admin@admin.com&quot;
LINE 3: WHERE &quot;user_no&quot; = 'admin@admin.com'
                          ^ /var/www/html/php/system/database/drivers/postgre/postgre_driver.php 234
ERROR - 2022-09-07 01:55:24 --> Query error: ERROR:  invalid input syntax for type integer: "admin@admin.com"
LINE 3: WHERE "user_no" = 'admin@admin.com'
                          ^ - Invalid query: SELECT *
FROM "user_table"
WHERE "user_no" = 'admin@admin.com'
ERROR - 2022-09-07 02:21:19 --> 404 Page Not Found: Login_reg/index
ERROR - 2022-09-07 02:24:00 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:24:28 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:25:12 --> Severity: Warning --> Undefined array key "user_email" /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:26:00 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 71
ERROR - 2022-09-07 02:26:08 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 71
ERROR - 2022-09-07 02:26:08 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 71
ERROR - 2022-09-07 02:26:21 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 71
ERROR - 2022-09-07 02:26:57 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:27:10 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:27:20 --> Severity: Warning --> Undefined array key "user_email" /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:27:21 --> Severity: Warning --> Undefined array key "user_email" /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:29:27 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:29:27 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:29:28 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:29:28 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:29:38 --> Severity: error --> Exception: Illegal offset type /var/www/html/php/system/libraries/Session/Session.php 846
ERROR - 2022-09-07 02:29:53 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:30:35 --> Severity: error --> Exception: Illegal offset type /var/www/html/php/system/libraries/Session/Session.php 846
ERROR - 2022-09-07 02:31:43 --> Severity: error --> Exception: Illegal offset type /var/www/html/php/system/libraries/Session/Session.php 846
ERROR - 2022-09-07 02:32:32 --> Severity: error --> Exception: Illegal offset type /var/www/html/php/system/libraries/Session/Session.php 846
ERROR - 2022-09-07 02:35:03 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_result::array() /var/www/html/php/application/models/User_model.php 26
ERROR - 2022-09-07 02:35:18 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_result::object() /var/www/html/php/application/models/User_model.php 26
ERROR - 2022-09-07 02:37:36 --> Severity: error --> Exception: Illegal offset type /var/www/html/php/system/libraries/Session/Session.php 846
ERROR - 2022-09-07 02:40:05 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 1
ERROR - 2022-09-07 02:40:33 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:40:34 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:40:44 --> Severity: Warning --> Array to string conversion /var/www/html/php/application/views/login.php 60
ERROR - 2022-09-07 02:52:24 --> 404 Page Not Found: Public/home
ERROR - 2022-09-07 02:52:25 --> 404 Page Not Found: Static/admin
ERROR - 2022-09-07 02:53:06 --> 404 Page Not Found: Env/index
ERROR - 2022-09-07 03:38:21 --> 404 Page Not Found: Boaform/admin
ERROR - 2022-09-07 04:07:24 --> 404 Page Not Found: Boaform/admin
ERROR - 2022-09-07 04:12:54 --> Severity: Notice --> session_start(): Ignoring session_start() because a session is already active /var/www/html/php/application/views/main.php 2
ERROR - 2022-09-07 04:12:56 --> Severity: Notice --> session_start(): Ignoring session_start() because a session is already active /var/www/html/php/application/views/main.php 2
ERROR - 2022-09-07 04:12:58 --> Severity: Notice --> session_start(): Ignoring session_start() because a session is already active /var/www/html/php/application/views/main.php 2
ERROR - 2022-09-07 04:16:02 --> Severity: Warning --> Undefined property: Main::$response /var/www/html/php/application/controllers/Main.php 19
ERROR - 2022-09-07 04:16:02 --> Severity: error --> Exception: Call to a member function redirect() on null /var/www/html/php/application/controllers/Main.php 19
ERROR - 2022-09-07 04:20:24 --> Severity: Warning --> Undefined property: Main::$response /var/www/html/php/application/controllers/Main.php 18
ERROR - 2022-09-07 04:20:24 --> Severity: error --> Exception: Call to a member function redirect() on null /var/www/html/php/application/controllers/Main.php 18
ERROR - 2022-09-07 04:29:12 --> Severity: Warning --> Undefined property: Main::$response /var/www/html/php/application/controllers/Main.php 19
ERROR - 2022-09-07 04:29:12 --> Severity: error --> Exception: Call to a member function redirect() on null /var/www/html/php/application/controllers/Main.php 19
ERROR - 2022-09-07 05:08:02 --> 404 Page Not Found: Setupcgi/index
