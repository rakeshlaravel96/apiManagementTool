<?php

namespace App\Http\Livewire;

use App\Models\Module;
use Livewire\Component;

class AllApi extends Component
{
    public $modules;
    public function mount(){
        $this->modules = Module::get();
    }

    public function commentapi($api_id){
        $this->emit('commentapi', $api_id);
    }
    public function render()
    {
        return view('livewire.all-api');
    }
}
