<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Welcome extends MX_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *   http://example.com/index.php/welcome
     *  - or -
     *   http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model( 'Mmatapelajaran' );
        parent::__construct();
        $this->load->library( 'parser' );

    }

    public function index() {
        $data['pelajaran_sma'] = $this->load->Mmatapelajaran->get_pelajaran_sma();
        $data['pelajaran_smk'] = $this->load->Mmatapelajaran->get_pelajaran_smk();
        $data['pelajaran_smp'] = $this->load->Mmatapelajaran->get_pelajaran_smp();
        $data['pelajaran_sd'] = $this->load->Mmatapelajaran->get_pelajaran_sd();

        $data = array(
            'judul_halaman' => 'Netjoo | Welcome'
        );
        $data['files'] = array('../homepage/views/v-header.php','../homepage/views/v-footer.php');
        $this->parser->parse( 'v-index-welcome', $data );
    }

}
