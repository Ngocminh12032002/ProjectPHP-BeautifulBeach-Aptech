<?php
class ContactAdminModel extends Model
{

    private $_table = 'contacts';
    public $id, $fullname, $email, $note, $status, $created_at, $updated_at;

    public function form()
    {
        $this->id = $this->db->getPost('id');
        $this->fullname = $this->db->getPost('fullname');
        $this->email = $this->db->getPost('email');
        $this->phone_number = $this->db->getPost('phone_number');
        $this->subject = $this->db->getPost('subject');
        $this->status = $this->db->getPost('status');
        $this->note = $this->db->getPost('note');
        $this->message = $this->db->getPost('message');
        $this->status = $this->db->getPost('status');

        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }
    public function getList()
    {
        $sql = "SELECT * FROM $this->_table";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['search']) && !empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE phone_number like '%$option%' and ((fullname like '%$keyword%') OR (email  like '%$keyword%')) ";
            } else if (!empty($_POST['search']) && empty($_POST['option'])) {
                $keyword = $_POST['search'];
                $sql = "SELECT * FROM $this->_table WHERE  fullname like '%$keyword%' or email  like '%$keyword%' ";
            } else if (empty($_POST['search']) && !empty($_POST['option'])) {
                $option = $_POST['option'];
                $sql = "SELECT * FROM $this->_table WHERE  phone_number like '%$option%'";
            }
        } else {
            $sql = "SELECT * FROM $this->_table";
        }

        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $dataList = [];
        foreach ($list as $item) {
            $u = new ContactAdminModel();
            $u->id = $item['id'];
            $u->fullname = $item['fullname'];
            $u->email = $item['email'];
            $u->phone_number = $item['phone_number'];
            $u->subject = $item['subject'];
            $u->status = $item['status'];
            $u->note = $item['note'];
            $u->message = $item['message'];
            $u->created_at = $item['created_at'];
            $u->updated_at = $item['updated_at'];
            $dataList[] = $u;
        }
        return $dataList;
    }

    public function first($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE id = $id";
        $list = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    public function editPost($dataForm = "")
    {

        $this->updated_at =  date('Y-m-d H:i:s');
        $dataForm = (object)$dataForm;
        $dataForm->message = strip_tags($dataForm->message);
        $sql = "UPDATE $this->_table SET fullname = '$dataForm->fullname', email = '$dataForm->email', phone_number = '$dataForm->phone_number',
            subject = '$dataForm->subject', status = '$dataForm->status', note = '$dataForm->note', message = '$dataForm->message',
        	updated_at = '$this->updated_at' WHERE id= '$dataForm->id'";
        $this->db->query($sql);
    }

    public function delPost($id)
    {
        $sql = "DELETE FROM $this->_table WHERE id = $id";
        $this->db->query($sql);
    }
}