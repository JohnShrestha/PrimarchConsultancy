@if(Route::has($_base_route.'.edit'))
<a href="{{ URL::route($_base_route.'.show', ['id' => $row->id]) }}">
    <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="View" style="cursor: pointer;"><i class="fa fa-eye font-14"></i></button></a>
@endif