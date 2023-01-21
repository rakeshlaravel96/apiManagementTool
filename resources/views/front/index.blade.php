
@extends('applayout.app')

@section('content')

<div class="contain">
    @includeIf('front.logmodel')
     @includeIf('front.comment')
    @includeIf('front.sidebar')
     @includeIf('front.main')
 
</div>


@endsection