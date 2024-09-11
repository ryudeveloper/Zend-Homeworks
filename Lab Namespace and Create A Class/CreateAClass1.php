<?php
class User{
	protected string $email;
	protected string $username;
	protected string $password;
	
	public function __construct(string $email, string $username, string $password){
		$this->email = $this->validateField($email, 'email');
		$this->username = $this->validateField($username, 'username');
		$this->password = $this->validateField($password, 'password');

}
protected function validateField(string $field, string $fieldName) : string{
	if(empty($field)){
		throw new InvalidArgumentException("Please, provide a valid $fieldName.");
	}
	return $field;
}

public function getUserInfo(){
	return "Email: {$this->email}, Username: {$this->username}, Password: {$this->password}";
}
}
$user = new User('test@email.com', 'Miquéias', 'test123');
echo $user->getUserInfo();