@extends('layouts.admin')
@section('title')
    Admin {{ $_panel }} Add | SCMS
@endsection
@section('styles')
@endsection
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4  text-primary">{{ $_panel }} Add</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route($_base_route . '.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ibox-body">
                    <div class="form-group col-md-12">
                        <?php
                        dm_menu_type_dropdown('', 'type', 'Menu Type(<em style="color:red">*</em>)', $data['type']);
                        dm_post_dropdown('', 'page_unique_id', 'Pages', $data['pages']);
                        dm_post_dropdown('', 'post_unique_id', 'Posts', $data['posts']);
                        dm_category_dropdown('', 'category_id', 'Category', $data['categories']);
                        dm_custom_link_hinput('url', 'link', 'Custom Link', 'link');
                        dm_menu_hinput('text', 'name', "Menu Name(<em style='color:red'>*</em>)", 'name');
                        ?>
                        @foreach ($data['lang'] as $lang)
                            <?php dm_hidden('rows[' . $loop->index . '][lang_id]', $lang->id);
                            dm_menu_hinput('text', 'rows[' . $loop->index . '][lang_name]', "Menu Name (<strong>$lang->name</strong>)(<em style='color:red'>*</em>)", 'rows.' . $loop->index . '.lang_name'); ?>
                        @endforeach
                        <?php
                        dm_hidden('parent_id', null);
                        dm_hidden('order', 1);
                        dm_menu_dropdown('', 'target', "Target(<em style='color:red'>*</em>)", $data['target']);

                        ?>
                        <div class="form-group">
                            <label>Published</label>
                            <div class="form-group">
                                <label class="ui-checkbox">
                                    <input type="hidden" name="status" value=0><span class="input-span"></span>
                                    <input type="checkbox" name="status" value=1><span class="input-span"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Begin Progress Bar Buttons-->
                    <a href="{{ route($_base_route . '.index') }}" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i>
                        Back</a>
                    <button class="btn btn-success btn-sm" type="submit" style="cursor:pointer;"> <i
                            class="fa fa-paper-plane"></i> Submit </button>
                    <!-- End Progress Bar Buttons-->
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function menuTypeFunction() {
            var menu_type = document.getElementById("type").value;
            if (menu_type == "Page") {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").hide();
                $("#link_link").hide();
                $("#page_unique_id_Pages").show();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").hide();
            } else if (menu_type === "Post") {
                $("#post_unique_id_Posts").show();
                $("#category_id_Category").hide();
                $("#link_link").hide();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").hide();

            } else if (menu_type === "Category") {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").show();
                $("#link_link").hide();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").hide();

            } else if (menu_type === "Institute Page") {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").hide();
                $("#link_link").hide();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").show();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").hide();

            } else if (menu_type === "Faculty Page") {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").hide();
                $("#link_link").hide();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").show();
                $("#branch_id_Branch").hide();

            } else if (menu_type === "Branch") {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").hide();
                $("#link_link").hide();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").show();
            } else {
                $("#post_unique_id_Posts").hide();
                $("#category_id_Category").hide();
                $("#link_link").show();
                $("#page_unique_id_Pages").hide();
                $("#institute_unique_id_Institute").hide();
                $("#faculty_unique_id_Faculty").hide();
                $("#branch_id_Branch").hide();
            }
        }
    </script>
@endsection
