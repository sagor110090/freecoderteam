@props([
    'file' => null,
    'accept' => 'image/jpg,image/jpeg,image/png,application/pdf',
    'multiple' => false,
    'mode' => 'attachment',
    'profileClass' => 'w-20 h-20 rounded-full'
])

<div x-data="{
    isMultiple: Boolean('{{ $multiple }}') || false,
    progress: 0,
    isFocused: false,
    handleFiles() {
        if (this.isMultiple === true) {
            @this.uploadMultiple('{{ $attributes->wire('model')->value }}', this.$refs.input.files, () => {
            }, () => {
            }, (event) => {
                this.progress = event.detail.progress || 0
            })
        } else {
            @this.upload('{{ $attributes->wire('model')->value }}',  this.$refs.input.files[0], () => {
            }, () => {
            }, (event) => {
                this.progress = event.detail.progress || 0
            });
        }
    }
}"
x-cloak>
    @if(! $file || $mode === 'profile')
        @php $randomId = Str::random(6); @endphp
        <label for="file-{{ $randomId }}" class="relative block leading-tight  hover:bg-gray-100 cursor-pointer inline-flex items-center transition duration-500 ease-in-out group overflow-hidden
            {{  $mode === 'profile' ? 'border group '. $profileClass : 'border-2 w-full pl-3 pr-4 py-2 rounded-lg border-dashed' }}
        "
        wire:loading.class="pointer-events-none"
        :class="{ 'border-indigo-300': isFocused === true }"
        >
            {{-- hack to get the progress of upload file --}}
            <input
                type="hidden"
                name="{{ $attributes->wire('model')->value }}"
                {{ $attributes->wire('model') }}
            />

            <input
                type="file"
                id="file-{{ $randomId }}"
                class="absolute inset-0 text-transparent opacity-0 cursor-pointer sr-only"
                accept="{{ $accept }}"
                :multiple="isMultiple"
                x-ref="input"
                x-on:change.prevent="handleFiles"
                x-on:focus="isFocused = true"
                x-on:blur="isFocused = false"
            />

            {{-- Upload Progress --}}
            <div wire:loading.flex wire:target="{{ $attributes->wire('model')->value }}" wire:loading.class="w-full">
                @if ($mode === 'profile' && $file)
                    <div class="flex items-center justify-center flex-1 p-4 text-sm text-center text-indigo-500 select-none">
                        <svg class="w-6 h-6 text-indigo-500 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                @endif

                @if ($mode === 'attachment')
                    <div class="flex-1 p-4 text-center">
                        <div class="mb-2">Uploading...</div>
                        <div>
                            <div class="relative h-3 max-w-lg mx-auto overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-gray-200"></div>
                                <div class="absolute h-full bg-green-500" x-bind:style="'width:' + progress + '%'"></div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Preview for mode 'profile' --}}
            @if ($mode === 'profile' && $file)
                <div class="absolute inset-0">
                    <div class="relative w-full overflow-hidden shadow-inner" style="padding-bottom: 100%">
                        @if(collect(['jpg', 'png', 'jpeg', 'webp'])->contains($file->getClientOriginalExtension()))
                            <img src="{{ $file->temporaryUrl() }}" class="absolute inset-0 object-cover w-full h-full">

                            <div class="absolute inset-0 z-10 flex items-center justify-center w-10 h-10 mx-auto my-auto text-white rounded-full group-hover:bg-gray-400 group-hover:bg-opacity-25">
                                <svg class="w-6 h-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        @else
                            <span>Type invalid.</span>
                        @endif
                    </div>
                </div>
            @endif

            {{-- Placeholder text for mode 'attachment' --}}
            <div class="flex items-center justify-center flex-1 px-4 py-2" wire:loading.class="hidden" wire:target="{{ $attributes->wire('model')->value }}">
                @if($slot->isEmpty())
                    @if($multiple)
                        <svg class="w-8 h-8 -mt-2 -mr-5 text-gray-300 transition duration-500 ease-in-out transform -rotate-6 group-hover:text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><g><circle cx="99.99951" cy="92" r="12"></circle><path d="M208.00049,31.99963h-160a16.01833,16.01833,0,0,0-16,16V175.97369l-.001.0307.001,31.99524a16.01833,16.01833,0,0,0,16,16h160a16.01833,16.01833,0,0,0,16-16v-160A16.01834,16.01834,0,0,0,208.00049,31.99963Zm-28.68653,80a16.019,16.019,0,0,0-22.62792,0l-44.68555,44.68653L91.314,135.99963a16.02161,16.02161,0,0,0-22.62792,0L48.00049,156.68457V47.99963h160l.00586,92.6922Z"></path></g></svg>
                        <svg class="relative w-8 h-8 text-gray-400 transition duration-500 ease-in-out transform rotate-3 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M168.001,100.00017v.00341a12.00175,12.00175,0,1,1,0-.00341ZM232,56V200a16.01835,16.01835,0,0,1-16,16H40a16.01835,16.01835,0,0,1-16-16V56A16.01835,16.01835,0,0,1,40,40H216A16.01835,16.01835,0,0,1,232,56Zm-15.9917,108.6936L216,56H40v92.68575L76.68652,112.0002a16.01892,16.01892,0,0,1,22.62793,0L144.001,156.68685l20.68554-20.68658a16.01891,16.01891,0,0,1,22.62793,0Z"></path></svg>
                    @else
                        @if ($mode === 'profile')
                            <svg class="w-8 h-8 text-gray-300 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        @else
                            <svg class="w-8 h-8 text-gray-300 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M168.001,100.00017v.00341a12.00175,12.00175,0,1,1,0-.00341ZM232,56V200a16.01835,16.01835,0,0,1-16,16H40a16.01835,16.01835,0,0,1-16-16V56A16.01835,16.01835,0,0,1,40,40H216A16.01835,16.01835,0,0,1,232,56Zm-15.9917,108.6936L216,56H40v92.68575L76.68652,112.0002a16.01892,16.01892,0,0,1,22.62793,0L144.001,156.68685l20.68554-20.68658a16.01891,16.01891,0,0,1,22.62793,0Z"></path></svg>
                        @endif
                    @endif

                    @if ($mode === 'attachment')
                        <span class="ml-2 ">{{ is_array($file) ? 'Browse files' : 'Browse file' }} | <span class="text-sm">PNG or JPEG</span></span>
                    @endif
                @else
                    {{ $slot }}
                @endif
            </div>
        </label>
    @endif

    @if ($mode === 'attachment')
        {{-- Loading indicator for file remove --}}
        <div wire:loading.delay wire:loading.flex wire:target="removeUpload" wire:loading.class="w-full">
            <div class="flex-1 p-1 text-sm text-center text-red-500 bg-red-100 rounded">
                Removing file...
            </div>
        </div>

        {{-- Preview for mode 'attachment' --}}
        <div>
            @if(is_array($file) && count($file) > 0)
                @foreach($file as $key => $f)
                    <div class="py-3 flex {{ !$loop->last ? 'border-b border-gray-200' : '' }}">
                        <div class="flex-shrink-0 w-16 mr-4 rounded-lg shadow-xs" >
                            @if(collect(['jpg', 'png', 'jpeg', 'webp'])->contains($f->getClientOriginalExtension()))
                                <div class="relative pb-16 overflow-hidden border border-gray-100 rounded-lg">
                                    <img src="{{ $f->temporaryUrl() }}" class="absolute object-cover w-full h-full rounded-lg">
                                </div>
                            @else
                                <div class="flex items-center justify-center w-16 h-16 text-blue-500 bg-gray-100 border border-gray-100 rounded-lg">
                                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div>
                            @if ($multiple)
                                {{-- prints attachment.* --}}
                                @error($attributes->wire('model')->value . '.'. $key)
                                    <p class="text-sm text-red-600" class="mb-2">{{ $message }}</p>
                                @enderror
                            @endif

                            <div class="w-40 text-sm font-medium truncate md:w-auto">{{ $f->getClientOriginalName() }}</div>
                            <div class="flex items-center space-x-1">
                                <div class="text-xs text-gray-500">{{ App\Helpers\GlobalHelper::bytesToHuman($f->getSize()) }}</div>
                                <div class="text-xs text-gray-400">&bull;</div>
                                <div class="text-xs text-gray-500 uppercase">{{ $f->getClientOriginalExtension() }}</div>
                            </div>

                            <button
                                wire:key="remove-attachment-{{ $f->getFilename() }}"
                                wire:loading.attr="disabled"
                                type="button"
                                x-on:click.prevent="$wire.removeUpload('{{ $attributes->wire('model')->value }}', '{{ $f->getFilename() }}')" class="text-xs text-red-500 appearance-none hover:underline">
                                Remove
                            </button>
                        </div>
                    </div>
                @endforeach
            @else
                @if($file)
                    <div class="flex mt-3">
                        <div class="flex-shrink-0 w-16 mr-4 rounded-lg shadow-xs">
                            @if(collect(['jpg', 'png', 'jpeg', 'webp'])->contains($file->getClientOriginalExtension()))
                                <div class="relative w-full pb-16 overflow-hidden border border-gray-100 rounded-lg">
                                    <img src="{{ $file->temporaryUrl() }}" class="absolute object-cover w-full h-full rounded-lg">
                                </div>
                            @else
                                <div class="flex items-center justify-center w-16 h-16 text-blue-500 bg-gray-100 border border-gray-100 rounded-lg">
                                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div>

                            @error($attributes->wire('model')->value)
                                <p class="text-sm text-red-600" class="mb-2">{{ $message }}</p>
                            @enderror

                            <div class="w-40 text-sm font-medium truncate md:w-auto">{{ $file->getClientOriginalName() }}</div>
                            <div class="flex items-center space-x-1">
                                <div class="text-xs text-gray-500">{{ App\Helpers\GlobalHelper::bytesToHuman($file->getSize()) }}</div>
                                <div class="text-xs text-gray-400">&bull;</div>
                                <div class="text-xs text-gray-500 uppercase">{{ $file->getClientOriginalExtension() }}</div>
                            </div>
                            <button
                                wire:loading.attr="disabled"
                                type="button"
                                x-on:click.prevent="$wire.removeUpload('{{ $attributes->wire('model')->value }}', '{{ $file->getFilename() }}')" class="text-xs text-red-500 appearance-none hover:underline">
                                Remove
                            </button>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    @endif
</div>
