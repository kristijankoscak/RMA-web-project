getCounties() 
function getCounties(){
    $.ajax({
        method: "GET",
        dataType: "json",
        url: "https://tehcon.com.hr/api/CroatiaTownAPI/list.php?v=1&entityType=1",
        data: {},
        success: function (result) {
            for(var i in result){
                for(var j in result[i]){
                    $("#zupanija").append("<option data-tokens='ketchup mustard' value='"+result[i][j].name+"'>"+result[i][j].name+"</option>")
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log("error")
            console.log(xhr.status);
            console.log(thrownError);
        }
    }); 
}