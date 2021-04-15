$(function() {
    $('#crop-category').on("change", function(event) {
        $('#crop-type-select').empty();
        $.ajax({
            url: `croptype/${$('#crop-category').val()}`,
            success: data => {
                data.crop_types.forEach(crop_type => {
                    $('#crop-type-select').append(`<option value="${crop_type.id}">${crop_type.crop_type_name}</option>`)
                });
            }
        })
    })
});
