<?php

namespace App\Livewire\Post;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreatePost extends Component
{

    use WithFileUploads,LivewireAlert;

    private $post = Post::class;

    public $title;
    public $slug;
    public $description;
    public $categories_list;
    public $categories = [];
    public $tags = [];
    public $tags_list;
    public $image;
    public $is_featured = false;
    public $is_active = true;
    public $published_at;
    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $markdown_content;

    public function mount()
    {
        $this->published_at = now();
        $this->categories_list = Category::orderBy('name')->pluck('name', 'id');
        //group by alpahebetical order
        $this->tags_list = Tag::orderBy('name')->get()->groupBy(function ($item, $key) {
            return substr($item->name, 0, 1);
        })->toArray();



    }


    public function render()
    {
        return view('livewire.post.create-post');
    }

    //updatedTitle
    public function updatedTitle($value)
    {
        $this->slug = \Illuminate\Support\Str::slug($value);
    }

    // public function updated($field)
    // {
    //     $this->validateOnly($field, [
    //         'title' => 'required|min:3|max:255',
    //         'slug' => 'required|min:3|max:255|unique:posts',
    //         'description' => 'required|min:3',
    //         'categories' => 'required|array|exists:categories,id',
    //         'tags' => 'required|array|exists:tags,id',
    //         'image' => 'required|image|max:1024',
    //         'is_featured' => 'required',
    //         'is_active' => 'required',
    //         'published_at' => 'nullable|date|after_or_equal:today',
    //         'meta_title' => 'nullable|min:3',
    //         'meta_description' => 'nullable|min:3',
    //         'meta_keywords' => 'nullable|min:3',
    //     ]);
    // }

    public function store()
    {
        $this->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:posts',
            'description' => 'nullable',
            'categories' => 'required|array|exists:categories,id',
            'tags' => 'required|array|exists:tags,id',
            'image' => 'required|image|max:1024',
            'is_featured' => 'required',
            'is_active' => 'required',
            'published_at' => 'nullable|date|after_or_equal:today',
            'meta_title' => 'nullable|min:3',
            'meta_description' => 'nullable|min:3',
            'meta_keywords' => 'nullable|min:3',
        ]);

        $this->image = $this->image->store('images', 'public');

        $post = $this->post::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->markdown_content ? \Illuminate\Support\Str::markdown($this->markdown_content) : $this->description,
            'categories' => $this->categories,
            'tags' => $this->tags,
            'image' => $this->image,
            'is_featured' => $this->is_featured,
            'is_active' => $this->is_active,
            'published_at' => $this->published_at,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
        ]);

        $post->categories()->attach($this->categories);
        $post->tags()->attach($this->tags);

        $this->alert('success', 'Post Created Successfully');
        return redirect()->route('posts.index');
    }
}
