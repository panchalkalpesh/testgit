<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* Admin login details */
define('ADMIN_USERNAME',	'admin');
define('ADMIN_PASSWORD',	'e6e061838856bf47e1de730719fb2609');  // md5 encrypted password
define('ADMIN_EMAIL',		'noreply@pogo.tv');
define('ADMIN_NAME',		'No Reply');

/* Web service details */
define('SVC_PATH', 'http://api.cartoonnetworkasia.com/contest/1.0/contestsvc.php');
define('APIOUTPUT_MODE', 'xml');
define('COUNTRY', 'pogo');
/*define('ARCHIVES_CONTEST_CODE', 'pogo_paka_archieves_new');*/
define('ARCHIVES_CONTEST_CODE', 'pogo_paka_2013_02_archieves');

define('CONTENTS_CONTEST_CODE', 'pogo_paka_2013_02_contents');
define('USERS_CONTEST_CODE', 'pogo_paka_2013_01_users_new');
define('SCORES_CONTEST_CODE', 'pogo_paka_2013_01_scores');
define('RATE_GAME_CONTEST_CODE', 'pogo_paka_2013_01_rate_games');
define('PARTICIPANTS_CONTEST_CODE', 'pogo_paka_2013_01_participants');
define('RATE_VIDEO_CONTEST_CODE', 'pogo_paka_2013_01_rate_videos');
define('CONTEST_VIDEOS_CONTEST_CODE', 'pogo_paka_2013_01_contest_videos_new');
define('BLOGS_CONTEST_CODE', 'pogo_paka_2013_01_blogs_new');
define('BLOG_COMMENTS_CONTEST_CODE', 'paka_blog_comments');
define('POLL_QUESTIONS_CONTEST_CODE', 'paka_poll_questions');
define('POLL_ANSWERS_CONTEST_CODE', 'paka_poll_answers');


/* PAKA Siter Constants */
$paka_categories = array(
    1 => 'Amazing Artist',
    2 => 'Amazing Genius',
    3 => 'Amazing Dancer',
    4 => 'Amazing Entertainer',
    5 => 'Amazing Leader',
    6 => 'Amazing Musician',
    7 => 'Amazing Sportstar',
    8 => 'Amazing Singer',
    9 => 'Amazing Social Service',
    10 => 'Uncategorized',
);
define('DS', DIRECTORY_SEPARATOR);
define('PAKA_CATEGORIES', 		serialize($paka_categories));
define('ARCHIVE_PATH', 			'/var/www/html/pogo/upload/archives/');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'archives'.DS);
// define('USER_VIDEOS_PATH',		'/var/www/html/pogo/upload/users/');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'users'.DS);
define('USER_VIDEOS_PATH',		'/data/www/pogo/upload/users/');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'users'.DS);
define('CONTEST_VIDEOS_PATH',		'/var/www/html/pogo/upload/users/contest_videos');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'users'.DS);
define('CONTEST_VIDEO_LINK',		'upload/users/contest_videos');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'users'.DS);
define('CONTEST_IMAGES_PATH',		'/var/www/html/pogo/upload/users/contest_images');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'users'.DS);
define('BLOG_IMG_PATH',                 '/var/www/html/pogo/upload/blogs/images');//dirname(dirname(dirname(dirname(__FILE__)))).DS.'upload'.DS.'blogs'.DS.'images'.DS);
define('ARCHIVES_START_YEAR',           2001);
define('SITE_TITLE', 			'Pogo amazing kids awards');
define('HEADER_AD_BANNER', 		4388025);
define('RIGHT_AD_BANNER', 		4388030);
define('FOOTER_AD_BANNER', 		4388029);
define('AGE_LIMIT', 14);

#define('ADMIN_EMAIL', 'yash.shanghavi@webchutney.net');
#define('ADMIN_NAME', 'admin');

