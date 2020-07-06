<?php 
/**
 *  Class to handle articles
 * 
 */

class Media
{
 
	//Properties

	/**
	 *  @var int The article ID from the database
	 */
	 public $id=null;
	 
	/**
	 *  @var string Publisher Name of the article
	 */	 
	  public $publisherName = null;

	/**
	 *  @var string Full title of the article
	 */	 
	  public $title = null;
	 
	 /**
	 *  @var string A short summary of the article
	 */
	 public $summary = null;
	 
	 /**
	 *  @var string ImageLink for the media
	 */
	 public $imageLink = null;
	 
	 /**
	 * 	Sets the object's properties using the values in the supplied array
	 *  @param assoc The propertiy values
	 */
	 
	 public function __construct($data=array() ) {
		if(isset($data['id'])) $this->id = (int) $data['id'];
		if(isset($data['publicationDate'])) $this->publicationDate = (int) $data['publicationDate'];
		if(isset($data['publisherName'])) $this->publisherName = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['publisherName']);
		if(isset($data['title'])) $this->title = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['title']);
		if(isset($data['summary'])) $this->summary = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/","",$data['summary']);
		if(isset($data['imageLink'])) $this->imageLink = $data['imageLink'];
	 }
	 
	  /**
	 * 	Sets the object's properties using the values in the supplied array
	 *  @param assoc The propertiy values
	 */
	 
	 public function storeFormValues($params) {
			//Store all the parameters
			$this->__construct($params);
			if(isset($params['publicationDate'])) {
					$publicationDate = explode('-', $params['publicationDate']);
					
					if(count($publicationDate)==3) {
							list($y,$m,$d) = $publicationDate;
							$this->publicationDate = mktime ( 0, 0, 0, $m, $d, $y );
					}
			}
	 }
	 
	 /**
	  * Returns an Media object matching the given media ID
	  *
	  * @param int The media ID
	  * @return Media|false The media object, or false if the record was not found or there was a problem
	  */

		public static function getByID($id) {
				$conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
				$sql = "SELECT *,UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM media WHERE id= :id";
				$st = $conn->prepare($sql);
				$st->bindValue(":id",$id,PDO::PARAM_INT);
				$st->execute();
				$row = $st->fetch();
				$conn = null;
				if($row) return new Media($row);
		}
	 /**
	  * Returns all (or a range of) Media objects in the DB
	  *
	  * @param int Optional The number of rows to return (default=all)
	  * @return Array|false A two-element array : results => array, a list of Media objects; totalRows => Total number of Media 
	  */
	  
	  public static function getList($numRows=1000000) {
			$conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
			$sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM media ORDER BY publicationDate DESC LIMIT :numRows";
			$st = $conn->prepare($sql);
			$st->bindValue(":numRows",$numRows,PDO::PARAM_INT);
			$st->execute();
			$list = array();
			
			while( $row = $st->fetch() ) {
				$articles = new Media($row);
				$list[] = $articles;
			}
			$sql = "SELECT FOUND_ROWS() AS totalRows";
			$totalRows = $conn->query($sql)->fetch();
			$conn = null;
			return(array("results"=> $list,"totalRows" =>$totalRows[0]));
	  }
	  /**
	   * Inserts the current Media object into the database, and sets its ID property.
	   */

		public function insert() {

			// Does the Media object already have an ID?
			if ( !is_null( $this->id ) ) trigger_error ( "Media::insert(): Attempt to insert an Media object that already has its ID property set (to $this->id).", E_USER_ERROR );

			// Insert the Media
			$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			$sql = "INSERT INTO media ( publicationDate, publisherName, title, summary, imageLink ) VALUES ( FROM_UNIXTIME(:publicationDate),:publisherName, :title, :summary, :imageLink )";
			$st = $conn->prepare ( $sql );
			$st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
			$st->bindValue( ":publisherName", $this->publisherName, PDO::PARAM_STR );
			$st->bindValue( ":title", $this->title, PDO::PARAM_STR );
			$st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
			$st->bindValue( ":imageLink", $this->imageLink, PDO::PARAM_STR );
			$st->execute();
			$this->id = $conn->lastInsertId();
			$conn = null;
		}


		/**
		 * Updates the current Media object in the database.
		 */

		public function update() {

			// Does the Media object have an ID?
			if ( is_null( $this->id ) ) trigger_error ( "Media::update(): Attempt to update an Media object that does not have its ID property set.", E_USER_ERROR );
   
			// Update the Media
			$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			$sql = "UPDATE media SET publicationDate=FROM_UNIXTIME(:publicationDate),publisherName=:publisherName title=:title, summary=:summary, imageLink=:imageLink WHERE id = :id";
			$st = $conn->prepare ( $sql );
			$st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
			$st->bindValue( ":publisherName", $this->publisherName, PDO::PARAM_STR );
			$st->bindValue( ":title", $this->title, PDO::PARAM_STR );
			$st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
			$st->bindValue( ":imageLink", $this->imageLink, PDO::PARAM_STR );
			$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
			$st->execute();
			$conn = null;
		}


		/**
		 * Deletes the current Media object from the database.
		 */

		public function delete() {

			// Does the Media object have an ID?
			if ( is_null( $this->id ) ) trigger_error ( "Media::delete(): Attempt to delete an Media object that does not have its ID property set.", E_USER_ERROR );

			// Delete the Media
			$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			$st = $conn->prepare ( "DELETE FROM media WHERE id = :id LIMIT 1" );
			$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
			$st->execute();
			$conn = null;
		}

}
	  
?>
