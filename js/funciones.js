function askDeleteStudent(id){
    alertify.confirm("Eliminar datos", "¿Esta seguro que desea eliminar este registro?",
        deleteStudent(id),
        function (){ alertify.error('Cancelado'); }) 
    }
function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:"../controller/student.controller.php",
        data:"id="+id+"operation=delete&id=",
        success:function(result){
            if(result==1){
                alertify.success("El proceso se ejecuto correctamente");
                location.reload();
            }else{
                alertify.error("El proceso no pudo realizarse");
            }
        }
    })
}