<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryShowTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_show_displays_all_posts(): void
    {
        $category = Category::create(['name' => 'Laravel']);

        Post::create([
            'title' => 'First Post',
            'content' => 'First post content',
            'category_id' => $category->id,
        ]);

        Post::create([
            'title' => 'Second Post',
            'content' => 'Second post content',
            'category_id' => $category->id,
        ]);

        $response = $this->get(route('categories.show', $category));

        $response->assertOk();
        $response->assertSee('First Post');
        $response->assertSee('Second Post');
    }
}
