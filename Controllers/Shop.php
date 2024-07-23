<?php
namespace App\Controllers;

use App\Models\ProductModel;
use App\Controllers\Template;

class Shop extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

        helper('number');
        $template = new Template();
        return $template->Render('Shop/Index', [
            'title' => 'สินค้า',
            'products' => $products,
            'itemCount' => $this->getCartItemCount() // Pass item count to the view
        ]);
    }

    public function addProduct($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($id);

        if (!$product) {
            return "Product not found!";
        }

        $session = session();
        $cart = $session->get('cart') ?? [];
        
        // เพิ่มผลิตภัณฑ์ลงในตะกร้า
        $cart[] = $product;
        $session->set('cart', $cart);
        $session->setFlashdata('message', 'Product added to cart!');

        return redirect()->to('/shop/add');
    }

    public function showCart()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $itemCount = count($cart);

        helper('number');
        $template = new Template();
        return $template->Render('shop/add', [
            'title' => 'ตะกร้า', // Set the title for the add.php page
            'products' => $cart,
            'itemCount' => $itemCount
        ]);
    }
    

    public function removeProduct($index)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (isset($cart[$index])) {
            unset($cart[$index]);
            $session->set('cart', array_values($cart)); // Reindex the array
            $session->setFlashdata('message', 'Product removed from cart!');
        }

        return redirect()->to('/shop/add');
    }
    

    private function getCartItemCount()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        return count($cart);
    }
}
