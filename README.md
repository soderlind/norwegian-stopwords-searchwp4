# Norwegian Stopwords for SearchWP 4

Norwegian, bokmål and nynorsk, stopwords are missing in SearchWP 4. This plugin will add them if your locale is `no_NB` or `no_NN`

```php
add_filter( 'searchwp\stopwords', __NAMESPACE__ . '\stopwords' );

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
```

## Installation

You know the drill,

- [Download](https://github.com/soderlind/norwegian-stopwords-searchwp4/archive/refs/heads/main.zip)
- Add to the plugins folder
- Activate.

## Credits

The stopwords are from the WordPress translation, [bokmål](https://translate.wordpress.org/projects/wp/dev/nb/default/?filters%5Bstatus%5D=either&filters%5Boriginal_id%5D=70980&filters%5Btranslation_id%5D=2917948) and [nynorsk](https://translate.wordpress.org/projects/wp/dev/nn/default/?filters%5Bstatus%5D=either&filters%5Boriginal_id%5D=70980&filters%5Btranslation_id%5D=2940685).

## Copyright and License

Norwegian Stopwords for SearchWP 4 is copyright 2023 Per Søderlind

Norwegian Stopwords for SearchWP 4 is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

Norwegian Stopwords for SearchWP 4 is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with the Extension. If not, see http://www.gnu.org/licenses/.
