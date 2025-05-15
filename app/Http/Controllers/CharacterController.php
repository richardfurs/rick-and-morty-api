<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function getAllCharacters(Request $request): JsonResponse
    {
        $query = $request->query();
        $page = isset($query['page']) ? $query['page'] : null;

        $url = config('services.base_api_url.url');

        $response = Http::get("{$url}?page={$page}");

        if (!$response->successful()) {
            return response()->json([
                'error' => [
                    'message' => 'Error occured with status code: ' . $response->status()
                ]
            ]);
        }

        return response()->json($response->body());
    }

    public function getCharacter($id): JsonResponse
    {
        $url = config('services.base_api_url.url');

        $response = Http::get("{$url}/{$id}");

        if (!$response->successful()) {
            return response()->json([
                'error' => [
                    'message' => 'Error occured with status code: ' . $response->status()
                ]
            ]);
        }

        return response()->json($response->body());
    }

    public function findCharacters(Request $request): JsonResponse
    {
        $query = $request->query();
        $name = isset($query['name']) ? $query['name'] : null;
        $status = isset($query['status']) ? $query['status'] : null;

        $url = config('services.base_api_url.url');

        $response = Http::get("{$url}?name={$name}&status={$status}");

        if (!$response->successful()) {
            return response()->json([
                'error' => [
                    'message' => 'Error occured with status code: ' . $response->status()
                ]
            ]);
        }

        return response()->json($response->body());
    }
}
