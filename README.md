# BaoTa-SDK
## 这是一个什么SDK?和现有的宝塔PHPSDK(小杰版)有什么异同?
首先,这是一个为宝塔开发的PHP SDK.Ta基于Composer开发,所以可以兼容市面上的PHP框架(如ThinkPHP,Laravel)
这个项目旨在将宝塔的SDK API实现与其他部分进行分离(也就是减少加载的代码量,用一个API加载一个类),并创建一个高度可扩展的SDK
而且本SDK提供了多种接入方式,不管你喜欢那种,这里总能找到你喜欢的接入方式
## 未来计划
 - 完善文档
 - 支持单入口访问API(如```BaoTa::server("1.1.1.1","APIKey")->site->add([参数])```)
 - 增加对其他插件的支持
 - 增加HTTPClient,做到将Guzzle作为可选扩展,减少SDK对外依赖
## 其他
 - 欢迎其他有兴趣的开发者对本项目提出建议(请提Issue)和PR(Pull Request)
 - 作者: xieyi1393 Youngxj
