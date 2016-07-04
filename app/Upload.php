<?php 
namespace App;
use File;

class Upload{
    
    private function isImage($type)
    {
        $imgTypes = [
            'image/jpeg',
            'image/png'
        ];
        
        return in_array($type, $imgTypes);
    
    }
    
    private function mkdir()
    {
        if(!File::exists(public_path().'/img/upload/')){
            mkdir(public_path().'/img/upload/', 0777, true);
        }
    }
    
    public function uploadBase64Image($base64){
        $base64Part = explode(";", $base64);
        if(!empty($base64Part[1])){
            $typeFormat = explode(":", $base64Part[0])[1];
            if($this->isImage($typeFormat)){
                $data = explode(',', $base64);
                $image = base64_decode($data[1]);
                $imageName = uniqid().".".explode("/", $typeFormat)[1];
                $this->mkdir();
                file_put_contents(public_path().'/img/upload/'.$imageName, $image);
                return $imageName;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}