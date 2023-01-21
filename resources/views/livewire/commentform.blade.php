<div class="comment-box">
    <h2 class="name">
       {{Auth::user()->name}}
    </h2>
   <form wire:submit.prevent="submit">

       <textarea class="form-control" id="textAreaExample" rows="4" wire:model="comment" placeholder="Add a comment…"></textarea>
       <button type="submit" class="btn">SEND</button>
   </form>
</div>
