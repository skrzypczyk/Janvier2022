<?php

namespace App\Core;


class View{

	private $template;
	private $view;
	private $data = [];

	public function __construct(String $view, String $template = "back")
	{
		$this->setTempalte($template);
		$this->setView($view);
		
	}

	//"Auth/Register"
	public function setView(String $view): void
	{

		$view = "View/".$view.".view.php";
		if(!file_exists($view)){
			die("La vue ".$view." n'existe pas");
		}
		$this->view = $view;
	}

	public function setTempalte(String $template): void
	{

		$template = "View/".$template.".tpl.php";
		if(!file_exists($template)){
			die("Le template ".$template." n'existe pas");
		}
		$this->template = $template;

	}


	public function assign(String $key, $value): void
	{
		$this->data[$key] = $value;
	}




	public function __destruct()
	{
		extract($this->data);
		require $this->template;
	}

}

