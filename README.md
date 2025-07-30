# PHP Coding Challenge: Product Detail Page

## Overview
This challenge tests your ability to work with PHP data structures and render HTML based on a provided design. You will be be creating 2 components: a product card grid and an accordion section with collapsible product details.

## Running Local Development
To run this project locally, ensure you have a PHP server set up. You can use tools like XAMPP, MAMP, or the built-in PHP server.
An example using the built-in PHP server:
```bash
# Navigate to the project directory
cd path/to/php-coding-challenge
# Start the PHP built-in server
php -S localhost:8000
```


## Challenge Requirements

### Task
Create a product detail page that:
1. Uses the provided PHP data structure in `data/products.php`
2. Renders the product details according to the Figma design specifications (lorem ipsum text can be used for descriptions)
3. Implements responsive design for mobile and desktop
4. Includes proper HTML semantics and accessibility features
5. Follows a reusable component-based approach for styling and layout

### What You Need to Build
Using a component and utility-based approach, you will build:
- A main product detail page (`index.php`)
- CSS styling that matches the provided Figma design
- Responsive layout (mobile-first approach recommended)
- Product cards showing all relevant information
- Proper PHP templating/structure

### Figma Design
**Design Link:** [Add your Figma link here]

The design shows:
- A grid layout of product cards
- Each card displays: product image, name, price, category, and rating
- Responsive behavior for different screen sizes
- An accordion section for product details, including description, specifications, and reviews

## Getting Started

1. Fork this repository
2. Clone your fork locally
3. Review the data structure in `data/products.php`
4. Study the Figma design carefully
5. Implement your solution using components and utility classes
   - Style your components in `assets/css/styles.css`
   - Create a component-based structure in `components/`
   - Optionally, add JavaScript functionality in `assets/js/main.js`
6. Test on multiple screen sizes
7. Submit via pull request to your fork

## Project Structure
```
php-coding-challenge/
├── data/
│   └── products.php          # Product data array
├── assets/
│   ├── css/
│   │   └── styles.css        # Your styles here
│   ├── js/
│   │   └── main.js          # Optional JavaScript
│   └── images/
│       └── placeholder/      # Placeholder product images
├── components/               # Any components you create
├── includes/
│   └── functions.php         # Helper functions (optional)
├── index.php                 # Main page (your implementation)
└── README.md
```

## Time Expectation
This challenge should take approximately 4-6 hours to complete.

## Submission Instructions
1. Complete your implementation
2. Test thoroughly
3. Commit your changes with clear commit messages
4. Create a pull request to your fork with a summary of your approach
5. Include any notes about your implementation decisions

## Questions?
If you have any questions about the requirements, please reach out before starting the challenge.

---

**Note:** Please do not modify the data structure in `data/products.php`. Your solution should work with the provided data as-is.
