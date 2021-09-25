$(function () {


              $.ajax({
                url : "./user-functions.php",
                type : 'POST',
                data : 'user_role=true',
                async: true,
                success : function(data) {

                    $.each(JSON.parse(data), function(i, obj) {
                        $('#user_type').append('<option value="'+obj.user_role_id+'">'+obj.name+'</option>');
                      });
                }
    
                
            });

                    
  });


  

                      // $("#applications").DataTable({
                      //   "responsive": true, "lengthChange": false, "autoWidth": false,
                      //   "columns": [
                      //       {data: 'application_id'},
                      //       {data: 'date_created'},
                      //       {data: 'date_from'},
                      //       {data: 'date_to'},
                      //       {data: 'reason'},
                      //       {data: 'status'}
                      //   ],

                      //   "data": data,
                      //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                      // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');