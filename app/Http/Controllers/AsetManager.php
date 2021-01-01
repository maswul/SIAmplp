<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// Note next two lines:
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AsetManager extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->init();
    }

    public function admin()
    {
        if (Auth::user()->role > 2) {
            return redirect()->route('easet');
        }
        return view('aset.manager');
    }

    protected function init()
    {
        //! pertama hapus emua dulu yang tidak diperlukan di menu adminlte
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->remove('home');
            $event->menu->remove('masterdata');
            $event->menu->remove('laporan');
            $event->menu->remove('perjadin');
            $event->menu->addBefore('link', [
                'header' => 'e-Aset Manager',
                'key' => 'asetmanager'
            ]);
            $event->menu->addAfter(
                'asetmanager',
                [

                    'text' => 'Dashboard',
                    'route' => 'easet.admin',
                    'icon' => 'fa fa-fw fa-house-damage',
                    'key' => 'asethome',

                ]
            );
            $event->menu->addAfter('asethome',  [
                'text' => 'Cetak',
                'route' => 'easet.cetak',
                'icon' => 'fa fa-fw fa-print'
            ]);
        });
    }
}
