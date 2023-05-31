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
 * Version:     1.0.0
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
 * @param array $stopwords
 *
 * @return array
 */
function stopwords( array $stopwords ) : array {

	$locale = strtolower( substr( get_locale(), 0, 2 ) );
	switch ( $locale ) {
		case 'nb':
		case 'nn':
		case 'no':
			return norwegian_stopwords();

		default:
			return $stopwords;
	}
}

/**
 * Norwegian stopwords
 *
 * @source http://snowball.tartarus.org/algorithms/norwegian/stop.txt
 * @return array
 */
function norwegian_stopwords() : array {
	return [
		'å',
		'alle',
		'at',
		'av',
		'både',
		'båe',
		'bare',
		'begge',
		'ble',
		'blei',
		'bli',
		'blir',
		'blitt',
		'da',
		'då',
		'de',
		'deg',
		'dei',
		'deim',
		'deira',
		'deires',
		'dem',
		'den',
		'denne',
		'der',
		'dere',
		'deres',
		'det',
		'dette',
		'di',
		'din',
		'disse',
		'ditt',
		'du',
		'dykk',
		'dykkar',
		'eg',
		'ein',
		'eit',
		'eitt',
		'eller',
		'elles',
		'en',
		'enn',
		'er',
		'et',
		'ett',
		'etter',
		'for',
		'før',
		'fordi',
		'fra',
		'ha',
		'hadde',
		'han',
		'hans',
		'har',
		'hennar',
		'henne',
		'hennes',
		'her',
		'hjå',
		'ho',
		'hoe',
		'honom',
		'hoss',
		'hossen',
		'hun',
		'hva',
		'hvem',
		'hver',
		'hvilke',
		'hvilken',
		'hvis',
		'hvor',
		'hvordan',
		'hvorfor',
		'i',
		'ikke',
		'ikkje',
		'ikkje',
		'ingen',
		'ingi',
		'inkje',
		'inn',
		'inni',
		'ja',
		'jeg',
		'kan',
		'kom',
		'korleis',
		'korso',
		'kun',
		'kunne',
		'kva',
		'kvar',
		'kvarhelst',
		'kven',
		'kvi',
		'kvifor',
		'man',
		'mange',
		'me',
		'med',
		'medan',
		'meg',
		'meget',
		'mellom',
		'men',
		'mi',
		'min',
		'mine',
		'mitt',
		'mot',
		'mykje',
		'nå',
		'når',
		'ned',
		'no',
		'noe',
		'noen',
		'noka',
		'noko',
		'nokon',
		'nokor',
		'nokre',
		'og',
		'også',
		'om',
		'opp',
		'oss',
		'over',
		'på',
		'så',
		'samme',
		'sånn',
		'seg',
		'selv',
		'si',
		'si',
		'sia',
		'sidan',
		'siden',
		'sin',
		'sine',
		'sitt',
		'sjøl',
		'skal',
		'skulle',
		'slik',
		'so',
		'som',
		'som',
		'somme',
		'somt',
		'til',
		'um',
		'upp',
		'ut',
		'uten',
		'være',
		'være',
		'vært',
		'var',
		'vår',
		'vart',
		'varte',
		'ved',
		'vere',
		'verte',
		'vi',
		'vil',
		'ville',
		'vore',
		'vors',
		'vort',
	];

}
