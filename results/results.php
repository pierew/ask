<?php
echo "<h2>Gruppenergebnisse</h2>";
if (isset($_GET['gid'])) {
    include_once 'groups.result.php';
} else {
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "</tr>";
$group = getGroupList();
    for ($i = 0; $i < sizeof($group); $i++) {
        echo "<tr>";
        echo "<td>". $group[$i]['idask_group'] ."</td>";
        echo "<td><a href='index.php?view_category=results&gid=". $group[$i]['idask_group'] ."'>". $group[$i]['name'] ."</a></td>";
        echo "</tr>";
    }
echo "</table>";
}
echo "<h2>Benutzerergebnisse</h2>";
if (isset($_GET['username'])) {
    include_once 'users.result.php';
} else {
echo "<form action='index.php' method='GET'>";
echo "<input type='hidden' name='view_category' value='results'>";
echo "Benutzername: <input type='text' name='username'>";
echo "<input type='submit'>";
echo "</form>";
}