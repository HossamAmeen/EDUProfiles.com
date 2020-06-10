function viewImg(){
    var file = document.getElementById("file").files;
    console.log(file.length)
    if(file.length > 0){
        var fileReader = new FileReader();
        fileReader.onload = function(event){
            document.getElementById("view").setAttribute("src", event.target.result)
        };
        fileReader.readAsDataURL(file[0])

    }

}


