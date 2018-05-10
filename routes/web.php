<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function(){
    $data = [
       [
           'case'   => 'upnormal',
           'data'   => [
               'section'   => 'fire',
               'data'   => [
                   [
                       'title'  => 'ENGINES AND AAGB FIRE',
                       'categories' => [
                           [
                               'name'   => 'INDICATIONS',
                               'data'   => [
                                   [
                                       'key'    => 'Master caution',
                                       'value'  => 'Flashes'
                                   ],
                                   [
                                       'key'    => 'FIRE',
                                       'value'  => 'ON'
                                   ],
                                   [
                                       'key'    => 'Middle MFD',
                                       'value'  => 'LH ENG FIRE (RH ENG, AAGB)'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING LH (GBX, RH)',
                                       'value'  => 'ON'
                                   ],
                                   [
                                       'key'    => 'VWS',
                                       'value'  => '‘Left engine (Right engine, Gearbox) fire’'
                                   ],
                               ],
                           ],
                           [
                               'name'   => 'ADDITIONAL INDICATIONS',
                               'data'   => [
                                   [
                                       'key'    => 'External',
                                       'value'  => 'Smoke or flame (seen in rear view mirrors during turn and reported from ground/other aircraft)'
                                   ],
                                   [
                                       'key'    => 'Cockpit',
                                       'value'  => 'Smoke'
                                   ]
                               ],
                           ],
                           [
                               'name'   => 'PROCEDURES DURING PARKING (TAXIING)',
                               'data'   => [
                                   [
                                       'key'    => 'Engines',
                                       'value'  => 'Shut down immediately'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Take all necessary actions to stop'
                                   ],
                                   [
                                       'key'    => 'Braking',
                                       'value'  => 'Carry out emergency braking'
                                   ],
                                   [
                                       'key'    => 'FUEL SHUTOFF of engine on fire',
                                       'value'  => 'CLOSED'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING LH (GBX, RH)',
                                       'value'  => 'Press'
                                   ],
                                   [
                                       'key'    => 'Fire not extinguished in ~ 8 sec',
                                       'value'  => 'Press FIRE EXTING, LH (GBX, RH) again'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Stop and leave it'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Danger of collision with obstacle'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Turn away from the obstacle'
                                   ],
                                   [
                                       'key'    => 'Canopy',
                                       'value'  => 'Jettison (if necessary)'
                                   ],
                                   [
                                       'key'    => 'LG',
                                       'value'  => 'Retract'
                                   ],
                                   [
                                       'key'    => 'Batteries',
                                       'value'  => 'OFF'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'In case of danger to life'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Eject'
                                   ],
                               ]
                           ],
                           [
                               'name'   => 'PROCEDURES AFTER LIFT-OFF AT AAGB FIRE',
                               'data'   => [
                                   [
                                       'key'    => 'Take-off',
                                       'value'  => 'Continue'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING GBX',
                                       'value'  => 'Press'
                                   ],
                                   [
                                       'key'    => 'Engine mode',
                                       'value'  => 'Do not change'
                                   ],
                                   [
                                       'key'    => 'Required speed and altitude',
                                       'value'  => 'Set'
                                   ],
                                   [
                                       'key'    => 'Direction for ejection',
                                       'value'  => 'Select'
                                   ],
                                   [
                                       'key'    => 'Fire not extinguished in ~ 8 sec',
                                       'value'  => 'Press FIRE EXTING GBX again'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Fire not extinguished'
                                   ],
                                   [
                                       'key'    => 'Engines',
                                       'value'  => 'Shut down (if possible)'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Eject'
                                   ],
                                   [
                                       'key'    => 'else_if',
                                       'value'  => 'AAGB fire extinguished'
                                   ],
                                   [
                                       'key'    => 'FIRE',
                                       'value'  => 'Goes OFF'
                                   ],
                                   [
                                       'key'    => 'Middle MFD',
                                       'value'  => 'AAGB FIRE goes OFF'
                                   ],
                                   [
                                       'key'    => 'Additional indications of fire',
                                       'value'  => 'No'
                                   ],
                                   [
                                       'key'    => 'AB',
                                       'value'  => 'OFF'
                                   ],
                                   [
                                       'key'    => 'Fuel',
                                       'value'  => 'Dump'
                                   ],
                                   [
                                       'key'    => 'Landing',
                                       'value'  => 'Perform'
                                   ]
                               ]
                           ],
                           [
                               'name'   => 'PROCEDURES AFTER LIFT-OFF AT ENGINE FIRE',
                               'data'   => [
                                   [
                                       'key'    => 'Take-off',
                                       'value'  => 'Continue'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING LH (RH)',
                                       'value'  => 'Press'
                                   ],
                                   [
                                       'key'    => 'Engine mode',
                                       'value'  => 'Do not change'
                                   ],
                                   [
                                       'key'    => 'Required speed and altitude',
                                       'value'  => 'Set'
                                   ],
                                   [
                                       'key'    => 'Direction for ejection',
                                       'value'  => 'Select'
                                   ],
                                   [
                                       'key'    => 'AB',
                                       'value'  => 'OFF'
                                   ],
                                   [
                                       'key'    => 'Engine on fire',
                                       'value'  => 'Shut down'
                                   ],
                                   [
                                       'key'    => 'FUEL SHUTOFF of engine on fire',
                                       'value'  => 'CLOSED'
                                   ],
                                   [
                                       'key'    => 'Fire not extinguished in ~ 8 sec',
                                       'value'  => 'Press FIRE EXTING LH (RH) again'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Fire not extinguished'
                                   ],
                                   [
                                       'key'    => 'Second engine',
                                       'value'  => 'Shut down (if possible)'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Eject'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Fire extinguished'
                                   ],
                                   [
                                       'key'    => 'FIRE',
                                       'value'  => 'Goes OFF'
                                   ],
                                   [
                                       'key'    => 'Middle MFD',
                                       'value'  => 'LH (RH) ENG FIRE goes OFF'
                                   ],
                                   [
                                       'key'    => 'Additional indications of fire',
                                       'value'  => 'No'
                                   ],
                                   [
                                       'key'    => 'Fuel',
                                       'value'  => 'Dump'
                                   ],
                                   [
                                       'key'    => 'Landing',
                                       'value'  => 'Perform with single engine'
                                   ],
                                   [
                                       'key'    => 'LG, flaps, slats, vortex flaps',
                                       'value'  => 'Perform emergency extension'
                                   ],
                                   [
                                       'key'    => 'Note',
                                       'value'  => 'Emergency braking in case of RH engine shutdown'
                                   ]
                               ]
                           ],
                           [
                               'name'   => 'PROCEDURES IN FLIGHT AT AAGB FIRE',
                               'data'   => [
                                   [
                                       'key'    => 'AB',
                                       'value'  => 'OFF'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING GBX',
                                       'value'  => 'Press'
                                   ],
                                   [
                                       'key'    => 'Fire not extinguished in ~ 8 sec',
                                       'value'  => 'Press FIRE EXTING GBX again'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Turn for safe ejection and aircraft falling'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Fire not extinguished'
                                   ],
                                   [
                                       'key'    => 'Engines',
                                       'value'  => 'Shut down (if possible)'
                                   ],
                                   [
                                       'key'    => 'Ejection',
                                       'value'  => 'Perform'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'AAGB fire extinguished'
                                   ],
                                   [
                                       'key'    => 'FIRE',
                                       'value'  => 'Goes OFF'
                                   ],
                                   [
                                       'key'    => 'Middle MFD',
                                       'value'  => 'AAGB FIRE goes OFF'
                                   ],
                                   [
                                       'key'    => 'Additional indications of fire',
                                       'value'  => 'No'
                                   ],
                                   [
                                       'key'    => 'Fuel',
                                       'value'  => 'Dump (if necessary)'
                                   ],
                                   [
                                       'key'    => 'Landing',
                                       'value'  => 'Perform immediately'
                                   ]
                               ]
                           ],
                           [
                               'name'   => 'PROCEDURES IN FLIGHT AT ENGINE FIRE',
                               'data'   => [
                                   [
                                       'key'    => 'AB',
                                       'value'  => 'OFF'
                                   ],
                                   [
                                       'key'    => 'TCL of engine on fire',
                                       'value'  => 'STOP'
                                   ],
                                   [
                                       'key'    => 'FUEL SHUTOFF of engine on fire',
                                       'value'  => 'CLOSED'
                                   ],
                                   [
                                       'key'    => 'FIRE EXTING LH (RH)',
                                       'value'  => 'Press'
                                   ],
                                   [
                                       'key'    => 'Fire not extinguished in ~ 8 sec',
                                       'value'  => 'Press FIRE EXTING LH (RH) again'
                                   ],
                                   [
                                       'key'    => 'Aircraft',
                                       'value'  => 'Turn for safe ejection and aircraft falling'
                                   ],
                                   [
                                       'key'    => 'if',
                                       'value'  => 'Fire not extinguished'
                                   ],
                                   [
                                       'key'    => 'Engines',
                                       'value'  => 'Shut down (if possible)'
                                   ],
                                   [
                                       'key'    => 'Ejection',
                                       'value'  => 'Perform'
                                   ],
                                   [
                                       'key'    => 'else_if',
                                       'value'  => 'Fire extinguished'
                                   ],
                                   [
                                       'key'    => 'FIRE',
                                       'value'  => 'Goes OFF'
                                   ],
                                   [
                                       'key'    => 'Middle MFD',
                                       'value'  => 'LH (RH) ENG FIRE goes OFF'
                                   ],
                                   [
                                       'key'    => 'Additional indications of fire',
                                       'value'  => 'No'
                                   ],
                                   [
                                       'key'    => 'Fuel',
                                       'value'  => 'Dump (if necessary)'
                                   ],
                                   [
                                       'key'    => 'Landing',
                                       'value'  => 'Perform with single engine'
                                   ],
                                   [
                                       'key'    => 'LG, flaps, slats, vortex flaps',
                                       'value'  => 'Perform emergency extension'
                                   ],
                                   [
                                       'key'    => 'Note',
                                       'value'  => 'Emergency braking in case of RH engine shutdown.'
                                   ],
                               ]
                           ]


                       ],
                   ],
               ]

           ]
       ]

   ];

    return response()->json($data);
});

Route::get('/', function(){
    return view('welcome');
});

Route::get('/test', 'HomeController@test');

// comment
Route::get('/categories',           'HomeController@showCategories');
Route::post('/categories',          'HomeController@saveCategories');
Route::delete('/categories/{id}',   'HomeController@deleteCategories');

Route::get('/titles',           'HomeController@showTitles');
Route::post('/titles',          'HomeController@saveTitles');
Route::delete('/titles/{id}',   'HomeController@deleteTitles');

Route::get('/sections',           'HomeController@showSections');
Route::post('/sections',          'HomeController@saveSections');
Route::delete('/sections/{id}',   'HomeController@deleteSections');

Route::get('/data',           'HomeController@showData');
Route::post('/data',          'HomeController@saveData');
Route::delete('/data/{id}',   'HomeController@deleteData');


Auth::routes();

