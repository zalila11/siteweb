<?PHP
class reclamation{
		private $nomRec;
	private $dateRec;
	private $messageRec;
	private $sujetRec;
	private $email;
			private $etat;

	function __construct($nomRec,$messageRec,$sujetRec,$email){
		
		$this->nomRec=$nomRec;
		
		$this->messageRec=$messageRec;
		$this->sujetRec=$sujetRec;
		$this->email=$email;
		
	}
	
	
	function getnomRec(){
		return $this->nomRec;
	}
	function getdateRec(){
		return $this->dateRec;
	}
	function getetatRec(){
		return $this->etatRec;
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