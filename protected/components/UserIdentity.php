<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_username;
	public function authenticate()
	{
	$username=$this->username;
	$password=$this->password;
	$user=Datauser::model()->find('username=?',array($username));	
		if(!isset($user->username))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if ($user->username!== null) {
                if ($user->password === null || $user->password != $this->password)
				 $this->errorCode = self::ERROR_PASSWORD_INVALID;
				  else  {
                    $this->_username = $user->username;
                    // $this->username = $user->username;
                    $this->errorCode = self::ERROR_NONE;
                }
				 }
		else
		
		$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}