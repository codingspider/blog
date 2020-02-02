<!-- BEGIN .widget -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="widget">

	<h3>Our Newsletter</h3>
	<div class="widget-subscribe">
			<label class="label-input">
				<span>Your name</span>
				<input type="text" id="name" name="name" />
			</label>
			<input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
			<label class="label-input">
				<span>E-mail address</span>
				<input type="email"  id="email" name="email" />
			</label>
			<input type="submit"  id="butsave" class="button" value="Subscribe" />
	</div>

<!-- END .widget -->
</div>

<script>
$(document).ready(function() {
   
    $('#butsave').on('click', function() {
      var name = $('#name').val();
      var email = $('#email').val();

      if(name!="" && email!="" ){
        //   $("#butsave").attr("disabled", "disabled");
          $.ajax({
              url: "/subscribe/to/our/newsletter",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  name: name,
                  email: email,
              },
              cache: false,
              success: function(dataResult){
                  
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    // window.location = "/userData";	
                    alert("You have successfully subscribes to our newsletter");			
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script>