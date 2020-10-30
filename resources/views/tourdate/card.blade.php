<div style="border: 2px solid black; border-radius: 5px; padding-left: 5px; padding-right: 5px">
    <div id="header" class="border-bottom"><b>{{ $name }}</b></div>
    <div id="body">Touring from {{ $from }} until {{ $to }}</div>
    <div id="footer" class="border-top">
        @if(Auth::check())
            <div class="text-right" style="width: 29%; display: inline-block">
                <a href="{{ route('edit_tour', ['tourDate' => $tour, ]) }}">Edit Tour&nbsp;</a>
            </div>
            <div class="text-right" style="width: 29%; display: inline-block">
                <a href="{{ route('delete_tour', ['tourDate' => $tour, ]) }}" onclick="event.preventDefault();document.getElementById('delete-{{ $tour->id }}-form').submit();">Delete Tour&nbsp;</a>
                <form id="delete-{{ $tour->id }}-form" action="{{ route('delete_tour', ['tourDate' => $tour, ]) }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
            </div>
        @endif
            <div class="text-right" style="width: 29%; display: inline-block">
                <a href="{{ route('show_tour', ['tourDate' => $tour, ]) }}">Read more...</a>
            </div>
    </div>
</div>
