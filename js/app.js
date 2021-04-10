//The $(document).ready will be trigerred 
//when all components in the web page has been displayed
$(document).ready(() => {
    //Display beranda the first time the web page is ready
    $.ajax({
        url: "home.html",
        success: (result) => {
            $("#main-content").html(result);
        },
        error: (xhr, status, err) => {
            $("#main-content").html("<h2>" + xhr.status + " " + err + "</h2>");
        }
    });

    //The $("a").click will be triggered
    //if an "a"-tagged component is clicked
    $("a").click((e) => {
        //Reading data from the server directly and return the result in a call-back function
        let data = $(e.currentTarget).data("page");
        $.ajax({
            url: data,
            success: (result) => {
                $("#main-content").html(result);
            },
            error: (xhr, status, err) => {
                $("#main-content").html("<h2>" + xhr.status + " " + err + "</h2>");
            }
        });
    });
});

