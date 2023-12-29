<div class="footer">
        <?php 
            $string = "Select * from theloai";
            $query = $conn -> query($string);
            $str = '&ensp;&ensp;&ensp;&ensp;';
            while ($r = $query -> fetch_assoc()) {
                $str .= '<a href="category.php?theloai='.$r['tittle'].'" style="text-decoration: none;">'.$r['tittle'].'</a>&ensp;&ensp;&ensp;&ensp;|&ensp;&ensp;&ensp;&ensp;';
            }
            echo $str;
        ?>
    </div>
    
</body>
</html>