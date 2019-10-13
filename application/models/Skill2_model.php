<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Skill2_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'foto',
            'label' => 'foto',
            'rules' => 'required']
        ];
    }
    public function getSkill2()
    {
        $hasil = $this->db->get('skill2');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('skill2',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->foto  = $post["foto"];
        $this->db->insert('skill2', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->foto  = $post["foto"];
        $this->db->update('skill2', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('skill2', array("id"=>$id));
    }
}
?>