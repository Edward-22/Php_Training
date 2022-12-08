$("#Create").click(function(){
    var $createPersonObj = $("#createPersonObj");
    $.ajax({
        type: "GET",
        url: "Test.php",
        success: function (person) {
            $.each(person,function (i,person) {
                $createPersonObj.append("<li>persons</li>");
            })
        }
    })
    alert("Create button clicked!")
});
$("#Read").click(function(){
    $.ajax({
        type: "POST",
        url: 'Test.php',
        data: $("#UserText").val(),
        success: function(data){
            alert(data)},
        dataType: 'JSON'
    });
});
$("#Update").click(function(){
    alert("Update button clicked!")
});
$("#Delete").click(function(){
    alert("Delete button clicked!")
});
$("#Search").click(function(){
    alert("Search button clicked!")
});

