$(function () {

  $('#userForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      }
      ,
      password2: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },

      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
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