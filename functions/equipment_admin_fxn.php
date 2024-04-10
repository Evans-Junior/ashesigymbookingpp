<?php
// Include database connection
include_once('../settings/connection.php');

// Fetch equipment data from the database
$sql = "SELECT * FROM Equipment";
$result = mysqli_query($con, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="equipment-item">';
        echo '<img src="../img/' . $row['image'] .'" class="equipment-image">';
        echo '<h3 class="equipment-name">' . $row['equipment_name'] . '</h3>';
        echo '<p class="equipment-description">' . $row['description'] . '</p>';
        echo '<p class="quantity-available">Quantity Available: ' . $row['quantity'] . '</p>';
        
        // Edit and Delete buttons
        echo '<div class="edit-delete-buttons">';
        echo '<button class="edit-btn" onclick="editEquipment(' . $row['equipmentID'] . ')"><i class="fas fa-edit"></i> Edit</button>';
        echo '<a class="delete-btn" href="../action/deleteEquipment_action.php?id=' . $row['equipmentID'] . '" style="text-decoration: none;"><i class="fas fa-trash"></i> Delete</a>';
        echo '</div>';
        
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close database connection
mysqli_close($con);
?>