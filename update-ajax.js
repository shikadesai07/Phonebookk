var editData = function(id){
   $('#demo').load('update-form.php')
    $.ajax({
        type: "GET",
        url: "update-data.php",
        data:{editId:id},
        dataType: "html",
        success: function(data){
          var userData=JSON.parse(data);
          $("input[name='id']").val(userData.id);
          $("input[name='name']").val(userData.name);
          $("input[name='contact']").val(userData.contact);
          $("input[name='address']").val(userData.address);
          $("input[name='email']").val(userData.email);

        }
    });
};
$(document).on('submit','#updateForm',function(e){
        e.preventDefault();
         var id= $("input[name='id']").val();
         var name= $("input[name='name']").val();
         var contact= $("input[name='contact']").val();
         var address= $("input[name='address']").val();
         var email= $("input[name='email']").val();
        $.ajax({
        method:"POST",
        url: "update-data.php",
        data:{
          id:id,
          name:name,
          contact:contact,
          address:address,
          email:email
        },
        success: function(data){
        $('#demo').load('contact.php');
        $('#msg').html(data);

    }});
});
