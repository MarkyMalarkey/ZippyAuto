<?php include('view/header.php'); ?>
<main>
    
    <!-- Displays a list of the cars -->
    <h1 id="list">Admin List</h1>
    <aside>
        <h2>Sort By:</h2> <!--Allows the user to sort by year and price in desc and asc order-->
        <nav>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="sort_by_admin">
            <select name="sortOption">
                <option value="YearA">Year Ascending</option>
                <option value="YearD">Year Descending</option>
                <option value="PriceA">Price Ascending</option>
                <option value="PriceD">Price Descending</option>
            </select>
        <input type="submit" value="Sort" />
        <br>
        </form>
        <br>
        <h2>Filter By:</h2> <!--Allows the user to filter by car type/class-->
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="filter_by_admin">
            <select name="filterOption">
                <?php foreach ($type as $types) : ?>
                    <option value="<?php echo $types['Type'];?>">
                    <?php echo $types['Type'];?></option>
                <?php endforeach; ?>
                <?php foreach ($classes as $class) : ?>
                    <option value="<?php echo $class['Class'];?>">
                    <?php echo $class['Class'];?></option>
                <?php endforeach; ?>
                <?php foreach ($make as $makes) : ?>
                    <option value="<?php echo $makes['Make'];?>">
                    <?php echo $makes['Make'];?></option>
                <?php endforeach; ?>
            </select>
        <input type="submit" value="Filter" />
        <br>
        <br>
        </form>
        </nav>
    </aside>
    <section>
        <br>
        <!-- Displays a table of the items -->
        <div style="overflow-x:auto;">
            <table>
                <h2>Vehicles</h2>
                <tr>
                    <th>Year </th>
                    <th>Make </th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($vehicle as $vehicles) : ?>
                <tr>
                    <td><?php echo $vehicles['Year']; ?></td>
                    <td><?php echo $vehicles['Make']; ?></td>
                    <td><?php echo $vehicles['Model'];?></td>
                    <td>$<?php echo $vehicles['Price']; ?></td>
                    <td><?php echo get_type($vehicles['Type_code']);?></td>
                    <td><?php echo get_car_class($vehicles['Class_code'])?></td>
                    <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_car">
                    <input type="hidden" name="Pkey" value="<?php echo $vehicles['Pkey']; ?>">
                    <input type="submit" value="Delete">
                    </form>
                </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
            
            <!--Lets the user add an item to the list-->
            <h1>Add Car</h1>
            <form action="index.php" method="POST">
                <input type="hidden" name="action" value="add_car">
                <label>Year</label>
                <input type="number" name="year" required />
                <br>
                <label>Make</label>
                <input type="text" name="make" required />
                <br>
                <label>Model</label>
                <input type="text" name="model" required />
                <br>
                <label>Price</label>
                <input type="number" name="price" required/>
                <br>              
                <label>Type</label>
                <select name="typeID" required>
                    <?php foreach ($type as $types) : ?>
                        <option value="<?php echo $types['Code']; ?>">
                            <?php echo $types['Type']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label>Class</label>
                <select name="classID" required>
                    <?php foreach ($classes as $class) : ?>
                        <option value="<?php echo $class['Code']; ?>">
                            <?php echo $class['Class']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>


                <label>&nbsp;</label>
                <input type="submit" value="Submit" />
                <br>
    </section>
    <br>
    <a href="?action=class_list">Class List</a>
    <br>
    <a href="?action=type_list">Type List</a>
    <br>
    <a href="?action=car_list">Click here to access the customer list</a>
</main>
<?php include('view/footer.php');
