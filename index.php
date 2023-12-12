<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

// Create a Twig loader and set the template directory
$loader = new \Twig\Loader\FilesystemLoader('Twig/Templates');

// Create a Twig environment with the loader
$twig = new \Twig\Environment($loader);

// Define data to be passed to the template
$data = [
    'pageTitle' => 'Sneakers | Limited Edition Sample',
    'products' => [
        'shoes' => [
            'name' => 'Fall Limited Edition Sneakers',
            'description' => "These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they'll withstand everything the weather can offer.",
            'original_price' => '250.00',
            'discount' => '50',
            'images' => [
                ['src' => '/images/image-product-1.jpg', 'alt' => 'Shoes showcase 1'],
                ['src' => '/images/image-product-2.jpg', 'alt' => 'Shoes showcase 2'],
                ['src' => '/images/image-product-3.jpg', 'alt' => 'Shoes showcase 3'],
                ['src' => '/images/image-product-4.jpg', 'alt' => 'Shoes showcase 4'],
            ]
        ]
    ]
];



// Load the template
$template = $twig->load('index.twig');
// Render the template with the provided data
echo $template->render($data);
