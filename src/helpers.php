<?php

use DecimalSDK\Errors\DecimalException;

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

if (!function_exists('getCommissionToUNI')) {

    function getCommissionToUNI($amount, $from = false)
    {
        $exp = 16;
        if ($from)
            $exp = -16;
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
        $prefix = 'd0';
        $expr = sprintf(
            '/^((%s)(0([ac-hj-np-z02-9]{39}|[ac-hj-np-z02-9]{59})|1[ac-hj-np-z02-9]{8,87}))$/',
            $prefix
        );

        if (preg_match($expr, $address, $match) === 1) {
            return true;
        }

        return false;
    }
}

if (!function_exists('generateNftId')) {
    function generateNftId($headline, $description, $pathCover, $pathImage)
    {
        $characters = "CadgWIHKcOkPzn5X0Eji96F7RLiLAxPQ";
        $randomString = '';
        for ($i = 0; $i < strlen($characters); $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $assetHash = hash_file('sha1', $pathCover, false);
        $coverHash = hash_file('sha1', $pathImage, false);

        try {
            $hashes = [
                sha1($headline),
                sha1($description),
                sha1($randomString),
                $coverHash,
                $assetHash
            ];
            $id = implode('', $hashes);

            return sha1($id);
        } catch (\Exception $error) {
            throw new DecimalException('Error wher trying to get hash ' . $error->getMessage());
        }
    }
}