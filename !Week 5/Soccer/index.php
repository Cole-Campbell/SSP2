<?php

#Use inheritance to defince the roles of members of a soccer team. For example, everyone is a player, but the goalkeeper is the only one who can handle the ball and the cptain will have certain duties. Use a parent class to define properties and methods that are common to all players.

#Created Player class which is used as a base class. All people playing Soccer are players and therefore will be associated with the Player class. Each player has a name and will be given a Jersey Number, Team, and Position.
class Player{
	#Declaring public variables which will be used to hold and record information of players who are inputted through objects.
	public $name;
	public $jerseyNumber;
	public $team;
	public $position;

	#Constructor function which takes in the parameters given to the Player class and stores them into a SimpleXMLElement for use later.
	public function __construct($name, $jerseyNumber, $team, $position){
		#Echoing out parameters handed to the constructor element to ensure that there is no error during this process. No error is outputted, and content is displayed correctly.
		echo $name, $jerseyNumber, $team, $position;
	}
}

#Goalkeeper class is created and extends the Player class. Goalkeeper is a child class to the Player class and inturn inherits the functions and variables which are declared within the parent class, Player.
class Goalkeeper extends Player{
	#Unique functions are created for Goalkeeper class as the Goalkeeper is a Player, but has unique aspects so a child class must be created.
	public function catchBall($name, $jerseyNumber, $team){

	}

	#Unique function created to throw the ball once the Goalkeeper class has caught the ball. This is a unique function to the Goalkeeper class, as Goalkeeper is the only Player who may catch the ball.
	public function throwBall($name, $jerseyNumber, $team){

	}
}

#Captain class is created and extends the Player class. Captain is a child class of Player and inturn inherits the functions and variabled declared within the parent class, Player. Captain is a player, but has unique aspects about it which do not apply to all Players, so a seperate class must be created.
class Captain extends Player{
	#Custom function is created for managing players, as only the Captain class may manage players.
	public function managePlayers($name, $jerseyNumber, $position, $team){

	}
}

#Object is created and the Player class is instantiated. Parameters are passed in and are run through the Player class' constructor function which take the parameters in and echo them out.
$player = new Player("Cole", 17, "Crazy Cats", "Forward Left");
?>