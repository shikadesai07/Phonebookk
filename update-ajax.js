var editData = function(id){
   $('#update-container').load('update-form.php')
    $.ajax({
        type: "GET",
        url: "update-data.php",
        data:{editId:id},
        dataType: "html",
        success: function(data){

          var userData = JSON.parse(data);
          $("#updateId").val(userData.id);
          $("#updateName").val(userData.name);
          $("#updateContact").val(userData.contact);
          $("#updateAddress").val(userData.address);
          $("#updateEmail").val(userData.email);

        }
    });
};
$(document).on('submit','#updateForm',function(e){
        e.preventDefault();
         var id= $("#updateId").val();
         var name= $("#updateName").val();
         var contact= $("#updateContact").val();
         var address= $("#updateAddress").val();
         var email= $("#updateEmail").val();

        $.ajax({
        method:"POST",
        url: "update-data.php",
        data:{
          updateId:id,
          name:name,
          contact:contact,
          address:address,
          email:email
        },
        success: function(data){
        $('#demo').html(data);   //Displaying newly updated data in #demo

    }});
});
