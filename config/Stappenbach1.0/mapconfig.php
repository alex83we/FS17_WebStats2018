<?php
/**
 *
 * This file is part of the "FS17 Webstats" package.
 * Copyright (C) 2017-2018 John Hawk <john.hawk@gmx.net>
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
$mapVersion = 'NF Marsch 3.0';

if ( empty( $mapconfig ) || !is_array( $mapconfig ) ) {
	$mapconfig = array();
}

// Farmsilo und Ställe
$mapconfig = array_merge( $mapconfig, array( 'mCompanyFactory_Fabrik' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 1000, 'position' => '-895.441 17.6693 -293.293', 'showInProduction' => true, 'input' => array( 'Brennstoffe' => array( 'capacity' => 100000, 'factor' => 0.8, 'fillTypes' => 'woodChips', 'showInStorage' => false ), 'Holz' => array( 'capacity' => 50000, 'factor' => 1, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'woodChips' => array( 'capacity' => 100000, 'factor' => 0.9, 'fillType' => 'woodChips', 'showInStorage' => true ), 'boardwood' => array( 'capacity' => 8000, 'factor' => 1, 'fillType' => 'woodChips', 'palettArea' => '0 0 1 1', 'palettPlaces' => 999, 'showInStorage' => false ), ), ),
	'mCompanyFactory_Palettenfabrik' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 3000, 'position' => '-873.326 19.3424 -216.249', 'showInProduction' => true, 'input' => array( 'Bretterpaletten' => array( 'capacity' => 100000, 'factor' => 1, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'Leerpaletten' => array( 'capacity' => 32000, 'factor' => 1, 'fillType' => 'emptypallet', 'showInStorage' => true ), ), ),
	'mCompanyFactory_Water1' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 30000, 'position' => '-183.982 13.2104 -653.258', 'showInProduction' => true, 'input' => array( 'Brennstoffe' => array( 'capacity' => 100000, 'factor' => 0, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'Wasser' => array( 'capacity' => 300000, 'factor' => 1, 'fillType' => 'water', 'showInStorage' => true ), ), ),
	'mCompanyFactory_Water2' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 30000, 'position' => '-548.502 13.292 -679.421', 'showInProduction' => true, 'input' => array( 'Brennstoffe' => array( 'capacity' => 100000, 'factor' => 0, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'Wasser' => array( 'capacity' => 300000, 'factor' => 1, 'fillType' => 'water', 'showInStorage' => true ), ), ),
	'mCompanyFactory_Water3' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 30000, 'position' => '-579.528 12.8958 -370.447', 'showInProduction' => true, 'input' => array( 'Brennstoffe' => array( 'capacity' => 100000, 'factor' => 0, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'Wasser' => array( 'capacity' => 300000, 'factor' => 1, 'fillType' => 'water', 'showInStorage' => true ), ), ),
	'mCompanyFactory_Water4' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 30000, 'position' => '-102.374 22.1187 229.202', 'showInProduction' => true, 'input' => array( 'Brennstoffe' => array( 'capacity' => 100000, 'factor' => 0, 'fillTypes' => 'woodChips', 'showInStorage' => false ), ), 'output' => array( 'Wasser' => array( 'capacity' => 300000, 'factor' => 1, 'fillType' => 'water', 'showInStorage' => true ), ), ),
	'mCompanyFactory_compostMaster2k17' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 50000, 'position' => '-279.898 24.5449 -201.264', 'showInProduction' => true, 'input' => array( 'cm_inputWaste' => array( 'capacity' => 50000, 'factor' => 1, 'fillTypes' => 'compost potato sugarBeet chaff silage grass grass_windrow dryGrass_windrow woodChips manure straw', 'showInStorage' => false ), 'cm_inputFuel' => array( 'capacity' => 30000, 'factor' => 0.1, 'fillTypes' => 'fuel', 'showInStorage' => false ), ), 'output' => array( 'cm_outputCompost' => array( 'capacity' => 100000, 'factor' => 1, 'fillType' => 'compost', 'showInStorage' => true ), ), ),
	'mCompanyFactory_Rindermast_Hof1' => array( 'locationType' => 'FabrikScript', 'ProdPerHour' => 500, 'position' => '-280.032 13.1966 -708.626', 'showInProduction' => true, 'input' => array( 'Mutterrind' => array( 'capacity' => 50, 'factor' => 0, 'fillTypes' => 'beefMother', 'showInStorage' => false ), 'Wasser' => array( 'capacity' => 30000, 'factor' => 0.4, 'fillTypes' => 'water', 'showInStorage' => false ), 'Kartoffeln' => array( 'capacity' => 80000, 'factor' => 0.5, 'fillTypes' => 'potato', 'showInStorage' => false ), 'Stroh' => array( 'capacity' => 100000, 'factor' => 0.45, 'fillTypes' => 'straw', 'showInStorage' => false ), 'Futter' => array( 'capacity' => 100000, 'factor' => 0.9, 'fillTypes' => 'grass_windrow dryGrass_windrow silage forage forage_mixing', 'showInStorage' => false ), ), 'output' => array( 'Mist' => array( 'capacity' => 100000, 'factor' => 0.7, 'fillType' => 'manure', 'showInStorage' => true ), 'Guelle' => array( 'capacity' => 100000, 'factor' => 0.8, 'fillType' => 'liquidManure', 'showInStorage' => true ), 'Rinder' => array( 'capacity' => 30, 'factor' => 1, 'fillType' => 'beef', 'palettArea' => '0 0 1 1', 'palettPlaces' => 999, 'showInStorage' => false ), ), ),
	'mCompanyFactory_Rindermast_Hof3' => array(
		'locationType' =>
		'FabrikScript',
		'ProdPerHour' => 500,
		'position' => '-861.495 13.419 -885.338',
		'showInProduction' => true,
		'input' => array(
			'Mutterrind' => array(
				'capacity' => 50,
				'factor' => 0,
				'fillTypes' => 'beefMother',
				'showInStorage' => false ),
			'Wasser' => array(
				'capacity' => 30000,
				'factor' => 0.4,
				'fillTypes' => 'water',
				'showInStorage' => false ),
			'Kartoffeln' => array(
				'capacity' => 80000,
				'factor' => 0.5,
				'fillTypes' => 'potato',
				'showInStorage' => false ),
			'Stroh' => array(
				'capacity' => 100000,
				'factor' => 0.45,
				'fillTypes' => 'straw',
				'showInStorage' => false ),
			'Futter' => array(
				'capacity' => 100000,
				'factor' => 0.9,
				'fillTypes' => 'grass_windrow dryGrass_windrow silage forage forage_mixing',
				'showInStorage' => false ), ),
		'output' => array(
			'Mist' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillType' => 'manure',
				'showInStorage' => true ),
			'Guelle' => array(
				'capacity' => 100000,
				'factor' => 0.8,
				'fillType' => 'liquidManure',
				'showInStorage' => true ),
			'Rinder' => array(
				'capacity' => 30,
				'factor' => 1,
				'fillType' => 'beef',
				'palettArea' => '0 0 1 1',
				'palettPlaces' => 999,
				'showInStorage' => false
			),
		),
	),
	'mCompanyFactory_SchweinemastHof1' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 500,
		'position' => '',
		'showInProduction' => true,
		'input' => array(
			'Mutterschweine' => array(
				'capacity' => 40,
				'factor' => 0,
				'fillTypes' => 'pigMother',
				'showInStorage' => false
			),
			'Wasser' => array(
				'capacity' => 10000,
				'factor' => 0.3,
				'fillTypes' => 'water',
				'showInStorage' => false
			),
			'Kartoffeln' => array(
				'capacity' => 100000,
				'factor' => 0.8,
				'fillTypes' => 'potato',
				'showInStorage' => false
			),
			'Stroh' => array(
				'capacity' => 100000,
				'factor' => 0.5,
				'fillTypes' => 'straw',
				'showInStorage' => false
			), 'Futter' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillTypes' => 'chaff grass_windrow dryGrass_windrow silage forage forage_mixing',
				'showInStorage' => false
			),
		),
		'output' => array(
			'Mist' => array(
				'capacity' => 100000,
				'factor' => 0.6,
				'fillType' => 'manure',
				'showInStorage' => true
			),
			'Guelle' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillType' => 'liquidManure',
				'showInStorage' => true
			),
			'Schweine' => array(
				'capacity' => 25,
				'factor' => 1,
				'fillType' => 'pig',
				'palettArea' => '0 0 1 1',
				'palettPlaces' => 999,
				'showInStorage' => false
			),
		),
	),
	'mCompanyFactory_SchweinemastHof2' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 500,
		'position' => '',
		'showInProduction' => true,
		'input' => array(
			'Mutterschweine' => array(
				'capacity' => 40,
				'factor' => 0,
				'fillTypes' => 'pigMother',
				'showInStorage' => false
			),
			'Wasser' => array(
				'capacity' => 10000,
				'factor' => 0.3,
				'fillTypes' => 'water',
				'showInStorage' => false
			),
			'Kartoffeln' => array(
				'capacity' => 100000,
				'factor' => 0.8,
				'fillTypes' => 'potato',
				'showInStorage' => false
			),
			'Stroh' => array(
				'capacity' => 100000,
				'factor' => 0.5,
				'fillTypes' => 'straw',
				'showInStorage' => false
			),
			'Futter' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillTypes' => 'chaff grass_windrow dryGrass_windrow silage forage forage_mixing',
				'showInStorage' => false
			),
		),
		'output' => array(
			'Mist' => array(
				'capacity' => 100000,
				'factor' => 0.6,
				'fillType' => 'manure',
				'showInStorage' => true
			),
			'Guelle' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillType' => 'liquidManure',
				'showInStorage' => true
			),
			'Schweine' => array(
				'capacity' => 25,
				'factor' => 1,
				'fillType' => 'pig',
				'palettArea' => '0 0 1 1',
				'palettPlaces' => 999,
				'showInStorage' => false
			),
		),
	),
	'mCompanyFactory_SchweinemastHof3' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 500,
		'position' => '',
		'showInProduction' => true,
		'input' => array(
			'Mutterschweine' => array(
				'capacity' => 40,
				'factor' => 0,
				'fillTypes' => 'pigMother',
				'showInStorage' => false
			),
			'Wasser' => array(
				'capacity' => 10000,
				'factor' => 0.3,
				'fillTypes' => 'water',
				'showInStorage' => false
			),
			'Kartoffeln' => array(
				'capacity' => 100000,
				'factor' => 0.8,
				'fillTypes' => 'potato',
				'showInStorage' => false
			),
			'Stroh' => array(
				'capacity' => 100000,
				'factor' => 0.5,
				'fillTypes' => 'straw',
				'showInStorage' => false
			),
			'Futter' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillTypes' => 'chaff grass_windrow dryGrass_windrow silage forage forage_mixing',
				'showInStorage' => false
			),
		),
		'output' => array(
			'Mist' => array(
				'capacity' => 100000,
				'factor' => 0.6,
				'fillType' => 'manure',
				'showInStorage' => true
			),
			'Guelle' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillType' => 'liquidManure',
				'showInStorage' => true
			),
			'Schweine' => array(
				'capacity' => 25,
				'factor' => 1,
				'fillType' => 'pig',
				'palettArea' => '0 0 1 1',
				'palettPlaces' => 999,
				'showInStorage' => false
			),
		),
	),
	'mCompanyFactory_SchweinemastHof4' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 500,
		'position' => '',
		'showInProduction' => true,
		'input' => array(
			'Mutterschweine' => array(
				'capacity' => 40,
				'factor' => 0,
				'fillTypes' => 'pigMother',
				'showInStorage' => false
			),
			'Wasser' => array(
				'capacity' => 10000,
				'factor' => 0.3,
				'fillTypes' => 'water',
				'showInStorage' => false
			),
			'Kartoffeln' => array(
				'capacity' => 100000,
				'factor' => 0.8,
				'fillTypes' => 'potato',
				'showInStorage' => false
			),
			'Stroh' => array(
				'capacity' => 100000,
				'factor' => 0.5,
				'fillTypes' => 'straw',
				'showInStorage' => false
			),
			'Futter' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillTypes' => 'chaff grass_windrow dryGrass_windrow silage forage forage_mixing',
				'showInStorage' => false
			),
		),
		'output' => array(
			'Mist' => array(
				'capacity' => 100000,
				'factor' => 0.6,
				'fillType' => 'manure',
				'showInStorage' => true
			),
			'Guelle' => array(
				'capacity' => 100000,
				'factor' => 0.7,
				'fillType' => 'liquidManure',
				'showInStorage' => true
			),
			'Schweine' => array(
				'capacity' => 25,
				'factor' => 1,
				'fillType' => 'pig',
				'palettArea' => '0 0 1 1',
				'palettPlaces' => 999,
				'showInStorage' => false
			),
		),
	),
	'mCompanyFactory_slurryStorageAgrarbetrieb' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 2147483647,
		'position' => '-559.492 18.341 -277.684',
		'showInProduction' => true,
		'input' => array(),
		'output' => array(),
	),
	'mCompanyFactory_slurryStorageFeld1' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 2147483647,
		'position' => '-81.5034 13.034 -869.173',
		'showInProduction' => true,
		'input' => array(),
		'output' => array(),
	),
	'mCompanyFactory_slurryStorageAgrarbetrieb2' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 2147483647,
		'position' => '-147.872 23.1721 199.84',
		'showInProduction' => true,
		'input' => array(),
		'output' => array(),
	),
	'mCompanyFactory_slurryCow' => array(
		'locationType' => 'FabrikScript',
		'ProdPerHour' => 2147483647,
		'position' => '-404.507 26.8945 -4.60451',
		'showInProduction' => true,
		'input' => array(),
		'output' => array(),
	),
) );