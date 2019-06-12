# tracing-plugin
opentracing jaeger

链路追踪插件，提供链路追踪功能，结合jaegerUI或者zipkin提供链路追踪视图

添加相应插件，其中RequestTracingPlugin为追踪请求的主要插件，DBTracingPlugin负责Redis，mysql的链路，HttpClientTracingPlugin负责saber，guzzle的链路，
MethodTracingPlugin负责相关方法的链路。MethodTracingPlugin性能损耗最高，酌情使用。
```
class Application extends GoApplication
{
    public function configure()
    {
        $this->addPlug(new RequestTracingPlugin());
        $this->addPlug(new DBTracingPlugin());
        $this->addPlug(new MethodTracingPlugin());
        $this->addPlug(new HttpClientTracingPlugin());
        parent::configure();
    }
}
```

另外通过saber实现的微服务调用也被支持。
![](https://box.kancloud.cn/1a88ea9ec582ac89244201d2b4e21478_1833x927.png)
