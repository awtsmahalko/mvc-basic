<h2>User List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 </td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetchItems();
    });

    function fetchItems() {
        fetch('http://localhost/mvc-basic/app/controller/api.php?uri=get-users')
            .then(function(response) {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Network response was not ok.');
            })
            .then(function(data) {
                console.log(data);
            })
            .catch(function(error) {
                // Handle any errors
                console.log('Error:', error.message);
            });
    }
</script>