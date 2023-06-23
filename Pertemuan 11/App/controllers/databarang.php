<?php

    class Databarang extends Controller {
        public function index() {
            $data['nama'] = 'Lenovo Ideapad 3 14ALC6';
            $data['harga'] = 'Rp 8.700.000';
            $data['stok'] = '1';
        
            $this->view('databarang', $data);
        }
    }
    
?>