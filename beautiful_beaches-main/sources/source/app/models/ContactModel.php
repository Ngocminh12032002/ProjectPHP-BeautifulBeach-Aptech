<?php

class ContactModel extends Model
{
	protected $_table = 'contacts';
	public $id, $fullname, $email, $phone_number, $subject, $message, $created_at, $updated_at;
	public $errors = [];

	public function validate()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty(trim($_POST['fullname']))) {
				$errors['fullname']['required'] = "Họ tên không được để trống";
			} else {
				if (strlen(trim($_POST['fullname'])) < 5) {
					$errors['fullname']['min'] = "Họ tên phải lớn hơn 5 ký tự";
				}
			}

			if (empty(trim($_POST['email']))) {
				$errors['email']['required'] = "Email không được để trống";
			} else {
				if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
					$errors['email']['invalid'] = "Email không hợp lệ";
				}
			}
		}
		if (empty($errors)) {
			return true;
		}
		return $errors;
	}
	public function addPost($data)
	{

		$this->created_at = date('Y-m-d H:i:s');
		$this->updated_at = date('Y-m-d H:i:s');
		$data = (object)$data;
		$sql = "insert into $this->_table (fullname, email, phone_number, subject, message, created_at, updated_at) 
		values 
		('$data->fullname', '$data->email', '$data->phone_number', '$data->subject', '$data->message','$this->created_at', '$this->updated_at')";
		$this->db->query($sql);
	}
}