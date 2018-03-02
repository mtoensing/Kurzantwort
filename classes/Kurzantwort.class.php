<?php

/*
 * Version: 1.2
 *
 * */

require_once ('Template.class.php');

class Kurzantwort {

	public $rows = array();
	public $id = '';
	public $key = '';
	public $status = false;
	public $title = '';
	public $icon = '';
	public $text = '';
	public $matomo_id = '';
	public $html = '';

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
		$this->parseText();

		$template = new Template('template.php');
		$template->set('title', $this->title);
		$template->set('status', $this->getStatusString());
		$template->set('icon', $this->icon);
		$template->set('text', $this->text);
		$template->set('matomo_id', $this->matomo_id);

		$this->html = $template->render();
	}

	public function render(){
		return $this->html;
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

	public function getStatusString(){
		if($this->status){
			return 'Ja';
		} else {
			return 'Nein';
		}
	}

	public function parseText(){

		$this->text = str_replace('"', "", $this->text);
		$this->text = str_replace("'", "", $this->text);
	}

}

?>
