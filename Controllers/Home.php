<?php

namespace App\Controllers;

use App\Controllers\Template;

class Home extends BaseController
{
    public function Index()
    {
        $itemCount = $this->getCartItemCount(); // Get cart item count

        $template = new Template();
        return $template->Render('Home/Index', [
            'title' => 'หน้าหลัก',
            'itemCount' => $itemCount // Pass item count to the view
        ]);
    }

    private function getCartItemCount()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        return count($cart);
    }
}

