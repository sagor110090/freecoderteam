@props(["posts" => [],"home" => null])
<section class="pb-[120px] pt-[120px]">
    {{ $blogTitleBlock ?? "" }}
    <div class="container">
        <div class="flex flex-wrap justify-center -mx-4">
            @foreach ($posts as $post)
            <div class="w-full px-4 mt-4 md:w-2/3 lg:w-1/2 xl:w-1/3">
                <div class="relative overflow-hidden bg-white rounded-md shadow-one dark:bg-dark">
                    <a class="relative block h-[220px] w-full" href="">
                        @foreach ($post->categories as $category)
                            <span
                                class="absolute z-20 inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white capitalize rounded-full bg-primary right-6 top-6">
                                {{ $category->name }}
                            </span>
                        @endforeach

                        <img alt="image" sizes="100vw" src="{{ $post->image }}" decoding="async" data-nimg="fill"
                            loading="lazy" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    left: 0;
                                    top: 0;
                                    right: 0;
                                    bottom: 0;
                                    color: transparent;
                                " />
                    </a>
                    <div class="p-6 sm:p-8 md:px-6 md:py-8 lg:p-8 xl:px-5 xl:py-8 2xl:p-8">
                        <h3>
                            <a class="block mb-4 text-xl font-bold text-black hover:text-primary dark:hover:text-primary dark:text-white sm:text-2xl"
                                href="../index.html">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p
                            class="pb-6 mb-6 text-base font-medium border-b border-body-color border-opacity-10 text-body-color dark:border-white dark:border-opacity-10">
                            {{ Str::limit($post->description, 100) }}
                        </p>
                        <div class="flex items-center">
                            <div
                                class="flex items-center pr-5 mr-5 border-r border-body-color border-opacity-10 dark:border-white dark:border-opacity-10 xl:mr-3 xl:pr-3 2xl:mr-5 2xl:pr-5">
                                <div class="w-full">
                                    <h4 class="mb-1 text-sm font-medium text-dark dark:text-white">
                                        By
                                        Freecoderteam
                                    </h4>
                                </div>
                            </div>
                            <div class="inline-block">
                                <h4 class="mb-1 text-sm font-medium text-dark dark:text-white">
                                    Date
                                </h4>
                                <p class="text-xs text-body-color">
                                    {{ $post->created_at->format("M d, Y") }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if(sizeof($posts) > 0 && !$home)
            <div class="mt-5">
                {!! $posts->links() !!}
            </div>
        @endif
    </div>
</section>
