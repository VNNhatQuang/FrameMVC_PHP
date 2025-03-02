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
        if (!v::notEmpty()->stringType()->length(8, 20)->regex('/[A-Z]/')->regex('/[a-z]/')->regex('/[0-9]/')->regex('/[\W]/')->validate($this->data['password'] ?? '')) {
            $this->errors['password'] = 'Mật khẩu phải không được để trống, phải chứa ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt';
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
