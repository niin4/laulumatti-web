<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{   
        
        $this->load->model('Songs_list','',TRUE); 
		$songs = $this->Songs_list->get_all_songs();
		$data['groups'] = $this->group_songs($songs);

        $this->template->load('default', 'indexview', $data);

	}

	public function group_songs($data) {

		//group the songs based on chapters
		//give groups the chapter's name
		$groups = array(
			0 =>
			array(
				'name' => 'Arvokkaasti',
				'songs' => array()
			)			, 
			1 =>
			array(
				'name' => 'Alan laulut',
				'songs' => array()
			)			,
			2 =>
			array(
				'name' => 'Juomalaulut',
				'songs' => array()
			),
			3 =>
			array(
				'name' => 'Kirkkaasti',
				'songs' => array()
			),
			4 =>
			array(
				'name' => 'Kuohuvasti',
				'songs' => array()
			),
			5 =>
			array(
				'name' => 'Värikkäästi',
				'songs' => array()
			),
			6 =>
			array(
				'name' => 'Estottomammin',
				'songs' => array()
			),
			7 =>
			array(
				'name' => 'Kevyesti veisaten',
				'songs' => array()
			),
			8 =>
			array(
				'name' => 'Kausittain',
				'songs' => array()
			),
			9 =>
			array(
				'name' => 'Pitkästi',
				'songs' => array()
			)
		);

		//$groups[0] = 1-17
		//[1] = 18-32
		//[2] = 33-43
		//[3] = 44-77
		//[4] = 78-88
		//[5] = 89-110
		//[6] = 111-133
		//[7] = 134-145
		//[8] = 146-153
		//[9] = 154-169

		foreach($data as $row) {
			if($row['id'] <=17) {
				$groups[0]['songs'][] = $row;
			} elseif ($row['id'] > 17 && $row['id'] <=32) {
				$groups[1]['songs'][] = $row;
			} elseif ($row['id'] > 32 && $row['id'] <=43) {
				$groups[2]['songs'][] = $row;
			} elseif ($row['id'] > 43 && $row['id'] <=77) {
				$groups[3]['songs'][] = $row;
			} elseif ($row['id'] > 77 && $row['id'] <=88) {
				$groups[4]['songs'][] = $row;
			} elseif ($row['id'] > 88 && $row['id'] <=110) {
				$groups[5]['songs'][] = $row;
			} elseif ($row['id'] > 110 && $row['id'] <=133) {
				$groups[6]['songs'][] = $row;
			} elseif ($row['id'] > 133 && $row['id'] <=145) {
				$groups[7]['songs'][] = $row;
			} elseif ($row['id'] > 145 && $row['id'] <=153) {
				$groups[8]['songs'][] = $row;
			} else {
				$groups[9]['songs'][] = $row;
			}
		}

		return $groups;

	}
    

    
    
}
