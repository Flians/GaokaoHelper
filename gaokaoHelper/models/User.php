<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $username;
    public $psd;
    public $obj;


    public function idAdm()
    {
        return gettype($this->obj) == gettype(new AdminBase()) ;
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
    	$var = AdminBase::findOne($id);
    	if($var == null)
    	{
    		return null;
    	} else {
	    	$u = new User();
	    	$u->username = $var->username;
	    	$u->psd = $var->psd;
	    	$u->obj = $var;
	        return $u;
    	}
    }
    
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->username;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return "";
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->psd === $password;
    }
}
