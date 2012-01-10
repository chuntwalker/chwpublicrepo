<?php
/* the BookList class, which implements the PHP Iterator class */

class BookList implements Iterator {
	
	private $pages = array();
	private $currentPage = 1;
	private $database = null;
	private $booksPerPage = 10;
	
	public function __construct($database) { 
		$this->database = $database; 
	}
	
	public function current() {
		return current($this->touchPage());
	}
	
	/*************************************************
	function:	key()
	purpose: 	this method returns an identifier for the current item.
	returns:	key name
	**************************************************/
	public function key() {
		return key( $this->touchPage() )+$this->booksPerPage*($this->currentPage - 1);
	}
	
	/*************************************************
	function:	next()
	purpose: 	this method advances the internal 
				pointer by one and returns the current
				element.
	returns:	the next page number
	**************************************************/
	public function next() { 
		$page = &$this->touchPage();
		
		next($page);
		
		if(key($page) === null && count($page) == $this->booksPerPage) {
			$this->currentPage++;
			$page = &$this->touchPage();
			reset($page);
		}
		
		return current($page);
	}
	
	/*************************************************
	function:	rewind()
	purpose: 	this method needs to set or reset the 
			 	iterator to the very first item of 
			 	the data set
	returns:	nothing
	**************************************************/
	public function rewind() {  
		$this->currentPage = 1;
		
		if(array_key_exists(1,$this->pages))
			reset($this->pages[$i]);
	}
	
	/*************************************************
	function:	valid()
	purpose: 	this method is used to check to see if 
				the iterator's internal pointer is 
				referencing a legitimate entry.
	returns:	true or false
	**************************************************/
	public function valid() { 
		$page = &$this->touchPage();
		return (key($page) !== null);
	}
	
	/*************************************************
	function:	&touchPage()
	purpose: 	this is a helper method to retrieve data
				for the current page.
	returns:	a temporary data set array
	**************************************************/
	private function &touchPage($pageNo=false) {
		if($pageNo === false) $pageNo = $this->currentPage;
		
		if(!array_key_exists($pageNo,$this->pages)) {
			$start = ($pageNo-1)*$this->booksPerPage;
			
			$query = "SELECT 'ISBN','title',(SELECT GROUP_CONCAT('name') FROM 'book_authors' AS t2 JOIN 'authors' AS t3 ON t2.authorid = t3.id WHERE t2.bookid = t1.id GROUP BY 'bookid') AS 'author', 't4'.'name' AS publisher FROM 'books' AS t1 JOIN 'publishers' AS t4 ON t1.publisher = t4.id LIMIT $start,{$this->booksPerPage}";
			
			$result = $this->database->dbQuery($query);
			$this->pages[$pageNo] = mysql_fetch_array($result);
		}
		
		$tmp = &$this->pages[$pageNo];
		return $tmp;
	}
	
}
?>