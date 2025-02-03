{{-- <div class="alert alert-success" role="alert">
    A simple primary alert—check it out!
  </div> --}}

  {{-- <div class="alert alert-{{$type}}" role="alert">
    {{$message}}
  </div> --}}

  {{-- check valid  --}}

    {{-- <div class="alert alert-{{$validType}}" role="alert">
      {{$message}}
    </div> --}}

    {{-- add id  --}}


    {{-- <div class="alert alert-{{$validType}}" {{$attributes}} role="alert">
        {{$message}}
      </div> --}}

      {{-- add id and class  --}}
      {{-- <div  {{$attributes->merge(['class'=>'alert alert-'. $validType])}} role="alert">
        {{$message}}
      </div> --}}

      {{-- roll pass by view file   --}}
      {{-- <div  {{$attributes->merge(['class'=>'alert alert-'. $validType])}} >
        {{$message}}
      </div> --}}
      {{-- roll dinamic   --}}
      {{-- <div  {{$attributes->merge(['class'=>'alert alert-'. $validType,'role'=>'alert'])}} >
        {{$message}}
      </div> --}}

      {{-- add multiple roll  --}}
      {{-- <div  {{$attributes->merge(['class'=>'alert alert-'. $validType,
      'role'=>$attributes->prepends('alert')
      ])}} >
        {{$message}}
      </div> --}}

      {{-- condisonal base marge class  --}}
      {{-- when dismissable true then show  --}}
      <div  {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType,
        'role'=>$attributes->prepends('alert')
        ])}} >
          {{$message}}
          @if ($dismissable)
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          @endif
        </div>
