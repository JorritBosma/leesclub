$(function () {
    const checkbox = $("#finished_reading");
    let hidden = $("#finished_date");

    hidden.hide();

    checkbox.change(function () {
        if (checkbox.is(':checked')) {
            hidden.show();
        } else {
            hidden.hide();
        }
    })
});


$(document).ready(function () {
    $('form[name="frmAddBook"]').on('submit', function () {
        // $('form[name="frmRegister"] input[type="submit"]').prop('disabled', true)

        //         $.ajax({
        //             url: 'books-add',
        //             method: 'POST',
        //             data: $(this).serialize(),
        //             success: function (result) {
        //                 const data = JSON.parse(result)
        //                 if (data.success) {
        //                     $('form[name="frmAddBook"] input[type="submit"]').prop('disabled', false)
        //                     window.location.href = "/books";
        //                 } else {
        //                     $('#add-book-message').html(data.message).show()
        //                 }
        //             }
        //         })
    })

    $('#add-book-cancel').on('click', function () {
        window.location.href = "/books"
    })
})