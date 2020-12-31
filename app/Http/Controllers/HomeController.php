<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Note next two lines:
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->updateMenu();
        return view('sppd.home');
    }

    protected function updateMenu()
    {
        //untuk nambah menu, khusus menu SPPD
        Event::listen(BuildingMenu::class, function(BuildingMenu $event){
            $event->menu->remove('perjadin');
            $event->menu->addBefore('laporan', [
                'text' => 'Perjalanan Dinas',
                'url' => '#',
                'icon' => 'fa fa-fw fa-subway',
                'label' => '10',
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'Surat Perintah Tugas',
                        'url' => '#',
                        'icon' => 'fa fa-fw fa-subway',
                        'label' => '10',
                        'label_color' => 'info',
                    ],
                    [
                        'text' => 'SPPD',
                        'url' => '#',
                        'icon' => 'fa fa-fw fa-subway',
                        'label' => '10',
                        'label_color' => 'warning',
                    ],
                    [
                        'text' => 'Kwitansi',
                        'url' => '#',
                        'icon' => 'fa fa-fw fa-subway',
                        'label' => '10',
                        'label_color' => 'danger',
                    ],
                ]
            ]);
        });
    }
}
