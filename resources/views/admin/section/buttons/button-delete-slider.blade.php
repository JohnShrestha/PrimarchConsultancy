@if(Route::has($_base_route.'.destroyFile'))
<button id="delete" data-id="{{ $row->id }}" data-url="{{ URL::route($_base_route.'.destroyFile', ['id'=>$row->id]) }}" type="button" class="btn btn-round btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
@endif