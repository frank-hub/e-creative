@extends('layouts.home')
@section('posts')
   <!-- s-content
    ================================================== -->
    <section class="s-content">

            <div class="row narrow">
                <div class="col-full s-content__header" data-aos="fade-up">
                    <h1>Category: {{$cart}}</h1>
    
                    <p class="lead">Dolor similique vitae. Exercitationem quidem occaecati iusto. Id non vitae enim quas error dolor maiores ut. Exercitationem earum ut repudiandae optio veritatis animi nulla qui dolores.</p>
                </div>
            </div>
            
            <div class="row masonry-wrap">
                <div class="masonry">
    
                    <div class="grid-sizer"></div>
    
                    <article class="masonry__brick entry format-standard" data-aos="fade-up">
                            
                        <div class="entry__thumb">
                            <a href="single-standard.html" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/lamp-400.jpg" 
                                     srcset="images/thumbs/masonry/lamp-400.jpg 1x, images/thumbs/masonry/lamp-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                
                                <div class="entry__date">
                                    <a href="single-standard.html">December 15, 2017</a>
                                </div>
                                <h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>
                                
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="category.html">Design</a> 
                                    <a href="category.html">Photography</a>
                                </span>
                            </div>
                        </div>
        
                    </article> <!-- end article -->
    
                    <article class="masonry__brick entry format-quote" data-aos="fade-up">
                            
                        <div class="entry__thumb">
                            <blockquote>
                                    <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>
        
                                    <cite>Dieter Rams</cite>
                            </blockquote>
                        </div>   
        
                    </article> <!-- end article -->
    
                    <article class="masonry__brick entry format-standard">
                            
                        <div class="entry__thumb">
                            <a href="single-standard.html" class="entry__thumb-link">
                                <img src="{{asset('images/thumbs/masonry/tulips-400.jpg')}}" 
                                     srcset="{{asset('images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x')}}" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                
                                <div class="entry__date">
                                    <a href="single-standard.html">December 15, 2017</a>
                                </div>
                                <h1 class="entry__title"><a href="single-standard.html">10 Interesting Facts About Caffeine.</a></h1>
                                
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="category.html">Health</a>
                                </span>
                            </div>
                        </div>
        
                    </article> <!-- end article -->
    
                    <article class="masonry__brick entry format-video" data-aos="fade-up">
                            
                        <div class="entry__thumb video-image">
                            <a href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
                                <img src="{{asset('images/thumbs/masonry/shutterbug-400.jpg')}}" 
                                     srcset="{{asset('images/thumbs/masonry/shutterbug-400.jpg 1x, images/thumbs/masonry/shutterbug-800.jpg 2x')}}" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                
                                <div class="entry__date">
                                    <a href="single-video.html">December 10, 2017</a>
                                </div>
                                <h1 class="entry__title"><a href="single-video.html">Key Benefits Of Family Photography.</a></h1>
                                
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="category.html">Family</a> 
                                    <a href="category.html">Photography</a>
                                </span>
                            </div>
                        </div>
        
                    </article> <!-- end article -->

                </div> <!-- end masonry -->
            </div> <!-- end masonry-wrap -->
    
            <div class="row">
                <div class="col-full">
                    <nav class="pgn">
                        <ul>
                            <li><a class="pgn__prev" href="#0">Prev</a></li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li><a class="pgn__next" href="#0">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    
    </section> 
@endsection
