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
                	'ricardo API Services' => 'api-services',
                    'Technical Documentation' => 'https://ws.ricardo.ch/ricardoApi/documentation/technical/index',
                	'Security Documentation' => 'api-security',
                	'How to' => 'api-howto',
                    'Documentation 2.1' => '',
                	)
			),
			'Forum' => array(
				'url' => 'forum/index'
			),
			//'News' => array(
			//	'url' => 'news'			),

			'Request' => array(
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