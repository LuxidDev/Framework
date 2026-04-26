<?php
// API routes (JSON responses)

use App\Actions\HealthCheckerAction;

// Register API routes using the new style
HealthCheckerAction::routes()->register();
