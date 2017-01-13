# yii2adminlte

Yii2adminlte ver. 2.0.1

<b>How to Install</b>

For yii2 basic

1. Donwload and extract files to your yii2 root project and let it merge the directories
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
1. Download and extract files to your yii2 root project, let it merge. Move assets and views directory to tier you want adminlte install
2. Add this code in array in the backend config file
	return[
	    ...........

		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	    	],
	    ...........
	]

3. Add $this->layout = 'login'; in the top of actionLogin function inside SiteController 
