<?php
namespace App\Validations\Auth;

use Respect\Validation\Validator as v;


class LoginValidation
{
    protected $data = [];
    protected $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function validate()
    {
        // Kiểm tra trường username không được rỗng và là chữ cái hoặc số
        if (!v::notEmpty()->validate($this->data['userName'] ?? '')) {
            $this->errors['userName'] = 'Username không được để trống và chỉ chứa chữ cái hoặc số';
        }

        // Kiểm tra mật khẩu:
        if (!v::notEmpty()->stringType()->validate($this->data['password'] ?? '')) {
            $this->errors['password'] = 'Mật khẩu phải không được để trống';
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
