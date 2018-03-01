<?php

/*
 * Version: 1.1
 *
 * */

class Kurzantwort {

	public $rows = array();
	public $id = '';
	public $key = '';
	public $status = false;
	public $title = '';
	public $icon = '';
	public $text = '';
	public $matomo_id = '';

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

			$text_row = $row->{'gsx$text'}->{'$t'};
			if ( $text_row ) {
				$this->text = $text_row;
			}

			$icon_row = $row->{'gsx$icon'}->{'$t'};
			if ( $icon_row ) {
				$this->icon = $icon_row;
			}

			$matomo_id_row = $row->{'gsx$matomoid'}->{'$t'};
			if ( $matomo_id_row ) {
				$this->matomo_id = $matomo_id_row;
			}

			if ( strtotime( $from ) < $now && strtotime( $to ) > $now ) {
				$this->status = true;
			}
		}
	}

	public function getTitle(){
		return $this->title;
	}

	public function getStatusString(){
		if($this->status){
			return 'Ja!';
		} else {
			return 'Nein';
		}
	}

	public function getIcon(){
		return $this->icon;
	}

	public function getMatomo_id(){
		return $this->matomo_id;
	}

	public function getStatus(){
		return $this->status;
	}

	public function getText(){
		return $this->text;
	}

}

?>
