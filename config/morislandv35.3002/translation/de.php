<?php
/**
 *
 * This file is part of the "FS17 Webstats" package.
 * Copyright (C) 2017  John Hawk <john.hawk@gmx.net>
 *
 * "FS17 Webstats" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "FS17 Webstats" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Mapconfig The Moris Land by alex83we  
 * 
 */
if (! defined ( 'IN_NFMWS' )) {
    exit ();
}

if (empty ( $lang ) || ! is_array ( $lang )) {
    $lang = array ();
}

$lang = array_merge ( $lang, array(
        'Bga' => 'BGA',
        'Silage' => 'Silage',
        'silage' => 'Silage',
        'silage_dryGrass_windrow' => 'Silage oder Heu',
        'dryGrass_windrow' => 'Heu',
        'grass_windrow' => 'Gras',
        'digestate' => 'Gärreste',
		'bunkerFillLevel' => 'Silage, Heu, Gras',
        'onMap' => 'Landschaft',
        'Animals_cow' => 'Kuhstall',
        'Animals_sheep' => 'Schafweide',
        'Animals_pig' => 'Schweinestall',
        'fuel' => 'Diesel',	
        'chaff' => 'Häckselgut',
        'fertilizer' => 'Dünger',		
        'seeds' => 'Saatgut',
        'wheat' => 'Weizen',
        'woolPallet' => 'Wolle',
        'sand' => 'Sand',
        'lime' => 'Kalk',
        'Kalkbruch' => 'Kalkbruch',
        'kalkbruch' => 'Kalkbruch',
        'emptypallet' => 'Leere Paletten',
        'water' => 'Wasser',
		'beer' => 'Bier',
		'hops' => 'Hopfen',
        'barley' => 'Gerste',
		'Gerste' => 'Gerste',
		'barley_beer' => 'Gerste, Weizen',
		'flour' => 'Mehl',
		'getreide' => 'Getreide',
        'maize' => 'Körnermais',
        'maize_pigFood' => 'Körnermais',
        'cow' => 'Kühe',	
        'oat' => 'Hafer',
        'rape' => 'Raps',	
        'rape_sunflower_soybean_pigFood' => 'Raps, Sonnenblumen oder Sojabohnen',
        'rye' => 'Roggen',
        'soybean' => 'Sojabohnen',
		'spelt' => 'Dinkel',
		'triticale' => 'Triticale',
		'Muehle' => 'Mühle',
        'meat' => 'Fleisch',
        'Fleisch' => 'Fleisch',	
        'Wurst' => 'Wurst',	
        'sausage' => 'Wurst',
        'woodChips' => 'Hackschnitzel',
        'maize_steamedPotato_oat_pigFood' => 'gedämpfte Kartoffeln, Hafer, Körnermais',
        'pig' => 'Schweine',
        'wheat_barley_pigFood' => 'Weizen und Gerste',
		'straw' => 'Stroh',
        'potato_sugarBeet_pigFood' => 'Kartoffeln und Zuckerrüben',
) );

// TipTrigger
$lang = array_merge ( $lang, array(
		
) );
$lang = array_merge ( $lang, array(
		'BGA_Tankstelle' => 'BGA Tankstelle',
		'Gras_Trockner' => 'Gras Trockner',
		'Kalkbruch' => 'Kalkbruch',
		'Kalk_Master5000' => 'Moris Kalkwerk',
		'BRAUEREI' => 'Brauerei',
		'Muehle' => 'Mühle',
		'Holzhacker' => 'Holzhacker',
		'Saegewerk' => 'Sägewerk',
		'Tischlerei' => 'Tischlerei',
		'Verwurster' => 'Verwurster',
		'Wald_Tankstelle' => 'Wald Tankstelle',
) );