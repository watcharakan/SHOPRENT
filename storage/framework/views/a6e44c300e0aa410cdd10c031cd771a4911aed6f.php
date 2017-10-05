<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $__env->startSection('head'); ?>


    <?php $__env->stopSection(); ?>
</head>
<body>

     <?php $__env->startSection('Bar'); ?>


     <?php $__env->stopSection(); ?>

     <?php $__env->startSection('con'); ?>
  </div>
<!-- //header -->
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Short Codes</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Short Codes</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!--typography-page -->
	<div class="typo">
		<div class="container">
			<div class="grid_3 grid_4">
				<h3 class="hdg">.......................</h3>
				<div class="bs-example">
					<table class="table">
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
            <form action="/Home" method="POST" role="form" enctype="multipart/form-data">
		<legend>ลงรายละเอียดสินค้า</legend>
			<div class="form-group">
		<label for="title">ชนิด</label>
		<select name="type"  class="form-control" OnChange="window.location='?item='+this.value;">
		<option value="null">-โปรดเลือก</option>
		<option value="dresses"<?php if($_GET["item"] == "dresses"){ echo "selected='selected'";} ?>>เดรส</option>
        <option value="skirt" <?php if($_GET["item"] == "skirt"){ echo "selected='selected'";} ?>>กระโปรง</option>
        <option value="pants"<?php if($_GET["item"] == "pants"){ echo "selected='selected'";} ?>>กางเกง</option>
        <option value="mix"<?php if($_GET["item"] == "mix"){ echo "selected='selected'";} ?>>mix match</option>
        <option value="bag"<?php if($_GET["item"] == "bag"){ echo "selected='selected'";} ?>>กระเป๋า</option>
        <option value="shoes"<?php if($_GET["item"] == "shoes"){ echo "selected='selected'";} ?>>รองเท้า</option>
        <option value="accessories"<?php if($_GET["item"] == "accessories"){ echo "selected='selected'";} ?>>เครื่องประดับ</option>
         </select> 
	</div>

	  <?php

if($_GET["item"] == "dresses"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="d_evening">เดรสราตรี</option>';
     echo '<option value="d_chiffon">เดรสชีฟอง</option>';
     echo ' <option value="d_lace">เดรสลูกไม้</option>';
     echo '<option value="d_work">เดรสทำงาน</option>';
     echo ' </select> ';

}
if($_GET["item"] == "skirt"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="sk_long">กระโปรงยาว</option>';
     echo '<option value="sk_jeans">กระโปรงยีนส์</option>';
     echo ' <option value="sk_short">กระโปรงสั่น</option>';
     echo '<option value="sk_buff">กระโปรงหนัง</option>';
     echo ' </select> ';

}
if($_GET["item"] == "pants"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="p_legging">กางเกงเลงกิ้ง</option>';
     echo '<option value="p_skirt">กางเกงกระโปรง</option>';
     echo ' <option value="p_short">กางเกงขาสั่น</option>';
     echo '<option value="p_jeans">กางเกงยีนส์</option>';
     echo '<option value="p_skin">กางเกงสกินนี้</option>';
     echo ' </select> ';

}
if($_GET["item"] == "mix"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="m_d_s">เดรส เสื้อคุม</option>';
     echo '<option value="m_s_s">เสื้อกระโปรง</option>';
     echo ' <option value="m_s_p">เสื้อกางเกง</option>';
    
     echo ' </select> ';

}
if($_GET["item"] == "bag"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="b_handbag">กระเป๋าถือ</option>';
     echo '<option value="b_mailbag">กระเป๋าสพายข้าง</option>';
     echo ' <option value="b_wallet">กระเป๋าตังค์</option>';
     echo '<option value="b_backpack">กระเป๋าสะพายหลัง</option>';
     echo '<option value="b_buff">กระเป๋าหนัง</option>';
     echo '<option value="b_phone">กระเป๋าใส่มือถือ</option>';
     echo '<option value="b_luggage">กระเป๋าเดินทาง</option>';
     echo '<option value="b_multi">กระเป๋าอเนกประสงค์</option>';
     echo ' </select> ';

}
if($_GET["item"] == "shoes"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="s_boot">รองเท้าบู๊ด</option>';
     echo '<option value="s_sneakers">รองเท้าผ้าใบ</option>';
     echo ' <option value="s_heel">รองเท้ามีส้น</option>';
     echo ' <option value="s_fashion">รองเท้าแฟชั่น</option>';
      echo ' <option value="s_other">อื่น</option>';
     echo ' </select> ';

}
if($_GET["item"] == "accessories"){ // ตัวแปร a แบบ GET
     echo '<label for="title">ประเภท</label>';
     echo '<select name="subtype" class="form-control">';
     echo '<option value="a_jew">jewelry</option>';
     echo '<option value="a_wig">วิก</option>';
     echo ' <option value="a_cap">หมวก</option>';
     echo '<option value="a_eye">แว่น</option>';
     echo '<option value="a_acces">เครื่องประดับ</option>';
     echo '<option value="a_hair">เครื่องประดับผม</option>';
     echo '<option value="a_cold">กันหนาว</option>';
     echo '<option value="a_other">อื่น</option>';
     echo ' </select> ';

}
?>
	<div class="form-group">
		<label for="title">ชื่อสินค้า</label>
		<input type="text" name="name" class="form-control" >
	</div>		
	<div class="form-group">
		<label for="body">รายละเอียด</label>
		<textarea  name="detail" class="form-control" rows="4" ></textarea>
	</div>
	<div class="form-group">
		<label for="title">ราคาเช่า</label>
		<input  type="number" name="price" class="form-control"  >
	</div>	

	<div class="form-group">
		<label for="title">วันที่ให้เช่า</label>
		<input type="number" name="day" class="form-control">
	</div>	
	<div class="form-group">
		<label for="title">เงินมัดจำ</label>
		<input type="number" name="deposit" class="form-control">
	</div>	
	<div class="form-group">
		<label for="title">ค่าปรับ</label>
		<input type="number" name="mulct" class="form-control">
	</div>		
		<div class="form-group">
		 <label for="image">image</label>
              <input type="file" name="image"></input>
</div>	






	<?php echo e(csrf_field()); ?>	
	<button type="submit" class="btn btn-primary">Submit</button>
   </form>
			
		</div>
</div>
<!-- //typography-page -->
<!-- newsletter -->

     <?php $__env->stopSection(); ?>



     <?php $__env->startSection('foot'); ?>


     <?php $__env->stopSection(); ?>

</body>

</html>
<?php echo $__env->make("tem", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>