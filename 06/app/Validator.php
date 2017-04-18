<?php

class Validator
{
    private $errors = array();

    public function validate(array $data, array $rules)
    {
        $valid = true;

        foreach ($rules as $item => $ruleset) {
            $ruleset = explode('|', $ruleset);

            foreach ($ruleset as $rule) {
                $pos = strpos($rule, ':');

                if ($pos != false) {
                    $parameter = substr($rule, $pos + 1);
                    $rule = substr($rule, 0, $pos);
                } else {
                    $parameter = '';
                }

                $methodName = 'validate'.ucfirst($rule);

                $value = isset($data[$item]) ? $data[$item] : null;

                if (method_exists($this, $methodName)) {
                    $this->$methodName($item, $value, $parameter) or $valid = false;
                }
            }
        }
        return $valid;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    private function validateRequired($item, $value, $parameter)
    {
        if ($value === '' || $value === null) {
            $this->errors[$item][] = 'The '.$item.' field is required';
            return false;
        }
        return true;
    }

    private function validateEmail($item, $value, $parameter)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$item][] = 'The '.$item.' field should be a valid email address';
            return false;
        }
        return true;
    }

    private function validateMin($item, $value, $parameter)
    {
        if (strlen($value) >= $parameter == false) {
            $this->errors[$item][] = 'The '.$item.' field should have a minimum lenght of '.$parameter;
            return false;
        }
        return true;
    }
}
