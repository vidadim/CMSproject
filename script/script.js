$(document).ready(function() {

    /* hovering over fixed navbar items */
    var listItem = $('li:not(.sub-li,.profile ul li,.profile)');
    listItem.hover(
        function() {
            $(this).css("background-color", "#3d3d3d");
        },
        function() {
            $(this).css("background-color", "#2d2d2d");
        }
    );

    // var subListItem = $('.sub-li');
    // subListItem.hover(
    //     function() {
    //         $(this).css("color", "darkgray");
    //     },
    //     function() {
    //         $(this).css("color", "#FFF");
    //     }
    // );



    /* for assigning padding to rightSection in order of intersection with fixed navbar*/
    var rightSection = $('#main');
    rightSection.css('padding-left', '220px');




    /* for toggling between textarea and CKeditor / not completed */
    $("#toggleeditor").change(function() {

        if ($(this).is(":checked")) {
            CKEDITOR.replace('editor');
        } else {
            CKEDITOR.instances.editor.destroy();
        }
    });


    /* Make table rows draggable */
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });
});
