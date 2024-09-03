<!DOCTYPE html>
<html>
<head>
    <title>List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net@1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/datatables.net@1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 mb-3">
            <input type="text" id="search-input" class="form-control" placeholder="Search...">
        </div>
    </div>
    <div class="row" id="users-cards">
      
    </div>
</div>

<script>
    $(document).ready(function() {
        function fetchUsers(query = '') {
            $.ajax({
                url: '{{ route('users.index') }}',
                method: 'GET',
                data: { search: query },
                success: function(data) {
                    let cardsHtml = '';
                    $.each(data.data, function(index, user) {
                        cardsHtml += `
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">${user.name}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted"> ${user.department.name}</h6>
                                        <h6 class="card-subtitle mb-2 text-muted"> ${user.designation.name}</h6>
                                       
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#users-cards').html(cardsHtml);
                }
            });
        }
        fetchUsers();
        $('#search-input').on('keyup', function() {
            let query = $(this).val();
            fetchUsers(query);
        });
    });
</script>

</body>
</html>
