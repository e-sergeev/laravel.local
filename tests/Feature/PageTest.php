<?php

namespace Tests\Feature;

use App\News;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testGetNews() {
        $content = Storage::get('news/content.json');
        $this->assertNotEmpty($content);
        $this->assertIsArray(json_decode($content, true));
    }

    public function testPage() {

        $response = $this->get('/news');
        $response->assertStatus(200);
    }

    public function testPageContent() {

        $response = $this->get('/news');
        $response->assertSeeText('Заголовок');
    }
}
