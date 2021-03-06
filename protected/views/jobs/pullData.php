<div class="form">
    <?php echo CHtml::beginForm(); ?>

    <?php //echo CHtml::errorSummary($model); ?>
    <div class="row">
     <label><?php echo !empty($records_found) ? 'Fetched records' : ''; ?></label><label><?php echo $records_found; ?></label>        
 </div>
 <div class="row">
    <label>Category Name</label>   
    <select name="cate_id">
        <?php
            foreach ($cates as $key => $value) {                               
        ?>
      <option <?php echo (isset($_POST['cate_id']) && $_POST['cate_id']==$value->id) ? 'selected' : ''; ?> value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
      <?php
        }
      ?>    
  </select>
</div>

    <div class="row">
        <label>Nguồn Lấy Tin</label>
        <?php echo CHtml::dropDownList('test','1',array(
            '1'=>'careeerlink.vn',
            '2'=>'hcm.vieclam.24h.com.vn',
            '3'=>'timviecnhanh.com',
            '4'=>'http://vieclam.tuoitre.vn/vi/tim-viec-nhanh.html',
        )) ?>
    </div>

<div class="row">
    <label>Link tìm theo thể loại</label>
    <input size="100" name="cate_link" value="http://www.careerlink.vn/viec-lam/cntt-phan-mem19" placeholder="http://www.careerlink.vn/viec-lam/cntt-phan-mem19"/>
</div>
<div class="row">
    <label>Chi tiết link</label>
    <input size="100" name="cate_pattern" value="/viec-lam/cntt-phan-mem/19?page=" placeholder="/viec-lam/cntt-phan-mem/19?page=" />
</div>
<div class="row">
    <label>Từ trang số</label>
    <input size="100" name="cate_from_page" value="1" placeholder = "1" />
</div>
<div class="row">
    <label>Tới page số</label>
    <input size="100" name="cate_to_page" value="1" placeholder = "3"/>
</div>

<div class="row">
    <label>Số bản ghi (chọn 0 cho tất cả)</label>
    <input size="100" name="nums" value="0" placeholder = "0"/>
</div>
<div class="row submit">
    <?php echo CHtml::submitButton('Lưu dữ liệu'); ?>
</div>
 <!-- 
    <div class="row">
        <?php //echo CHtml::activeLabel($model,'password'); ?>
        <?php //echo CHtml::activePasswordField($model,'password') ?>
    </div>
 
    <div class="row rememberMe">
        <?php //echo CHtml::activeCheckBox($model,'rememberMe'); ?>
        <?php //echo CHtml::activeLabel($model,'rememberMe'); ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div> -->

    <?php echo CHtml::endForm(); ?>
</div><!-- form -->