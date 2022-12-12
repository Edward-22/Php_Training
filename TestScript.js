$("#Create").click(function () {
    let personName = $("#firstname").val()
    let personSurname = $("#surname").val()
    let personDateOfBirth = $("#dateofbirth").val()
    let personEmailAddress = $("#emailaddress").val()
    let personAge = $("#age").val()
    $.post("ActionFile.php",
        {
            command: "Create",
            data: personAge,personSurname,personDateOfBirth,personEmailAddress,personAge
        },
        function(data){
            alert(data);
        });
});
$("#Update").click(function () {
    alert("Update button clicked!")
});
$("#Delete").click(function () {
    alert("Delete button clicked!")
});
$("#Search").click(function () {
    let userSearchData = $("#lookupPerson").val();
    $.post("ActionFile.php",
        {
            command: "Search",
            data: userSearchData
        },
        function(data){
            alert(data);
        });
});
