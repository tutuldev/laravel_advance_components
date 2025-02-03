<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{

//  method 1
// public function __construct(public string $type, public string $message)
// {

// }

// method 2
    // public $type;
    // public $message;


    // public function __construct(string $type, string $message)
    // {
    //     $this->type = $type;
    //     $this->message = $message;
    // }
// set defult value
// public function __construct(string $type="info", string $message="NO message")
// {
//     $this->type = $type;
//     $this->message = $message;
// }

// method 3
    public $type;
    public $message;
    public $dismissable;
    protected $types =[
        "success",
        "danger",
        "info",
    ];

public function __construct(string $type="info", string $message="NO message",$dismissable=false)
{
    $this->type = $type;
    $this->message = $message;
    $this->dismissable = $dismissable;
}

public function validType(){
    return in_array($this->type,$this->types) ? $this->type : "info";
}
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
