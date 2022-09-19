<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";
    protected $primaryKey = "id";
    protected $fillable = ['nip', 'nama_karyawan', 'alamat', 'kepala_area', 'nama_tahun_penilaian', 'total'];

    public function index()
    {
        $nip = $this->input->post('nip');
        $nama_karyawan = $this->input->post('nama_karyawan');
        $kepala_area = $this->input->post('kepala_area');
        $nama_tahun_penilaian = $this->input->post('nama_tahun_penilaian');
        $total = $this->input->post('total');

        $laporan = array(
            'nip'   => $nip,
            'nama_karyawan' => $nama_karyawan,
            'kepala_area' => $kepala_area,
            'nama_tahun_penilaian' => $nama_tahun_penilaian,
            'total' => $total,
        );
        $this->db->insert('laporan', $laporan);
    }
}
