<div>
   
@foreach($comments as $item)
 <div class="comment-list">
    <div class="name-time">


        <h2 class="name">
           {{$item->user->name}}
         </h2>
         <h3>
            {{$item->created_at}}
         </h3>
    </div>
  
    <p class="comment-text">
        {{$item->comment}}</p>
</div>
@endforeach
</div>