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
 * Mapconfig The Moris Land by alex83we 
 * 
 */
$mapVersion = 'The Moris Land v3';

if (empty($mapconfig) || ! is_array($mapconfig)) {
    $mapconfig = array();
}

// Farmsilo, Ställe, BGA und TipTrigger
$mapconfig = array_merge ( $mapconfig, array ( 
		'Bga' => array (
				'locationType' => 'bga',
				'ProdPerHour' => 1000,
				'position' => '1978.225 0 -1849.737',
				'showInProduction' => true,
				'input' => array (
						'silage' => array (
								'capacity' => 500000,
								'factor' => 360,
								'fillTypes' => 'bunkerFillLevel',
								'showInStorage' => false 
						),						
						'dryGrass_windrow' => array (
								'capacity' => '&infin;',
								'factor' => 360,
								'fillTypes' => 'bunkerFillLevel',
								'showInStorage' => false 
						),
						'grass_windrow' => array (
								'capacity' => '&infin;',
								'factor' => 360,
								'fillTypes' => 'bunkerFillLevel',
								'showInStorage' => false 
						)
				),
				'output' => array (
						'digestate' => array (
								'capacity' => 5000000,
								'factor' => 87,
								'fillTypes' => 'digestateSiloFillLevel',
								'showInStorage' => true 
						) 
				) 
		),	
		'BunkerSilo_silo001' => array (
				'locationType' => 'bunker',
				'position' => '1993.599 0 -1890.853' 
		),
		'BunkerSilo_silo001_hof' => array (
				'locationType' => 'bunker',
				'position' => '815.429 0 -917.323' 
		),
		'TipTrigger_guelle' => array (
                'locationType' => 'TipTrigger',
                'position' => '1470.844 0 -361.77'
        ),
		'TipTrigger_GRAIN_ELEVATOR' => array (
                'locationType' => 'TipTrigger',
                'position' => '1500.022 0 -424.662'
        ),
		'TipTrigger_TRAIN_STATION_1_TRAILER_IN' => array (
                'locationType' => 'TipTrigger',
                'position' => '1396.286 0 -48.979'
        ),	
		'TipTrigger_TRAIN_STATION_1_TRAIN_IN' => array (
                'locationType' => 'TipTrigger',
                'position' => '1423.999 0 -50.432'
        ),	
		'TipTrigger_SAWMILL' => array (
                'locationType' => 'TipTrigger',
                'position' => '-53.041 0 1783.009'
        ),	
		'TipTrigger_HEIZWERK' => array (
                'locationType' => 'TipTrigger',
                'position' => '-19.164 0 1711.55'
        ),	
		'TipTrigger_ROHSTOFF_HANDEL' => array (
                'locationType' => 'TipTrigger',
                'position' => '1845.45 0 -1887.333'
        ),		
		'TipTrigger_DINER' => array (
                'locationType' => 'TipTrigger',
                'position' => '215.057 0 1638.648'
        ),		
		'TipTrigger_HEIZWERK' => array (
                'locationType' => 'TipTrigger',
                'position' => '-19.482 0 1712.217'
        ),			
		'TipTrigger_MUELLE_TRAIN' => array (
                'locationType' => 'TipTrigger',
                'position' => '-1580.133 0 1862.601'
        ),			
		'TipTrigger_zucker_TRAIN' => array (
                'locationType' => 'TipTrigger',
                'position' => '-1713.348 0 1454.531'
        ),
        'TipTrigger_SUPERMARKT' => array (
            'locationType' => 'TipTrigger',
            'position' => '-740.947 0 1025.324' 
        ),
        'TipTrigger_TANKE' => array (
            'locationType' => 'TipTrigger',
            'position' => '-127.177 0 420.693' 
        ),
        'TipTrigger_SPINNERY' => array (
            'locationType' => 'TipTrigger',
            'position' => '-536.645 0 339.17' 
        ),
        'TipTrigger_PFERDE' => array (
            'locationType' => 'TipTrigger',
            'position' => '-1782.972 0 303.857' 
        ),
        'TipTrigger_RAILROAD_MILL' => array (
            'locationType' => 'TipTrigger',
            'position' => '-1478.218 0 -503.648' 
        ),
        'TipTrigger_MILL' => array (
            'locationType' => 'TipTrigger',
            'position' => '-1500.044 0 -499.99' 
        ),
        'TipTrigger_WINDROW_STORAGE' => array (
            'locationType' => 'TipTrigger',
            'position' => '1844.276 0 -1885.218' 
        ),
        'TipTrigger_ROHSTOFF_HANDEL' => array (
            'locationType' => 'TipTrigger',
            'position' => '1841.347 0 -1954.598' 
        ),
        'TipTrigger_SHEEP' => array (
            'locationType' => 'TipTrigger',
            'position' => '355.13 0 -923.529' 
        ),
        'Storage_FARM' => array (
            'locationType' => 'storage',
            'position' => '745.435 0 -1011.995' 
        ),
        'Storage_BETRIEBSHOF' => array (
            'locationType' => 'storage',
            'position' => '1137.054 0 -1004.496' 
        ),
        'Storage_storage4' => array (
            'locationType' => 'storage',
            'position' => '1416.189 0 -50.672' 
        ),
        'Storage_Bahn2' => array (
            'locationType' => 'storage',
            'position' => '-1479.184 0 995.348' 
        ),
        'Storage_Bahn3' => array (
            'locationType' => 'storage',
            'position' => '-1225.69 0 -1132.884' 
        ),
	
		// Tiere         
		'Animals_cow' => array (
            'locationType' => 'animal',
            'position' => '467.462 0 -1059.217',
            'reproRate' => 1200,
            'input' => array (
                    'water' => array (
                            'trough_factor' => 35,
                            'consumption_factor' => 35,
                            'fillTypes' => 'water',
                            'showInStorage' => false 
                    ),
                    'straw' => array (
                            'trough_factor' => 70,
                            'consumption_factor' => 70,
                            'fillTypes' => 'straw',
                            'showInStorage' => false 
                    ),
                    'grass_windrow' => array (
                            'trough_factor' => 70,
                            'consumption_factor' => 100,
                            'fillTypes' => 'grass_windrow',
                            'showInStorage' => false 
                    ),
                    'silage_dryGrass_windrow' => array (
                            'trough_factor' => 175,
                            'consumption_factor' => 175,
                            'fillTypes' => 'silage dryGrass_windrow',
                            'showInStorage' => false 
                    ),
                    'powerFood' => array (
                            'trough_factor' => 105,
                            'consumption_factor' => 105,
                            'fillTypes' => 'powerFood',
                            'showInStorage' => false 
                    ) 
            ),
            'output' => array (
                    'liquidManure' => array (
                            'production_factor' => 250,
                            'fillType' => 'liquidManure',
                            'showInStorage' => true 
                    ),
                    'manure' => array (
                            'production_factor' => 200,
                            'fillType' => 'manure',
                            'showInStorage' => true 
                    ),
                    'milk' => array (
                            'production_factor' => 714,
                            'fillType' => 'milk',
                            'showInStorage' => true 
                    ) 
            
            ),
            'productivity' => array (
                    'straw' => 10,
                    'grass_windrow' => 18,
                    'silage_dryGrass_windrow' => 45,
                    'powerFood' => 27 
            ) 
        ),
		'Animals_pig' => array (
				'locationType' => 'animal',
				'position' => '287.795 0 -957.057',
				'reproRate' => 144,
				'input' => array (
						'water' => array (
								'trough_factor' => 10,
								'consumption_factor' => 10,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'straw' => array (
								'trough_factor' => 20,
								'consumption_factor' => 20,
								'fillTypes' => 'straw',
								'showInStorage' => false 
						),
						'maize_steamedPotato_oat_pigFood' => array (
								'trough_factor' => 45,
								'consumption_factor' => 61,
								'fillTypes' => 'steamedPotato oat maize pigFood',
								'showInStorage' => false 
						),
						'wheat_barley_pigFood' => array (
								'trough_factor' => 25,
								'consumption_factor' => 23,
								'fillTypes' => 'wheat barley pigFood',
								'showInStorage' => false 
						),
						'rape_sunflower_soybean_pigFood' => array (
								'trough_factor' => 18,
								'consumption_factor' => 18,
								'fillTypes' => 'rape sunflower soybean pigFood',
								'showInStorage' => false 
						),
						'potato_sugarBeet_pigFood' => array (
								'trough_factor' => 4.5,
								'consumption_factor' => 5,
								'fillTypes' => 'potato sugarBeet pigFood',
								'showInStorage' => false 
						) 
				),
				'output' => array (
						'liquidManure' => array (
								'production_factor' => 65,
								'fillType' => 'liquidManure',
								'showInStorage' => true 
						),
						'manure' => array (
								'production_factor' => 50,
								'fillType' => 'manure',
								'showInStorage' => true 
						),
						'pigletBox' => array (
								'production_factor' => 24,
								'capacity' => 5,
								'fillType' => 'pigletBox',
								'palletArea' => '122 -39 123 -36',
								'palletPlaces' => 6,
								'showInStorage' => false
						)
				),
				'productivity' => array (
						'straw' => 9.8,
						'maize_steamedPotato_oat_pigFood' => 44.8,
						'wheat_barley_pigFood' => 22.8,
						'rape_sunflower_soybean_pigFood' => 17.8,
						'potato_sugarBeet_pigFood' => 4.8, 
						'wholeGrain' => 4.8
				) 
		),
		'Animals_sheep' => array (
				'locationType' => 'animal',
				'position' => '403.828 0 -957.057',
				'reproRate' => 960,
				'input' => array (
						'water' => array (
								'trough_factor' => 15,
								'consumption_factor' => 15,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'grass_windrow_dryGrass_windrow' => array (
								'trough_factor' => 30,
								'consumption_factor' => 36,
								'fillTypes' => 'grass_windrow dryGrass_windrow',
								'showInStorage' => false 
						) 
				),
				'output' => array (
						'woolPallet' => array (
								'production_factor' => 24,
								'capacity' => 2000,
								'fillType' => 'woolPallet',
								'palettArea' => '379.136 -924.38 355.07 -922.334',
								'palettPlaces' => 12,
								'showInStorage' => false 
						) 
				),
				'productivity' => array (
						'grass_windrow_dryGrass_windrow' => 90 
				) 
		),
) );

// FabrikScripte
$mapconfig = array_merge ( $mapconfig, array ( 
        'BGA_Tankstelle' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '1962.602 0 -1941.902',
                'showInProduction' => true,
                'input' => array (
                        'fuel' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'fuel',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'fuel' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillType' => 'fuel',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Gras_Trockner' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 8000,
                'position' => '1975.966 0 -1603.159',
                'showInProduction' => true,
                'input' => array (
                        'grass_windrow' => array (
                                'capacity' => 5000000,
                                'factor' => 1,
                                'fillTypes' => 'grass_windrow',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'dryGrass_windrow' => array (
                                'capacity' => 5000000,
                                'factor' => 1,
                                'fillType' => 'dryGrass_windrow',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Kalk_Master5000' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 30000,
                'position' => '1820.641 0 1531.943',
                'showInProduction' => true,
                'input' => array (
                        'Kalkbruch' => array (
                                'capacity' => 5000000,
                                'factor' => 1,
                                'fillTypes' => 'sand',
                                'showInStorage' => false 
                        ),
                        'fuel' => array (
                                'capacity' => 200000,
                                'factor' => 1,
                                'fillTypes' => 'fuel',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'lime' => array (
                                'capacity' => 5000000,
                                'factor' => 1,
                                'fillType' => 'lime',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Kalkbruch' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 10000,
                'position' => '1811.142 0 1585.185',
                'showInProduction' => true,
                'input' => array (
                        'sand' => array (
                                'capacity' => 5000000,
                                'factor' => 0,
                                'fillTypes' => 'sand',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'kalkbruch' => array (
                                'capacity' => 800000,
                                'factor' => 1,
                                'fillType' => 'sand',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'BRAUEREI' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 3500,
                'position' => '535.262 0 1343.169',
                'showInProduction' => true,
                'input' => array (
                        'barley_beer' => array (
                                'capacity' => 500000,
                                'factor' => 1.8,
                                'fillTypes' => 'barley wheat',
                                'showInStorage' => false 
                        ),
                        'hops' => array (
                                'capacity' => 500000,
                                'factor' => 1.8,
                                'fillTypes' => 'hops',
                                'showInStorage' => false 
                        ),
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        ),
                        'emptypallet' => array (
                                'capacity' => 200000,
                                'factor' => 0.3,
                                'fillTypes' => 'emptypallet',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'beer' => array (
                                'capacity' => 8000,
                                'factor' => 0.7,
                                'fillType' => 'beer',
								'palettArea' => '535.262 1343.169 537.772 1310.909',
								'palettPlaces' => 16,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Holzhacker' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 20000,
                'position' => '-46.734 0 1732.657',
                'showInProduction' => true,
                'input' => array (
                        'Holz' => array (
                                'capacity' => 1500000,
                                'factor' => 1,
                                'fillTypes' => 'woodChips wood emptypallet boards',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'woodChips' => array (
                                'capacity' => 1500000,
                                'factor' => 0.9,
                                'fillType' => 'woodChips',
                                'showInStorage' => true 
                        ) 
                ) 
        ),	 
        'Wald_Tankstelle' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '-92 0 1806.553',
                'showInProduction' => true,
                'input' => array (
                        'fuel' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'fuel',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'fuel' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillType' => 'fuel',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Tischlerei' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 20000,
                'position' => '-180.71 0 1775.428',
                'showInProduction' => true,
                'input' => array (
                        'boards' => array (
                                'capacity' => 800000,
                                'factor' => 1,
                                'fillTypes' => 'boards',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'emptypallet' => array (
                                'capacity' => 10000,
                                'factor' => 0.8, 
                                'fillType' => 'emptypallet',
								'palettArea' => '-150.816 1771.6 -122.68 1779.75',
								'palettPlaces' => 53,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Saegewerk' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 15000,
                'position' => '-199.739 0 1851.883',
                'showInProduction' => true,
                'input' => array (
                        'Brennstoffe' => array (
                                'capacity' => 500000,
                                'factor' => 0.4,
                                'fillTypes' => 'straw woodChips',
                                'showInStorage' => false 
                        ),
                        'Baeume' => array (
                                'capacity' => 800000,
                                'factor' => 1.1,
                                'fillTypes' => 'woodChips wood',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'woodChips' => array (
                                'capacity' => 300000,
                                'factor' => 0.1, 
                                'fillType' => 'woodChips',
                                'showInStorage' => true 
                        ),
                        'boards' => array (
                                'capacity' => 10000,
                                'factor' => 0.8, 
                                'fillType' => 'boards',
								'palettArea' => '-180.14 1876.657 -172.716 1848.545',
								'palettPlaces' => 40,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Verwurster' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 80,
                'position' => '-487.719 0 1632.04',
                'showInProduction' => true,
                'input' => array (
                        'Tiere' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'pig cow sheep piglet',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'Fleisch' => array (
                                'capacity' => 500000,
                                'factor' => 60, 
                                'fillType' => 'meat',
                                'showInStorage' => true 
                        ),
                        'Wurst' => array (
                                'capacity' => 500000,
                                'factor' => 100, 
                                'fillType' => 'sausage',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Muehle' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 20000,
                'position' => '-1579.417 0 1769.141',
                'showInProduction' => true,
                'input' => array (
                        'getreide' => array (
                                'capacity' => 1500000,
                                'factor' => 1,
                                'fillTypes' => 'wheat maize barley rape spelt oat rye triticale soybean',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'flour' => array (
                                'capacity' => 1500000,
                                'factor' => 0.9, 
                                'fillType' => 'flour',
                                'showInStorage' => true 
                        )
                ) 
        ),
		'Zucker' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 10000,
                'position' => '-1557.555 0 1431.33',
                'showInProduction' => true,
                'input' => array (
                        'sugarBeet' => array (
                                'capacity' => 1500000,
                                'factor' => 1.3,
                                'fillTypes' => 'sugarBeet sugarCane',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'sugar' => array (
                                'capacity' => 1500000,
                                'factor' => 0.9, 
                                'fillType' => 'sugar',
                                'showInStorage' => true 
                        )
                ) 
        ),
		'Raffinerie' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 10000,
                'position' => '-1496.615 0 608.177',
                'showInProduction' => true,
                'input' => array (
                        'rape' => array (
                                'capacity' => 500000,
                                'factor' => 1.5,
                                'fillTypes' => 'rape sunflower',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'compost' => array (
                                'capacity' => 200000,
                                'factor' => 0.2, 
                                'fillType' => 'compost',
                                'showInStorage' => true 
                        ),
                        'fuel' => array (
                                'capacity' => 200000,
                                'factor' => 0.5, 
                                'fillType' => 'fuel',
                                'showInStorage' => true 
                        )
                ) 
        ),
		'Gewaeshaus' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 3500,
                'position' => '-462.802 0 734.562',
                'showInProduction' => true,
                'input' => array (
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 0.5,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        ),
                        'compost' => array (
                                'capacity' => 500000,
                                'factor' => 0.9,
                                'fillTypes' => 'compost',
                                'showInStorage' => false 
                        ),
                        'emptypallet' => array (
                                'capacity' => 500000,
                                'factor' => 0.6,
                                'fillTypes' => 'emptypallet',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'tomatoPallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'tomato',
								'palettArea' => '-469.986 763.094 -492.169 760.425',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'lettucePallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'lettuce',
								'palettArea' => '-507.922 763.582 -530.115 760.904',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'redCabbagePallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'redCabbage',
								'palettArea' => '-554.027 763.596 -576.128 760.9',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'cauliflowerPallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'cauliflower',
								'palettArea' => '-477.244 728.937 -499.317 726.255',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'raspberryPallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'raspberry',
								'palettArea' => '-509.035 728.838 -531.018 726.179',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'strawberryPallet' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'strawberry',
								'palettArea' => '-549.731 728.884 -571.761 726.228',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Erasco' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 4000,
                'position' => '-1567.937 0 -12.319',
                'showInProduction' => true,
                'input' => array (
                        'steamedPotato_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 1.3,
                                'fillTypes' => 'steamedPotato',
                                'showInStorage' => false 
                        ),
                        'onion_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 1.2,
                                'fillTypes' => 'onion',
                                'showInStorage' => false 
                        ),
                        'carrot_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 1.2,
                                'fillTypes' => 'carrot',
                                'showInStorage' => false 
                        ),
                        'flour_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'flour',
                                'showInStorage' => false 
                        ),
                        'emptypallet_erasco' => array (
                                'capacity' => 200000,
                                'factor' => 0.3,
                                'fillTypes' => 'emptypallet',
                                'showInStorage' => false 
                        ),
                        'tomato_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 0.5,
                                'fillTypes' => 'tomato cauliflower redCabbage',
                                'showInStorage' => false 
                        ),
                        'meat_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 0.3,
                                'fillTypes' => 'meat',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'pigFood_erasco' => array (
                                'capacity' => 500000,
                                'factor' => 0.3, 
                                'fillType' => 'pigFood',
                                'showInStorage' => true 
                        ),
                        'erasco_erasco' => array (
                                'capacity' => 8000,
                                'factor' => 0.9, 
                                'fillType' => 'erasco',
								'palettArea' => '-1598.188 51.406 -1600.839 83.464',
								'palettPlaces' => 15,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Pflaumen_Garden' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 3000,
                'position' => '301.487 0 -137.171',
                'showInProduction' => true,
                'input' => array (
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 0.2,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        ),
                        'compost' => array (
                                'capacity' => 500000,
                                'factor' => 0.8, 
                                'fillTypes' => 'compost',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'plum' => array (
                                'capacity' => 300000,
                                'factor' => 0.8, 
                                'fillType' => 'plum',
                                'showInStorage' => true 
                        )
                ) 
        ),
		'Kirschen_Garden' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 3000,
                'position' => '386.439 0 -137.171',
                'showInProduction' => true,
                'input' => array (
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 0.2,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        ),
                        'compost' => array (
                                'capacity' => 500000,
                                'factor' => 0.8, 
                                'fillTypes' => 'compost',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'cherry' => array (
                                'capacity' => 200000,
                                'factor' => 0.8, 
                                'fillType' => 'cherry',
                                'showInStorage' => true 
                        )
                ) 
        ),
		'Milk' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 3000,
                'position' => '-185.697 0 -316.068',
                'showInProduction' => true,
                'input' => array (
                        'milk' => array (
                                'capacity' => 1000000,
                                'factor' => 1.7,
                                'fillTypes' => 'milk',
                                'showInStorage' => false 
                        ),
                        'emptypallet' => array (
                                'capacity' => 200000,
                                'factor' => 0.5,
                                'fillTypes' => 'emptypallet',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'butter' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'butter',
								'palettArea' => '-204.63 -330.326 -202.021 -308.189',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ),
                        'yogurt' => array (
                                'capacity' => 8000,
                                'factor' => 1, 
                                'fillType' => 'yogurt',
								'palettArea' => '-234.792 -300.144 -212.897 -297.435',
								'palettPlaces' => 11,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Sandwich' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2000,
                'position' => '-1064.026 0 -330.731',
                'showInProduction' => true,
                'input' => array (
                        'sausage' => array (
                                'capacity' => 200000,
                                'factor' => 0.5,
                                'fillTypes' => 'sausage',
                                'showInStorage' => false 
                        ),
                        'bread' => array (
                                'capacity' => 200000,
                                'factor' => 0.9,
                                'fillTypes' => 'bread',
                                'showInStorage' => false 
                        ),
                        'butter' => array (
                                'capacity' => 200000,
                                'factor' => 0.9,
                                'fillTypes' => 'butter',
                                'showInStorage' => false 
                        ),
                        'tomato' => array (
                                'capacity' => 200000,
                                'factor' => 0.9,
                                'fillTypes' => 'tomato',
                                'showInStorage' => false 
                        ),
                        'lettuce' => array (
                                'capacity' => 200000,
                                'factor' => 0.9,
                                'fillTypes' => 'lettuce',
                                'showInStorage' => false 
                        ),
                        'onion' => array (
                                'capacity' => 200000,
                                'factor' => 0.5,
                                'fillTypes' => 'onion',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'sandwich' => array (
                                'capacity' => 300000,
                                'factor' => 1.4, 
                                'fillType' => 'sandwich',
                                'showInStorage' => true 
                        ),
                        'pigFood' => array (
                                'capacity' => 500000,
                                'factor' => 0.1, 
                                'fillType' => 'pigFood',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Baecker' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 5000,
                'position' => '-1275.071 0 -415.59',
                'showInProduction' => true,
                'input' => array (
                        'sunflower' => array (
                                'capacity' => 500000,
                                'factor' => 1.1,
                                'fillTypes' => 'sunflower',
                                'showInStorage' => false 
                        ),
                        'flour' => array (
                                'capacity' => 500000,
                                'factor' => 1.4,
                                'fillTypes' => 'flour',
                                'showInStorage' => false 
                        ),
                        'sugar' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'sugar',
                                'showInStorage' => false 
                        ),
                        'spelt' => array (
                                'capacity' => 500000,
                                'factor' => 1.3,
                                'fillTypes' => 'spelt',
                                'showInStorage' => false 
                        ),
                        'emptypallet' => array (
                                'capacity' => 200000,
                                'factor' => 0.4,
                                'fillTypes' => 'emptypallet',
                                'showInStorage' => false 
                        ),
                        'rye' => array (
                                'capacity' => 500000,
                                'factor' => 1.3,
                                'fillTypes' => 'rye',
                                'showInStorage' => false 
                        ),
                        'triticale' => array (
                                'capacity' => 500000,
                                'factor' => 1.3,
                                'fillTypes' => 'triticale',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'bread_baecker' => array (
                                'capacity' => 8000,
                                'factor' => 0.8, 
                                'fillType' => 'bread',
								'palettArea' => '-1316.56 -381.267 -1319.239 -349.095',
								'palettPlaces' => 16,
                                'showInStorage' => false 
                        ) 
                ) 
        ),
		'Muesli' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2500,
                'position' => '-1279.238 0 -466.795',
                'showInProduction' => true,
                'input' => array (
                        'cherry' => array (
                                'capacity' => 500000,
                                'factor' => 0.6,
                                'fillTypes' => 'cherry',
                                'showInStorage' => false 
                        ),
                        'plum' => array (
                                'capacity' => 500000,
                                'factor' => 0.6,
                                'fillTypes' => 'plum',
                                'showInStorage' => false 
                        ),
                        'Erd_Himbeeren' => array (
                                'capacity' => 500000,
                                'factor' => 0.6,
                                'fillTypes' => 'raspberry strawberry',
                                'showInStorage' => false 
                        ),
                        'oat' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'oat',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'muesli' => array (
                                'capacity' => 300000,
                                'factor' => 0.8, 
                                'fillType' => 'muesli',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'CompostMaster' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 50000,
                'position' => '142.601 0 -896.629',
                'showInProduction' => true,
                'input' => array (
                        'reste' => array (
                                'capacity' => 5000000,
                                'factor' => 1.5,
                                'fillTypes' => 'liquidManure sugarCane digestate woodChips water oat rye spelt triticale millet forage sunflower soybean forage_mixing liquidFertilizer compost barley pigFood wheat seeds dryGrass_windrow straw silage manure chaff rape fertilizer sugar butter hops flour onion carrot tomato lettuce cauliflower redCabbage strawberry raspberry yogurt steamedPotato washedPotato maize grass sugarBeet grass_windrow potato dryGrass',
                                'showInStorage' => false 
                        ),
                        'fuel' => array (
                                'capacity' => 200000,
                                'factor' => 0.02,
                                'fillTypes' => 'fuel',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'compost' => array (
                                'capacity' => 1500000,
                                'factor' => 0.6, 
                                'fillType' => 'compost',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Guelle_Lager' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '151.131 0 -927.921',
                'showInProduction' => true,
                'input' => array (
                        'liquidManure' => array (
                                'capacity' => 1500000,
                                'factor' => 1,
                                'fillTypes' => 'liquidManure digestate',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'Output' => array (
                                'capacity' => 1500000,
                                'factor' => 1, 
                                'fillType' => 'liquidManure',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Guelle_Lager' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '151.131 0 -927.921',
                'showInProduction' => true,
                'input' => array (
                        'liquidManure' => array (
                                'capacity' => 1500000,
                                'factor' => 1,
                                'fillTypes' => 'liquidManure digestate',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'Output' => array (
                                'capacity' => 1500000,
                                'factor' => 1, 
                                'fillType' => 'liquidManure',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Wasser_Lager' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '151.131 0 -927.921',
                'showInProduction' => true,
                'input' => array (
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 1, 
                                'fillType' => 'water',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Gras_Lager' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 2147483647,
                'position' => '151.131 0 -927.921',
                'showInProduction' => true,
                'input' => array (
                        'grass_windrow' => array (
                                'capacity' => 3000000,
                                'factor' => 1,
                                'fillTypes' => 'grass_windrow dryGrass_windrow',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'grass_windrow' => array (
                                'capacity' => 3000000,
                                'factor' => 1, 
                                'fillType' => 'grass_windrow',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Kartoffel_Anlage' => array (
                'locationType' => 'FabrikScript',
                'ProdPerHour' => 20000,
                'position' => '1083.9 0 -890.344',
                'showInProduction' => true,
                'input' => array (
                        'potato' => array (
                                'capacity' => 500000,
                                'factor' => 1,
                                'fillTypes' => 'potato',
                                'showInStorage' => false 
                        ),
                        'water' => array (
                                'capacity' => 500000,
                                'factor' => 0.3,
                                'fillTypes' => 'water',
                                'showInStorage' => false 
                        ),
                        'fuel' => array (
                                'capacity' => 500000,
                                'factor' => 0.1,
                                'fillTypes' => 'fuel',
                                'showInStorage' => false 
                        )
                ),
                'output' => array (
                        'steamedPotato' => array (
                                'capacity' => 500000,
                                'factor' => 0.9, 
                                'fillType' => 'steamedPotato',
                                'showInStorage' => true 
                        ),
                        'compost' => array (
                                'capacity' => 500000,
                                'factor' => 0.4, 
                                'fillType' => 'compost',
                                'showInStorage' => true 
                        ) 
                ) 
        ),
		'Mischfutterstation' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 20000,
            'position' => '1103.08 0 -950.336',
            'showInProduction' => true,
            'input' => array (
                'Stroh' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'straw',
                    'showInStorage' => false
                ),
                'Silage' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'silage',
                    'showInStorage' => false
                ),
                'Gras' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'grass_windrow dryGrass_windrow',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'Mischfutter' => array (
                    'capacity' => 1500000,
                    'factor' => 0.96,
                    'fillType' => 'forage',
                    'showInStorage' => true
                )
            )
        ),
        'Schweinefutterstation' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 20000,
            'position' => '1072.048 0 -950.336',
            'showInProduction' => true,
            'input' => array (
                'Getreide' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'wheat barley maize',
                    'showInStorage' => false
                ),
                'Proteine' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'rape oat sunflower',
                    'showInStorage' => false
                ),
                'Erdfruechten' => array (
                    'capacity' => 1000000,
                    'factor' => 0.5,
                    'fillTypes' => 'steamedPotato sugarBeet',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'Schweinefutter' => array (
                    'capacity' => 1500000,
                    'factor' => 0.935,
                    'fillType' => 'pigFood',
                    'showInStorage' => true
                )
            )
        ),
        'Fertilizer_Pro' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 20000,
            'position' => '1111.203 0 -979.439',
            'showInProduction' => true,
            'input' => array (
                'manure' => array (
                    'capacity' => 500000,
                    'factor' => 1.3,
                    'fillTypes' => 'manure compost',
                    'showInStorage' => false
                ),
                'liquidManure' => array (
                    'capacity' => 500000,
                    'factor' => 1.3,
                    'fillTypes' => 'liquidManure digestate',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'fertilizer' => array (
                    'capacity' => 1600000,
                    'factor' => 0.8,
                    'fillType' => 'fertilizer',
                    'showInStorage' => true
                )
            )
        ),
        'Seeds_Pro' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 20000,
            'position' => '1072.338 0 -979.439',
            'showInProduction' => true,
            'input' => array (
                'grain' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillTypes' => 'wheat maize barley rape spelt oat rye triticale millet',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'seeds' => array (
                    'capacity' => 1500000,
                    'factor' => 0.9,
                    'fillType' => 'seeds',
                    'showInStorage' => true
                )
            )
        ),
        'liquidFertilizer_Pro' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 20000,
            'position' => '1024.849 0 -1001.571',
            'showInProduction' => true,
            'input' => array (
                'fertilizer' => array (
                    'capacity' => 500000,
                    'factor' => 1.3,
                    'fillTypes' => 'fertilizer lime',
                    'showInStorage' => false
                ),
                'water' => array (
                    'capacity' => 500000,
                    'factor' => 1.3,
                    'fillTypes' => 'water',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'liquidFertilizer' => array (
                    'capacity' => 1600000,
                    'factor' => 1,
                    'fillType' => 'liquidFertilizer',
                    'showInStorage' => true
                )
            )
        ),
        'Seeds_Lager_Hof' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 2147483647,
            'position' => '968.085 0 -999.661',
            'showInProduction' => true,
            'input' => array (
                'seeds' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillTypes' => 'seeds',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'seeds' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillType' => 'seeds',
                    'showInStorage' => true
                )
            )
        ),
        'Fertilizer_Lager_Hof' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 2147483647,
            'position' => '939.467 0 -999.661',
            'showInProduction' => true,
            'input' => array (
                'fertilizer' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillTypes' => 'fertilizer',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'fertilizer' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillType' => 'fertilizer',
                    'showInStorage' => true
                )
            )
        ),
        'Kalk_Lager_Hof' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 2147483647,
            'position' => '903.955 0 -999.661',
            'showInProduction' => true,
            'input' => array (
                'lime' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillTypes' => 'lime',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'lime' => array (
                    'capacity' => 1500000,
                    'factor' => 1,
                    'fillType' => 'lime',
                    'showInStorage' => true
                )
            )
        ),
        'Hof_Tankstelle' => array (
            'locationType' => 'FabrikScript',
            'ProdPerHour' => 2147483647,
            'position' => '594.652 0 -1035.651',
            'showInProduction' => true,
            'input' => array (
                'fuel' => array (
                    'capacity' => 500000,
                    'factor' => 1,
                    'fillTypes' => 'fuel',
                    'showInStorage' => false
                )
            ),
            'output' => array (
                'fuel' => array (
                    'capacity' => 500000,
                    'factor' => 1,
                    'fillType' => 'fuel',
                    'showInStorage' => true
                )
            )
        ),
) );