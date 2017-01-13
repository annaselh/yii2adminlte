# yii2adminlte

Yii2adminlte ver. 2.0.1

<b>How to Install</b>

For yii2 basic

1. Donwload, extract and copy assets, views and vendor directories to your yii2 root project and let it merge the directories
2. Add this code in array in the config file
	return[
	    ...........

		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	    	],
	    ...........
	]
3. Add $this->layout = 'login'; in the top of actionLogin function inside SiteController 

For yii2 advanced
1. Download and extract and copy vendor directory to your yii2 root project, let it merge. 
2. Copy assets and views directory to tier you want to install adminlte
3. Add this code in array in the tier config file
	return[
	    ...........

		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	    	],
	    ...........
	]

4. Add $this->layout = 'login'; in the top of actionLogin function inside SiteController 
