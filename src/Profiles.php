<?php

namespace Profiles;

class Profiles {

    public function getProfilesData() {
        $pro = file_get_contents(__DIR__.'/../db/profilesData.json');
        $pro = json_decode ( $pro, true );  // JSON doc to PHP array

        return $pro;
    }

    public function generate() {
        return $this->getProfilesData();
    } 
    
    public function getProfiles($department){

    $profiles = getProfileData();    
    if($department){
        $tempProfile = [];

        foreach($profiles as $val){
            if($val->department == $department){
                array_push($tempProfile, $val);
            }
        };
        return json_encode($tempProfile);
    } else {
        return json_encode($profiles);
    }
}
    
}

?>
