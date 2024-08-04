@props([
    "title" => "",
    "description" => "",
    "links" => "",
])
<div class="container">
    <div class="flex flex-wrap items-center pt-16 -mx-4">
        <div class="w-full px-4 md:w-8/12 lg:w-7/12">
            <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
                <h1
                    class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl"
                >
                    {{ $title }}
                </h1>
                <p
                    class="text-base font-medium leading-relaxed text-body-color"
                >
                    {{ $description }}
                </p>
            </div>
        </div>
        <div class="w-full px-4 md:w-4/12 lg:w-5/12">
            <div class="text-end">
                <ul class="flex items-center md:justify-end">
                    @foreach ($links as $link)
                        <li class="flex items-center">
                            @if (! $loop->last)
                                <a
                                    class="pr-1 text-base font-medium text-body-color hover:text-primary"
                                    href="{{ $link["url"] ?? "" }}"
                                >
                                    {{ $link["name"] }}
                                </a>
                                <span
                                    class="block w-2 h-2 mr-3 rotate-45 border-t-2 border-r-2 border-body-color"
                                ></span>
                            @else
                                <span
                                    class="text-base font-medium text-primary"
                                >
                                    {{ $link["name"] }}
                                </span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
