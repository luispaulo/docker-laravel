<?php

namespace App\Services;

class StringService
{
    public function todasStringsMaisLongas(array $inputArray): array
    {
        if (empty($inputArray)) {
            return [];
        }
        
        $maxLength = max(array_map('mb_strlen', $inputArray));

        $result = array_filter($inputArray, function ($string) use ($maxLength) {
            return mb_strlen($string) === $maxLength;
        });

        return array_values($result);
    }
}
