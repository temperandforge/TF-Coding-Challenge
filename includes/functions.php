<?php
/**
 * Helper functions for the product listing challenge
 * Please add any additional code below this comment.
 */

/**
 * Format price with currency symbol
 *
 * @param float $price
 * @param string $currency
 *
 * @return string
 */
function formatPrice($price, $currency = 'USD') {
    $symbols = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£'
    ];
    
    $symbol = $symbols[$currency] ?? '$';
    return $symbol . number_format($price, 2);
}

/**
 * Generate placeholder image URL if image doesn't exist
 * 
 * @param string $productName
 * @param int $imageWidth
 * @param int $imageHeight
 *
 * @return string
 */
function getPlaceholderImageUrl($productName = '', $imageWidth = 300, $imageHeight = 300) {
    // In a real application, you'd check if the file exists
    // For this challenge, we'll use placeholder.com
    $text = urlencode($productName ?: 'Product');

    return "https://via.placeholder.com/{$imageWidth}x{$imageHeight}/f0f0f0/333333?text={$text}";
}

/**
 * Sanitize output for HTML
 *
 * @param string $string
 *
 * @return string
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
