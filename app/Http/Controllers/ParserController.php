<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VK\Client\VKApiClient;
use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class ParserController extends Controller
{
    /**
     * @throws VKApiException
     * @throws VKClientException
     */
    public function parser(){
        $vk = new VKApiClient();

        $response = $vk->users()->get('ewrrrrwererw', array(
            'user_ids' => array(1, 210700286),
            'fields' => array('city', 'photo'),
        ));
    }


    public function getUserMusic(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = $request->user();
        $vkApi = new VKApiClient();
        $response = $vkApi->audio()->get($user->token, [
            'owner_id' => $user->vk_id,
        ]);

        return response()->json($response->getItems());
    }

}
