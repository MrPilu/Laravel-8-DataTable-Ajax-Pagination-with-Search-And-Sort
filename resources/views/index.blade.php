<!DOCTYPE html>
<html>
  <head>
    <title>Laravel 8 DataTable Ajax Pagination with Search And Sort</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <!-- Datatables CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatables JS CDN -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  </head>
  <body>
    <h2 style="text-align: center;">Laravel 8 DataTable Ajax Pagination with Search And Sort</h2>
    <table id='studentsTable' width='100%'>
      <thead>
        <tr>
          <td>#ID</td>
          <td>#Name</td>
          <td>#Email</td>
          <td>#Mobile</td>
          <td>#Branch</td>
        </tr>
      </thead>
    </table>

    <!-- Script -->
    <script type="text/javascript">
    $(document).ready(function(){

      // DataTable
      $('#studentsTable').DataTable({
         processing: true,
         serverSide: true,
         ajax: "{{route('students.getStudents')}}",
         columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'email' },
            { data: 'mobile' },
            { data: 'branch' },
         ]
      });

    });
    </script>
  </body>
</html>