@extends('layouts.app')

@section('content')
    
    <div class="flex justify-center flex-auto m-10">
        <div class="p-2">
            <H1 class="self-center px-3 py-3 font-sans text-4xl"><u>Welcome!</u></H1>
        </div>
        <div class="self-center">
            <h2 class="container px-5 mx-1 text-base">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Unde minus commodi necessitatibus magnam sit facere, 
                 dolorum aperiam ad eum tempore illum sequi, optio pariatur quis sapiente perferendis.
                 Possimus tempora explicabo recusandae cum perferendis voluptatibus provident, 
                 quis quidem earum officiis autem iure perspiciatis fuga eveniet sed a quam non vel quae 
                 consequatur id? Blanditiis labore beatae fugiat numquam excepturi sequi, iusto, rerum ut 
                 fuga molestias esse laborum porro consectetur deserunt id magnam velit repellendus reprehenderit 
                 qui quidem eaque aperiam molestiae possimus fugit! Dolores, sunt voluptas eius inventore fuga 
                 suscipit sequi minima rerum? Quam sunt maiores error quas optio illo, architecto ipsam?
        </div>
        <div>
            
        </div>
    </div>

    <div class="grid justify-center my-3 bg-gray-600">
        <div class="self-center">
            <h1 class="font-sans text-4xl"><u>Skills</u></h1>
        </div>
        <p class="self-center py-3 font-sans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptate.</p>
        <Ul class="flex flex-row divide-x divide-gray-400">
            <li class="content-center p-10"><a href="/"><img src="{{  asset('resources/html-file-with-code-symbol.png')  }}" class="object-contain h-10"></a></li>
            <li class="content-center p-10"><a href="/"><img src="{{  asset('resources/css_icon_153522.png')  }}" class="object-contain h-10"></a></li>
            <li class="content-center p-10"><a href="/"><img src="{{  asset('resources/282802_javascript_js_icon.png')  }}" class="object-contain h-10"></li>
            <li class="content-center p-10"><a href="/"><img src="{{  asset('resources/brand_laravel_icon_157900.png')  }}" class="object-contain h-10"></a></li>
            <li class="content-center p-10"><a href="/"><img src="{{  asset('resources/tailwindcss_logo_icon_167923.png')  }}" class="object-contain h-10"></a></li>
        </Ul>
    </div>
    
    <div class="flex flex-row justify-center my-10">
        <div class="self-center px-10">
            <h1 class="p-3 font-sans text-4xl"><u>Background</u></h1>
        </div>
        <div class="self-center">
            <h1 class="text-lg"><a href="https://sanbeda-alabang.edu.ph/" class="hover:text-red-700"><b>San Beda College Alabang</b></a></h1>
            <h2>Course: Bachelors in Science in Information Technology</h2>
            <h2>Educational Attainment: College Graduate</h2>
            <h2>2013-2017</h2>
        </div>
        <div>
            <img src="{{  asset('resources/San_Beda_College_Alabang_logo.png')  }}" class="object-contain h-28 mx-36">
        </div>
    </div>

    <div class="flex flex-row justify-center my-10">
        <div class="self-center px-10">
            <h1 class="px-12 font-sans text-4xl"><u>Projects</u></h1>
        </div>
        <div class="self-center">
            <h1 class="text-lg"><a href="https://sanbeda-alabang.edu.ph/" class="hover:text-red-700"><b>San Beda College Alabang</b></a></h1>
            <h2>Course: Bachelors in Science in Information Technology</h2>
            <h2>Educational Attainment: College Graduate</h2>
            <h2>2013-2017</h2>
        </div>
        <div>
            <img src="{{  asset('resources/San_Beda_College_Alabang_logo.png')  }}" class="object-contain h-28 mx-36">
        </div>
    </div>
    
@endsection