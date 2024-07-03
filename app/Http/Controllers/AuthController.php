<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use VK\Client\VKApiClient;
use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class AuthController extends Controller
{

    public function k(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://vk.com/al_audio.php?act=section",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "act=section&al=1&claim=0&is_layer=0&owner_id=148547387&section=all",
            CURLOPT_COOKIE => "remixlang=0; remixstlid=9115744145630100609_dNQGRveVtUgU4kFwO5iPmx42ckKjfF1y5SWlA8z6zE4; remixstid=665528478_9hynF0AN9I1JXa4tDLtZi0W4ZZMYELc0NdzUcEsoJZ0; remixff=0; remixua=-1%257C-1%257C335%257C96127295",
            CURLOPT_HTTPHEADER => [
                "accept: */*",
                "accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
                "Accept-Charset: windows-1251, *;q=0.1",
                "content-type: application/x-www-form-urlencoded",
                "cookie: remixlang=0; remixstlid=9095196336576394111_eTiUJ6aS55tY97EDPcHH59jsvmiXMLZw3bmHBp5Olpo; remixstid=1446980495_kFktJdsxSZf3Aqb9ZN3q9tcPpspTBw56YR9bSlilmSc; remixscreen_width=1920; remixscreen_height=1080; remixscreen_dpr=1; remixscreen_depth=24; remixscreen_orient=1; remixsf=1; remixgp=450b41a031158782a427068851bb562d; remixdark_color_scheme=0; remixcolor_scheme_mode=auto; remixdt=0; remixua=43%7C-1%7C213%7C2996390830; remixuas=NzI5NTZiYTBjOTgzNDFiNGZjNDI3YjAy; remixuacck=1515dc40fad5fb19d6; remixsuc=1%3A; remixpuad=-wBof15WW9HcyUjr9pf1Bw9rO9MhDcKuqv8-cG0cvOs; remixnsid=vk1.a.ZdzNw1AFCOPk3m4YeUOAzZiDXWbM2CoQ-WEOyfonzRpxi1-VqP4tz8uO_1UycECSmCK31N_BVh94xTIu8UNtJd1TENh9De5BhNxBU6JhDN2kkN5CKZ6jOIzPmKRfArtIbre9EfP5cNZ9qQbewhrN3zCxmg44aDOGygCTgq9siOaf5rVlGeOb0ANq-wdQ6ZHV; remixsid=1_nY_4uMacki46zJB1vJVvSx4UJP5VdZNpWshgVmbUGnZEn8YgisUv5NM5KAVTxc93gFg3q1ClRmMZVSUAO9OHCw; remixdmgr_tmp=89cccbc5c126b44d9d7a1c64b31897de6ec762bfd3d3c425f6f820f97426adbc; remixdmgr_f=9c94907b76455e9883e6e7814b3ae44f; remixrefkey=2614db9842320d11fa; remixscreen_winzoom=1.89",
                "origin: https://vk.com",
                "priority: u=1, i",
                "referer: https://vk.com/audios148547387",
            "sec-ch-ua-mobile: ?0",
            "sec-ch-ua-platform: Windows",
            "sec-fetch-dest: empty",
            "sec-fetch-mode: cors",
            "sec-fetch-site: same-origin",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36",
            "x-kl-kis-ajax-request: Ajax_Request",
            "x-requested-with: XMLHttpRequest"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    public function redirectToProvider(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('vkontakte')->stateless()->redirect();
    }

    /**
     * @throws VKApiException
     * @throws VKClientException
     */
    public function handleProviderCallback(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $user = Socialite::driver('vkontakte')->stateless()->user();
        $existsUser = User::query()->where('vk_id', $user->id)->first();
        if ($existsUser){
            tap($existsUser)->update([
                'vk_id' => $user->id,
                'nickname' => $user->nickname,
                'name' => $user->name,
                'first_name' => $user->user['first_name'],
                'last_name' => $user->user['last_name'],
                'avatar' => $user->avatar,
                'token' => $user->token,
            ]);
            Auth::loginUsingId($existsUser->id);
        }
        else{
            $createdUser = User::query()->create([
                'vk_id' => $user->id,
                'nickname' => $user->nickname,
                'name' => $user->name,
                'first_name' => $user->user['first_name'],
                'last_name' => $user->user['last_name'],
                'avatar' => $user->avatar,
                'token' => $user->token,
            ]);
            Auth::loginUsingId($createdUser->id);
        }
        return redirect('/');
    }

    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Auth::logout();
        return redirect('/');
    }

}
