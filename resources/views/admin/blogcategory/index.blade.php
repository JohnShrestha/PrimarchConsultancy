@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} List | SCMS
@endsection
@section('styles')
@include('admin.section.nestable-assets.css')
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <section class="panel">
           
        </section>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{route( $_base_route.'.create' )}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add New </a>
        </div>
    </div>
    <div class="col-sm-12">
        <section class="panel">
            <div class="panel-body">
                <br>
                

                <div class="dd" id="nestable">
                    {{-- ==============Category- DISPLAY==================== --}}
                    {!! $category !!}
                </div>
                <input type="hidden" id="nestable-output">
            </div>
        </section>
    </div>
    <!-- Modal Create -->

    <!-- modal Create -->
</div>
@endsection
@section('scripts')
@include('admin.section.nestable-assets.js')
<script>
    $(document).ready(function() {
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                // Ajax request data
                var dataString = {
                    data: $("#nestable-output").val(),
                };
                console.log(dataString);
                $.ajax({
                    type: "POST",
                    url: '/admin/blogcategory/order',
                    data: dataString,
                    beforeSend: function(xhr) {
                        var token = $('meta[name="csrf-token"]').attr('content');
                        if (token) {
                            return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    cache: false,
                    success: function(data) {
                        //  alert(data);
                        //   $("#load").hide();
                    },
                    error: function(xhr, status, error) {
                        // alert(error);
                        console.log(xhr.responseText); // this line will save you tons of hours while debugging
                        // do something here because of error
                    },
                });
                // ===================================
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable').nestable({
                group: 1
            })
            .on('change', updateOutput);
        // output initial serialised data
        updateOutput($('#nestable').data('output', $('#nestable-output')));

    });


    $(document).on("click", ".del-button", function() {
        var x = confirm('Delete this Menu Office?');
        var id = $(this).attr('id');
        //   debugger;
        var url = "blogcategory/" + id;
        //   alert(url);
        $object = $(this);
        if (x) {
            $.ajax({
                url: url,
                type: 'DELETE',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    "id": id,
                },
                success: function(response) {
                    //  debugger;
                    $($object).parents('li').remove();
                    console.log(response);
                    //  alert(response);
                    alert('Successfully Deleted!!');
                    location.reload(true);
                },
                error: function(xhr, status, error) {
                    alert(error);
                },
            });

        }
    });

    $('#nestable-menu').on('click', function(e) {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable-menu').on('reload', function(e) {
        $('.dd').nestable('collapseAll');
    });
</script>
@endsection