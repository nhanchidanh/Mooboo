<?php

namespace app\models;

use app\core\db\DbModel;

class UserModel extends DbModel
{
  public string $fullName = '';
  public string $username = '';
  public string $password = '';
  public string $email = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function labels(): array
  {
    return [
      'fullName' => 'Full Name',
      'username' => 'Username',
      'password' => 'Password',
      'email' => 'Email'
    ];
  }

  public function save()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    return parent::save();
  }

  public function rules(): array
  {
    return [
      'fullName' => [self::RULE_REQUIRED],
      'username' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
      'email' => [self::RULE_REQUIRED, [self::RULE_EMAIL]],
      'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 32]],
    ];
  }

  public function attributes(): array
  {
    return ['fullName', 'password', 'username','email'];
  }

  public function primaryKey(): string
  {
    return 'id';
  }

  public function getDisplayName(): string
  {
    return $this->fullName;
  }
}