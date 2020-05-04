<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;

class FlashController extends ControllerBase
{

    public function indexAction()
    {
        if($this->request->isPost())
        {
            // any condition to trigger flash
            if ($this->request->getPost())
            {
                
                // cek manual apakah ada username sama dengan yang didaftarkan
                $username = $this->request->getPost('username');
                $result = User::findFirstByUsername($username);
                if ($result)
                {
                    // styling inline
                    // gunakan template bootstrap yg kalian inginkan lewat ini atau bisa set di DI
                    // $cssClasses = [
                    //     'error' => 'errorMessage',
                    //     'notice' => 'noticeMessage',
                    //     'success' => 'successMessage',
                    //     'warning' => 'warningMessage',
                    // ];
                    // $this->flash->setCssClasses($cssClasses);

                    // custom different template
                    // $template = "<h4 class='%cssClass%'>%message%</h4>";
                    // $this->flash->setCustomTemplate($template);

                    // jenis flash
                    $this->flash->success('Sukses menggagalkan pendaftaran akun ini - flash');
                    $this->flash->error('Akun dengan username '.$username.' sudah pernah didaftarkan - flash');
                    $this->flash->warning('Gunakan akun lain untuk didaftarkan - flash');
                    $this->flash->notice('Disarankan menggunakan kombinasi angka dan huruf - flash');

                    // implicit flush
                    // $this->flash->setImplicitFlush(true);  // membuat output tak muncul

                    // message
                    // $this->flash->clear();
                    // $this->flash->message('aku', 'dari pesan developer - flash');
                }else{
                    $user = new User();
                    $user->assign($this->request->getPost(),['username','password']);
                    if ($user->save())
                    {
                        // flash session used with redirect to /dashboard
                        // $this->flashSession->success('Akun '.$username.' berhasil didaftarkan - flashSession');
                        // $this->response->redirect('/dashboard');
                        
                        // flash work without redirect
                        $this->flash->success('Akun '.$username.' berhasil didaftarkan - flash');
                    }
                }
            }
        }

    }

    public function dashboardAction()
    {

    }
}

