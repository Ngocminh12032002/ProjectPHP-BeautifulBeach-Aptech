<?php

class Contact extends BaseController
{
	public $model_contact;
	public $data = [];
	public function __construct()
	{
		$this->model_contact = $this->model('ContactModel');
	}
	public function index()
	{
		$this->data['sub_content']['errors'] = Session::flash('errors');
		$this->data['sub_content']['msg'] = Session::flash('msg');
		$this->data['sub_content']['old'] = Session::flash('old');
		$title = "Contact";
		$this->data['sub_content']['title_page'] = $title;
		$this->data['title_page'] = $title;
		$this->data['content'] = 'contact/contact';
		$this->view('layouts/client_layout', $this->data);
	}

	public function addPost()
	{
		$request = new Request();
		if ($request->isPost()) {
			// set rules
			$request->rules([
				'fullname' => 'required|min:5|max:30',
				'email' => 'required|min:5|email',
				'subject' => 'required|min:5',
				'phone_number' => 'required|min:10|max:15',
				'message' => 'required|min:5|',
			]);

			// set message_error
			$request->messages([
				'fullname.required' => 'Họ tên không được dể trống',
				'fullname.min' => 'Họ tên yêu cầu lớn hơn 5 ký tự',
				'fullname.max' => 'Họ tên yêu cầu nhỏ hơn 30 ký tự',
				'email.required' => 'Email không được để trống',
				'email.min' => 'Email yêu cầu lớn hơn 5 ký tự',
				'email.email' => 'Email chưa đúng định dạng',
				'subject.required' => 'Subject không được dể trống',
				'subject.min' => 'Subject yêu cầu lớn hơn 5 ký tự',
				'phone_number.required' => 'Số điện thoại bắt buộc phải nhập',
				'phone_number.min' => 'Số điện thoại yêu cầu lớn hơn 5 ký tự',
				'phone_number.max' => 'Số điện thoại yêu cầu nhỏ hơn 15 ký tự',
				'message.required' => 'Message bắt buộc phải nhập',
				'message.min' => 'Message yêu cầu lớn hơn 5 ký tự',
			]);
			$validate = $request->validate();
			if (!$validate) {
				Session::flash('errors', $request->errors());
				Session::flash('msg', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại!');
				Session::flash('old', $request->getFields());
			} else {
				$data = $request->getFields();
				$this->model_contact->addPost($data);
			}
		}
		$response = new Response();
		$response->redirect('contact/index');
	}
}