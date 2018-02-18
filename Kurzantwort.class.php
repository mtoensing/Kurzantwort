<?php

class Kurzantwort {

	public $rows = array();
	public $id = '';
	public $key = '';
	public $status = false;
	public $title = '';

	public function loadSpreadsheet() {
		$url        = 'http://spreadsheets.google.com/feeds/list/' . $this->key . '/' . $this->id . '/public/values?alt=json';
		$file       = file_get_contents( $url );
		$json = json_decode( $file );
		$this->rows = $json->{'feed'}->{'entry'};
	}

	public function __construct($key = '', $id = 1  ) {
		$this->key = $key;
		$this->id = $id;
		$this->loadSpreadsheet();
		$this->parseJSON();
	}

	public function parseJSON(){

		$now = time();

		foreach ( $this->rows as $row ) {
			$from = $row->{'gsx$from'}->{'$t'};
			$to   = $row->{'gsx$to'}->{'$t'};

			$title_row = $row->{'gsx$title'}->{'$t'};
			if ( $title_row ) {
				$this->title = $title_row;
			}

			if ( strtotime( $from ) < $now && strtotime( $to ) > $now ) {
				$this->status = true;
			}
		}
	}

	public function getTitle(){
		return $this->title;
	}

	public function getStatus(){
		return $this->status;
	}

}

?>
