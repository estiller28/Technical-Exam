<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class TestApiRequestController extends Controller
{
    public function getData(){

        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/posts/11', [
            'query' => [
                'title' => 'title',
                'body' => 'body',
            ]
        ]);

        if ($response){
            $body = $response->getBody();
            $data = json_decode($body, true);

            $createPost = Post::create([
                'title' => $data['title'],
                'body' => $data['body'],
            ]);
            if($createPost){
                return response()->json([
                    'message' => 'Success',
                ]);
            }
        }
    }


    public function getSinglePost($id){
        $data = Http::get("https://jsonplaceholder.typicode.com/posts/". $id);

        dd($data->json());
    }

    public function addPost(){
        $response = Http::post("https://jsonplaceholder.typicode.com/posts/", [
            'title' => "Daniel",
            'body'  => "Test Api Post Request"
        ]);

        return $response->json();

    }
}
