<?php
// Web routes (HTML responses using Nova)

use App\Actions\WelcomeAction;

// Register web actions with explicit class name
WelcomeAction::routes()->register(WelcomeAction::class);
