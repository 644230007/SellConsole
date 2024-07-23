<?php

namespace App\Controllers;

use App\Controllers\Template;

class About extends BaseController
{
    public function Information()
    {
        $itemCount = $this->getCartItemCount(); // Get cart item count

        $template = new Template();
        return $template->Render('About/Information', [
            'title' => 'ข้อมูลจัดส่ง',
            'itemCount' => $itemCount // Pass item count to the view
        ]);
    }

    public function Contact()
    {
        $itemCount = $this->getCartItemCount(); // Get cart item count

        $template = new Template();
        return $template->Render('About/Contact', [
            'title' => 'ข้อมูลติดต่อ',
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
