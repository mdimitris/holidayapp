$(function () {


                  $('#applications').DataTable( {
                    "ajax": {
                      "url": "./applications.php",
                      "data" : { applist: true},
                      "method" : "POST",
                      "dataSrc": ""
                    },
                    "aoColumns": [
                      {data: "date_created"},
                      {data: "dates_requested"},
                      {data: "days_diff"},
                      {data: "status"}
                    ],

                } );


                $('#users').DataTable( {
                  "responsive": true, "lengthChange": false, "autoWidth": false,
                  "ajax": {
                    "url": "./user-functions.php",
                    "data" : { userlist: true},
                    "method" : "POST",
                    "dataSrc": ""
                  },
                  columnDefs: [{
                    "targets": 0,
                    // "render": function (data, type, row) {
                    //     var link = '<a href="user-form.php?' + data.user_data_id + '">Edit</a>';
                    //     return link;
                    // }
                }],
                  "aoColumns": [
                    { data: "user_data_id"  , "render": function ( data, type, full, meta ) {
                      return '<a href="user-functions.php?userId='+data+'">Edit</a>' }},
                    //{data: "user_data_id"},
                    {data: "first_name"},
                    {data: "last_name"},
                    {data: "email"},
                    {data: "user_type"}
                  ],
                         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                       }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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