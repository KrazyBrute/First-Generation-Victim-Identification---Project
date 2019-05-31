<!-- Navigation Pane Starts -->  

    <div class="row">
        <div class="four columns" id="navbar">
     <h5>Navigation Panel</h5>
     <ul>
    <li><a href="index.php">Home</a></li>

    <?php
    
    if (isset($_SESSION['username1']))
                     {
                         echo '<li><a href="myAccount.php">My Account</a></li>';
                         echo '<li><a href="databasetest.php">Data View</a></li>';
                         echo '<li><a href="Management.php">Management Menu</a></li>';
                         echo '<li><a href="todo.php">Features To Add</a></li>';
                         echo '<li><a href="logsview.php">View All Search Logs</a></li>';
                         echo '<li><a href="imagesearch.php">Image Search</a></li>';
                     }
    ?>
    </ul>
    
    
   
       
    
    
    
    
    </div>