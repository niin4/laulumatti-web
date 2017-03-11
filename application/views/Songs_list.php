<?php 

class Songs_list extends CI_Model {

          public function get_songs(){
                $query = $this->db->get('Sanat');
                return $query->result_array();
        }  

        public function

}

?>