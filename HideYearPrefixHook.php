<?php

if( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define( 'HideYearPrefixHook_VERSION', '1.0' );

class HideYearPrefixHook {
	# Hides the year prefix (e.g. "2011/") in wiki links.
	#
	# http://www.mediawiki.org/wiki/Manual:Hooks/LinkEnd
	static function hide_year_prefix( $skin, Title $target, array $options, &$text, array &$attribs, &$ret ) {
		$text = $attribs['title'] = preg_replace('/^\d{4}\//', '', $text);
		return true;
	}
}
