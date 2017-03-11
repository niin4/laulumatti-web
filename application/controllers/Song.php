<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Song extends CI_Controller {

	/** View song 
    * Name, lyrics, original artist on single page */
    
    public function id($song){
        
        $this->load->model('Songs_list','',TRUE);
        $data['sanat'] = $this->Songs_list->get_song($song); 
        $this->template->load('default', 'songsview', $data);
    }
    
	public function index()
	{

	}
    
    public function search(){
        
        $this->load->model('Songs_list','',TRUE);
        
        $keyword = $this->input->post('search');    
        
        // Check if keyword is too short, unless it's numeric
        /* if (strlen($keyword)<4) {
            if (!is_numeric($keyword)){
                $data['error'] = 'Liian lyhyt hakusana';                
            }
        } else {      */      
            $data['keyword'] = $keyword;
            $data['results'] = $this->Songs_list->search($keyword);
            
     //   };
        
        //if results are found, color keywords
        if($data['results']){  
             $data['results'] = $this->Songs_list->color_keyword($data['results'],$keyword);
        } else {
            $data['error'] = 'Haullasi "'.$keyword.'" ei löytynyt vastaavia kohteita.';
        } 
        
        $this->template->load('default','resultview',$data);
        
       // $this->template->load('default','resultview',$data);
    }
    
    
}
