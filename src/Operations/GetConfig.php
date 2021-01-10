<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

class GetConfig extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/config?action=get_config',
            'method' => 'POST',
            'parameters' => []
        ];
    }

    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     * {"webserver": "nginx", "sites_path": "/www/wwwroot", "backup_path": "/www/backup", "status": 1, "mysql_root": "ffe8e3d339355fff", "email": "test@message.com", "php": [{"setup": true, "version": "54", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "55", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "56", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "70", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "71", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "72", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "73", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}, {"setup": true, "version": "74", "max": "50", "maxTime": "100", "pathinfo": true, "status": true}], "web": {"setup": true, "type": "nginx", "version": "1.19.0\n", "status": true}, "phpmyadmin": {"version": "5.0", "setup": true, "status": true, "phpversion": "74", "port": "888", "auth": false}, "tomcat": {"setup": false, "status": false, "version": false}, "mysql": {"setup": true, "version": "5.7.30\n", "status": false}, "redis": {"setup": false, "status": false}, "memcached": {"setup": false, "status": false}, "pure-ftpd": {"setup": true, "version": "1.0.49\n", "status": true}, "panel": {"port": "8888", "address": "192.168.191.129", "domain": "", "auto": "", "502": "", "limitip": "", "templates": [], "template": "default", "admin_path": "/"}, "systemdate": "2021-01-10 11:41:21 CST +0800", "show_workorder": false, "bind": false, "pd": "<span class=\"btpro-gray\" onclick=\"bt.soft.updata_pro()\" title=\"点击升级到专业版\">免费版</span>", "pro_end": -1, "ltd_end": -1, "siteCount": 176, "ftpCount": 162, "databaseCount": 175, "lan": {"H1": "首页", "H2": "面板设置", "I1": "关闭面板", "I2": "自动更新", "I3": "面板SSL", "C1": "设置", "C2": "API设置", "C3": "为了提高安全，请修改别名、默认端口、面板用户和密码!", "C4": "保存", "CT1": "别名", "CT2": "面板端口", "CT3": "域名", "CT4": "授权IP", "CT5": "默认建站目录", "CT6": "默认备份目录", "CT7": "服务器IP", "CT8": "服务器时间", "CT9": "面板用户", "CT10": "面板密码", "CT11": "绑定宝塔账号", "CT12": "面板模板", "CY1": "给面板取个别名", "CY2": "建议端口范围8888 - 65535", "CY3": "为面板绑定一个访问域名;注意：一旦绑定域名,只能通过域名访问面板!", "CY4": "设置访问授权IP,多个请使用逗号(,)隔开;注意：一旦设置授权IP,只有指定IP的电脑能访问面板!", "CY5": "新创建的站点,默认将保存到该目录的下级目录!", "CY6": "网站和数据库的备份目录!", "CY7": "默认为外网IP,若您在本地虚拟机测试,请填写虚拟机内网IP!", "CY8": "同步", "CY9": "修改", "CY10": "修改", "CY11": "绑定", "CY12": "确定"}, "distribution": "ubuntu", "wx": "当前未绑定微信号", "api": "checked", "ipv6": "", "session_timeout": 86400, "basic_auth": {"basic_user": "", "basic_pwd": "", "open": false, "is_install": true, "value": "已关闭"}, "debug": "", "show_recommend": true, "is_local": ""}
     */
    public function beforeResponse(APIResponse $response)
    {
        return $response;
    }
}
