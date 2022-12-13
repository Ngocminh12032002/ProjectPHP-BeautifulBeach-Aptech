<?php

class CommentModel extends Model
{
	private $_table = 'comments';
	public $id, $blog_id, $fullname, $email, $comment_name, $parent_id, $content, $created_at, $updated_at;

	public function form()
	{
		$this->comment_name =  $this->db->getPost('comment_name');
		$this->email =  $this->db->getPost('email');
		$this->blog_id =  $this->db->getPost('blog_id');
		$this->content =  $this->db->getPost('content');
		$this->created_at = date('Y-m-d H:i:s');
		$this->updated_at = date('Y-m-d H:i:s');

		if (!empty($this->db->getPost('parent_id'))) {
			$this->parent_id = $this->db->getPost('parent_id');
		} else {
			$this->parent_id = 0;
		}
	}

	public function addPost()
	{
		$sql = "insert into $this->_table (comment_name, email, blog_id, parent_id, content, created_at) 
		values 
		('$this->comment_name', '$this->email', '$this->blog_id', '$this->parent_id','$this->content', '$this->created_at')";
		$this->db->query($sql);
	}
}
