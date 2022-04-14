# laravel-clue

## 使用
1.执行 composer require chiefgroup/laravel-clue 拉取composer包到项目

2.在 config/app.php 注册 ServiceProvider 和 Facade (Laravel 5.5 + 无需手动注册)

3.执行 php artisan vendor:publish 生成配置文件
php artisan vendor:publish --provider="ChiefGroup\LaravelClue\ServiceProvider"

4.修改应用根目录下的 config/qf_clue.php 中对应的参数即可。