<?php
    $idsp=$_GET['idsp'];
    $rows=mysqli_query($link,"Select * from sanpham where idsp=$idsp");
    while($row=mysqli_fetch_array($rows))
    {
?>
    <div class="chitietsp">
        <div class="chitietsp-in">
            <div class="content">
                <div class="zoom-small-image">
                    <a href = 'img/uploads/<?php echo $row['hinhanh']; ?>' width = "300" height = "300" class='cloud-zoom' id='zoom1'
                    rel="adjustX: 10, adjustY: -4">
                        <img  src="img/uploads/<?php echo $row['hinhanh'] ?>" width="250" height="250" title="Optional title display" />
                    </a>
                    
                </div>
                <!-- End : zoom -->
                
                <div class="giasp">
                    <ul>
                        <p><?php echo $row['tensp']; ?></p>
                        <li><span><b>Giá: 
                            <font color="red">
                                <?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?>
                            
                        </b></font></span></li>
                        <li>Tình Trạng
                            <?php
                                $dem = $row['soluong'] - $row['daban'];
                                if($dem>0)
                                    echo "Số sản phẩm còn (".$dem.")";
                                else
                                    echo "Hết hàng";
                            ?>
                        </li>
                        <form action="index.php?content=cart&action=add&idsp=<?php echo$row['idsp']; ?>" method="post">
                            <li>Số lượng mua: <input type="text" name="soluongmua" size="1" value="1"/></li>
                            <li>
                                <?php
                                if($dem <=0)
                                    echo "<a href='index.php?content=hethang'></a>";
                                else
                                {
                                ?>
                                <input type="submit" value="Cho vào giỏ" name="chovaogio" class="inputmuahang" />
                                <?php } ?>
                            </li>
                        </form>
                    </ul>
                </div>
                <!-- End : Giá sản phẩm -->
                
            </div>
            <!--End: Content -->
            
            <div class="tinhnang">
                <div class="tieudetinhnang">
                    <ul class="tabs">
                        <li><a href="#tab1">Tính năng</a></li>
                        <li><a href="#tab2">Bình luận</a></li>
                    </ul>
                </div>
                <!-- End : Tiêu đề tính năng -->
                
                <div id="tab1">
                    <?php echo $row['chitiet']; ?>
                </div>  
            </div>
            <!-- Trang HTML của bạn -->
            <form action="xulybl.php" method="post">
                <label for="name">Tên:</label>
                <input type="text" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" required><br><br>

                <label for="website">Website:</label>
                <input type="url" name="website"><br><br>

                <label for="comment">Bình luận:</label>
                <textarea name="comment" rows="4" required></textarea><br><br>
                <input type="hidden" id="username" name="idsp" value="<?= $idsp ?>" required>

                <input type="submit" value="Gửi bình luận"><br><br>
            </form>
            <?php
                // Kết nối đến cơ sở dữ liệu
                $conn=mysqli_connect("localhost","root","")
                    or die("Cannot connect to the database");
                    mysqli_select_db($conn,"booknowcsdl")
                    or die("Cannot connect to the database");
                    mysqli_query($conn,"SET NAMES 'UTF8'");

                // Truy vấn dữ liệu từ cơ sở dữ liệu
                $result = $conn->query("SELECT * FROM comments where idsp = $idsp ORDER BY created_at DESC"); 

                // Hiển thị bình luận
                while ($row = $result->fetch_assoc()) {
                    // echo "<p><a>" . $row['name'] . ":</a> " . $row['comment'] . " <em>(" . $row['created_at'] . ")</em></p><br>";
                    echo '<p><a href="' . $row['website'] . '">' . $row['name'] . ':</a><br> ' . $row['comment'] . ' <br><em>(' . $row['created_at'] . ')</em></p><br>';
                }

                // if ($conn->query($sql) === TRUE) {
                //     header("Location: index.php");
                //     exit();
                // } else {
                //     echo "Lỗi: " . $sql . "<br>" . $conn->error;
                // }

            // Đóng kết nối
                $conn->close();
            ?>

        </div>
        <!-- End : Chi tiết sản phẩm -in -->
        
    </div>
    <!-- End: Chi ti?t s?n ph?m -->
    
    <?php } ?>


