# Sneakers | Fall Limited Edition ✨ Built with PHP (Twig)

This is an interactive and dynamic product page showcasing the power of the PHP framework: [Twig](https://twig.symfony.com/).

## Table of contents

- [Overview](#overview)
  - [Features & Functionality](#overview)
  - [Screenshot](#screenshot)
- [My process](#my-process)
  - [Built with](#my-process)
  - [What I learned](#what-i-learned)
  - [Continued development](#continued-development)
  - [Useful resources](#useful-resources)
- [Author](#author)

## Overview

### Features and Functionality

Users should be able to:

- Change quantity of item
- Add item to cart
- View their cart
- Remove items from cart
- Toggle between images
- View the optimal layout for the interface depending on their device's screen size

### Screenshot

<img src="./images/desktop-design.jpg" alt="dekstop preview" width="500"/>

## My process

### Built with

- HTML5
- CSS3
- JS (ES6)
- PHP 
- Twig
- Flexbox

### What I learned

I built this product page from scratch over a weekend (Dec. 9th - 11th, 2023) to learn and explore the PHP framework Twig.

#### A few awesome things I learned was:

Doing equations with data pulled in using Twig, in this case getting the discounted amount:

```twig
${{ products.shoes.original_price * (products.shoes.discount / 100) }}
```

Rendering data based on conditionals:

```twig
{% if products.shoes.discount is empty %}
//do something
{% else %}
//do something else
{% endif %}
```
Sending data to the Twig components I created:

```twig
{% for productKey, product in products %}
{{ include('Components/product.twig', {'product': product}) }}
{% endfor %}
```
Creating arrays in PHP:

```php
$data = [
    'pageTitle' => 'Sneakers | Limited Edition Sample',
    'products' => [ ... ]
]
```
Loading and passing data into Twig templates:

```php
$template = $twig->load('index.twig');
echo $template->render($data);
```

### Continued development

I would like to explore the Twig framework more in depth, as well as set up a backend to utilize PHP better. 

### Useful resources

- [Twig for Developers](https://twig.symfony.com/doc/3.x/api.html) 
- [Twig Components](https://symfony.com/bundles/ux-twig-component/current/index.html)

### Author

- Website - [Tyrell Curry](https://www.tyrellcurry.io)
- Linkedin - [Tyrell Curry](https://www.linkedin.com/feed/)
- Twitter - [@Tyrell_io](https://twitter.com/Tyrell_io)