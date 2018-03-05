<?php
if(!defined('INITIALIZED'))
    exit;
use \RobThree\Auth\TwoFactorAuth;

class Visitor
{
    const LOGINSTATE_NOT_TRIED = 1;
    const LOGINSTATE_NO_ACCOUNT = 2;
    const LOGINSTATE_WRONG_PASSWORD = 3;
    const LOGINSTATE_LOGGED = 4;
    const LOGINSTATE_WRONG_SECRETCODE = 5;

    private static $loginAccount;
    private static $loginPassword;
    private static $loginSecretCode;
    private static $account;
    private static $loginState = self::LOGINSTATE_NOT_TRIED;

    public static function setAccount($value)
    {
        $_SESSION['account'] = $value;
    }

    public static function setSecretCode($code){$_SESSION['SecretCode'] = $code;}

    public static function setPassword($value)
    {
        $_SESSION['password'] = $value;
    }

    public static function getAccount()
    {
        if(!isset(self::$account))
            self::loadAccount();
        return self::$account;
    }

    public static function loadAccount()
    {
        $tfa = new TwoFactorAuth();
        self::$account = new Account();
        if(!empty(self::$loginAccount))
        {
            self::$account->loadByName(self::$loginAccount);
            if(self::$account->isLoaded())
                if(self::$account->isValidPassword(self::$loginPassword))
                    if(self::$account->getSecretStatus() == 1){
                        if($tfa->verifyCode(self::$account->getSecret(),(self::$loginSecretCode !== null? self::$loginSecretCode: "0")) === true){
                            self::$loginState = self::LOGINSTATE_LOGGED;
                        }else{
                            self::$loginState = self::LOGINSTATE_WRONG_SECRETCODE;
                        }
                    }else{
                        self::$loginState = self::LOGINSTATE_LOGGED;
                    }
                else
                    self::$loginState = self::LOGINSTATE_WRONG_PASSWORD;
            else
                self::$loginState = self::LOGINSTATE_NO_ACCOUNT;
        }
        else
            self::$loginState = self::LOGINSTATE_NOT_TRIED;
        if(self::$loginState != self::LOGINSTATE_LOGGED)
            self::$account = new Account();
    }

    public static function isTryingToLogin()
    {
        return !empty(self::$loginAccount);
    }

    public static function getLoginState()
    {
        return self::$loginState;
    }


    public static function isLogged()
    {
        return self::isTryingToLogin() && self::getAccount()->isLoaded();
    }

    public static function login()
    {
        if(isset($_SESSION['account']))
            self::$loginAccount = $_SESSION['account'];
        if(isset($_SESSION['password']))
            self::$loginPassword = $_SESSION['password'];
        if(isset($_SESSION['SecretCode']))
            self::$loginSecretCode = $_SESSION['SecretCode'];
    }

    public static function logout()
    {
        unset($_SESSION['account']);
        unset($_SESSION['SecretCode']);
        unset($_SESSION['password']);
        self::$loginAccount = null;
        self::$loginPassword = null;
        self::$account = new Account();
        self::$loginState = self::LOGINSTATE_NOT_TRIED;
    }

    public static function getIP()
    {
        return ip2long($_SERVER['REMOTE_ADDR']);
    }
}