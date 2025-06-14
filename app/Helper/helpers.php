<?php

function notify($type,$a=false)
{
    $var = \Request::method();
    $type = ucfirst($type);
    if($type == 'Error'){
        $notification = [
            'message'   => "Something went wrong. Try again.",
            'alert-type'=>'error'
        ];        

    }else{

        switch (strtolower($var)) {
            case 'post':
                $notification = [
                    'message'   => "$type created successfully",
                    'alert-type'=>'success'
                ];        
            break;
            case 'delete': 
                if ($a) {
                    $notification = [
                        'message'   => "You cannot delete $type!",
                        'alert-type'=>'info'
                    ]; 
                }else{
                    $notification = [
                        'message'   => "$type deleted successfully",
                        'alert-type'=>'success'
                    ];        
                }
                
            break;
            case 'put':
                $notification = [
                    'message'   => "$type updated successfully",
                    'alert-type'=>'success'
                ];        
            break;
            
              
            default:
            # code...
        break;
    }
}
    return $notification;
} 

?>