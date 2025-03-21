<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navmenu extends Component
{
    public $openNav = false;
    public $openAvatar = false;

    public $template = 'default';

    public function selectTemplate($item)
    {
        $this->template = $item;
    } 
    public function toggleNav()
    {
        $this->openNav = !$this->openNav;
    }
    public function toggleAvatar()
    {
        $this->openAvatar = !$this->openAvatar;
    
    }
    public function render()
    {
        return view('livewire.navmenu');
    }
}
