<?php
// routes/api.php - API routes (JSON responses)

use App\Actions\Api\HealthCheckAction;

// Health check endpoint
route('api.health')
  ->get('/api/health')
  ->uses(HealthCheckAction::class, 'index')
  ->open();

// Example API endpoints (commented out - users can uncomment as needed)
// route('api.users.index')
//     ->get('/api/users')
//     ->uses(UserApiAction::class, 'index')
//     ->secure();
