<?php

if (!function_exists('custom_word_limiter')) {
    function custom_word_limiter($text, $limit = 100) {
        $words = explode(' ', $text);
        return implode(' ', array_splice($words, 0, $limit)) . (count($words) > $limit ? '...' : '');
    }
}
    