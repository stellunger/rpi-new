<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		$data['title'] = 'Инжиниринговая организация полного цикла | Инжиниринг-урал.рф';

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('b_contact_form');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		
		switch($page_id)
		{
			case 'projects':
				$data['title'] = 'Проектные работы, разработка проектно-сметной документации, авторский надзор';
				break;

			case 'equipment':
				$data['title'] = 'Каталог оборудования';
				break;

			case 'emkosti':
				$data['title'] = 'Емкостное оборудование';
				break;

			case 'kns':
				$data['title'] = 'Канализационные насосные станции';
				break;

			case 'pns':
				$data['title'] = 'Повысительные насосные станции';
				break;

			case 'vodopodgotovka':
				$data['title'] = 'Комплектные станции водоподготовки';
				break;

			case 'osps':
				$data['title'] = 'Очистные сооружения поверхностного стока';
				break;

			case 'oshbs':
				$data['title'] = 'Очистные сооружения хозяйственно-бытового стока';
				break;

			case 'osprs':
				$data['title'] = 'Очистные сооружения производственного стока';
				break;

			case 'nefteulovitel':
				$data['title'] = 'Нефтеуловитель';
				break;

			case 'peskoulovitel':
				$data['title'] = 'Пескоуловитель';
				break;

			case 'sf':
				$data['title'] = 'Сорбционный фильтр';
				break;

			case 'giroulovitel':
				$data['title'] = 'Жироуловитель';
				break;

			case 'montage':
				$data['title'] = 'Строительно-монтажные работы';
				break;

			case 'service':
				$data['title'] = 'Пусконаладочные и сервисные работы';
				break;

			case 'about':
				$data['title'] = 'О Группе Компаний';
				break;

			case 'contacts':
				$data['title'] = 'Контактная информация';
				break;
				
		}

		$data['title'] .= ' | Инжиниринг-урал.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('b_contact_form');
		$this->load->view('footer');
	}

	public function send_email()
	{
		
		$data = array(
				'name' => $this->input->post('inputName'),
				'company' => $this->input->post('inputCompany'),
				'email' => $this->input->post('inputEmail'),
				'phone' => $this->input->post('inputPhone'),
				'message' => $this->input->post('inputMessage')
			);

		$email_subject = "Новая заявка! ИНЖИНИРИНГ-УРАЛ.РФ: от ".$data['name']."(".$data['company'].")";

		$email_content = "Добрый день!\nВам пришла новая заявка с сайта ИНЖИНИРИНГ-УРАЛ.РФ.\n";
		$email_content .= "Имя и фамилия: ".$data['name'];
		$email_content .= "\nКомпания: ".$data['company'];
		$email_content .= "\nЭлектронная почта: ".$data['email'];
		$email_content .= "\nТелефон: ".$data['phone'];
		$email_content .= "\nСообщение:\n".$data['message'];

		$this->load->library('email');

		$this->email->from('robot@ystellunger.ru', 'Робот Штеллунгера');
		$this->email->to('zapros@sk-rosprom.ru'); 
		$this->email->cc('imstellunger@yandex.ru'); 
		$this->email->subject($email_subject);
		$this->email->message($email_content);	
		$this->email->send();

		$data['title'] = 'Спасибо за заявку! | Инжиниринг-урал.рф';

		$this->load->view('header');
		$this->load->view('thanks');		
		$this->load->view('footer');
	}
}

