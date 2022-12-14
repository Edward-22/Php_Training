$("#Create").click(function () {
    $.post("ActionFile.php",
        {
            command: "Create",
            data: {
                FirstNameStr: $("#firstname").val(),
                SurnameStr: $("#surname").val(),
                DateOfBirthStr: $("#dateofbirth").val(),
                EmailAddressStr: $("#emailaddress").val(),
                AgeStr: $("#age").val()
            }
        },
        function(data){
            alert(data);
        });
});
$("#Update").click(function () {
    $.post("ActionFile.php",
        {
            command: "Update",
            data: {
                FirstName: $("#firstname").val(),
                Surname: $("#surname").val(),
                DateOfBirth: $("#dateofbirth").val(),
                EmailAddress: $("#emailaddress").val(),
                Age: $("#age").val(),
                FindEmailAddress: $("#findemailaddress").val()
            }
        },
        function(data){
            alert(data);
        });
});
$("#Delete").click(function () {
    $.post("ActionFile.php",
        {
            command: "Delete",
            data: {
                FirstName: $("#firstname").val(),
                EmailAddress: $("#emailaddress").val()
            }
        },
        function(data){
            alert(data);
        });
});
$("#Search").click(function () {
    var Search= "Search";
    let userSearchData = $("#LookupPerson").val();
    $.post("ActionFile.php",
        {
            command: "Search",
            data: userSearchData
        },
        function(data){
            alert(data);
        });
});
$("#StartDatabase").click(function () {
    $.post("ActionFile.php",
        {
            command: "StartDatabase"
        },
        function(data){
            alert(data);
        });
});
