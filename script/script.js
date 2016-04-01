$(document).ready(function() {

    /* [Navbar] */
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


    /* [Index] */
    /* for assigning padding to rightSection in order of intersection with fixed navbar*/
    var rightSection = $('#main');
    rightSection.css('padding-left', '220px');


    /* for toggling between textarea and CKeditor / not completed */
    $("#toggleeditor").change(function() {

        if ($(this).is(":checked")) {
            CKEDITOR.replace('editor-blocks');
        } else {
            CKEDITOR.instances.editor - blocks.destroy();
        }
    });

    /* [Pages] */
    /* editors in pages/create or pages/edit */
    $(function() {
        //   CKEDITOR.replace('editor_pages');
    });

    /* [Menus] */
    /* Make table rows draggable in menu list*/
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });

    /* draggable panel boxes in test */
    /* [Test] */
    $(function() {
        $('.flex').sortable();
        $(".flex").disableSelection();
    });
    
    
    $('.widgetTitle').on('click', function() {
        //$('.effect').hide();
        $(this).next('.effect').slideToggle('slow');
    });

    $('#expand').on('click', function(){
        $(this).animate({width:'800px', height: '500px'});
    });

});
