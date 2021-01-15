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

// Na edit óf cancel willen we terug naar showpage book.
// Daarom moeten we eerst het book-id pakken van het formulier.
let id = document.getElementById('book-id').value;
$(document).ready(function () {
    $('form[name="frmEditBook"]').on('submit', function () {
        // $('form[name="frmRegister"] input[type="submit"]').prop('disabled', true)

        // $.ajax({
        //     url: 'books-edit',
        //     method: 'POST',
        //     data: $(this).serialize(),
        //     success: function (result) {
        //         const data = JSON.parse(result)
        //         if (data.success) {
        //             $('form[name="frmEditBook"] input[type="submit"]').prop('disabled', false)
        //             window.location.href = "/books";
        //         } else {
        //             $('#edit-book-message').html(data.message).show()
        //         }
        //     }
        // })
    })



    $('#edit-book-cancel').on('click', function () {
        window.location.href = "/books-show?book_id=" + id
    })
})