<?php
    class Countries extends Controller {
        public function __construct() {
            $this->countryModel = $this->model('Country');
        }

        public function index() {
            $countries = $this->countryModel->getCountries();
            $data = ['countries' => $countries];
            $this->view('Countries/index', $countries);
        }
    }
?>  