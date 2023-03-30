<?php

namespace App\Http\Controllers;

use App\Service\SWApi;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /** @var SWApi */
    private $api;

    public function __construct(SWApi $api)
    {
        $this->api = $api;
    }

    public function index(Request $request)
    {
        $person = $search = $error = null;
        try {
            if ($request->has('search')) {
                $search = $request->get('search');
                if (is_numeric($search)) {
                    $person = $this->api->getPerson($search);
                } else {
                    $error = 'Invalid search value';
                }
            }
        } catch (\Throwable $e) {
            $error = $e->getMessage();
        }
        return $this->getView('api', [
            'person' => $person,
            'search' => $search,
            'error' => $error,
        ]);
    }
}
