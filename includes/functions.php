<?php
/**
 * Helper functions for the product listing challenge
 * Please add any additional code below this comment.
 */

/**
 * Format price with currency symbol
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
 * Generate star rating HTML
 */
function generateStarRating($rating, $maxStars = 5) {
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5;
    $emptyStars = $maxStars - $fullStars - ($halfStar ? 1 : 0);
    
    $html = '';
    
    // Full stars
    for ($i = 0; $i < $fullStars; $i++) {
        $html .= '<span class="star star-full">★</span>';
    }
    
    // Half star
    if ($halfStar) {
        $html .= '<span class="star star-half">☆</span>';
    }
    
    // Empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        $html .= '<span class="star star-empty">☆</span>';
    }
    
    return $html;
}

/**
 * Get discount percentage
 */
function getDiscountPercentage($originalPrice, $currentPrice) {
    if (!$originalPrice || $originalPrice <= $currentPrice) {
        return 0;
    }
    
    return round((($originalPrice - $currentPrice) / $originalPrice) * 100);
}

/**
 * Generate placeholder image URL if image doesn't exist
 */
function getImageUrl($imagePath, $productName = '') {
    // In a real application, you'd check if the file exists
    // For this challenge, we'll use placeholder.com
    $width = 300;
    $height = 300;
    $text = urlencode($productName ?: 'Product');
    
    return "https://via.placeholder.com/{$width}x{$height}/f0f0f0/333333?text={$text}";
}

/**
 * Sanitize output for HTML
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
