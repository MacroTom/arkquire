<?php

use Illuminate\Support\Facades\Log;

if(!function_exists('generateUID')){
    function generateUID(string $prefix="biz", int $length=12){
        // Define characters to use in the ID
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Get the total number of characters
        $charLength = strlen($characters);

        // Initialize the ID as an empty string
        $uniqueID = '';

        // Generate the ID by selecting random characters
        for ($i = 0; $i < $length; $i++) {
            // Generate a random index within the range of characters
            $randomIndex = rand(0, $charLength - 1);

            // Append the selected character to the ID
            $uniqueID .= $characters[$randomIndex];
        }

        return $prefix . $uniqueID;
    }
}

if(!function_exists('addlog')){
    function addlog($filename, $log){
        Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/'.$filename.'.log'),
        ])->info($log);
    }
}

if(!function_exists('getAssets')){
    function getAssets(){
        $public_path = (config('app.env') === 'local' || config('app.env') === 'testing')  ? 'public' : 'public_html';
        if (file_get_contents(base_path($public_path)."/build/manifest.json")){
            $json = json_decode(file_get_contents(base_path($public_path)."/build/manifest.json"),true);
            return [
                "css" => $json['resources/js/app.js']['css'][0],
                "js" => $json['resources/js/app.js']['file']
            ];
        }
    }
}
