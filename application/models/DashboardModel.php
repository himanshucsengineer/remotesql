<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardModel extends CI_Model {

    // function gettables(){
    //     $response = array();
    //     $this->db->query("use mysql");
    //     $this->db->select('*');
    //     $this->db->where('User', $_);
    //     $q = $this->db->get('userdata');
    //     $response = $q->result_array();
    //     $this->db->query("use remotesql");
    //     return $response;
    // }

    function add_db($database){
        $datax = array(
            'dbcount' =>$_SESSION["dbcount"]+1,
        );
        $this->db->query("CREATE DATABASE $database");
        $this->db->query("use $database");
        $this->db->query("use remotesql");
        $data=array("username"=>$_SESSION['email'],
        "sqldbname"=>$database,
        "sqluserids"=>"",
        );
        echo "<script>alert(".$database.");</script>";
        if($this->db->insert('sqldb',$data)){
            $_SESSION["dbcount"]=$_SESSION["dbcount"]+1;
            $this->db->where('username', $_SESSION["email"]);
            return $this->db->update('userdata', $datax);
        }
        else{
            return 0;
        }
    }

    function add_user($data){
        $usercount = array(
            'usercount' =>$_SESSION["usercount"]+1,
        );
        $username=$data['sqlusername'];
        $password=$data['sqlpassword'];
        if($this->db->query("CREATE USER '$username'@'%' IDENTIFIED BY '$password'"))
        {
            $this->db->where('username', $_SESSION["email"]);
            $this->db->update('userdata', $usercount);
            $_SESSION["usercount"]=$_SESSION["usercount"]+1;
            return $this->db->insert('sqluser',$data);
        }
        else{
            return 0;
        }
    }


public function get_user()
{
    $this->db->where('username',$_SESSION["email"]);
    $query=$this->db->get('sqluser');
    $result=$query->result();
    $num_rows=$query->num_rows();
    return array("all_data"=>$result,"num_rows"=>$num_rows);
}


public function get_dblist()
{
    $this->db->where('username',$_SESSION["email"]);
    $query=$this->db->get('sqldb');
    $result=$query->result();
    $num_rows=$query->num_rows();
    return array("all_data"=>$result,"num_rows"=>$num_rows);
}

public function addusertoDB($data){
    $database=$data['database'];
    $username=$data['user'];
    $updatedata = array(
        'sqluserids' =>$data['userstring'].$username.",",
    );
    if($this->db->query("GRANT CREATE, SELECT, INSERT,UPDATE,DELETE,ALTER,INDEX,DROP,CREATE TEMPORARY TABLES,SHOW VIEW,CREATE ROUTINE,ALTER ROUTINE,EXECUTE,CREATE VIEW,EVENT,TRIGGER ON $database . * TO '$username'@'%' ")){
        $this->db->where('sqldbname',$database);
            return $this->db->update('sqldb', $updatedata);
    }
    else{
        return 0;
    }
}

public function getuserforDB($data){
    $this->db->where('sqldbname',$data);
    $query=$this->db->get('sqldb');
    $result=$query->result();
    $num_rows=$query->num_rows();
    return array("all_data"=>$result,"num_rows"=>$num_rows);
}

}

?>