$paka_games = array(
	1 => array( 
		'id' => 1, 
		'title' => 'Colour Champion', 
                'title-class' => 'color-game', 
                'description' => 'Have fun with colors and paint the matching picture in a canvas with this interesting memory game.', 
		'swf' => 'colour-champion/Main.swf', 
		'loader' => 'pp-cc-mm-loader.swf',
		'thumb' => 'games/color-champion-thumb.png',
                'medium' => 'games/color-champion-medium.png',
                'height' => '700px'
	),
	2 => array( 
		'id' => 2, 
		'title' => 'Puzzle Punch', 
                'title-class' => 'puzzle-game',
                'description' => 'Beat the genius at his own game! Your aim is to answer all the questions correctly before the timer runs out.', 
		'swf' => 'puzzle-punch/puzzle_punch.swf', 
		'loader' => 'pp-cc-mm-loader.swf',
		'xml' => 'puzzle-punch/puzzle.xml',
		'thumb' => 'games/puzzle-punch-thumb.png',
                'medium' => 'games/puzzle-punch-medium.png',
                'height' => '700px'
	),
	3 => array( 
		'id' => 3, 
		'title' => 'Math Muqabla', 
                'title-class' => 'math-game',
                'description' => 'Time to test the mathematical genius in you. Are you up for a challenge?', 
		'swf' => 'math-muqabla/math_muqabla.swf', 
		'loader' => 'pp-cc-mm-loader.swf',
		'thumb' => 'games/puzzle-punch-thumb.png',
                'medium' => 'games/math-muqabla-medium.png',
                'height' => '700px' 
	),
	4 => array( 
		'id' => 4, 
		'title' => 'Wonder Wicket', 
                'title-class' => 'wonder-wicket',
                'description' => 'It\'s time for your ultimate speed test. Let\'s see if you are a bowling ace.', 
		'swf' => 'wonder-wicket/sixer-game.swf', 
                'loader' => 'wonder-wicket/Loader.swf',
		'thumb' => 'games/wonder-wicket-thumb.png',
                'medium' => 'games/wonder-wicket-medium.png',
                'height' => '700px' 
	),
	5 => array( 
		'id' => 5, 
		'title' => 'Dance Dhamaka', 
                'title-class' => 'dance-dhamaka',
                'description' => 'It\'s time to move to the groove. Let\'s see if you have what it takes to be a dancing sensation!', 
		'loader' => 'dance-dhamaka/DanceDhamaka.swf', 
                'swf' => 'dance-dhamaka/Loader.swf',
		'thumb' => 'games/dd-logo.png',
                'medium' => 'games/dd.png',
                'height' => '700px' 
	),
	6 => array( 
		'id' => 6, 
		'title' => 'Music Masti', 
                'title-class' => 'music-masti',
                'description' => 'Strike the right chords and play your way to the top with Music Masti', 
		'loader' => 'music-masti/music-masti.swf', 
                'swf' => 'music-masti/loader.swf',
		'thumb' => 'games/music-masti-thumb.png',
                'medium' => 'games/music-masti-medium.png',
                'height' => '700px' 
	),
	7 => array( 
		'id' => 7, 
		'title' => 'Beat Boxing', 
                'title-class' => 'beat-boxing',
                'description' => 'Get into the groove with the beat box and test your skill among the best!', 
		'loader' => 'beat-boxing/beat-boxing.swf', 
                'swf' => 'beat-boxing/loader.swf',
		'thumb' => 'games/beat-boxing-thumb.png',
                'medium' => 'games/beat-boxing-medium.png',
                'height' => '700px' 
	),
	8 => array( 
		'id' => 8, 
		'title' => 'Clean-Up City', 
                'title-class' => 'clean-up-city',
                'description' => 'Are you the city\'s green champion? Find out by playing this cool new game!', 
		'loader' => 'clean-up/CleanUpCity.swf',
                //'swf' => 'clean-up/CleanUpCity.swf',
		'thumb' => 'games/clean-up-thumb.png',
                'medium' => 'games/clean-up.png',
                'height' => '700px' 
	)
    );

define('PAKA_GAMES', serialize($paka_games));
/* End of file constants.php */
/* Location: ./application/config/constants.php */