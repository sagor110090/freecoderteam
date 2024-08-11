<div>
    <div class='flex items-center justify-center'>
        <div class='w-full px-10 py-8 mx-auto bg-white shadow-xl rounded-xl'>
            <h3>
                <div class='flex items-center justify-between'>
                    <span class='text-2xl font-bold text-gray-900'>Create Post </span>
                </div>
            </h3>
            <x-errors class="mt-3" />
            <form method="post" class="mt-6 space-y-6" wire:submit="store">
                <div class='max-w-md space-y-6'>
                    <div>
                        <x-input label="Title" placeholder="Post title" wire:model.live="title" :value="old('title')"
                            autofocus autocomplete="title" />
                    </div>
                    {{-- slug --}}
                    <div>
                        <x-input label="Slug" placeholder="Post slug" wire:model="slug" :value="old('slug')" />
                    </div>
                    {{-- image --}}
                    <div>
                        <x-input-label for="image" :value="__('Image')" class="mb-2" />
                        <x-file-attachment wire:model="image" :file="$image" mode="attachment"
                            profile-class="w-24 h-24 rounded-lg" accept="image/jpg,image/jpeg,image/png" />

                    </div>
                    {{-- categories --}}
                    <div>
                        <x-input-label for="category" :value="__('Category')" class="mb-2" />
                        @foreach ($categories_list as $key => $category)
                            <x-checkbox  label="{{ $category }}" value="{{ $key }}"
                                wire:model="categories"  :key="$key" :id="$key" />
                        @endforeach
                    </div>
                </div>
                <div class="space-y-6 ">
                    {{-- description --}}
                    <div wire:ignore>
                        <x-input-label for="description" :value="__('Description')" class="mb-2" />
                        <x-easy-mde wire:model="markdown_content" name="markdown_content"></x-easy-mde>

                        <x-ck-textarea id="description" name='description' wire:model="description" :value="old('description')"
                            class="block w-full mt-1" />
                    </div>
                </div>
                <div>
                    <x-input-label for="tags" :value="__('Tags')" class="mb-2" />
                    <div class="flex flex-col flex-wrap lg:flex-row">
                        @foreach ($tags_list as $key => $tags)
                            <div class="w-full mb-4 lg:w-1/3">
                                <h2 class="w-full p-2 mb-4 text-lg font-bold bg-gray-200 border-b-2 border-gray-300">
                                    {{ Str::ucfirst($key) }}
                                </h2>
                                @foreach ($tags as $key => $tag)
                                    <x-checkbox  label="{{ $tag['name'] }}" value="{{ $tag['id'] }}"
                                        wire:model="tags" :checked="in_array($tag['id'], $tags)"  :key="$tag['id']"  :id="$tag['id']" />
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="max-w-md space-y-6">

                    {{-- meta_title --}}
                    <x-textarea label="Meta Title" placeholder="Meta Title" wire:model="meta_title" :value="old('meta_title')" />
                    {{-- meta_description --}}
                    <x-textarea label="Meta Description" placeholder="Meta Description" wire:model="meta_description"
                        :value="old('meta_description')" />
                    {{-- meta_keywords --}}
                    <x-textarea label="Meta Keywords" placeholder="Meta Keywords" wire:model="meta_keywords"
                        :value="old('meta_keywords')" />

                    {{-- is_featured --}}
                    <div>
                        <x-input-label for="is_featured" :value="__('Featured')" class="mb-2" />
                        <x-radio id="right-label" label="Featured" value="1" wire:model="is_featured"
                            checked="true" />
                        <x-radio id="right-label" label="Not Featured" value="0" wire:model="is_featured"
                            class="mt-2" />
                    </div>

                    {{-- published_at --}}
                    <div>
                        <x-datetime-picker label="Published  Date" placeholder="Published Date"
                            wire:model="published_at" />
                    </div>

                    {{-- is_active  --}}
                    <div>
                        <x-input-label for="is_active" :value="__('Status')" class="mb-2" />
                        <x-radio id="right-label" label="Active" value="1" wire:model="is_active" checked="true" />
                        <x-radio id="right-label" label="Inactive" value="0" wire:model="is_active"
                            class="mt-2" />
                    </div>

                </div>
                <div class="flex items-center gap-4 mt-10">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
