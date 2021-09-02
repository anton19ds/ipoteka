$(document).ready(function(e){
   $('#zaprosDocunent').on('click', function(e){
      e.preventDefault();
      $('#addDocument').modal('show');
   });
   $('.tekstOP').on('click', function(e){
      e.preventDefault();
      $('#setDoc').html('');
      var id = $(this).data('id');
      $.post('/admin/user/doc-text-zapros',{id: id}, Success);
      function Success(data){

         $('#setDoc').html(data);
         $('#setDocument').modal('show');
      }
   });

   $('#sendMesseg').on('click', function(e){
      e.preventDefault();
      var text = $('#textMessegS').val();
      var id = $(this).data('id');
      $.post('/admin/user/text-messeg',{text: text, id: id}, Success);
      function Success(data){
         if(data){
            document.location = document.location;
         }
      }
   });
});