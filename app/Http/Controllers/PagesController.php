<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Math\BigInteger\Engines\GMP\DefaultEngine;
use VK\Client\VKApiClient;
use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class PagesController extends Controller
{

    public function k($userVkID): bool|string
    {
        $curl = curl_init();

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://vk.com/audio?act=load_catalog_section",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "al=1&section_id=PUldVA8FR0RzSVNUWE1JSmRSS0wEGEleZFFYQg0BX1F1U14L",
            CURLOPT_COOKIE => "remixlang=0; remixstlid=9115744145630100609_dNQGRveVtUgU4kFwO5iPmx42ckKjfF1y5SWlA8z6zE4; remixstid=665528478_9hynF0AN9I1JXa4tDLtZi0W4ZZMYELc0NdzUcEsoJZ0; remixff=0; remixua=-1%257C-1%257C335%257C96127295",
            CURLOPT_HTTPHEADER => [
                "accept: */*",
                "accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
                "content-type: application/x-www-form-urlencoded",
                "cookie: remixlang=0; remixstlid=9112222956928229557_QN4Zzjd4jBZsRMjZZDht8fGs7bOceGk9ophxmwOQ4wH; remixstid=1556605545_PnEmA1yDBk8ZoGDG4qNt3of1uUa1lPZzTdoZ6oO6v04; remixscreen_width=1920; remixscreen_height=1080; remixscreen_dpr=1; remixscreen_depth=24; remixdark_color_scheme=0; remixcolor_scheme_mode=auto; remixdt=0; remixuas=NjJmMzM4YzY0NWE5ZjA4YzRjODY2ZDkw; remixua=43%7C-1%7C213%7C415393989; remixscreen_orient=1; remixsf=1; remixsuc=1%3A; remixuacck=f610d677cc16be8d50; remixnttpid=vk1.a.NO5Gy0MVWQx2v2oUV9UWDn3v_HmNTbpY7ylb_KHoHa-jyq3VBgEGo_wM7sOUprgt-DU7frAWOkwN7n79vDpb9b0QYAchVu_K1ba3lT8qwPnCsPmVmGwDWXwqrWEXtEPklEEPr3ooADGSRG1sFn87l7dwFNgHp6f8NORoZuwQw1EHMKrTBF7hhCJJh1ITCBDO; remixrefkey=19ae91065329269ebf; remixseenads=1; remixpuad=obMLXoWrES29NSLAd2ySWw8OoeXVooZL54b-qDOE9oA; remixnsid=vk1.a.YhVqUlKYriN3K8DgjLJZt_fDkM-LuFCw0jymASbf7s-CAM_gG2foxb3sfLzN9VY6lpZXWhTUIFQGF6m7bKbeAdGRw8Wlk6c52lNv-1U1PJDBRZnHIyu3ja4sl_5rZs0irvVrt7NInLSHy_gAGFDJuj8-VemIrwrVM2EcdAxKml7QMyfRm0J7i71adBhTmqxQ; remixsid=1_yqm_F-AR2cClTRllSbnMc_1SrCTvjx9bb75Gb-J38Zas37aoSTrXf8tuPo3AHHHl39H46EcKoljA3TbCnZs2sg; remixdmgr_tmp=e543a5da3142f52e30753c754e8e102cdd5dde1a715f5256149277c9b7312f65; remixdmgr_f=9c94907b76455e9883e6e7814b3ae44f; remixgp=670f0955fd0978a346408ffbe5c9c6bf; hitw429=1; remixscreen_winzoom=1.82; remixsts=%7B%22data%22%3A%5B%5B1719951132%2C%22web_dark_theme%22%2C%22auto%22%2C%22vkcom_light%22%2C0%5D%5D%2C%22uniqueId%22%3A20996239.571637135%7D",
                "origin: https://vk.com",
                "priority: u=1, i",
                "referer: https://vk.com/audios$userVkID?section=all",
            "sec-ch-ua-mobile: ?0",
            "sec-ch-ua-platform: Windows",
            "sec-fetch-dest: empty",
            "sec-fetch-mode: cors",
            "sec-fetch-site: same-origin",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36",
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

    public function audio(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('audio');
    }
    function curl($url): bool|string
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, "Opera/10.00 (Windows NT 5.1; U; ru)
Presto/2.2.0");
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        dd($err);
        curl_close($curl);
        return $response;
    }
    /**
     * @throws VKApiException
     * @throws VKClientException
     */
    public function searchMusic(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $vk = new VKApiClient();
        $acces_token=auth()->user()->token;
        $vk_id = auth()->user()->vk_id;
        $url = "https://api.vk.com/method/friends.get?user_id=$vk_id&fields=nickname,photo_50&name_case=nom&access_token=$acces_token&v=5.131";
        $users = json_decode(file_get_contents($url), true);
        $friends = $users['response']['items'];//]&audio_ids=[ID трека]

        $json = json_decode($this->k($vk_id), true);
        dd($json);
        return view('audio', ['items' => $friends]);
    }

    public function rules(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('rules');
    }
}
