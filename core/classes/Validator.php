<?php

namespace Core\Classes;

class Validator
{
    protected array $errors = [];
    protected $dataItems;
    protected array $rulersList = ['required', 'min', 'max', 'email', 'match'];
    protected $errorText = [
        'required' => 'Данное поле должно быть заполнено!',
        'min' => 'Минимальное количество символов не должно быть меньше :template:',
        'max' => 'Число символов не должно превышать :template:',
        'email' => 'Неправильный email!',
    ];

    public function validate(array $data, array $rules)
    {
        $this->dataItems = $data;
        foreach ($data as $fieldName => $value) {
            if (array_key_exists($fieldName, $rules)) {
                $this->check([
                    'fieldName' => $fieldName,
                    'value' => $value,
                    'rules' => $rules[$fieldName]
                ]);
            }
        }
    }

    protected function check(array $field)
    {
        foreach ($field['rules'] as $rule => $ruleValue) {
            if (in_array($rule, $this->rulersList)) {
                if (!call_user_func_array([$this, $rule], [$field['value'], $ruleValue])) {
                    $this->addError($field['fieldName'], str_replace([':template:'], [$ruleValue], $this->errorText[$rule]));
                }
            }
        }
    }

    public function getErrors() 
    {
        return $this->errors;
    }

    public function hasErrors() 
    {
        return empty($this->errors);
    }

    public function listErrors($fieldName)
    {
        $output = [];
        $innerHtml = '';
        if (array_key_exists($fieldName, $this->errors)) {
            foreach ($this->errors[$fieldName] as $error) {
                $output[] = "<p>{$error}</p>";
            }
        }
        $innerHtml = implode('', $output);

        return $innerHtml;
    }

    protected function addError($fieldName, $errorMessage)
    {
        $this->errors[$fieldName][] = $errorMessage;
    }

    protected function required(string $value, int $ruleValue): bool
    {
        return !empty(trim($value));
    }

    protected function min(string $value, int $ruleValue): bool
    {
        return mb_strlen($value, 'UTF-8') >= $ruleValue;
    }

    protected function max(string $value, int $ruleValue): bool
    {
        return mb_strlen($value, 'UTF-8') <= $ruleValue;
    }

    protected function email(string $value, int $ruleValue): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    protected function match(string $value, $ruleValue)
    {
        return $value === $this->dataItems[$ruleValue];
    }
}