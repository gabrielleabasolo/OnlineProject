@extends('layouts.app')

@section('content')
    
    <div class="grid flex-1 grid-cols-1 m-10">
        <div class="p-2">
            <H1 class="self-center px-3 py-3 font-sans text-4xl"><u>Welcome!</u></H1>
        </div>
        <div>
            <h2 class="container px-5 mx-1 text-base">
            My name is <b>Gabrielle Abasolo</b> ,I am a web developer based in the Philippines. <br> 
                    I have been practicing development for approximately 3 years now</h2>
        </div>
        <div>
            <img src="" alt="">
        </div>
    </div>

    <div class="flex my-3 bg-gray-600">
        <div class="self-center px-10">
            <h1 class="p-3 font-sans text-4xl"><u>Skills</u></h1>
        </div>
        <p class="self-center py-3 font-sans">the following are the skills I've learned from the years and still trying to practice</p>
        <Ul class="flex flex-row divide-x divide-gray-400">
            <li class="content-center p-10"><a href="/">HTML</a></li>
            <li class="content-center p-10"><a href="/">Javascript</a></li>
            <li class="content-center p-10"><a href="/">CSS</a></li>
            <li class="content-center p-10"><a href="/">PHP</a></li>
            <li class="content-center p-10"><a href="/">Laravel</a></li>
        </Ul>
    </div>
    <div class="flex">
        <div class="self-center px-10">
            <h1 class="p-3 font-sans text-4xl"><u>Background</u></h1>
        </div>
    </div>

@endsection