$(document).ready(function () {
    $('input[name="title_seo"]').amsifySuggestags({
        type : 'amsify'
    });
    $('input[name="content_seo"]').amsifySuggestags({
        type : 'bootstrap',
        classes: ['bg-warning'],
    });
    $(document).on('click', '#btn-create', function () {
        $('#post-form').submit();
    });
    $(document).on('click', '#btn-choose-file', function () {
        $('input[type = "file"]').click();
    });
});
function readURL(input)
{
    if (input.files && input.files[0]) {
        console.log(input.files[0]);
        let reader = new FileReader();
        reader.onload = function (e) {
            $('#image-preview').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        $('#image-preview').removeAttr('hidden', true);
    }
}

