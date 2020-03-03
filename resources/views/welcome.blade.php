 @extends('layouts.front') 
 @push('body')
  class="yellow"
 @endpush
 @section('content')
 <section class="fullview-section">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 image_block">
                 <img src="{{asset('/image/asset/ddddd.PNG')}}" style="height: 55vh" class="animated flash delay-2s">
            </div> 
            <div class="col-md-5 offset-md-7 text-center pb-3 px-md-1 px-sm-5" id="right_content_block">
                 <h1 class="heading_font">Dhaga Raga </h1>
                 <p>The house of Dhaga Raga brings you an exquisite range
                 of embroidered artistic clothing. With designs so,
                exclusive and embroidery so impressive, we endeavor
                 to create a persoanlised clothing experience to
                reinterpret your uniqueness.</p>
            </div>  
        </div> 
    </div>

    </div>
 </section>
 <section class="mt-4 mb-3">
     <div class="container-fluid"> 
        <div class="row no-margin">
            <figure class="col-md-3">
                <a href="{{asset('image/asset/towel.PNG')}}" data-size="1600x1067">
                    <img alt="picture" src="{{asset('image/asset/towel.PNG')}}" class="img-fluid">
                </a>
            </figure>
            <figure class="col-md-3" style=" display: flex; justify-content: center; align-items: center; background: #fdf7e3;">
                <a href="{{asset('/image/logo.png')}}" data-size="1600x1067">
                    <img alt="picture" src="{{asset('/image/logo.png')}}" class="img-fluid" />
                </a>
            </figure>
            <figure class="col-md-3">
                <a href="{{asset('image/asset/towel.PNG')}}" data-size="1600x1067">
                    <img alt="picture" src="{{asset('image/asset/towel.PNG')}}" class="img-fluid" />
                </a>
            </figure>
            <figure class="col-md-3">
                <a href="{{asset('image/asset/towel.PNG')}}" data-size="1600x1067">
                    <img alt="picture" src="{{asset('image/asset/towel.PNG')}}" class="img-fluid" />
                </a>
            </figure>
        </div>
 </section>
 <section class="section_window text-center"> 
     <h2>Clothing that lives upto <br>your name</h2> 
     <p>Dhaga Raga aspires to capture the wonder of fashion and  art in a quest to rekindle the joy of clothing. Exclusive hand painted designs inspired from stories found around the globe, speaking for ingenuity,  creativity & freedom, are spun into intricate yet delicate embroidery artworks . </p>
    <p>Inspired by the idea of personal branding and everlasting impact, Dhaga Raga pays homage to those who love the concept ofbeing different. Our excellent design technology offers us the leverage to embroider the name and initials anywhere onthe readymade garments. </p>
    <p>We aim to be the leading brand offering bespoke, haute couture embroidery solutions. Our Clothing line comprises of limited, hand picked products, designed and embroidered for setting distinctive appeal. </p> 
 </section>
 <section class="section_window2   text-center"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img alt="picture" src="{{asset('image/asset/1.png')}}" class="img-fluid" />
                <div class="mt-5">
                    <h2>Threads</h2>
                    <p>Our collection of vibrant threads makes
                        the design look every inch the chic. 
                        Made in Germany, these threads have
                         excellent color fastness, extremely durable,
                         abrasion-resistant, robust and not to
                         mention are Oeko-Tex certified 
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img alt="picture" src="{{asset('image/asset/3.png')}}" class="img-fluid" />
                <div class="mt-5">
                    <h2>Machine</h2>
                    <p>Dhaga Raga aspires to capture t . </p>
                </div>
            </div>
            <div class="col-md-4">
                <img alt="picture" src="{{asset('image/asset/2.png')}}" class="img-fluid" />
                <div class="mt-5">
                     <h2>People</h2>
                     <p>We pride ourselves on our in house artists,
                     painters and designers who are experts

                    in their crafts. Every piece is mesmerizing
                    as our people take care of each
                     meticulous detail from choosing fabrics,
                    threads, needles to design itself. </p>
                </div>
            </div>
        </div>
    </div>
 </section>
 <section class="section_window  bg_img text-center" style="background: url({{asset('/image/asset/4.png')}});">
    <img src="{{asset('image/asset/jackettt.PNG')}}" style="width: 50%">
 </section> 
 @endsection
            