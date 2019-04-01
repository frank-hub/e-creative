@extends('layouts.home')
@section('posts')
<!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

            <article class="row format-standard">
    
                <div class="s-content__header col-full">
                    <h1 class="s-content__header-title">
                        {{$articles -> title}}
                    </h1>
                    <ul class="s-content__header-meta">
                        <li class="date">{{$articles->created_at->format('F d, Y')}}</li>
                        <li class="cat">
                            In <a href="#0">{{$articles->cartegory}}</a>
                        </li>
                    </ul>
                </div> <!-- end s-content__header -->
        
                <div class="s-content__media col-full">
                        {{-- {{ asset('images/profile/'.$productr['image']) }} --}}
                    <div class="s-content__post-thumb">
                    <img src="{{asset('uploads/'.$articles->image_name)}}" 
                             srcset="{{asset('uploads/'.$articles->image_name)}}, 
                             {{asset('uploads/'.$articles->image_name)}}, 
                                     {{asset('uploads/'.$articles->image_name)}}" 
                             sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
                    </div>
                </div> <!-- end s-content__media -->
    
                <div class="col-full s-content__main">
    
                    {{-- <p class="lead">Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint.</p> --}}
                    
                <p>{{$articles->body}}</p>
    
                    {{-- <p>
                    <img src="images/wheel-1000.jpg" 
                         srcset="images/wheel-2000.jpg 2000w, images/wheel-1000.jpg 1000w, images/wheel-500.jpg 500w" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                    </p>
    
                    <h2>Large Heading</h2>
    
                    <p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>
    
                    <blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>
    
                    <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>
    
                    <h3>Smaller Heading</h3>
    
                    <p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
    
    <pre><code>
        code {
            font-size: 1.4rem;
            margin: 0 .2rem;
            padding: .2rem .6rem;
            white-space: nowrap;
            background: #F1F1F1;
            border: 1px solid #E1E1E1;
            border-radius: 3px;
        }
    </code></pre>
    
                    <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>
    
                    <ul>
                        <li>Donec nulla non metus auctor fringilla.
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </li>
                        <li>Donec nulla non metus auctor fringilla.</li>
                        <li>Donec nulla non metus auctor fringilla.</li>
                    </ul>
    
                    <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p> --}}
    
                    <p class="s-content__tags">
                        <span>Post Tags</span>
    
                        <span class="s-content__tag-list">
                            <a href="#0">orci</a>
                            <a href="#0">lectus</a>
                            <a href="#0">varius</a>
                            <a href="#0">turpis</a>
                        </span>
                    </p> <!-- end s-content__tags -->
    
                    {{-- <div class="s-content__author">
                        <img src="images/avatars/user-03.jpg" alt="">
    
                        <div class="s-content__author-about">
                            <h4 class="s-content__author-name">
                                <a href="#0">Jonathan Doe</a>
                            </h4>
                        
                            <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
    
                            <ul class="s-content__author-social">
                               <li><a href="#0">Facebook</a></li>
                               <li><a href="#0">Twitter</a></li>
                               <li><a href="#0">GooglePlus</a></li>
                               <li><a href="#0">Instagram</a></li>
                            </ul>
                        </div>
                    </div> --}}
    
                    <div class="s-content__pagenav">
                        <div class="s-content__nav">
                            <div class="s-content__prev">
                                <a href="#0" rel="prev">
                                    <span>Previous Post</span>
                                    Tips on Minimalist Design 
                                </a>
                            </div>
                            <div class="s-content__next">
                                <a href="#0" rel="next">
                                    <span>Next Post</span>
                                    Less Is More 
                                </a>
                            </div>
                        </div>
                    </div> <!-- end s-content__pagenav -->
    
                </div> <!-- end s-content__main -->
    
            </article>
    
    
            <!-- comments
            ================================================== -->
            {{-- <div class="comments-wrap">
    
                <div id="comments" class="row">
                    <div class="col-full">
    
                        <h3 class="h2">5 Comments</h3>
    
                        <!-- commentlist -->
                        <ol class="commentlist">
    
                            <li class="depth-1 comment">
    
                                <div class="comment__avatar">
                                    <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                                </div>
    
                                <div class="comment__content">
    
                                    <div class="comment__info">
                                        <cite>Itachi Uchiha</cite>
    
                                        <div class="comment__meta">
                                            <time class="comment__time">Dec 16, 2017 @ 23:05</time>
                                            <a class="reply" href="#0">Reply</a>
                                        </div>
                                    </div>
    
                                    <div class="comment__text">
                                    <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                    facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                    </div>
    
                                </div>
    
                            </li> <!-- end comment level 1 -->
    
                            <li class="thread-alt depth-1 comment">
    
                                <div class="comment__avatar">
                                    <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                                </div>
    
                                <div class="comment__content">
    
                                    <div class="comment__info">
                                    <cite>John Doe</cite>
    
                                    <div class="comment__meta">
                                        <time class="comment__time">Dec 16, 2017 @ 24:05</time>
                                        <a class="reply" href="#0">Reply</a>
                                    </div>
                                    </div>
    
                                    <div class="comment__text">
                                    <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                    urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                    tantas semper delicatissimi.</p>
                                    </div>
    
                                </div>
    
                                <ul class="children">
    
                                    <li class="depth-2 comment">
    
                                        <div class="comment__avatar">
                                            <img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
                                        </div>
    
                                        <div class="comment__content">
    
                                            <div class="comment__info">
                                                <cite>Kakashi Hatake</cite>
    
                                                <div class="comment__meta">
                                                    <time class="comment__time">Dec 16, 2017 @ 25:05</time>
                                                    <a class="reply" href="#0">Reply</a>
                                                </div>
                                            </div>
    
                                            <div class="comment__text">
                                                <p>Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris</p>
                                            </div>
    
                                        </div>
    
                                        <ul class="children">
    
                                            <li class="depth-3 comment">
    
                                                <div class="comment__avatar">
                                                    <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                                                </div>
    
                                                <div class="comment__content">
    
                                                    <div class="comment__info">
                                                    <cite>John Doe</cite>
    
                                                    <div class="comment__meta">
                                                        <time class="comment__time">Dec 16, 2017 @ 25:15</time>
                                                        <a class="reply" href="#0">Reply</a>
                                                    </div>
                                                    </div>
    
                                                    <div class="comment__text">
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                        </ul>
    
                                    </li>
    
                                </ul>
    
                            </li> <!-- end comment level 1 -->
    
                            <li class="depth-1 comment">
    
                                <div class="comment__avatar">
                                    <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
                                </div>
    
                                <div class="comment__content">
    
                                    <div class="comment__info">
                                    <cite>Shikamaru Nara</cite>
    
                                    <div class="comment__meta">
                                        <time class="comment-time">Dec 16, 2017 @ 25:15</time>
                                        <a class="reply" href="#">Reply</a>
                                    </div>
                                    </div>
    
                                    <div class="comment__text">
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    </div>
    
                                </div>
    
                            </li>  <!-- end comment level 1 -->
    
                        </ol> <!-- end commentlist -->
    
    
                        <!-- respond
                        ================================================== -->
                        <div class="respond">
    
                            <h3 class="h2">Add Comment</h3>
    
                            <form name="contactForm" id="contactForm" method="post" action="">
                                <fieldset>
    
                                    <div class="form-field">
                                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                                    </div>
    
                                    <div class="form-field">
                                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                                    </div>
    
                                    <div class="form-field">
                                            <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
                                    </div>
    
                                    <div class="message form-field">
                                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                                    </div>
    
                                    <button type="submit" class="submit btn--primary btn--large full-width">Submit</button>
    
                                </fieldset>
                            </form> <!-- end form -->
    
                        </div> <!-- end respond -->
    
                    </div> <!-- end col-full -->
    
                </div> <!-- end row comments -->
            </div> <!-- end comments-wrap --> --}}
    
        </section> <!-- s-content -->
    
    
        <!-- s-extra
        ================================================== -->
        <section class="s-extra">
    
            <div class="row top">
    
                <div class="col-eight md-six tab-full popular">
                    <h3>Popular Posts</h3>
    
                    <div class="block-1-2 block-m-full popular__posts">
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/wheel-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                            <section class="popular__meta">
                                    <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/shutterbug-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/cookies-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                            <section class="popular__meta">
                                    <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/beetle-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/tulips-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">10 Interesting Facts About Caffeine.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="images/thumbs/small/salad-150.jpg" alt="">
                            </a>
                            <h5><a href="#0">Healthy Mediterranean Salad Recipes</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2017-12-12">Dec 12, 2017</time></span>
                            </section>
                        </article>
                    </div> <!-- end popular_posts -->
                </div> <!-- end popular -->
                
                <div class="col-four md-six tab-full about">
                    <h3>About Philosophy</h3>
    
                    <p>
                    Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                    </p>
    
                    <ul class="about__social">
                        <li>
                            <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end header__social -->
                </div> <!-- end about -->
    
            </div> <!-- end row -->
    
            <div class="row bottom tags-wrap">
                <div class="col-full tags">
                    <h3>Tags</h3>
    
                    <div class="tagcloud">
                        <a href="#0">Salad</a>
                        <a href="#0">Recipe</a>
                        <a href="#0">Places</a>
                        <a href="#0">Tips</a>
                        <a href="#0">Friends</a>
                        <a href="#0">Travel</a>
                        <a href="#0">Exercise</a>
                        <a href="#0">Reading</a>
                        <a href="#0">Running</a>
                        <a href="#0">Self-Help</a>
                        <a href="#0">Vacation</a>
                    </div> <!-- end tagcloud -->
                </div> <!-- end tags -->
            </div> <!-- end tags-wrap -->
    
        </section> <!-- end s-extra -->
@endsection
