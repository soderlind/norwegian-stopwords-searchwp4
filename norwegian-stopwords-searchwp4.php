<?php
/**
 * Norwegian stopwords for SearchWP 4
 *
 * @package     Soderlind\Plugin\NorwegianStopwordsSearchWP4;
 * @author      Per Soderlind
 * @copyright   2021 Per Soderlind
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Norwegian stopwords for SearchWP 4
 * Plugin URI: https://github.com/soderlind/norwegian-stopwords-searchwp4
 * GitHub Plugin URI: https://github.com/soderlind/norwegian-stopwords-searchwp4
 * Description: Add Norwegian stopwords, bokmål and nynorsk,  to SearchWP 4
 * Version:     1.1.0
 * Author:      Per Soderlind
 * Author URI:  https://soderlind.no
 * Text Domain: norwegian-stopwords-searchwp4
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare( strict_types = 1 );
namespace Soderlind\Plugin\NorwegianStopwordsSearchWP4;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die();
}

add_filter( 'searchwp\stopwords', __NAMESPACE__ . '\stopwords' );

/**
 * If locale is Norwegian, add Norwegian stopwords
 *
 * @param array $stopwords Stopwords.
 *
 * @return array
 */
function stopwords( array $stopwords ) : array {
	$locale = strtolower( substr( get_locale(), 0, 2 ) );
	switch ( $locale ) {
		case 'nb':
		case 'nn':
			return explode(
				',',
				_x(
					'about,an,are,as,at,be,by,com,for,from,how,in,is,it,of,on,or,that,the,this,to,was,what,when,where,who,will,with,www',
					'Comma-separated list of search stopwords in your language'
				)
			);

		default:
			return $stopwords;
	}
}
