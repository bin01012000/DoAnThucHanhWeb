<?php include './pages/headerin.php' ?>

<div class="wrapper">
    <table class="table table-bordered cart_summary">
        <thead>
            <tr>
                <th class="cart_product">Nhạc cụ</th>
                <th>Tên nhạc cụ</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th class="action"><i class="fa fa-trash-o"></i>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($c as $v) {
            ?>
                <tr>
                    <td class="cart_product"><img src="./resource/images/nhaccu/<?php echo $v['hinh'] ?>" class="img-fluid" alt=""></td>
                    <td class="cart_description">
                        <?php echo $v['name'] ?>
                    </td>
                    <td class="price">
                        <?php echo $v['price'] ?>
                    </td>
                    <td class="qty">
                        <?php echo $v['qty'] ?>
                    </td>
                    <td class="price">
                        <?php echo $v['price'] * $v['qty'] ?>
                    </td>
                    <td class="action">
                        <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['id'] ?>&value=Delete">Delete item</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="cart_navigation ">
        <a class="prev-btn" href="index.php?controller=product">Continue shopping</a>
    </div>
</div>

<?php include './pages/footerin.php' ?>