@extends('layouts.master-dashboard')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard/editor.css') }}">
    <title>Org Page Editor</title>
@endsection

@section('body')
<section class="sec1">
    <div class="orgcolor" style="background-color: #b47024;"></div> 
    <div class="heading"> 
        <button class="button-back" onclick="window.location.href='#'">
            <i class="fa fa-arrow-left" style="font-size:15 px;"></i> Back 
        </button>
        

        <h1>JCI Cebu Sinulog</h1>
        <p>The Junior Chamber International (JCI) is a global organization of young active citizens, purposely aimed to create positive change in local communities.
        Our local Organization (LO), JCI Philippines Cebu Sinulog, Inc., is a local organization in the country committed to 
        realizing this aim through various humanitarian projects.
        <br><br>
        <b>JCI Declaration of Principles:</b> We believe that faith in God gives meaning and purpose to human life, that brotherhood
        of man transcends the sovereignty of nations, that economic justice can be best won by free men through free enterprise,
        that government should be of laws rather than of men, that Earth's greatest treasure lies in human personality,
        and that service to humanity is the best work of life. -C. william Brownfield, 1946</p>

        <button class="button-donatenow" onclick="window.location.href='#'">Donate Now!</button>
        
    </div><!--heading-->

    <div class="containerIMG">
       <img src="{{asset('images/jci-cebu-header.jpg')}}"/>
    </div> 

    <div class="overlay1">
        <div class="logo">
            <img src="{{ asset('images/jci-logo-nobg.png') }}" />
        </div>
    </div> 
</section>


<section class="sec2">
    <h1>What We Do</h1>

        <div class="container container-left" style="border-bottom: 4px solid #b47024;">
            <div class="elipse">
                <i class="fa fa-archive"  style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Project for <br>Sustainable Solutions</h2>
            <p><br>Make future sustainable projects that adapts to an ever changing society.</p>
        
        </div>

        <div class="container container-mid" style="border-bottom: 4px solid #b47024;"> <div class="elipse">
                <i class="fa fa-users" style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Empower <br> Young People</h2>
            <p><br>Encourage more young people in participating towards JCI's future advocacy and enhance leadership skills, creating better leaders.</p>
        
        </div>

        <div class="container container-right" style="border-bottom: 4px solid #b47024;"> 
            <div class="elipse">  
                <i class="fa fa-building" style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Create <br>Opportunities</h2>
            <p><br>Make future projects that create opportunities for a lot people.</p>
        
        </div>

        
</section>

<section class="sec3">

<h1>Stories</h1>
    <div class="containerStories container-left">
        <div class="storyPic">
            <img src="{{asset('images/estate-planning.jpg')}}"/>
        </div>
        <h2>Estate Planning 101</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>Estate Planning is not only for the wealthy — everybody can benefit from ensuring their assets 
            and finances are properly taken care of after their death. It’s more than just making a will, 
            although that’s certainly an important part of it. <br><br> It provides a way for you to ensure that 
            the people you care are provided for during the difficult time that follows losing a loved one.
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='#'">Read More...</button>
    </div>
        
    <div class="containerStories container-mid">
        <div class="storyPic">
            <img src="{{asset('images/zero-waste-swap.jpg')}}"/>
        </div>
        <h2>Zero Waste Swap</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>JCI Cebu Sinulog in partnership with Bubble.Ph will be joining the Pop District Bazaar Holiday - The Most Wonderful Time of the year this December 10 and 11, 2018.
        <br><br>Bring your used shampoo bottles and get awesome discounts on every Bubble.Ph shampoo bar purchase!
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='#'">Read More...</button>
    </div>

    <div class="containerStories container-right">
    <div class="storyPic">
            <img src="{{asset('images/give-it-a-shot.jpg')}}"/>
        </div>
        <h2>Give it a Shot 2</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>This project is an indoor target shooting activity for a cause. For those who have been asking and messaging us, we are proud to announce that Give It A Shot 2 will now be happening on January 11, 2020!
            <br><br>Proceeds will be used to fund the future projects of JCI Cebu Sinulog.
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='#'">Read More...</button>
    </div>
</section>

<section class="sec4">
    <button class="button button-save" style="border: 1px solid #f8b20c; color: #f8b20c;" onclick="window.location.href='{{ route('dashboard.org-page-editor') }}'">Save</button>
