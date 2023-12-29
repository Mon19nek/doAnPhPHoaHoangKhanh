<div class="thongke">
                <div class="box margin-none">
                    <div class="tittle">Số bài viết của bạn</div>
                    <div class="sobaiviet">
                        Số bài viết của bạn là:
                        <?php 
                            $query = "Select * From baiviet where user_id = $id";
                            $query = $conn -> query($query);
                            $rows = mysqli_num_rows($query);
                            echo $rows;
                        ?>
                    </div>
                </div>
                <div class="box">
                    <div class="tittle">Số bài viết toàn bộ</div>
                    <div class="tongsobaiviet">
                        Số bài viết đã được viết là: 
                        <?php 
                            $query = "Select * From baiviet";
                            $query = $conn -> query($query);
                            $rows = mysqli_num_rows($query);
                            echo $rows;
                        ?>
                    </div>
                </div>
                <div class="boxdai">
                    <div class="tittle">Bài viết của bạn gần đây nhất</div>
                    <div class="baivietgannhat">
                        <?php 
                            $query = "Select * From baiviet where user_id = $id order by created_at desc limit 1";
                            $query = $conn -> query($query);
                            while ($r = $query -> fetch_assoc()) {
                              echo "Truyện gần đây là:<br> ".$r['tittle'];
                              echo '<br>Ngày tạo:<br>'.$r['created_at'];
                            }
                        ?>
                    </div>
                </div>
            </div>