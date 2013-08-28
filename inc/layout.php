<?php 
	
	class Layout {

		public $title = '';

		public $mainNav = array(
			'Home' => array(
				'url' => 'index'
			),
			'Documentation' => array(
				'url' => '',
                'children' => array(
                	'Services' => 'api-services',
                    'Authentication' => 'api-authentication',
                    'Technical' => 'https://ws.ricardo.ch/ricardoApi/documentation/technical/index',
                	'Errors Handling' => 'api-errors_handling',
                	'How to' => 'api-howto',
                    'FAQ' => 'api-faq'
                	)
			),
			'Forum' => array(
				'url' => 'forum/index'
			),
			//'News' => array(
			//	'url' => 'news'			),

			'Application' => array(
				'url' => 'request'
			)
		);



		/*function __construct() {
			date_default_timezone_set('UTC'); 
			$this->navTitle = basename($_SERVER['PHP_SELF'], ".php");
		}
		*/

		public $navLvl1 = '';
		public $navLvl2 = '';

		public $prependScript = '';
		public $appendScript = '';

		public $prependCSS = '';
		public $appendCSS = '';

		function __construct() {
			date_default_timezone_set('UTC'); 
			$this->navLvl1 = $this->navLvl2 = basename($_SERVER['PHP_SELF'], ".php");
		}

		// Layout listed Contructor
		public function start() {
			require('head.php');
			require('headerNav.php');
		}

		public function end() {
			require('footer.php');
		}

	} 

	$Layout = new Layout();
?>