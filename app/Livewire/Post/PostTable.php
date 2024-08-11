<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class PostTable extends DataTableComponent
{

    use LivewireAlert;

    protected $model = Post::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Image", "image")
                ->format(function ($value) {
                    return $value
                        ? '<img src="' . asset('storage/' . $value) . '" class="w-8 h-8 rounded-full" alt="Avatar">'
                        : '';
                })->html(),
            Column::make("Title", "title")
            ->searchable()
                ->sortable(),
            Column::make("Slug", "slug"),
            BooleanColumn::make("Featured", "is_featured")
            ->setSuccessValue(false)
                ->sortable(),
            BooleanColumn::make("active", "is_active")
                ->sortable(),

            Column::make("Created at", "created_at")
                ->format(function ($value, $row, Column $column) {
                    return \Carbon\Carbon::parse($value)->format('d M y || h:i:a');
                })
                ->sortable(),
            //visitor
            Column::make("Visitor", "visitor")
                ->sortable(),
            Column::make('Actions')
                ->label(
                    function ($row, Column $column) {
                        $delete = '<button class="px-4 py-2 mr-2 bg-red-500 rounded-lg text-white-500" wire:click="delete(' . $row->id . ')">Trash</button>';
                        $edit = '<button class="px-4 py-2 mr-2 bg-indigo-500 rounded-lg text-white-500" wire:click="edit(' . $row->id . ')">Edit</button>';
                        if (!$row->is_active) {
                            $is_active = '<button class="px-4 py-2 mr-2 bg-green-500 rounded-lg text-white-500" wire:click="active(' . $row->id . ')">Active</button>';
                        } else {
                            $is_active = '<button class="px-4 py-2 mr-2 bg-gray-500 rounded-lg text-white-500" wire:click="active(' . $row->id . ')"> Not active</button>';
                        }
                        return $edit . $delete . $is_active;
                    }
                )->html(),



        ];
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        $this->dispatch('postDeleted');
        $this->alert('success', 'Post deleted successfully');
    }

    public function edit($id)
    {
        return redirect()->route('posts.edit', $id);
    }

    public function active($id)
    {
        $post = Post::find($id);
        $post->is_active = !$post->is_active;
        $post->save();
        $this->dispatch('postUpdated');
        $this->alert('success', 'Post ' . ($post->is_active ? 'activated' : 'deactivated') . ' successfully');
    }
}
