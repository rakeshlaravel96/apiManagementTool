<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Commentform extends Component
{


    public $user_id;
    public $comment;
    public $api_id;
    public $save_id;

    public $listeners = ['commentapi','saveid'];


    public function commentapi($id){
        $this->api_id = $id;

    }
    public function saveid($id){
        $this->api_id = $id;

    }
    public function submit()
    {
    
        $data = [
            'comment' => $this->comment,
            'user_id' => Auth::user()->id,
            'api_id' =>$this->api_id
        ];



      
    
  
      $comment =  Comment::create($data);

       

        $this->reset('comment');
        
        $this->emit('addcomment');
    
       
    }
    public function render()
    {
        return view('livewire.commentform');
    }
}
