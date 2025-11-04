@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Blogs" :route="route('index')" />
    <section class="blogs-sec">
        <div class="container">
            <h2 class="sec-hd text-center">Latest News & Updates</h2>
            <div class="blogs-card-wrapper">
                <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="{{ asset('assets/web/images/blogs1.png') }}" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">What is Housing Cooperative?</h2>
                            <p class="para"> Learn the housing cooperative model explained, highlighting shared ownership
                                and the benefits of cooperative housing.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="{{ asset('assets/web/images/blogs2.png') }}" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">How Cooperative Housing Works</h2>
                            <p class="para">Discover how cooperative housing communities operate, fostering collaboration,
                                sustainability, and community in every co-op home.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="{{ asset('assets/web/images/blogs3.png') }}" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">How to Buy a Co-op Home?</h2>
                            <p class="para">Step-by-step guide to buy a co-op share and understand co-op housing. Learn the
                                process from exploring co-op homes for sale to finalizing your purchase.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="assets/images/blogs4.png" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">Lorem Ipsum is simply dummy</h2>
                            <p class="para">Donec imperdiet neque vel mattis suscipit. Duis diam metus, fermentum ac varius
                                nec, auctor vitae lorem. Aliquam lacinia quam sed viverra bibendum. Nunc lectus sem, posuere
                                sed scelerisque eu, cursus quis risus. Aenean laoreet tempus velit id interdum. Pellentesque
                                vel nisi non diam ultrices ullamcorper et pharetra felis. Maecenas eget nunc mollis,
                                vestibulum felis quis, consequat sem. Integer vitae bibendum velit.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="assets/images/blogs5.png" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">Lorem Ipsum is simply dummy</h2>
                            <p class="para">Donec imperdiet neque vel mattis suscipit. Duis diam metus, fermentum ac varius
                                nec, auctor vitae lorem. Aliquam lacinia quam sed viverra bibendum. Nunc lectus sem, posuere
                                sed scelerisque eu, cursus quis risus. Aenean laoreet tempus velit id interdum. Pellentesque
                                vel nisi non diam ultrices ullamcorper et pharetra felis. Maecenas eget nunc mollis,
                                vestibulum felis quis, consequat sem. Integer vitae bibendum velit.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="blogs-card-prnt">
                    <div class="blogs-card">
                        <div class="blog-img-dev">
                            <img src="assets/images/blogs6.png" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="cmnt-prnt">
                                <p class="cmnt-para"><i class="fa-solid fa-comments"></i>Coments (03)</p>
                                <span class="blog-minus">-</span>
                                <p class="cmnt-para"><i class="fa-regular fa-clock"></i>3 min Read</p>
                            </div>
                            <h2 class="sec-hd blog-hd">Lorem Ipsum is simply dummy</h2>
                            <p class="para">Donec imperdiet neque vel mattis suscipit. Duis diam metus, fermentum ac varius
                                nec, auctor vitae lorem. Aliquam lacinia quam sed viverra bibendum. Nunc lectus sem, posuere
                                sed scelerisque eu, cursus quis risus. Aenean laoreet tempus velit id interdum. Pellentesque
                                vel nisi non diam ultrices ullamcorper et pharetra felis. Maecenas eget nunc mollis,
                                vestibulum felis quis, consequat sem. Integer vitae bibendum velit.</p>
                            <button class="blog-btn">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div> -->
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-lg-12">-->
            <!--        <div class="pagination-btns">-->
            <!--            <button>1</button>-->
            <!--            <button>2</button>-->
            <!--            <button>3</button>-->
            <!--            <button class="active">Next-->
            <!--                <i><i class="fa-solid fa-arrow-right"></i></i>-->
            <!--            </button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <x-partner-section />
@endsection
