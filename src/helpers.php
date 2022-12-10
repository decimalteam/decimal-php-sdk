<?php

use bitwasp\Bech32;

if (!function_exists('sortPayload')) {

    function sortPayload($payload)
    {
        $sorted = [];
        if (is_object($payload))
            $payload = (array) $payload;
        $keys = array_keys($payload);
        sort($keys);

        foreach ($keys as $key)
            $sorted[$key] = is_array($payload[$key]) ? sortPayload($payload[$key]) : (string) $payload[$key];

        return $sorted;
    }
}

if (!function_exists('amountUNIRecalculate')) {

    function amountUNIRecalculate($amount, $from = false)
    {
        $exp = 18;
        if ($from)
            $exp = -18;
        $numb = $amount * pow(10, $exp);
        $preparednum = number_format($numb, 0, ',', '');
        return $preparednum;

    }
}

if (!function_exists('dec2hex')) {
    function dec2hex($number)
    {
        $hexvalues = array(
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            'A',
            'B',
            'C',
            'D',
            'E',
            'F'
        );
        $hexval = '';
        while ($number != '0') {
            $hexval = $hexvalues[bcmod($number, '16')] . $hexval;
            $number = bcdiv($number, '16', 0);
        }
        return $hexval;
    }
}

if (!function_exists('pretty_p')) {

    function pretty_p($data)
    {
        $json_string = stripcslashes(json_encode($data, JSON_PRETTY_PRINT));
        echo "<pre>" . $json_string . "<pre>";
    }
}

if (!function_exists('isBech32')) {
    function isBech32($address)
    {
        $prefix = 'dx';
        $expr = sprintf(
            '/^((%s)(0([ac-hj-np-z02-9]{39}|[ac-hj-np-z02-9]{59})|1[ac-hj-np-z02-9]{8,87}))$/',
            $prefix
        );

        if (preg_match($expr, $address, $match) === 1) {
            try {
                // var_dump(\Bitwasp\Bech32\decode($address));
                return true;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        return false;
    }
}