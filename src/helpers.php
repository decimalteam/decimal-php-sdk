<?php

if (!function_exists('sortPayload')) {

    function sortPayload($payload)
    {
        $sorted = [];
        if (is_object($payload))
            $payload = (array)$payload;
        $keys = array_keys($payload);
        sort($keys);

        foreach ($keys as $key)
            $sorted[$key] = is_array($payload[$key]) ? sortPayload($payload[$key]) : (string)$payload[$key];

        return $sorted;
    }
}
if (!function_exists('amountUNIRecalculate')) {

    function amountUNIRecalculate($amount, $from = false)
    {
        $exp = 18;
        if ($from) $exp = -18;
        $numb = $amount * pow(10, $exp);
        $preparednum = number_format($numb, 0, ',', '');
        return $preparednum;

    }
}
if (!function_exists('pretty_p')) {

    function pretty_p($data)
    {
        $json_string = stripcslashes(json_encode($data, JSON_PRETTY_PRINT));
        echo "<pre>" . $json_string . "<pre>";
    }
}



