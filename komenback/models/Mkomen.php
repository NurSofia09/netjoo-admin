<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**

 *

 */

class Mkomen extends CI_Model

{



	function __construct() {
		parent::__construct();
		$this->load->database();

	}





	//fungsi untuk menampilkan komen yang ada di halaman seevideo
	public function get_komen_byvideo( $idvideo ) {
		$this->db->select( 'namaPengguna`,komen.date_created,`isiKomen`,avatar, komen.id as komenID, avatar, hakAkses' );
		$this->db->from( 'tb_komen komen' );
		$this->db->join( 'tb_video video', 'komen.videoID=video.id' );
		$this->db->join('tb_pengguna pengguna','pengguna.id=komen.userID');
		$this->db->where( 'video.id', $idvideo );
		$this->db->where( 'komen.status', 1 );

		$query = $this->db->get();
		return $query->result();
	}

		//fungsi untuk menampilkan semua komen
	public function get_all_komen() {
		$this->db->select( 'komen.id as komenID, isiKomen, komen.date_created, video.id as videoID,
							video.judulVideo, video.id as videoID, pengguna.id as penggunaID');
		$this->db->from( 'tb_komen komen' );
		$this->db->join( 'tb_video video', 'komen.videoID=video.id' );
		$this->db->join('tb_pengguna pengguna','pengguna.id=komen.userID');
		// $this->db->join('tb_guru guru', 'pengguna.id = guru.penggunaID');
		$this->db->where( 'komen.status', 1 );

		$query = $this->db->get();
		return $query->result();
	}

		//fungsi untuk ambil komen
	public function get_komen_by_idkomen( $idkomen ) {
		$this->db->select( 'isiKomen, videoID');
		$this->db->from( 'tb_komen komen' );
		$this->db->join( 'tb_video video', 'komen.videoID=video.id' );
		$this->db->join('tb_pengguna pengguna','pengguna.id=komen.userID');
		$this->db->where( 'komen.id', $idkomen  );

		$query = $this->db->get();
		return $query->result_array();
	}

}

?>
