<x-site-layout>
    <div class="bg-gray-100">

        <article class="bg-white">

            <div class="w-full bg-center bg-cover bg-gray-800"
                style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2));">
                <div class="container mx-auto">
                    <div class="px-4 lg:px-0 lg:mx-48">
                        <div class="flex items-center justify-between pt-6 mb-28">
                            <a href="/blog/" class="hidden items-center text-base text-white hover:underline lg:flex">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M11.03 3.97a.75.75 0 010 1.06l-6.22 6.22H21a.75.75 0 010 1.5H4.81l6.22 6.22a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z"
                                        clip-rule="evenodd" />
                                </svg> <span class="text-white ml-1 hover:text-gray-100">Voltar</span>
                            </a>

                            <div class="hidden lg:flex">
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 lg:gap-x-4 mb-4">
                            <a href="/blog/?category={{ $blog->category->slug() }}">
                                <span
                                    class="text-sm text-white bg-transparent border border-white rounded py-1.5 px-3 leading-none hover:underline">
                                    {{ $blog->category->name() }}

                                    @foreach ($blog->tags() as $tag)
                                        <a href="{{ route('threads.tags.index', $tag->slug()) }}"
                                            class="p-1 text-xs text-white bg-green-400 rounded">
                                            {{ $tag->name() }}
                                        </a>
                                    @endforeach

                                </span>
                            </a>
                        </div>
                        <h1 class="text-white text-5xl font-bold mb-4 break-words">
                            {{ $blog->title }}
                        </h1>
                        <div class="flex flex-col gap-y-2 text-white pb-4 lg:pb-12 lg:flex-row lg:items-center">
                            <div class="flex items-center">
                                <a href="/profile/user/{{ $blog->author()->username }}">

                                    <img src="{{ $blog->author()->profile_photo_url }}"
                                        class="bg-gray-50 rounded-full w-6 h-6 rounded-full mr-3" />

                                </a>

                                <a href="/profile/user/{{ $blog->author()->username }}" class="hover:underline">
                                    <span class="mr-5">{{ $blog->author()->name }}</span>
                                </a>
                            </div>
                            <div class="flex items-center gap-x-6 ">
                                <span class="text-sm flex items-center space-x-2">
                                    <x-heroicon-o-eye class="w-4 h-4 text-blue-300" />
                                    {{ $blog->created_at->diffForHumans() }}
                                </span>
                                <span class="text-sm flex items-center space-x-2">
                                    <x-heroicon-o-eye class="w-4 h-4 text-blue-300" />
                                    {{ views($blog)->count() + 57 }}
                                </span>
                                {{-- Likes --}}
                                <livewire:like-blog :blog="$blog" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto">
                <div class="flex px-4 lg:px-0 lg:mx-48">
                    <div class="hidden lg:block lg:w-1/5">
                        <div class="py-12 mt-48 sticky top-0">
                            <div class="flex items-start">
                                <div class="flex flex-col items-center">
                                    <div wire:id="6WAEL1jN5f2PZ29lxowI"
                                        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;6WAEL1jN5f2PZ29lxowI&quot;,&quot;name&quot;:&quot;like-article&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;articles\/why-dont-you-start-writing-tests&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;likeToggled&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;69e45dac&quot;,&quot;data&quot;:{&quot;article&quot;:[],&quot;isSidebar&quot;:true},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;article&quot;:{&quot;class&quot;:&quot;App\\Models\\Article&quot;,&quot;id&quot;:230,&quot;relations&quot;:[&quot;authorRelation&quot;,&quot;likesRelation&quot;,&quot;tagsRelation&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;b1bf09241b28ff3d966c5ca273015e25b192fdcec50c68bca35fb1913347fb92&quot;}}">

                                    </div>

                                    <!-- Livewire Component wire-end:6WAEL1jN5f2PZ29lxowI -->
                                    <div class="flex flex-col items-center gap-y-5 mt-10">
                                        <span class="uppercase text-gray-500">Share</span>

                                        <a class="text-gray-300 hover:text-twitter" target="_blank" rel="noopener"
                                            aria-label="Share on Twitter" href="">
                                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                            </svg> </a>

                                        <a class="text-gray-300 hover:text-facebook" target="_blank" rel="noopener"
                                            aria-label="Share on Facebook" href="">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M18.8961111,0 L1.10388889,0 C0.494166667,0 0,0.494166667 0,1.10388889 L0,18.8963889 C0,19.5058333 0.494166667,20 1.10388889,20 L10.6825,20 L10.6825,12.255 L8.07611111,12.255 L8.07611111,9.23666667 L10.6825,9.23666667 L10.6825,7.01055556 C10.6825,4.42722222 12.2602778,3.02083333 14.5647222,3.02083333 C15.6686111,3.02083333 16.6172222,3.10277778 16.8938889,3.13972222 L16.8938889,5.83944444 L15.2955556,5.84027778 C14.0422222,5.84027778 13.7997222,6.43583333 13.7997222,7.30972222 L13.7997222,9.23694444 L16.7886111,9.23694444 L16.3994444,12.2552778 L13.7997222,12.2552778 L13.7997222,20 L18.8963889,20 C19.5058333,20 20,19.5058333 20,18.8961111 L20,1.10388889 C20,0.494166667 19.5058333,0 18.8961111,0 L18.8961111,0 Z">
                                                </path>
                                            </svg> </a>

                                        <a class="text-gray-300 hover:text-linkedin" target="_blank" rel="noopener"
                                            aria-label="Share on LinkedIn" href="">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill="currentColor"
                                                    d="M17.0391667,17.0433333 L14.0775,17.0433333 L14.0775,12.4025 C14.0775,11.2958333 14.055,9.87166667 12.5341667,9.87166667 C10.99,9.87166667 10.7541667,11.0758333 10.7541667,12.3208333 L10.7541667,17.0433333 L7.7925,17.0433333 L7.7925,7.5 L10.6375,7.5 L10.6375,8.80083333 L10.6758333,8.80083333 C11.0733333,8.05083333 12.04,7.25916667 13.4841667,7.25916667 C16.485,7.25916667 17.04,9.23416667 17.04,11.805 L17.04,17.0433333 L17.0391667,17.0433333 Z M4.4475,6.19416667 C3.49416667,6.19416667 2.72833333,5.4225 2.72833333,4.47333333 C2.72833333,3.525 3.495,2.75416667 4.4475,2.75416667 C5.3975,2.75416667 6.1675,3.525 6.1675,4.47333333 C6.1675,5.4225 5.39666667,6.19416667 4.4475,6.19416667 Z M5.9325,17.0433333 L2.9625,17.0433333 L2.9625,7.5 L5.9325,7.5 L5.9325,17.0433333 Z M18.5208333,0 L1.47583333,0 C0.66,0 0,0.645 0,1.44083333 L0,18.5591667 C0,19.3558333 0.66,20 1.47583333,20 L18.5183333,20 C19.3333333,20 20,19.3558333 20,18.5591667 L20,1.44083333 C20,0.645 19.3333333,0 18.5183333,0 L18.5208333,0 Z">
                                                </path>
                                            </svg> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full pt-4 lg:w-4/5 lg:pt-10">
                        <div class="flex flex-col gap-x-4 gap-y-3 lg:flex-row lg:justify-between mb-10"
                            x-data="{ hovered: false }">
                            <div class="flex flex-col gap-x-4 gap-y-3 lg:flex-row">


                            </div>

                        </div>


                        <div x-data="{}" x-init="$nextTick(function() { highlightCode($el); })"
                            class="prose prose-lg text-gray-800 prose-lio">
                            <div>

                                @php
                                    echo $blog->body;
                                @endphp

                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <h2 class="mb-0 text-sm font-bold uppercase">Comentários</h2>

                @auth
                    <br>
                    <div class="p-5 space-y-4 bg-white shadow">
                        <h2 class="text-gray-500">Poste sua resposta</h2>
                        <x-form action="{{ route('repliesblog.store') }}">
                            <div>
                                <input type="text" name="body"
                                    class="w-full bg-gray-200 border-none shadow-inner focus:ring-blue-400" />
                                <x-form.error for="body" />

                                <input type="hidden" name="replyable_id" value="{{ $blog->id() }}">
                                <x-form.error for="replyable_id" />
                                <input type="hidden" name="replyable_type" value="blog">
                                <x-form.error for="replyable_type" />

                            </div>

                            <div class="grid mt-4">
                                {{-- Button --}}
                                <x-buttons.primary class="justify-self-end">
                                    {{ __('Postar') }}
                                </x-buttons.primary>
                            </div>
                        </x-form>
                    </div>
                @else
                    <br>
                    <div class="flex justify-between p-4 text-gray-700 bg-blue-200 rounded">
                        <h2>Por favor, faça o login para deixar sua resposta.</h2>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                @endauth
                <br>
                @foreach ($blog->replies() as $reply)
                    <livewire:reply.upblog :reply="$reply" :wire:key="$reply->id()" />
                @endforeach





            </div>
    </div>
    </article>



    </x-app-layout>
