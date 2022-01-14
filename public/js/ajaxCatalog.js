$(document).ready(function () {
    $("#select-vydavatelstva").change(function (e) {
        //e.preventDefault();

        let selectedOption = $("#select-vydavatelstva").val();

        $.ajax({
            type: "POST",
            url: "catalog",
            dataType: "json",
            data: {
                selectedOption: selectedOption,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log(response);
                $("#ajax-container").html(response.html);
            },
        });
    });
});
