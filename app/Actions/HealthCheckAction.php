<?php

namespace App\Actions;

use App\Actions\LuxidAction;
use Luxid\Nodes\Response;

class HealthCheckerAction extends LuxidAction
{
  /**
   * Get /api/health
   */
  public function index()
  {
    return Response::json([
      'status' => 'healthy',
      'timestamp' => date('Y-m-d H:i:s'),
    ]);
  }
}
