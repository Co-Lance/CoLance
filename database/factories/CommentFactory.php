<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Forum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Comment $comment) {
            $comment->user_id = User::factory()->create()->id;
            $comment->forum_id = Forum::factory()->create()->id;
            $comment->save();
        });
    }
}