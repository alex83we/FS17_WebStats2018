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
		'BunkerSilo_siloK_001' => array (
				'locationType' => 'bunker',
				'position' => '1975.828 0 -1460.186' 
		),
		'BunkerSilo_siloK_002' => array (
				'locationType' => 'bunker',
				'position' => '1975.828 0 -1421.091' 
		),
		'BunkerSilo_silo001_hof' => array (
				'locationType' => 'bunker',
				'position' => '815.429 0 -917.323' 
		),
		'BunkerSilo_silo003' => array (
				'locationType' => 'bunker',
				'position' => '490.407 0 -318.159' 
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
	
		// Tiere 
		'Animals_pig' => array (
				'locationType' => 'animal',
				'position' => '250 0 400',
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
						) 
				),
				'productivity' => array (
						'straw' => 9.8,
						'maize_steamedPotato_oat_pigFood' => 44.8,
						'wheat_barley_pigFood' => 22.8,
						'rape_sunflower_soybean_pigFood' => 17.8,
						'potato_sugarBeet_pigFood' => 4.8 
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
                                'capacity' => 130000,
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
) );