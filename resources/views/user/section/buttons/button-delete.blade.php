@if(Route::has($_base_route.'.destroy'))
<button id="delete" data-id="{{ $row->id }}" data-url="{{ URL::route($_base_route.'.destroy', ['id' => $row->id]) }}" style="cursor:pointer;" type="button" class="btn btn-round btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
@endif