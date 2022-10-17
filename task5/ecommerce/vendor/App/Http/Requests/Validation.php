<?php
namespace App\Http\Requests;

 class Validation {
    private string $input;
    private string $inputName;
    private array $errors = [];
   public function required(){
    if(empty($this->input)){
        $this->errors[$this->inputName][__FUNCTION__]= "{$this->inputName} is required";
    
    }return $this;

    }
    public function string(){
        if(! is_string($this->input)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is not strimg";
        }
        return $this;

    }
    public function between(int $min ,int $max){
        if(!(strlen($this->input)>=$min && strlen($this->input)<=$max)){

            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is must be between{$min},{$max}";
        } return $this;

    }
    public function regular_exp(string $pattern , $message = null){
        if(! preg_match($pattern,$this->input)){
            
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is invalid";
        }return $this;

    }
    public function unique(){

    }
    public function confirm_password($pass_confirm){
        if($this->input !==$pass_confirm){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is invalid"; 
        }return $this;

    }
    public function in(array $values)){
        if( ! in_array($this->input,$values)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is invalid";
        }return $this,

    }


    /**
     * Get the value of input
     */ 
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Set the value of inputName
     *
     * @return  self
     */ 
    public function setInputName($inputName)
    {
        $this->inputName = $inputName;

        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }
 }