<?php

namespace Tests\Feature;

use Tests\TestCase;

class StudentCrudTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/students');
    }
}