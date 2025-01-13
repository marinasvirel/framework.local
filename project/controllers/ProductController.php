<?php

namespace Project\Controllers;

use \Core\Controller;
use Project\Models\Product;

class ProductController extends Controller
{
  public $products;

  public function __construct()
  {
    $this->products = [
      1 => [
        'name'     => 'product1',
        'price'    => 100,
        'quantity' => 5,
        'category' => 'category1',
      ],
      2 => [
        'name'     => 'product2',
        'price'    => 200,
        'quantity' => 6,
        'category' => 'category2',
      ],
      3 => [
        'name'     => 'product3',
        'price'    => 300,
        'quantity' => 7,
        'category' => 'category2',
      ],
      4 => [
        'name'     => 'product4',
        'price'    => 400,
        'quantity' => 8,
        'category' => 'category3',
      ],
      5 => [
        'name'     => 'product5',
        'price'    => 500,
        'quantity' => 9,
        'category' => 'category3',
      ],
    ];
  }

  public function show($params)
  {
    $this->title = $this->products[$params['id']]['name'];
    return $this->render('product/act', [
      'product' => $this->products[$params['id']],
    ]);
  }

  public function all()
  {
    $this->title = "Список всех продуктов";
    $products = (new Product)->getAll();

    return $this->render('product/all', [
      'products' => $products,
      'h1' => $this->title
    ]);
  }

  public function one($params) {
    $product = (new Product)->getById($params['id']);
    $this->title = $product['name'];

    return $this->render('product/one', [
      'h1' => $this->title,
      'price' => $product['price'],
      'count' => $product['count'],
      'description' => $product['description'],
    ]);
  }
}
