<?php

class User extends CI_Controller {

  public function add_user() {
    $this->load->model('User_model');

    $data = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'nomer_telepon' => $this->input->post('nomer_telepon')
    );

    $user_id = $this->User_model->insert_user($data);

    if ($user_id) {
      echo "Pengguna berhasil ditambahkan: " . $user_id;
    } else {
      echo "Gagal menambahkan pengguna.";
    }
  }

  public function delete_user() {
    $this->load->model('User_model');

    $affected_rows = $this->User_model->delete_user($data);

    if ($affected_rows > 0) {
      echo "Pengguna dengan ID " . $user_id . " berhasil dihapus.";
    } else {
      echo "Gagal menghapus pengguna.";
    }
  }

  public function edit_user($user_id) {
    $this->load->model('User_model');

    $data['user'] = $this->User_model->get_user($user_id);

    $this->load->view('edit_user', $data);
  }

  public function update_user($user_id) {
    $this->load->model('User_model');

    $data = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'nomer_telepon' => $this->input->post('nomer_telepon')
    );

    $affected_rows = $this->User_model->update_user($user_id, $data);

    if ($affected_rows > 0) {
      echo "Data pengguna dengan ID " . $user_id . " berhasil diperbarui.";
    } else {
      echo "Gagal memperbarui data pengguna.";
    }
  }


}