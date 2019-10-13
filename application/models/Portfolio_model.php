<?php defined ('BASEPATH') OR exit ('No direct script acces allowed');
class Portfolio_model extends CI_Model
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
    public function getPortfolio()
    {
        $hasil = $this->db->get('portfolio');
        return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('portfolio',["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->foto  = $post["foto"];
        $this->db->insert('portfolio', $this);
    }
    public function update($id = null)
    {
        $post = $this->input->post();
        $this->foto  = $post["foto"];
        $this->db->update('portfolio', $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('portfolio', array("id"=>$id));
    }
}
?>