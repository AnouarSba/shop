<?php
/**
 * index.php
 *
 * 
 * @created    2022-09-06 10:50:56
 * @modified   2022-09-06 10:50:56
 */
$currentDir = getcwd();
exit("请修改 Apache 或 Nginx 配置, 将网站根目录设置为: {$currentDir}/public/");
