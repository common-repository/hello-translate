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

	$translation = array(1 => array('goeiedag', 'africain'), 2 => array('mir� dita', 'albanais'), 3 => array('guten tag', 'allemand'), 4 => array('g�tertag', 'alsacien'), 5 => array('dana esteline', 'amharique'), 6 => array('bonjour', 'fran�ais'), 7 => array('salam', 'arabe'), 8 => array('barev', 'arm�nien'), 9 => array('ani sogomen', 'bambara'), 10 => array('egunon', 'basque'), 11 => array('inda wadou', 'b�ri-b�ri'), 12 => array('vitaju', 'bi�lorusse'), 13 => array('sunchhen', 'bengali'), 14 => array('idh-iyessbh�ne', 'berb�re'), 15 => array('mingalaba', 'birman'), 16 => array('ka tiana', 'bobo'), 17 => array('halo', 'bosniaque'), 18 => array('demat', 'breton'), 19 => array('zdrave', 'bulgare'), 20 => array('bon dia', 'catalan'), 21 => array('hafa adai', 'chamorro'), 22 => array('osiyo', 'cherokee'), 23 => array('ni hao', 'chinois'), 24 => array('annyong hashimnikka', 'cor�en'), 25 => array('de da', 'cornouaillais'), 26 => array('bonghjornu', 'corse'), 27 => array('bonjou', 'cr�ole antillais'), 28 => array('bonjou', 'cr�ole guadeloup�en'), 29 => array('bonjou', 'cr�ole guyanais'), 30 => array('bonjou', 'cr�ole haitien'), 31 => array('bonjou', 'cr�ole martiniquais'), 32 => array('bonzour', 'cr�ole mauricien'), 33 => array('bonzour', 'cr�ole r�unionnais'), 34 => array('bok', 'croate'), 35 => array('goddag', 'danois'), 36 => array('sal�m', 'dari'), 37 => array('mat ni kani', 'djerma'), 38 => array('anissoroma', 'djoula'), 39 => array('alapiale', 'dogon'), 40 => array('�kooni', 'ede-idaasha'), 41 => array('�kooni', 'ede-idaasha'), 42 => array('buenos d�as', 'espagnol'), 43 => array('bonan tagon', 'esp�ranto'), 44 => array('tere', 'estonien'), 45 => array('mbolo', 'fang'), 46 => array('hey', 'f�ro�en'), 47 => array('terve', 'finnois'), 48 => array('goede morgen', 'flamand'), 49 => array('g�tte m�rje', 'francique lorrain'), 50 => array('ha', 'frison'), 51 => array('bondi', 'frioulan'), 52 => array('hallo', 'ga�lique d\'�cosse'), 53 => array('dia duit', 'ga�lique d\'irlande'), 54 => array('ola', 'galicien'), 55 => array('bonjou', 'gallo'), 56 => array('hylo', 'gallois'), 57 => array('gamarjoba', 'g�orgien'), 58 => array('kalimera', 'grec'), 59 => array('mba\'�ichapa', 'guaran�'), 60 => array('ina kwana', 'haoussa'), 61 => array('aloha', 'hawa�en'), 62 => array('h�breu', 'shalom'), 63 => array('namaste', 'hindi'), 64 => array('nyob zoo', 'hmong'), 65 => array('j� napot k�v�nok', 'hongrois'), 66 => array('ndeewo', 'igbo'), 67 => array('selamat', 'indon�sien'), 68 => array('ullaakkut', 'inuktitut'), 69 => array('go�an dagin', 'islandais'), 70 => array('buongiorno', 'italien'), 71 => array('konnichi wa', 'japonais'), 72 => array('nliwal�', 'kabiy�'), 73 => array('azul', 'kabyle'), 74 => array('tcheripsou', 'khmer'), 75 => array('mwaramuts�', 'kinyarwanda'), 76 => array('rojbas', 'kurde'), 77 => array('sawubona', 'zoulou'), 78 => array('bonjorn', 'languedocien'), 79 => array('sabai di', 'lao'), 80 => array('salve', 'latin'), 81 => array('labdien', 'letton'), 82 => array('ci�o', 'ligure'), 83 => array('mbote', 'ligala'), 84 => array('laba diena', 'lituanien'), 85 => array('moien', 'luxembourgeois'), 86 => array('dobar den', 'mac�donien'), 87 => array('selamat', 'malais'), 88 => array('malayalam', 'namaskaram'), 89 => array('manao ahoana', 'malgache'), 90 => array('merhba', 'maltais'), 91 => array('kia ora', 'maori'), 92 => array('mari-mari', 'mapuche'), 93 => array('kia bo', 'minan'), 94 => array('sain baina uu', 'mongol'), 95 => array('n� yib�ogo', 'mor�'), 96 => array('goede morgen', 'n�erlandais'), 97 => array('namaste', 'nepali'), 98 => array('bu�jort', 'ni�ois'), 99 => array('god dag', 'norv�gien'), 100 => array('bon jorn', 'occitan'), 101 => array('as salaamo alaikum', 'ourdou'), 102 => array('assalomu alaykum', 'ouzbek'), 103 => array('stele mashe', 'pachto'), 104 => array('dorood', 'persan'), 105 => array('dzien dobry', 'polonais'), 106 => array('bom dia', 'portugais'), 107 => array('bonjorn', 'proven�al'), 108 => array('latcho div�s', 'romani'), 109 => array('buna ziua', 'roumain'), 110 => array('dobrii den', 'russe'), 111 => array('talofa', 'samoan'), 112 => array('bara mo', 'sango'), 113 => array('bona die', 'sarde'), 114 => array('dobar dan', 'serbe'), 115 => array('j�j�', 'shimaore'), 116 => array('mhoro', 'shona'), 117 => array('acho saiin', 'sindhi'), 118 => array('dobr� den', 'slovaque'), 119 => array('pozdravljeni', 'slov�ne'), 120 => array('dobar dan', 'sobota'), 121 => array('an mou diom', 'sonink�'), 122 => array('god dag', 'su�dois'), 123 => array('guete tog', 'suisse-allemand'), 124 => array('jambo', 'swahili'), 125 => array('kumusta', 'tagalog'), 126 => array('ia orana', 'tahitien'), 127 => array('wayi wan', 'tamatchek'), 128 => array('vanakam', 'tamoul'), 129 => array('dobr� den', 'tch�que'), 130 => array('namaskaram', 'telugu'), 131 => array('sawatdii kha', 'tha�'), 132 => array('tashi delek', 'tib�tain'), 133 => array('malo e lelei', 'tongan'), 134 => array('g�naydin', 'turc'), 135 => array('dz�chbur', 'udmurt'), 136 => array('pryvit', 'ukrainien'), 137 => array('ch�o', 'vietnamien'), 138 => array('malo te mauli', 'wallisien'), 139 => array('bondjo�', 'wallon'), 140 => array('nangadef', 'wolof'), 141 => array('e karo', 'yoruba'));

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
