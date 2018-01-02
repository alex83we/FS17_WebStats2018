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
 */
if (! defined ( 'IN_NFMWS' )) {
	exit ();
}

if (empty ( $lang ) || ! is_array ( $lang )) {
	$lang = array ();
}

$lang = array_merge ( $lang, array (
		'cm_inputWaste' => 'Abfall',
		'apfel' => 'Apfel',
		'Apfel' => 'Apfel',
		'Apfelpalette' => 'Apfel',
		'palette_apfel' => 'Apfel',
		'backwaren' => 'Backwaren',
		'Backwaren' => 'Backwaren',
		'palettebackwaren' => 'Backwaren',
		'beerf' => 'Bierfass',
		'bierpalettefass' => 'Bierfass',
		'beer' => 'Bierkasten',
		'bierpalettekasten' => 'Bierkasten',
		'birne' => 'Birne',
		'Birnenpalette' => 'Birne',
		'palette_birne' => 'Birne',
		'Birne' => 'Birne',
		'blumenkohl' => 'Blumenkohl',
		'Blumenkohl' => 'Blumenkohl',
		'palette_blumenkohl' => 'Blumenkohl',
		'Brennstoffe' => 'Brennstoffe',
		'boardPallet' => 'Bretter',
		'boardwood' => 'Bretter',
		'boardwood' => 'Bretter',
		'brot' => 'Brot',
		'brotpalette' => 'Brot',
		'palettebrod' => 'Brot',
		'palettebutter' => 'Butter',
		'Butterpalette' => 'Butter',
		'butter' => 'Butter',
		'chips' => 'Chips',
		'palettechips' => 'Chips',
		'palette_chips' => 'Chips',
		'RM_Output' => 'Diesel',
		'Diesel' => 'Diesel',
		'fuel' => 'Diesel',
		'cm_inputFuel' => 'Diesel',
		'bigBagContainerFertilizer' => 'Dünger',
		'FS_fertilizer' => 'Dünger',
		'fertilizer' => 'Dünger',
		'Erdfruechten' => 'Erdfrüchte',
		'meat' => 'Fleisch',
		'Fleisch' => 'Fleisch',
		'palette_fleisch' => 'Fleisch',
		'fisch' => 'Fisch',
		'Fisch' => 'Fisch',
		'Fischpalette' => 'Fisch',
		'palettefisch' => 'Fisch',
		'liquidFertilizer' => 'Flüssigdünger',
		'fertilizerTank' => 'Flüssigdünger',
		'Tip_RS1' => 'Gärreste oder Gülle',
		'Tip_RSbarley' => 'Gerste',
		'barley' => 'Gerste',
		'grain' => 'Getreide',
		'Getreide' => 'Getreide',
		'washedPotato' => 'gewasch. Kartoffeln',
		'palette_washedPotato' => 'gewasch. Kartoffeln',
		'grass_windrow' => 'Gras',
		'baleGrass240' => 'Gras',
		'Gras' => 'Gras',
		'grass' => 'Gras',
		'grass_windrow_dryGrass_windrow' => 'Gras oder Heu',
		'digestate' => 'Gärreste',
		'liquidManure' => 'Gülle',
		'woodChips' => 'Hackschnitzel',
		'Hackschnitzel' => 'Hackschnitzel',
		'chaff' => 'Häckselgut',
		'Holz' => 'Holzstämme',
		'oat' => 'Hafer',
		'dryGrass_windrow' => 'Heu',
		'baleHay240' => 'Heu',
		'roundbaleHay_w112_d130' => 'Heu',
		'hops' => 'Hopfen',
		'yogurt' => 'Joghurt',
		'paletteyogurt' => 'Joghurt',
		'palette_karton' => 'Karton',
		'karton' => 'Karton',
		'potato' => 'Kartoffeln',
		'Kartoffeln' => 'Kartoffeln',
		'potato_sugarBeet_pigFood' => 'Kartoffeln oder Zuckerrüben',
		'kartoffelsack' => 'Kartoffelsack',
		'palettekartoffelsack' => 'Kartoffelsack',
		'palette_kartoffeln' => 'Kartoffelsack',
		'kirsche' => 'Kirsche',
		'Kirschen' => 'Kirsche',
		'Kirschpalette' => 'Kirsche',
		'palette_kirsche' => 'Kirsche',
		'compost' => 'Kompost',
		'RS_compost1' => 'Kompost',
		'cm_outputCompost' => 'Kompost',
		'RS_compost' => 'Kompost',
		'Compost' => 'Kompost',
		'compost' => 'Kompost',
		'korn' => 'Korn',
		'Korn' => 'Korn',
		'palettekorn' => 'Korn',
		'palette_korn' => 'Korn',
		'krabben' => 'Krabben',
		'Krabben' => 'Krabben',
		'Krabbenpalette' => 'Krabben',
		'palettekrabben' => 'Krabben',
		'kuchen' => 'Kuchen',
		'Kuchen' => 'Kuchen',
		'palettekuchen' => 'Kuchen',
		'maize' => 'Körnermais',
		'maize_pigFood' => 'Körnermais',
		'cow' => 'Kühe',
		'emptypallet' => 'Leere Paletten',
		'palletPallet' => 'Leere Paletten',
		'mehlpalette' => 'Mehl',
		'mehl' => 'Mehl',
		'palettemehlgerste1' => 'Mehl',
		'palettemehlroggen1' => 'Mehl',
		'palettemehlweizen1' => 'Mehl',
		'Tip_mehl' => 'Mehl',
		'Tip_RSmilk' => 'Milch',
		'milk' => 'Milch',
		'forage' => 'Mischfutter',
		'Mischfutter' => 'Mischfutter',
		'powerFood' => 'Mischfutter',
		'manure' => 'Mist',
		'geld' => 'Geld',
		'Geldkassette' => 'Geld',
		'geldkassette' => 'Geld',
		'geldkassetteg' => 'Geld',
		'Obstpalette' => 'Obst',
		'obstler' => 'Obstler',
		'Obstler' => 'Obstler',
		'paletteobstler' => 'Obstler',
		'palette_obstler' => 'Obstler',
		'palettepapier' => 'Papier',
		'papier' => 'Papier',
		'palletPoplar' => 'Pappelsetzlinge',
		'pellets' => 'Pellets',
		'palette_pellets' => 'Pellets',
		'Pelletspalette' => 'Pellets',
		'pflaume' => 'Pflaume',
		'Pflaumen' => 'Pflaume',
		'Pflaumenpalette' => 'Pflaume',
		'palette_pflaume' => 'Pflaume',
		'Raps Sonnenblume Soja' => 'Protein',
		'pommes' => 'Pommes',
		'palettepommes' => 'Pommes',
		'palette_pommes' => 'Pommes',
		'palettequark' => 'Quark',
		'Quarkpalette' => 'Quark',
		'quark' => 'Quark',
		'rape' => 'Raps',
		'Tip_RS' => 'Raps oder Sonnenblumen',
		'rape_sunflower_soybean_pigFood' => 'Raps, Sonnenblumen oder Sojabohnen',
		'rye' => 'Roggen',
		'Tip_RSrye' => 'Roggen',
		'rotkohl' => 'Rotkohl',
		'Rotkohl' => 'Rotkohl',
		'Rotkohlpalette' => 'Rotkohl',
		'palette_rotkohl' => 'Rotkohl',
		'FS_Seeds' => 'Saatgut',
		'seeds' => 'Saatgut',
		'bigBagContainerSeeds' => 'Saatgut',
		'palettesahne' => 'Sahne',
		'Sahnepalette' => 'Sahne',
		'sahne' => 'Sahne',
		'salat' => 'Salat',
		'Salat' => 'Salat',
		'Salatpalette' => 'Salat',
		'palette_salat' => 'Salat',
		'sheep' => 'Schafe',
		'pig' => 'Schweine',
		'bigBagContainerPigFood' => 'Schweinefutter',
		'pigFood' => 'Schweinefutter',
		'Schweinefutter' => 'Schweinefutter',
		'treeSaplings' => 'Setzlinge',
		'treeSaplingPallet' => 'Setzlinge',
		'Silage' => 'Silage',
		'silage' => 'Silage',
		'silage_dryGrass_windrow' => 'Silage oder Heu',
		'soybean' => 'Sojabohnen',
		'sunflower' => 'Sonnenblumen',
		'palettespeiseoel' => 'Speiseöl',
		'palette_oel' => 'Speiseöl',
		'oel' => 'Speiseöl',
		'stoffrolleMK' => 'Stoffrolle',
		'palette_stoff' => 'Stoffrolle',
		'straw' => 'Stroh',
		'Stroh' => 'Stroh',
		'baleStraw240' => 'Stroh',
		'Stroh_Hackschnitzel' => 'Stroh oder Hackschnitzel',
		'tomaten' => 'Tomate',
		'Tomaten' => 'Tomate',
		'Tomatenpalette' => 'Tomate',
		'palette_tomaten' => 'Tomate',
		'Tier_Anlieferung' => 'Vieh',
		'palettemilch' => 'Vollmilch',
		'Milchpalette' => 'Vollmilch',
		'milch' => 'Vollmilch',
		'RM_Output2' => 'Wasser',
		'Tip_RSwater' => 'Wasser',
		'Wasser' => 'Wasser',
		'water' => 'Wasser',
		'wheat' => 'Weizen',
		'Tip_RSwheat' => 'Weizen',
		'wheat_barley_pigFood' => 'Weizen oder Gerste',
		'wool' => 'Wolle',
		'Wolle' => 'Wolle',
		'woolPallet' => 'Wolle',
		'sausage' => 'Wurst',
		'palette_wurst' => 'Wurst',
		'Wurst' => 'Wurst',
		'zucker' => 'Zucker',
		'palettezucker' => 'Zucker',
		'Zuckerpalette' => 'Zucker',
		'zuckerpalette' => 'Zucker',
		'sugarBeet' => 'Zuckerrüben',
		'Tip_RSzucker' => 'Zuckerrüben',
		'Bale150Straw' => 'Rundballen' 
) );
$lang = array_merge ( $lang, array (
		'TipTrigger_BAHNHOF' => 'Bahnhof',
		'TipTrigger_HAFEN' => 'Hafen',
		'TipTrigger_DEPOT' => 'Depot',
		'TipTrigger_RAIFFEISEN' => 'Raiffeisen',
		'TipTrigger_GETREIDEHANDEL' => 'Getreidehandel',
		'TipTrigger_SUPERMARKT' => 'Edeka',
		'TipTrigger_SUPERMARKT1' => 'Lidl',
		'TipTrigger_SUPERMARKT2' => 'Aldi',
		'TipTrigger_STADION' => 'Stadion',
		'TipTrigger_WOLLEVERKAUF' => 'Palettenverkauf',
		'TipTrigger_WOLLEVERKAUF1' => 'Palettenverkauf (Hafen)',
		'TipTrigger_SAWMILL' => 'Sägewerk',
		'TipTrigger_WASSERKAUF' => 'Wasserverkauf',
		'TipTrigger_HEIZWERK' => 'Heizwerk',
		'TipTrigger_WINDROW_SALE' => 'Stroh- und Grasverkauf',
		'TipTrigger_BIOGAS' => 'BGA Nord',
		'TipTrigger_TANKE' => 'Araltankstelle 1',
		'TipTrigger_TANKE2' => 'Araltankstelle 2',
		'TipTrigger_BANK' => 'VR Bank',
		'TipTrigger_GETREIDEAG' => 'Getreide AG' 
) );
$lang = array_merge ( $lang, array (
		'FabrikScript_Backerei_Brot' => 'Bäckerei (Brot)',
		'FabrikScript_Backerei_Backwaren' => 'Bäckerei (Backwaren)',
		'FabrikScript_Backerei_Kuchen' => 'Bäckerei (Kuchen)',
		'FabrikScript_Fischerei' => 'Fischerei',
		'outOfMap' => 'Außerhalb der Karte',
		'Bga' => 'BGA Süd',
		'BunkerSilo_silo001' => 'BGA Süd Fahrsilo 1',
		'BunkerSilo_silo002' => 'BGA Süd Fahrsilo 2',
		'BunkerSilo_silo003' => 'BGA Süd Fahrsilo 3',
		'BunkerSilo_silo004' => 'BGA Süd Fahrsilo 4',
		'BunkerSilo_silo005' => 'BGA Süd Fahrsilo 5',
		'BunkerSilo_cowSilo' => 'Kuhstall Fahrsilo',
		'BunkerSilo_Silo1' => 'BGA Nord Fahrsilo 1',
		'BunkerSilo_Silo2' => 'BGA Nord Fahrsilo 2',
		'FabrikScript_Oel_Raffinerie_Raps' => 'Biodiesel- und Rapsraffinerie',
		'FabrikScript_BrauereiFass' => 'Brauerei Fass',
		'FabrikScript_BrauereiKasten' => 'Brauerei Kasten',
		'FabrikScript_Brennerei_Korn' => 'Brennerei (Korn)',
		'FabrikScript_Brennerei_Obstler' => 'Brennerei (Obstler)',
		'FabrikScript_compostMaster2k17' => 'compostMaster 2k17',
		'FabrikScript_Fertilizer' => 'Düngerlager',
		'FabrikScript_Duenger_Prod' => 'Düngerproduktion',
		'FabrikScript_KraftFutterHerstellung' => 'Futterfabrik',
		'FabrikScript_Blumenkohlzucht' => 'Gewächshaus (Blumenkohl)',
		'FabrikScript_Rotkohlzucht' => 'Gewächshaus (Rotkohl)',
		'FabrikScript_Salatzucht' => 'Gewächshaus (Salat)',
		'FabrikScript_Tomatenzucht' => 'Gewächshaus (Tomate)',
		'FabrikScript_HofladenApfel' => 'Hofladen (Apfel)',
		'FabrikScript_HofladenBirne' => 'Hofladen (Birne)',
		'FabrikScript_HofladenBlumenkohl' => 'Hofladen (Blumenkohl)',
		'FabrikScript_Hofladenkirsche' => 'Hofladen (Kirsche)',
		'FabrikScript_HofladenPflaume' => 'Hofladen (Pflaume)',
		'FabrikScript_HofladenRotkohl' => 'Hofladen (Rotkohl)',
		'FabrikScript_Hofladensalat' => 'Hofladen (Salat)',
		'FabrikScript_Hofladentomaten' => 'Hofladen (Tomate)',
		'Storage_storage1' => 'Hofsilo',
		'fuelStation_Hoftankstelle' => 'Hoftankstelle',
		'FabrikScript_Holzhacker' => 'Holzhacker',
		'FabrikScript_Kartoffelfabrik' => 'Kartoffelfabrik',
		'FabrikScript_potatoWasher' => 'Kartoffelwaschanlage 1',
		'FabrikScript_potatoWasher2' => 'Kartoffelwaschanlage 2',
		'FabrikScript_Klaerwerk' => 'Klärwerk',
		'Animals_cow' => 'Kuhstall',
		'FabrikScript_kartoffellager' => 'Lagerhalle (Hof)',
		'FabrikScript_kartoffellager2' => 'Lagerhalle (Waschanlage)',
		'onMap' => 'Landschaft',
		'FabrikScript_GersteMehlfabrik' => 'Mehlfabrik (Gerste)',
		'FabrikScript_RoggenMehlfabrik' => 'Mehlfabrik (Roggen)',
		'FabrikScript_WeizenMehlfabrik' => 'Mehlfabrik (Weizen)',
		'FabrikScript_Molkerei' => 'Molkerei',
		'FabrikScript_geldboxen' => 'Münzzähler',
		'FabrikScript_obst_apfel' => 'Obstfarm (Apfel)',
		'FabrikScript_obst_birne' => 'Obstfarm (Birne)',
		'FabrikScript_obst_kirsche' => 'Obstfarm (Kirsche)',
		'FabrikScript_obst_pflaume' => 'Obstfarm (Pflaume)',
		'FabrikScript_Lager_Apfel' => 'Palettenlager',
		'FabrikScript_Lager_Bierfass' => 'Palettenlager',
		'FabrikScript_Lager_Bierkasten' => 'Palettenlager',
		'FabrikScript_Lager_Birne' => 'Palettenlager',
		'FabrikScript_Lager_Blumenkohl' => 'Palettenlager',
		'FabrikScript_Lager_Brot' => 'Palettenlager',
		'FabrikScript_Lager_Butter' => 'Palettenlager',
		'FabrikScript_Lager_Chips' => 'Palettenlager',
		'FabrikScript_Lager_Fleisch' => 'Palettenlager',
		'FabrikScript_Lager_kartoffelsack' => 'Palettenlager',
		'FabrikScript_Lager_Karton' => 'Palettenlager',
		'FabrikScript_Lager_Kirsche' => 'Palettenlager',
		'FabrikScript_Lager_Korn' => 'Palettenlager',
		'FabrikScript_Lager_Leerpaletten' => 'Palettenlager',
		'FabrikScript_Lager_Mehl' => 'Palettenlager',
		'FabrikScript_Lager_Milch' => 'Palettenlager',
		'FabrikScript_Lager_obstler' => 'Palettenlager',
		'FabrikScript_Lager_oel' => 'Palettenlager',
		'FabrikScript_Lager_Papier' => 'Palettenlager',
		'FabrikScript_Lager_Pflaume' => 'Palettenlager',
		'FabrikScript_Lager_pommes' => 'Palettenlager',
		'FabrikScript_Lager_Quark' => 'Palettenlager',
		'FabrikScript_Lager_Rotkohl' => 'Palettenlager',
		'FabrikScript_Lager_Sahne' => 'Palettenlager',
		'FabrikScript_Lager_Salat' => 'Palettenlager',
		'FabrikScript_Lager_Tomaten' => 'Palettenlager',
		'FabrikScript_Lager_washedPotato' => 'Palettenlager',
		'FabrikScript_Lager_Wurst' => 'Palettenlager',
		'FabrikScript_Lager_Yogurt' => 'Palettenlager',
		'FabrikScript_Lager_Zucker' => 'Palettenlager',
		'FabrikScript_Paletten_Fabrik' => 'Palettenwerk',
		'FabrikScript_Lager_Pellets' => 'Palettenlager',
		'FabrikScript_Pellets_Fabrik' => 'Pelletfabrik',
		'FabrikScript_Lager_Backwaren' => 'Palettenlager',
		'FabrikScript_Lager_Kuchen' => 'Palettenlager',
		'FabrikScript_Lager_Fisch' => 'Palettenlager',
		'FabrikScript_Lager_Krabben' => 'Palettenlager',
		'FabrikScript_Saatgut' => 'Saatgutlager',
		'FabrikScript_Saat_Prod' => 'Saatgutproduktion',
		'FabrikScript_Fabrik' => 'Sägewerk',
		'Animals_sheep' => 'Schafweide',
		'FabrikScript_Schlachterei' => 'Schlachter',
		'FabrikScript_Schweinefutter' => 'Schweinefutterlager',
		'FabrikScript_Schweinefutterstation' => 'Schweinefutterstation',
		'Animals_pig' => 'Schweinestall',
		'fuelStation_Tankstelle_BGA_Nord' => 'Tankstelle BGA Nord',
		'fuelStation_Tankstelle_BGA_Sued' => 'Tankstelle BGA süd',
		'fuelStation_Tankstelle_Raffinerie' => 'Tankstelle Raffinerie',
		'FabrikScript_Weberei' => 'Weberei',
		'FabrikScript_Zellstoff_Fabrik' => 'Zellstofffabrik',
		'FabrikScript_Zuckerfabrik' => 'Zuckerfabrik',
		'FabrikScript_zuckerrueben' => 'Zuckerrübenlager (Hof)',
		'FabrikScript_Diesel_Raffinerie' => 'Diesel Raffinerie',
		'FabrikScript_Speiseoel_Fabrik' => 'Speiseöl Fabrik',
		'FabrikScript_compostlager2' => 'Kompostlager (Gewächshäuser)',
		'FabrikScript_compostlager' => 'Kompostlager (Obstfarm)' 
) );
