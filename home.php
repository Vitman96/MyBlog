<?php
            $sql = "SELECT * FROM `postIT` ORDER BY `postIT`.`Date` DESC";
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                          echo "<div class='card' style='width: 75%;  margin-left:auto; margin-right:auto; margin-top: 20px; margin-bottom: 20px;'>";
                          echo "<img class='card-img-top' src=". $row['Image']." alt='Card image cap'>";
                          echo "<div class='card-body'>";
                          echo "<h2 class='card-title'>". $row["Title"]."</h2>";
                          echo "<h6 class='card-title'>". $row["Date"]."</h6>";
                          
                          echo "<p class='card-text' style ='margin-top: 20px; margin-bottom: 20px;'>".utf8_encode($row["Post"])."</p>";
                          echo "</div>";
                          echo "</div>";
                    }
                } else {
                        echo "0 results";
                }
            $conn->close();
        ?>