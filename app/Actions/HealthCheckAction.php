<?php

namespace App\Actions;

use Luxid\Nodes\Response;
use Luxid\Routing\Routes;

class HealthCheckerAction extends LuxidAction
{
    public static function routes(): Routes
    {
        return Routes::new()
            ->prefix('api')
            ->add('/health', get('index'));
    }

    /**
     * GET /api/health
     */
    public function index()
    {
        return Response::success([
            'status' => 'healthy',
            'timestamp' => date('Y-m-d H:i:s'),
        ]);
    }
}