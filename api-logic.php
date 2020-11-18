
<?php
define( "LOCAL", true );
session_start( );

include_once( "config/config.php" );
include_once( "games/game_secure.php" );
include_once( "games/game_functions.php" );
include_once( "games/freeslots.php" );

init();
startGame();
