<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\Template;

class Login extends BaseController
{
    public function Index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $itemCount = $this->getCartItemCount(); // Get cart item count

        $template = new Template();
        return $template->Render('Login/Index', [
            'title' => 'เข้าสู่ระบบ',
            'itemCount' => $itemCount // Pass item count to the view
        ]);
    }

    public function Check()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $itemCount = $this->getCartItemCount(); // Get cart item count

        $template = new Template();
        if (empty($username) || empty($password)) {
            return $template->Render('Login/Check', [
                'title' => 'ตรวจสอบการเข้าสู่ระบบ',
                'error' => true,
                'message' => 'กรุณากรอกข้อมูลให้ครบถ้วน',
                'itemCount' => $itemCount // Pass item count to the view
            ]);
        }

        $rowUser = (new UserModel())->where([
            'username' => $username,
            'password' => $password
        ])->first();

        if (empty($rowUser)) {
            return $template->Render('Login/Check', [
                'title' => 'ตรวจสอบการเข้าสู่ระบบ',
                'error' => true,
                'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
                'itemCount' => $itemCount // Pass item count to the view
            ]);
        }

        // Check if a session is already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $rowUser['user_id'];
        $_SESSION['role'] = $rowUser['role'];

        return redirect()->to('/');
    }

    private function getCartItemCount()
    {
        // Your logic to get cart item count
    }
}
