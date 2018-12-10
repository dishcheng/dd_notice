# 叮叮机器人sdk

For laravel >= 5.5

> composer require dishcheng/dd_notice

[官方设置说明](https://open-doc.dingtalk.com/docs/doc.htm?spm=a219a.7629140.0.0.karFPe&treeId=257&articleId=105735&docType=1)

sdk设置说明
> php artisan vendor:publish --tag=dd_notice

将webhook地址粘贴到config/dd_notice.php中的robot_webhook位置

文本推送方法：
```
use DishCheng\DdNotice\DdNotice;

DdNotice::send([
       'msgtype' => 'text',
       'text' => [
           'content' => '测试文本'
       ]
]);
```

更多方法参考官方设置说明