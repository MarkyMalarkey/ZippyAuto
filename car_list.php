<?php include('view/header.php'); ?>
<main>
    
    <!-- Displays a list of the cars -->
    <h1 id="list">Car List</h1>
    <aside>
        <h2>Sort By:</h2> <!--Allows the user to sort by year and price in desc and asc order-->
        <nav>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="sort_by">
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
            <input type="hidden" name="action" value="filter_by">
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
                <tr>
                    <th>Year </th>
                    <th>Make </th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Class</th>
                </tr>
                <?php foreach ($vehicle as $vehicles) : ?>
                <tr>
                    <td><?php echo $vehicles['Year']; ?></td>
                    <td><?php echo $vehicles['Make']; ?></td>
                    <td><?php echo $vehicles['Model'];?></td>
                    <td>$<?php echo $vehicles['Price']; ?></td>
                    <td><?php echo get_type($vehicles['Type_code']);?></td>
                    <td><?php echo get_car_class($vehicles['Class_code'])?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</main>
<?php include('view/footer.php');