<x-site-layout>
    <div class="bg-gray-100">



        <div class="container mx-auto">
            <div class="flex px-4 lg:px-0 lg:mx-48">
                <div class="py-12 mt-8 sticky top-0">




                    <!-- Main Content-->
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-md-10 col-lg-8 col-xl-7">
                                @foreach ($threads as $threads)
                                    <!-- Post preview-->
                                    <div class="post-preview">
                                        <a href="post.html">
                                            <h2 class="post-title"><a
                                                    href="{{ route('blog.show', [$threads->category->slug(), $threads->slug()]) }}">{{ mb_strimwidth($threads->title, 0, 63, '...') }}</a>
                                            </h2>
                                            <h3 class="post-subtitle">@php
                                                echo mb_strimwidth($threads->body, 0, 130, '...');
                                            @endphp</h3>
                                        </a>
                                        <p class="post-meta">
                                            Postado em {{ $threads->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                    <!-- Divider-->
                                    <hr class="my-4" />
                                @endforeach
                                <!-- Pager-->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{ $threads->paginate() }}

             
            </div>
            </div>
    </div>
    </div>
    </div>
    </div>


    </x-app-layout>
