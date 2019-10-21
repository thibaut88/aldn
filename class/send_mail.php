<?php
class sendMail{
	public function setHeader($header){
		$this->header = $header;
	}
	public function setSubject($subject){
		$this->subject = $subject;
	}
	public function send($email='code.thibaut@gmail.com', $content){
		$this->to = $email;
  		mail($this->to, $this->subject, $content, $this->headers);
	} 
}