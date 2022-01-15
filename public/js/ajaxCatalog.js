$(document).ready(function () {
    $("#select-vydavatelstva").change(function (e) {
        e.preventDefault();

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
                console.log("Success");
                $("#ajax-container").html(response.html);
            },
            error: function (error) {
                console.log(error);
            },
        });
    });

    $("#submit-button").on("click", function (e) {
        e.preventDefault();

        let reviewText = $("#reviewArea").val();
        let bookID = $("#bookID").val();
        let userID = $("#userID").val();
        let userFirstname = $("#reviewFirstname").val();
        let userLastname = $("#reviewLastname").val();

        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "X-Requested-With": "XMLHttpRequest",
                "Content-type": "application/x-www-form-urlencoded",
            },
            url: "/catalog/singleBook/" + bookID,
            dataType: "json",
            data: {
                reviewText: reviewText,
                bookID: bookID,
                userID: userID,
                userFirstname: userFirstname,
                userLastname: userLastname,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                $("#review-container").prepend(
                    "<div class='review'> <p> " +
                        response.reviewText +
                        "</p>  <label>" +
                        response.userFirstname +
                        " " +
                        response.userLastname +
                        "<label> </div>"
                );
                $("#review-form")[0].reset();
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
});
