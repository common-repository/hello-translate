<?php

/*
Plugin Name: Hello Translate
Plugin URI: http://www.maxence-blog.fr/2011/05/23/plugin-wordpress-hello-translate
Description: <strong>Hello Translate</strong> is an extension that displays the translation of "Hello" in over 150 languages in your administrator panel. This extension is based on the operation of <strong>Hello Dolly</strong>.
Author: Maxence Rose
Version: 1.0
Author URI: http://www.maxence-blog.fr/
*/

function hello_translate_get_translation() {

	$translation = array(1 => array('goeiedag', 'africain'), 2 => array('mirë dita', 'albanais'), 3 => array('guten tag', 'allemand'), 4 => array('gàtertag', 'alsacien'), 5 => array('dana esteline', 'amharique'), 6 => array('bonjour', 'français'), 7 => array('salam', 'arabe'), 8 => array('barev', 'arménien'), 9 => array('ani sogomen', 'bambara'), 10 => array('egunon', 'basque'), 11 => array('inda wadou', 'béri-béri'), 12 => array('vitaju', 'biélorusse'), 13 => array('sunchhen', 'bengali'), 14 => array('idh-iyessbhène', 'berbère'), 15 => array('mingalaba', 'birman'), 16 => array('ka tiana', 'bobo'), 17 => array('halo', 'bosniaque'), 18 => array('demat', 'breton'), 19 => array('zdrave', 'bulgare'), 20 => array('bon dia', 'catalan'), 21 => array('hafa adai', 'chamorro'), 22 => array('osiyo', 'cherokee'), 23 => array('ni hao', 'chinois'), 24 => array('annyong hashimnikka', 'coréen'), 25 => array('de da', 'cornouaillais'), 26 => array('bonghjornu', 'corse'), 27 => array('bonjou', 'créole antillais'), 28 => array('bonjou', 'créole guadeloupéen'), 29 => array('bonjou', 'créole guyanais'), 30 => array('bonjou', 'créole haitien'), 31 => array('bonjou', 'créole martiniquais'), 32 => array('bonzour', 'créole mauricien'), 33 => array('bonzour', 'créole réunionnais'), 34 => array('bok', 'croate'), 35 => array('goddag', 'danois'), 36 => array('salâm', 'dari'), 37 => array('mat ni kani', 'djerma'), 38 => array('anissoroma', 'djoula'), 39 => array('alapiale', 'dogon'), 40 => array('ékooni', 'ede-idaasha'), 41 => array('ékooni', 'ede-idaasha'), 42 => array('buenos días', 'espagnol'), 43 => array('bonan tagon', 'espéranto'), 44 => array('tere', 'estonien'), 45 => array('mbolo', 'fang'), 46 => array('hey', 'féroïen'), 47 => array('terve', 'finnois'), 48 => array('goede morgen', 'flamand'), 49 => array('gùtte mòrje', 'francique lorrain'), 50 => array('ha', 'frison'), 51 => array('bondi', 'frioulan'), 52 => array('hallo', 'gaélique d\'écosse'), 53 => array('dia duit', 'gaélique d\'irlande'), 54 => array('ola', 'galicien'), 55 => array('bonjou', 'gallo'), 56 => array('hylo', 'gallois'), 57 => array('gamarjoba', 'géorgien'), 58 => array('kalimera', 'grec'), 59 => array('mba\'éichapa', 'guaraní'), 60 => array('ina kwana', 'haoussa'), 61 => array('aloha', 'hawaïen'), 62 => array('hébreu', 'shalom'), 63 => array('namaste', 'hindi'), 64 => array('nyob zoo', 'hmong'), 65 => array('jó napot kívánok', 'hongrois'), 66 => array('ndeewo', 'igbo'), 67 => array('selamat', 'indonésien'), 68 => array('ullaakkut', 'inuktitut'), 69 => array('goðan dagin', 'islandais'), 70 => array('buongiorno', 'italien'), 71 => array('konnichi wa', 'japonais'), 72 => array('nliwalè', 'kabiyè'), 73 => array('azul', 'kabyle'), 74 => array('tcheripsou', 'khmer'), 75 => array('mwaramutsé', 'kinyarwanda'), 76 => array('rojbas', 'kurde'), 77 => array('sawubona', 'zoulou'), 78 => array('bonjorn', 'languedocien'), 79 => array('sabai di', 'lao'), 80 => array('salve', 'latin'), 81 => array('labdien', 'letton'), 82 => array('ciâo', 'ligure'), 83 => array('mbote', 'ligala'), 84 => array('laba diena', 'lituanien'), 85 => array('moien', 'luxembourgeois'), 86 => array('dobar den', 'macédonien'), 87 => array('selamat', 'malais'), 88 => array('malayalam', 'namaskaram'), 89 => array('manao ahoana', 'malgache'), 90 => array('merhba', 'maltais'), 91 => array('kia ora', 'maori'), 92 => array('mari-mari', 'mapuche'), 93 => array('kia bo', 'minan'), 94 => array('sain baina uu', 'mongol'), 95 => array('né yibéogo', 'moré'), 96 => array('goede morgen', 'néerlandais'), 97 => array('namaste', 'nepali'), 98 => array('buïjort', 'niçois'), 99 => array('god dag', 'norvégien'), 100 => array('bon jorn', 'occitan'), 101 => array('as salaamo alaikum', 'ourdou'), 102 => array('assalomu alaykum', 'ouzbek'), 103 => array('stele mashe', 'pachto'), 104 => array('dorood', 'persan'), 105 => array('dzien dobry', 'polonais'), 106 => array('bom dia', 'portugais'), 107 => array('bonjorn', 'provençal'), 108 => array('latcho divès', 'romani'), 109 => array('buna ziua', 'roumain'), 110 => array('dobrii den', 'russe'), 111 => array('talofa', 'samoan'), 112 => array('bara mo', 'sango'), 113 => array('bona die', 'sarde'), 114 => array('dobar dan', 'serbe'), 115 => array('jéjé', 'shimaore'), 116 => array('mhoro', 'shona'), 117 => array('acho saiin', 'sindhi'), 118 => array('dobrý den', 'slovaque'), 119 => array('pozdravljeni', 'slovène'), 120 => array('dobar dan', 'sobota'), 121 => array('an mou diom', 'soninké'), 122 => array('god dag', 'suédois'), 123 => array('guete tog', 'suisse-allemand'), 124 => array('jambo', 'swahili'), 125 => array('kumusta', 'tagalog'), 126 => array('ia orana', 'tahitien'), 127 => array('wayi wan', 'tamatchek'), 128 => array('vanakam', 'tamoul'), 129 => array('dobrý den', 'tchèque'), 130 => array('namaskaram', 'telugu'), 131 => array('sawatdii kha', 'thaï'), 132 => array('tashi delek', 'tibétain'), 133 => array('malo e lelei', 'tongan'), 134 => array('günaydin', 'turc'), 135 => array('dzéchbur', 'udmurt'), 136 => array('pryvit', 'ukrainien'), 137 => array('chào', 'vietnamien'), 138 => array('malo te mauli', 'wallisien'), 139 => array('bondjoû', 'wallon'), 140 => array('nangadef', 'wolof'), 141 => array('e karo', 'yoruba'));

	$nb_translation = count($translation);
	$translation_final = ($nb_translation-1);
	$random_translation = rand(0, $translation_final);
	$translation_select = "<strong>" . ucwords(htmlentities($translation[$random_translation][0])) . "</strong> <span style=\"font-size: 8px;\">(now that you know say <strong>Hello</strong> in " . ucwords(htmlentities($translation[$random_translation][1])) . ").</span>";

	return $translation_select;
}

// This just echoes the chosen line, we'll position it later
function hello_translate() {
	$chosen = hello_translate_get_translation();
	echo "<p id='htplugin'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_translate' );

function htplugin_row_meta($links, $file)
{

	static $this_plugin;

	if(!$this_plugin)
	{
		$this_plugin = plugin_basename(__FILE__);
	}

	if($file == $this_plugin)
	{
		$settings_link = '<a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&amp;plugin=bonjour-translate&amp;TB_iframe=true&amp;width=600&amp;height=550" class="thickbox" title="More about of Hello Translate French version 1.0">French Version</a>';
		array_unshift($links, $settings_link);
	}

	return $links;

}

add_filter('plugin_row_meta', 'htplugin_row_meta', 10, 2);

// We need some CSS to position the paragraph
function htplugin_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#htplugin {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'htplugin_css' );

?>
