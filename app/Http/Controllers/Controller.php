<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Service;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class ServiceController extends Controller
{
    public function getServices()
    {
        $services = Service::all();

        return $services;
    }

    public function showServices()
    {
        $services = $this->getServices();

        if ($services->isEmpty()) {
            return view('welcome', ['message' => 'Tidak ada layanan ditemukan']);
        }

        return view('welcome', compact('services'));
    }
}