</section>

<script>
//reference: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_is_JavaScript//
    //sec1 //
      const sec1heading = document.querySelector('.heading h1');
      const sec1p = document.querySelector('.heading p');

      sec1heading.addEventListener('click', updatesec1heading);
      sec1p.addEventListener('click', updatesec1p);

      function updatesec1heading() {
        let content = prompt('Enter new content');
        sec1heading.textContent = content;
      }

      function updatesec1p() {
        let content = prompt('Enter new content');
        sec1p.textContent = content;
      }
    
    //sec2 //
    const sec2title = document.querySelector('.sec2 h1');
    
    sec2title.addEventListener('click', updatesec2title);
    
    function updatesec2title() {
        let content = prompt('Enter new content');
        sec2title.textContent = content;
    }
    
    const sec2heading1 = document.querySelector('.sec2 .container .container-left h2');
    const sec2heading2 = document.querySelector('.sec2 .container .container-mid h2');
    const sec2heading3 = document.querySelector('.sec2 .container .container-right h2');

    sec2heading1.addEventListener('click', updatesec2heading1);
    sec2heading2.addEventListener('click', updatesec2heading2);
    sec2heading3.addEventListener('click', updatesec2heading3);

    function updatesec2heading1() {
        let content = prompt('Enter new content');
        sec2heading1.textContent = content;
    }

    function updatesec2heading2() {
        let content = prompt('Enter new content');
        sec2heading2.textContent = content;
    }

    function updatesec2heading3() {
        let content = prompt('Enter new content');
        sec2heading3.textContent = content;
    }

    const sec2p1 = document.querySelector('.sec2 .container .container-left p');
    const sec2p2 = document.querySelector('.sec2 .container .container-mid p');
    const sec2p3 = document.querySelector('.sec2 .container .container-right p');

    sec2p1.addEventListener('click', updatesec2p1);
    sec2p2.addEventListener('click', updatesec2p2);
    sec2p3.addEventListener('click', updatesec2p3);

    function updatesec2p1() {
        let content = prompt('Enter new content');
        sec2p1.textContent = content;
    }

    function updatesec2p2() {
        let content = prompt('Enter new content');
        sec2p2.textContent = content;
    }

    function updatesec2p3() {
        let content = prompt('Enter new content');
        sec2p3.textContent = content;
    }

    //sec3 //
    
    const sec3title = document.querySelector('.sec3 h1');
    
    sec3title.addEventListener('click', updatesec3title);
    
    function updatesec3title() {
        let content = prompt('Enter new content');
        sec3title.textContent = content;
    }
    
    const sec3heading1 = document.querySelector('.sec3 .containerStories .container-left h2');
    const sec3heading2 = document.querySelector('.sec3 .containerStories .container-mid h2');
    const sec3heading3 = document.querySelector('.sec3 .containerStories .container-right h2');

    sec3heading1.addEventListener('click', updatesec3heading1);
    sec3heading2.addEventListener('click', updatesec3heading2);
    sec3heading3.addEventListener('click', updatesec3heading3);

    function updatesec3heading1() {
        let content = prompt('Enter new content');
        sec3heading1.textContent = content;
    }

    function updatesec3heading2() {
        let content = prompt('Enter new content');
        sec3heading2.textContent = content;
    }

    function updatesec3heading3() {
        let content = prompt('Enter new content');
        sec3heading3.textContent = content;
    }

    const sec3p1 = document.querySelector('.sec3 .containerStories .container-left p');
    const sec3p2 = document.querySelector('.sec3 .containerStories .container-mid p');
    const sec3p3 = document.querySelector('.sec3 .containerStories .container-right p');

    sec3p1.addEventListener('click', updatesec3p1);
    sec3p2.addEventListener('click', updatesec3p2);
    sec3p3.addEventListener('click', updatesec3p3);

    function updatesec3p1() {
        let content = prompt('Enter new content');
        sec3p1.textContent = content;
    }

    function updatesec3p2() {
        let content = prompt('Enter new content');
        sec3p2.textContent = content;
    }

    function updatesec3p3() {
        let content = prompt('Enter new content');
        sec3p3.textContent = content;
    }
    </script>
@endsection