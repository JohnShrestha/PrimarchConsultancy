<?php
if (!function_exists('dm_hpostForm')) {
    function dm_hpostForm($action = "", $method = "POST", $name = null)
    {
?>
        <form class=" form-horizontal" <?= $name != null ? 'name="' . $name . '" id="' . $name . '"' : '' ?> method="POST" action="<?= $action ?>" enctype="multipart/form-data">
            <?= method_field($method), csrf_field()  ?>
        <?php
    }
}
if (!function_exists('dm_closeForm')) {
    function dm_closeForm()
    {
        ?>
        </form>
    <?php
    }
}
/** Input Field for Create */
if (!function_exists('dm_hinput')) {
    function dm_hinput($type, $name, $caption = "", $value = "", $options = '')
    {
    ?>
        <div class="form-group ">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= old($value); ?>" <?= $options ?> />
            </div>
        </div>
    <?php
    }
}
/** Input Field for Updated */
if (!function_exists('dm_hinputUpdate')) {
    function dm_hinputUpdate($type, $name, $caption = "", $value = "", $options = '')
    {
    ?>
        <div class="form-group ">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $options ?> />
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_hidden')) {
    function dm_hidden($name, $value = "", $options = '')
    {
    ?>
        <input id="<?= $name ?>" name="<?= $name ?>" type="hidden" value="<?= $value ?>" <?= $options ?> />
    <?php
    }
}
/** Create Text area */
if (!function_exists('dm_htextarea')) {
    function dm_htextarea($name, $caption = "", $value = "", $options = '')
    {
    ?>
        <div class="form-group ">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <textarea class=" form-control" id="<?= $name ?>" name="<?= $name ?>" <?= $options ?>><?= old($value) ?></textarea>
                <?php if (isset($help)) { ?><p><?php echo $help; ?></p><?php } ?>
            </div>
        </div>
    <?php
    }
}
/** Update Text area */
if (!function_exists('dm_htextareaUpdate')) {
    function dm_htextareaUpdate($name, $caption = "", $value = "", $options = '')
    {
    ?>
        <div class="form-group ">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <textarea class=" form-control <?= $name ?>" id="<?= $name ?>" name="<?= $name ?>" <?= $options ?>><?= $value ?></textarea>
                <?php if (isset($help)) { ?><p><?php echo $help; ?></p><?php } ?>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_htexteditor')) {
    function dm_htexteditor($name, $caption = "", $value = "", $options = '')
    {
    ?>
        <div class="form-group">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <textarea class="ckeditor form-control" id="<?= $name ?>" name="<?= $name ?>" <?= $options ?>><?= $value ?></textarea>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_hcheckbox')) {
    function dm_hcheckbox($type = "checkbox", $name, $caption = "", $checked = null, $value = 1, $options = '')
    {
    ?>
        <div class="form-group ">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10 col-sm-10">
                <input value=<?= $value ?> type="checkbox" onclick="if($(this).attr('checked')=='checked'){ $(this).next().removeAttr('checked'); }else{ $(this).next().attr('checked','checked'); }" style="width: 20px" class="checkbox form-control" id="<?= $name ?>" name="<?= $name ?>" <?= $checked != null ? "checked" : "" ?> <?= $options ?>>
                <input value=0 type="checkbox" style="display: none;" name="<?= $name ?>" <?= $checked == null ? "checked" : "" ?>>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_hsubmit')) {
    function dm_hsubmit($submitCaption = null, $backURL = null, $backCaption = null)
    {
    ?>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <div class="pull-right">
                    <input class="btn btn-danger" type="submit" value="<?= $submitCaption != null ? $submitCaption : '' ?>">
                    <a href="<?= $backURL != null ? $backURL : '' ?>" class="btn btn-default" type="button"><?= $backCaption != null ? $backCaption : '' ?></a>
                </div>
            </div>
        </div>
    <?php
    }
}
/** Create Textarea CKEDDITOR */
//laravel file manger: url:https://unisharp.github.io/laravel-filemanager/integration
if (!function_exists('dm_hckeditor')) {
    function dm_hckeditor($name = "", $caption = "", $value = "")
    {
    ?>
        <div class="form-group">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <textarea id="<?= $name ?>" name="<?= $name ?>" class="form-control"><?= old($value) ?></textarea>
                <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
            </div>
        </div>
    <?php
    }
}
/** Update Ckeditor */
//laravel file manger: url:https://unisharp.github.io/laravel-filemanager/integration
if (!function_exists('dm_hckeditorUpdate')) {
    function dm_hckeditorUpdate($name = "", $caption = "", $value = "")
    {
    ?>
        <div class="form-group">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <textarea id="<?= $name ?>" name="<?= $name ?>" class="form-control"><?= $value ?></textarea>
                <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_hdropdown')) {
    function dm_hdropdown($name = "", $caption = "", $data = "", $old_data_name = "Uncategorized")
    {
    ?>
        <div class="form-group">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                    <option value=<?= $old_data_name ?>><?= $old_data_name ?></option>
                    <?php foreach ($data as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_hdropdownLang')) {
    function dm_hdropdownLang($name = "", $caption = "", $data = "", $old_data_value = "", $old_data_name = "")
    {
    ?>
        <div class="form-group">
            <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
            <div class="col-lg-10">
                <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                    <option value=<?= $old_data_value ?>><?= $old_data_name ?></option>
                    <?php foreach ($data as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    <?php
    }
}
if (!function_exists('dm_button')) {
    function dm_button($type = "button", $class = "", $caption = "", $id = "", $data_id = "", $data_url = "", $data_toggle = "", $href = "")
    {
    ?>
        <button href="<?= $href ?>" type="<?= $type ?>" class="btn <?= $class ?>" id="<?= $id ?>" data-id="<?= $data_id ?>" data-url="<?= $data_url ?>" data-toggle="<?= $data_toggle ?>"><?= $caption ?></button>
    <?php
    }
}

// ============================================================================================

if (!function_exists('dm_postForm')) {
    function dm_postForm($action = "", $method = "POST", $name = null)
    {
    ?>
        <form class="" <?= $name != null ? 'name="' . $name . '" id="' . $name . '"' : '' ?> method="POST" action="<?= $action ?>" enctype="multipart/form-data">
            <?= method_field($method), csrf_field()  ?>
        <?php
    }
}
/** Create Input */
if (!function_exists('dm_input')) {
    function dm_input($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= old($value) ?>" <?= $options ?> />
            </div>
        <?php
    }
}
/** Input Update */
if (!function_exists('dm_inputUpdate')) {
    function dm_inputUpdate($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $options ?> />
            </div>
        <?php
    }
}
/** Create Textarea */
if (!function_exists('dm_textarea')) {
    function dm_textarea($name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <textarea class=" form-control <?= $name ?>" id="<?= $name ?>" name="<?= $name ?>" <?= $options ?>><?= old($value); ?></textarea>
                <?php if (isset($help)) { ?><p><?php echo $help; ?></p><?php } ?>
            </div>
        <?php
    }
}
/** Update Textarea */
if (!function_exists('dm_textareaUpdate')) {
    function dm_textareaUpdate($name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <textarea class="form-control <?= $name ?>" id="<?= $name ?>" name="<?= $name ?>" <?= $options ?>><?= $value ?></textarea>
                <?php if (isset($help)) { ?><p><?php echo $help; ?></p><?php } ?>
            </div>
        <?php
    }
}
if (!function_exists('dm_checkbox')) {
    function dm_checkbox($type = "checkbox", $name, $caption = "", $checked = null, $value = "1", $options = '')
    {
        ?>
            <div class="form-group " style="padding:20px;">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <input value="<?= $value ?>" type="checkbox" onclick="if($(this).attr('checked')=='checked'){ $(this).next().removeAttr('checked'); }else{ $(this).next().attr('checked','checked'); }" style="width: 20px;float:right;" class="checkbox form-control" id="<?= $name ?>" name="<?= $name ?>" <?= $checked != null ? "checked" : "" ?> <?= $options ?>>
                <input value="0" type="checkbox" style="display: none;" name="<?= $name ?>" <?= $checked == null ? "checked" : "" ?>>
            </div>
        <?php
    }
}
/** Create */
//laravel file manger: url:https://unisharp.github.io/laravel-filemanager/integration
if (!function_exists('dm_ckeditor')) {
    function dm_ckeditor($id = "ckeditor", $name = "", $caption = "", $value = "")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <textarea id="<?= $id ?>" name="<?= $name ?>" class="form-control"><?= old($value); ?></textarea>
                <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
            </div>
        <?php
    }
}
/** Update Ckeditor */
//laravel file manger: url:https://unisharp.github.io/laravel-filemanager/integration
if (!function_exists('dm_ckeditorUpdate')) {
    function dm_ckeditorUpdate($id = "ckeditor", $name = "", $caption = "", $value = "")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>" class=""><?= $caption ?></label>
                <textarea id="<?= $id ?>" name="<?= $name ?>" class="form-control"><?= $value ?></textarea>
                <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
            </div>
        <?php
    }
}
if (!function_exists('dm_thumbImage')) {
    function dm_thumbImage($imagePath = "")
    {
        ?>
            <a href="#" class="task-thumb">
                <img src="<?= asset($imagePath) ?>" alt="" height="100" width="100">
            </a>


        <?php
    }
}
if (!function_exists('dm_helpBlock')) {
    function dm_helpBlock($help_text)
    {
        ?>
            <p class="help-block"><?= $help_text ?></p>
        <?php
    }
}
if (!function_exists('dm_dropdown')) {
    function dm_dropdown($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "No Category Selected")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>"><?= $caption ?></label>
                <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                    <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                    <?php foreach ($data as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php
    }
}

if (!function_exists('dm_dropdownUser')) {
    function dm_dropdownUser($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "No User Selected")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>"><?= $caption ?></label>
                <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                    <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                    <?php foreach ($data as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?> (<?= $row->email ?>)</option>
                    <?php } ?>
                </select>
            </div>
        <?php
    }
}
/**
 * Branch Drop Down
 */
if (!function_exists('dm_branchDropdown')) {
    function dm_branchDropdown($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "No Parent Branch")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-10">
                    <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $row) { ?>
                            <option value="<?= $row->id ?>"><?= $row->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}

/**
 * Branch Drop Down for staff
 */
if (!function_exists('dm_dbranchDropdown')) {
    function dm_dbranchDropdown($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "No Branch")
    {
        ?>
            <div class="form-group">
                <label for="<?= $name ?>"><?= $caption ?></label>
                <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                    <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                    <?php foreach ($data as $row) { ?>
                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php
    }
}
// --------------------------------------------MENU:MENU--------------------------------------------------
if (!function_exists('dm_menu_dropdown')) {
    function dm_menu_dropdown($class = "", $name = "", $caption = "", $data = "", $old_data_name = "")
    {
        ?>
            <div class="form-group <?= $class ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" id="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data_name ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $row) { ?>
                            <option value="<?= $row ?>"><?= $row ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}
if (!function_exists('dm_menu_type_dropdown')) {
    function dm_menu_type_dropdown($class = "", $name = "", $caption = "", $data = "", $old_data = "", $old_data_name = "")
    {
        ?>
            <div class="form-group <?= $class ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" id="<?= $name ?>" onchange="menuTypeFunction()" class="form-control">
                        <option id="old_value" value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $row) { ?>
                            <option value="<?= $row ?>"><?= $row ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}
if (!function_exists('dm_post_dropdown')) {
    function dm_post_dropdown($class = "", $name = "", $caption = "", $data = "", $old_data = 0, $old_data_name = "")
    {
        ?>
            <div class="form-group <?= $class ?>" id="<?= $name . '_' . $caption ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $key => $row) { ?>
                            <option value="<?= $row->post_unique_id ?>"><?= $row->title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}
if (!function_exists('dm_category_dropdown')) {
    function dm_category_dropdown($class = "", $title = "", $caption = "", $data = "", $old_data = "", $old_data_name = "")
    {
        ?>
            <div class="form-group <?= $class ?>" id="<?= $title . '_' . $caption ?>">
                <label for="<?= $title ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $title ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $key => $row) { ?>
                            <option value="<?= $row->id ?>"><?= $row->title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}

if (!function_exists('dm_affiliated_page_dropdown')) {
    function dm_affiliated_page_dropdown($class = "", $name = "", $caption = "", $data = "", $old_data = "", $old_data_name = "")
    {
        ?>
            <div class="form-group <?= $class ?>" id="<?= $name . '_' . $caption ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $key => $row) { ?>
                            <option value="<?= $row->unique_id ?>"><?= $row->title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}
/** Create */
if (!function_exists('dm_custom_link_hinput')) {
    function dm_custom_link_hinput($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group " id="<?= $name . '_link' ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <input placeholder="http://" class=" form-control" type="<?= $type ?>" name="<?= $name ?>" value="<?= old($value); ?>" <?= $options ?> />
                </div>
            </div>
        <?php
    }
}
/** Update */
if (!function_exists('dm_custom_link_hinput_update')) {
    function dm_custom_link_hinput_update($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group " id="<?= $name . '_link' ?>">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <input placeholder="http://" class=" form-control" type="<?= $type ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $options ?> />
                </div>
            </div>
        <?php
    }
}
/** Create */
if (!function_exists('dm_menu_hinput')) {
    function dm_menu_hinput($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= old($value) ?>" <?= $options ?> />
                </div>
            </div>
        <?php
    }
}
/** Update */
if (!function_exists('dm_menu_hinput_update')) {
    function dm_menu_hinput_update($type, $name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <input class=" form-control" type="<?= $type ?>" id="<?= $name ?>" name="<?= $name ?>" value="<?= $value ?>" <?= $options ?> />
                </div>
            </div>
        <?php
    }
}
if (!function_exists('dm_hselect_faicon')) {
    function dm_hselect_faicon($name, $caption = "", $options_data = null, $value = null)
    {
        ?>
            <div class="form-group ">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-10 col-sm-10">
                    <div class="btn-group btn-block">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                            <b class="caret"></b>
                            <i id="btn_icon_<?= str_replace(array("[", "]"), "", $name) ?>" class="fa fa-2x <?= $value ?>"></i>
                        </button>
                        <div class="dropdown-menu" style="width: 100%;">
                            <div class="select_icon scroll-box" style="overflow: hidden;">
                                <label <?= ($value == null) ? 'class="checked"' : '' ?>><input type="radio" name="<?= $name ?>" value="" onclick="$('input[type=radio]:not(:checked)').parent().removeClass('checked'); $(this).parent().addClass('checked'); $('#btn_icon_<?= str_replace(array("[", "]"), "", $name) ?>').attr('class',$(this).next().attr('class'))" <?= ($value == null) ? "checked" : "" ?>> <i class="fa fa-stop fa-2x text-danger"></i></label>
                                <?php if ($options_data != null) { ?>
                                    <?php foreach ($options_data as $data) { ?>
                                        <label <?= ($value != null && $value == $data) ? 'class="checked"' : '' ?>><input type="radio" name="<?= $name ?>" value="<?= $data ?>" onclick="$('input[type=radio]:not(:checked)').parent().removeClass('checked'); $(this).parent().addClass('checked'); $('#btn_icon_<?= str_replace(array("[", "]"), "", $name) ?>').attr('class',$(this).next().attr('class'))" <?= ($value != null && $value == $data) ? "checked" : "" ?>> <i class="fa <?= $data ?> fa-2x"></i></label>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}

// color-picker
if (!function_exists('dm_hcolor_picker')) {
    function dm_hcolor_picker($name, $caption = "", $value = "", $options = '')
    {
        ?>
            <div class="form-group">
                <label class="control-label col-md-2"><?= $caption ?></label>
                <div class="col-md-4 col-xs-11">
                    <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="input-append colorpicker-default color">
                        <input type="text" readonly="" value="<?= $value ?>" name="<?= $name ?>" class="form-control">
                        <span class=" input-group-btn add-on">
                            <button class="btn btn-white" type="button" style="padding: 8px">
                                <i style="background-color: rgb(124, 66, 84);"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        <?php
    }
}

if (!function_exists('dm_dropdownInstitute')) {
    function dm_dropdownInstitute($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "None Selected")
    {
        ?>
            <div class="form-group" id="">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $key => $row) { ?>
                            <option value="<?= $row->unique_id ?>"><?= $row->title; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}
if (!function_exists('dm_branch_dropdown')) {
    function dm_branch_dropdown($name = "", $caption = "", $data = "", $old_data = '', $old_data_name = "None Selected")
    {
        ?>
            <div class="form-group" id="">
                <label for="<?= $name ?>" class="control-label col-lg-2"><?= $caption ?></label>
                <div class="col-lg-6">
                    <select name="<?= $name ?>" class="form-control">
                        <option value=<?= $old_data ?>><?= $old_data_name ?></option>
                        <?php foreach ($data as $key => $row) { ?>
                            <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php
    }
}


