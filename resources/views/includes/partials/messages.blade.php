 @if($errors->any())
    <div class="notification is-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </div>
@elseif(session()->get('flash_success'))
    <div class="notification is-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(json_decode(session()->get('flash_success'), true)))
            {{ implode('', session()->get('flash_success')->all(':message<br/>')) }}
        @else
            {{ session()->get('flash_success') }}
        @endif
    </div>
@elseif(session()->get('flash_warning'))
    <div class="notification is-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(json_decode(session()->get('flash_warning'), true)))
            {{ implode('', session()->get('flash_warning')->all(':message<br/>')) }}
        @else
            {{ session()->get('flash_warning') }}
        @endif
    </div>
@elseif(session()->get('flash_info'))
    <div class="notification is-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(json_decode(session()->get('flash_info'), true)))
            {{ implode('', session()->get('flash_info')->all(':message<br/>')) }}
        @else
            {{ session()->get('flash_info') }}
        @endif
    </div>
@elseif(session()->get('flash_danger'))
    <div class="notification is-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(json_decode(session()->get('flash_danger'), true)))
            {{ implode('', session()->get('flash_danger')->all(':message<br/>')) }}
        @else
            {{ session()->get('flash_danger') }}
        @endif
    </div>
@elseif(session()->get('flash_message'))
    <div class="notification is-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(json_decode(session()->get('flash_message'), true)))
            {{ implode('', session()->get('flash_message')->all(':message<br/>')) }}
        @else
            {{ session()->get('flash_message') }}
        @endif
    </div>
@endif
