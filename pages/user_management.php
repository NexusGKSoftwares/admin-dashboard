<div class="user-management">
    <h2>Manage Customers</h2>
    <button>Create User</button>
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Account Status</th>
                <th>Billing Info</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through customer data from the database and display rows -->
            <?php
            // Example: Fetch customers from database
            include('config.php');
            $query = "SELECT * FROM customers";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['customer_name']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['billing_info']}</td>
                        <td><a href='#'>Edit</a> | <a href='#'>Deactivate</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
