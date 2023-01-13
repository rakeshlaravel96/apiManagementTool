
@extends('applayout.app')

@section('content')

<div class="contain">

    @includeIf('front.sidebar')
     @includeIf('front.main')
 
</div>


@endsection