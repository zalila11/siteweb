<?PHP
class reclamation{
		private $nomRec;
	private $dateRec;
	private $messageRec;
	private $sujetRec;
	private $email;
			private $etat;

	function __construct($nomRec,$dateRec,$messageRec,$sujetRec,$email,$etat){
		
		$this->nomRec=$nomRec;
		$this->dateRec=$dateRec;
		$this->messageRec=$messageRec;
		$this->sujetRec=$sujetRec;
		$this->email=$email;
		$this->etat=$etat;
		
	}
	 public static function getReclamations()
    {
        $list = [];
        $db = configgetConnexion();
        $req = $db-query('SELECT `nomRec`, `dateRec`,`messageRec`, `sujetRec`, `email`, `etat` FROM `reclamation`');
        foreach ($req-fetchAll() as $rec) {
            array_push($list, new reclamation($rec['nomRec'], $rec['dateRec'], $rec['messageRec'],
                $rec['sujetRec'],  $rec['email'],  $rec['etat']));
        }

        return $list;
    }

	
	
	function getnomRec(){
		return $this->nomRec;
	}
	function getdateRec(){
		return $this->dateRec;
	}
	
	function getmessageRec(){
		return $this->messageRec;
	}
	function getsujetRec(){
		return $this->sujetRec;
	}
	function getemail(){
		return $this->email;
	}
	function getetat(){
		return $this->etat;
	}

	function setetat($etat){
		$this->etat=$etat;
	}
	function setnomRec($nomRec){
		$this->nomRec=$nomRec;
	}
	function setdateRec($dateRec){
		$this->dateRec=$dateRec;
	}
	function setetatRec($etatRec){
		$this->etatRec=$etatRec;
	}
	function setmessageRec($messageRec){
		$this->messageRec=$messageRec;
	}
	function setsujetRec($sujetRec){
		$this->sujetRec=$sujetRec;
	}
	function setemail($email){
		$this->email=$email;
	}
	
}

?>