<?php

    class Biodata extends Controller {
        public function index() {
            $data['nama'] = 'Arjuna Rinaldi Julianto';
            $data['nim'] = 'D112111019';
            $data['kelas'] = 'IF4B';
        
            $this->view('biodata', $data);
        }
    }
    
?>