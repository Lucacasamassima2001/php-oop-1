<?php

class Movie{
    public String $MovieTitle;
    public String $MovieDirector;
    public String $MovieNation;
    public String $MovieYear;
    public array $genres;


    public function __construct(String $MovieTitle, String $MovieDirector, String $MovieNation, String $MovieYear, array $genres  = []) {
        $this->MovieTitle = $MovieTitle;
        $this->MovieDirector = $MovieDirector;
        $this->MovieNation = $MovieNation;
        $this->MovieYear =   $MovieYear;
        foreach ($genres  as $genre) {
			if (!$genre instanceof Genre) {
				die('I Generi devono essere di tipo Genere');
			}
		};
		$this->genres = $genres;
    }


   public function getTimePassed(){
    $Timepassed = $this->MovieYear - date("Y");
    return $Timepassed . '-';
   }
}
