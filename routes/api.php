<?php
// API routes (JSON responses)

use App\Actions\HealthCheckAction;

// Register all API actions with explicit class names
HealthCheckAction::routes()->register(HealthCheckAction::class);
