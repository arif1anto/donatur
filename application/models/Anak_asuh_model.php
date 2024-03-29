<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Anak_asuh_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get anak_asuh by id_anak_asuh
     */
    function get_anak_asuh($id_anak_asuh)
    {
        return $this->db->get_where('anak_asuh',array('id_anak_asuh'=>$id_anak_asuh))->row_array();
    }
    
    /*
     * Get all anak_asuh
     */
    function get_all_anak_asuh()
    {
        return $this->db->get('anak_asuh')->result_array();
    }
    
    /*
     * function to add new anak_asuh
     */
    function add_anak_asuh($params)
    {
        $this->db->insert('anak_asuh',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update anak_asuh
     */
    function update_anak_asuh($id_anak_asuh,$params)
    {
        $this->db->where('id_anak_asuh',$id_anak_asuh);
        $response = $this->db->update('anak_asuh',$params);
        if($response)
        {
            return "anak_asuh updated successfully";
        }
        else
        {
            return "Error occuring while updating anak_asuh";
        }
    }
    
    /*
     * function to delete anak_asuh
     */
    function delete_anak_asuh($id_anak_asuh)
    {
        $response = $this->db->delete('anak_asuh',array('id_anak_asuh'=>$id_anak_asuh));
        if($response)
        {
            return "anak_asuh deleted successfully";
        }
        else
        {
            return "Error occuring while deleting anak_asuh";
        }
    }
}
