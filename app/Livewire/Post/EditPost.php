<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use App\Helpers\ImageHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPost extends Component
{
    use WithFileUploads,LivewireAlert;

    private $post = Post::class;

    public $title;
    public $slug;
    public $description;

    public $categories_list;
    public $categories = [];
    public $tags_list;
    public $tags = [];
    public $image;
    public $is_featured;
    public $is_active;
    public $published_at;
    public $meta_title;
    public $meta_description;
    public $meta_keywords;

    public $post_id;
    public $old_image;

    //mount
    public function mount($id)
    {
        $post = $this->post::findOrFail($id);
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->description = $post->description;
        $this->categories = $post->categories->pluck('id')->toArray();
        $this->tags = $post->tags?->pluck('id')->toArray();
        $this->is_featured = $post->is_featured;
        $this->is_active = $post->is_active;
        $this->published_at = $post->published_at;
        $this->meta_title = $post->meta_title;
        $this->meta_description = $post->meta_description;
        $this->meta_keywords = $post->meta_keywords;

        $this->post_id = $id;
        $this->old_image = $post->image;

        $this->categories_list = \App\Models\Category::orderBy('name')->pluck('name', 'id');
        $this->tags_list = \App\Models\Tag::orderBy('name')->get()->groupBy(function ($item, $key) {
            return substr($item->name, 0, 1);
        })->toArray();
    }


    public function render()
    {
        return view('livewire.post.edit-post');
    }

     //updatedTitle
     public function updatedTitle($value)
     {
         $this->slug = \Illuminate\Support\Str::slug($value);
     }

     public function updated($field)
     {
         $this->validateOnly($field, [
             'title' => 'required|min:3|max:255',
             'slug' => 'required|min:3|max:255|unique:posts,slug,'.$this->post_id,
             'description' => 'required|min:3',
             'categories' => 'required|array|exists:categories,id',
             'tags' => 'required|array|exists:tags,id',
             'image' => 'nullable|image|max:1024',
             'is_featured' => 'required',
             'is_active' => 'required',
             'published_at' => 'nullable|date|after_or_equal:today',
             'meta_title' => 'nullable|min:3|max:255',
             'meta_description' => 'nullable|min:3|max:255',
             'meta_keywords' => 'nullable|min:3|max:255',
         ]);
     }

     public function update()
     {
        // ImageHelper::imageWatermark(Storage::disk('public')->get($this->old_image),$this->old_image);
            $this->validate([
                'title' => 'required|min:3|max:255',
                'slug' => 'required|min:3|max:255|unique:posts,slug,'.$this->post_id,
                'description' => 'required|min:3',
                'categories' => 'required|array|exists:categories,id',
                'tags' => 'required|array|exists:tags,id',
                'image' => 'nullable|image|max:1024',
                'is_featured' => 'required',
                'is_active' => 'required',
                'published_at' => 'nullable|date|after_or_equal:today',
                'meta_title' => 'nullable|min:3',
                'meta_description' => 'nullable|min:3',
                'meta_keywords' => 'nullable|min:3',
            ]);

            $post = $this->post::find($this->post_id);

            if($this->image){
                $this->image = $this->image->store('images', 'public');
            }else{
                $this->image = $post->image;
            }

            $post->update([
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description,
                'image' => $this->image,
                'is_featured' => $this->is_featured,
                'is_active' => $this->is_active,
                'published_at' => $this->published_at,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'meta_keywords' => $this->meta_keywords,
            ]);
            // dd($this->categories,$this->tags);

            $post->categories()->sync($this->categories);
            $post->tags()->sync($this->tags);


            $this->alert('success', 'Post Updated Successfully');

            $this->dispatch('postUpdated');

            return redirect()->route('posts.index');

     }
}
