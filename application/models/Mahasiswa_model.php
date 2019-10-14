<?php 

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nim', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('jeniskelamin', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}