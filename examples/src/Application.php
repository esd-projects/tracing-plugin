<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/5/7
 * Time: 10:44
 */

namespace ESD\Plugins\Tracing\Examples;

use ESD\Go\GoApplication;
use ESD\Plugins\DBTracing\DBTracingPlugin;
use ESD\Plugins\HttpClientTracing\HttpClientTracingPlugin;
use ESD\Plugins\MethodTracing\MethodTracingPlugin;
use ESD\Plugins\RequestTracing\RequestTracingPlugin;

class Application
{
    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws \ESD\Core\Exception
     * @throws \ESD\Core\Plugins\Config\ConfigException
     * @throws \ReflectionException
     */
    public static function main()
    {
        $application = new GoApplication();
        $application->addPlug(new RequestTracingPlugin());
        $application->addPlug(new DBTracingPlugin());
        $application->addPlug(new MethodTracingPlugin());
        $application->addPlug(new HttpClientTracingPlugin());
        $application->run();
    }
}
