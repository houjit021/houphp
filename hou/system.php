<?php
// +----------------------------------------------------------------------
// | HouCMF [ 用心做好每个站 用心服务好每个客户 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://www.houjit.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Amos <amos@houjit.com>
// +----------------------------------------------------------------------

// 自定义
defined('DEBUG') or define('DEBUG', true);
// 框架开始运行时间
defined('START_TIME') or define('START_TIME', microtime(true));
// 核心文件目录
defined('HOU_PATH') or define('HOU_PATH', __DIR__.DIRECTORY_SEPARATOR);
// 应用目录
defined('APP_PATH') or define('APP_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR);
// 入口目录
defined('PUBLIC_PATH') or define('PUBLIC_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR);
// 工作目录
defined('WORK_PATH') or define('WORK_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR);