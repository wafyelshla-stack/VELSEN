<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_requires_login_before_accessing_dashboard(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_log_in_with_company_credentials(): void
    {
        User::factory()->create([
            'name' => 'veslenadmin1231@#$%*()',
            'email' => 'admin@velsen.ro',
            'password' => Hash::make('veslen23waea@#$#%#4'),
            'is_admin' => true,
        ]);

        $response = $this->post('/admin/login', [
            'email' => 'veslenadmin1231@#$%*()',
            'password' => 'veslen23waea@#$#%#4',
        ]);

        $response->assertRedirect('/admin');
        $this->assertAuthenticatedAs(User::where('name', 'veslenadmin1231@#$%*()')->first());
    }
}
