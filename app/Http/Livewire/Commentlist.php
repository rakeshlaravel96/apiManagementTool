<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Commentlist extends Component
{

    public $comments;
    public $api_id;
    public $listeners = ['addcomment', 'commentapi'];
    

    public function commentapi($id){
        $this->api_id = $id;
    }

    public function addcomment(){
        $this->comments = Comment::where('api_id' , $this->api_id)->get();
    }

    public function mount(){
        $this->comments = Comment::where('api_id' , $this->api_id)->get();
    }
   
    

    public function render()
    {      
        return view('livewire.commentlist');
    }
}
