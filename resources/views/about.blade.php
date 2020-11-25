@extends('layout/main')
@section('title', 'About Us | Page')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Hello, I'm {{ $name }}!</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, accusamus nemo assumenda neque
                doloribus voluptatem. Ipsum repudiandae rem unde cumque nulla cum quia vitae veritatis repellendus!
                Exercitationem ipsa ad, ea id adipisci laudantium iusto ullam nulla nihil fugiat eaque porro sapiente
                sunt ducimus. Quaerat expedita aspernatur aliquam repudiandae ducimus rerum!</p>
        </div>
    </div>
</div>
@endsection