# yii2adminlte

Yii2adminlte ver. 2.0.2

## How to Install

### For yii2 basic

1. Donwload, extract and copy assets, views, web and vendor directories to your yii2 root project and let it merge the directories
2. Add this code in array in the config file
	```php
	return[
	    ...........

		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	    	],
	    ...........
	]
	```
3. Add `$this->layout = 'login';` in the top of actionLogin function inside SiteController

### For yii2 advanced

1. Download and extract and copy vendor directory to your yii2 root project, let it merge.
2. Copy assets, views and web directory to tier you want to install adminlte
3. Change namespace in AdminLteAsset.php and FontawesomeAsses.php to 'tier_directory'/assets e.g backend/assets
4. Add this code in array in the tier config file
	```php
	return[
	    ...........

		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	    	],
	    ...........
	]
	```
5. Add `$this->layout = 'login';` in the top of actionLogin function inside SiteController.
6. In the login layout views\layouts\login.php, change 
	``` use app\assets\AppAsset;``` to ```use backend\assets\AppAsset;```
	and
	``` use app\assets\AdminLteAsset;``` to ```use backend\assets\AdminLteAsset;```


## bugs Fixed

- Image photo and avatar path
