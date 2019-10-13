<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'nama_skill',
            'label' => 'nama_skill',
            'rules' => 'required']
        ];
    }
    public function getSkill()
    {
        $hasil = $this->db->get('skill');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('skill',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_skill  = $post["nama_skill"];
        $this->db->insert('skill', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->nama_skill  = $post["nama_skill"];
        $this->db->update('skill', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('skill', array("id"=>$id));
    }
}
?>