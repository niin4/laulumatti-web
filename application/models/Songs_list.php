<?php 

class Songs_list extends CI_Model {

        public function get_all_songs(){
            $query = "SELECT * FROM laulumatti";
            $query = $this->db->query($query);
            return $query->result_array();
        }  

        public function get_song($songid){
            $query = "SELECT * FROM laulumatti WHERE id= ?";
            $query = $this->db->query($query, array($songid));
            return $query->row_array();
        }  
    
        public function search($keyword){
            if (is_numeric($keyword)){
                $query = "SELECT * FROM laulumatti WHERE id= ?";
                $query = $this->db->query($query, array($keyword));
            }else {
                $keyword = '*'.$keyword.'*';
                $keyword = str_replace(' ','*+*',$keyword);
                $query = "SELECT id,songname,lyrics FROM laulumatti WHERE MATCH(songname,lyrics) AGAINST (? IN BOOLEAN MODE) GROUP BY id";
                $query = $this->db->query($query, array($keyword));               
            }
                  
            return $query->result_array(); 
        }
        
        public function color_keyword($data,$keyword){
            
        // Color searched keywords in lyrics
        //first split keyword to an array containing each separate word
        //then look through data['lyrics'] and find each keyword
        //add specific styling around the found keyword
        //return modified data (NOTICE '&' in front of row variable that needs to be modified)
            
            $keyword = preg_split("/[\s,]+/", $keyword);            
            foreach ($data as &$row){
                foreach ($keyword as $value) {
                    $look = explode(' ',$row['lyrics']);
                    $row['lyrics'] = preg_replace("/\p{L}*$value\p{L}*/iu","<font style='color:#9933CC; font-weight: bold;'>$0</font>",$row['lyrics']);
                }unset($value); 
            }  
            return $data;
        }
}

?>