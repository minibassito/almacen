$(function ()
{
    get_users();

    $(".form-check-input").on("click", function ()
    {
        get_users();
    });

});

function get_users()
{

    let form = $("#multi-filters");

    $.ajax(
        {
            type: "POST",
            url: "filters.php",
            data: form.serialize(),
            success: function (data)
            {
                $("#filters-result").html("");


                $.each(JSON.parse(data), function(key, User)
                {
                    let row = ""+
                        "<tr>" +
                        "<td>"+key+"</td> " +
                        "<td>"+User.UserName+" "+User.UserLastName+"</td> " +
                        "<td>"+User.UserType+"</td> " +
                        "<td>"+User.UserGender+"</td> " +
                        "<td>"+User.UserCountry+"</td> " +
                        "<td>"+User.UserAge+"</td> " +
                        "<td>"+User.UserStatus+"</td> " +
                        "</tr>";

                    $("#filters-result").append(row);


                });

            }
        }
    )
}