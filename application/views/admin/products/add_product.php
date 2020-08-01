
<style type="text/css">
	table td{
		padding:5px 0px;
	}
	table tr th{
		width:120px;
	}
	.form-col{
		width: 49.8%;
	}
	.form-row{
		display: inline-flex;
		margin-bottom:5px;
		width:100%;
		margin-left: 0px
	}
	/*.form-row input{
		margin-right:10px;
	}*/
	.col3 select{
		width:33% !important;
	}
	#files_preview{
		display:flex;
		overflow:auto;
	}
	#files_preview img{
		width:200px;
		margin-right:10px;
	}

	.col9{
		width: 94%;
	}

	.col3{
		width: 33.1%;
	}

	.ck-editor__editable {
    min-height: 300px;
}
</style>
<div class="col-md-12" style="margin-top: 20px">
	<table style="width:100%">
		<tr>
			<th>Tên dự án</th>
			<td>
				<input class="form-control">
			</td>
		</tr>
		<tr>
			<th>Giới thiệu</th>
			<td>
				<textarea required class="form-control" name="project_subtile" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<th>Danh mục</th>
			<td>
				<select name="04_parent_id" class="form-control" id="">
                    <?php foreach ($arr_category as $category){ ?>
                        <option <?=$cate['04_parent_id']==$category['04_id'] ? 'selected':''?> value="<?=$category['04_id']?>"><?=$category['04_name']?></option>
                        <?php 
                            $child = $this->Category_M->find(['04_parent_id'=>$category['04_id']]);
                            foreach ($child as $ch){
                                ?>  
                                    <option <?=$cate['04_parent_id']==$ch['04_id'] ? 'selected':''?> value="<?=$ch['04_id']?>">l__<?=$ch['04_name']?></option>
                                <?php
								 $child2 = $this->Category_M->find(['04_parent_id'=>$ch['04_id']]);
								 foreach ($child2 as $ch2){
								?>
									<option <?=$cate['04_parent_id']==$ch2['04_id'] ? 'selected':''?> value="<?=$ch2['04_id']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l__<?=$ch2['04_name']?></option>
								<?php
								 }
                            }
                        ?>
                    <?php } ?>
                </select>
			</td>
		</tr>

		<tr>
							<th>Danh mục</th>
							<td>
								<div class="form-row">
									<select required style="margin-right:10px" name="category_id" id="category_id" class="form-control col9">
										<option>---Chọn danh mục---</option>
										<?php foreach ($list_category as $c){ ?>
											<option value="<?=$c['04_id']?>"><?=$c['04_name']?></option>
										<?php } ?>
									</select>
									<button id="btn_add_category" type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
								</div>
								<div id="add_category" style="display:none">
									<div style="display:inline-grid;width: 100%;">
										<input id="category_name" style="margin-bottom:5px" type="text" class="form-control" placeholder="Tên danh mục mới">
								    	<button id="btn_save_category" type="button" class="btn btn-danger"><span class="fa fa-save"></span>&nbsp;Thêm</button>
								    </div>
								</div>
							</td>
						</tr>

		<tr>
							<th>Google map</th>
							<td>
								<div class="form-row">
									
									<input name="project_lan" placeholder="Kinh độ" type="text" class="form-control form-col" value="">
									<span>&nbsp;</span>
									<input name="project_long" placeholder="Vĩ độ" type="text" class="form-control form-col" value="" >
								</div>
							</td>
						</tr>


						<tr>
							<th>Địa chỉ</th>
							<td>
								<div class="form-row">
									<input style="margin:0px;" name="project_address" value="" type="text" class="form-control">
								</div>
								<div class="form-row">
									<select name="province_id" id="province_id" class="form-control col3">
										<?php foreach ($list_province as $prv){ ?>
											<option value="<?=$prv['07_id']?>"><?=$prv['07_name']?></option>
										<?php } ?>
									</select>
									<span>&nbsp;</span>
									<select name="district_id" id="district_id" class="form-control col3">
									</select>
									<span>&nbsp;</span>
									<select name="ward_id" id="ward_id" class="form-control col3">
									</select>
								</div>
							</td>
						</tr>

						<tr>
							<th>Upload hình</th>
							<td>
								<input  type="file" name="file[]" multiple="true" id="">
								<style>
									.content_imgs{
										overflow:auto;
										display:flex;
										margin-top:5px;
									}
									.content_imgs img{
										width:150px;
										margin-right:10px;
										cursor:pointer;
									}
									.div_img{
										position:relative;	
									}
									.div_img .btn_del_img{
										position:absolute;
									}
								</style>
								<div class="content_imgs">
								</div>
							</td>
						</tr>

						<tr>
								<th>Thông tin chi tiết</th>
								<td>
									<textarea id="" class="form-control editor" name="project_content" id=""  rows="10"></textarea>
								</td>
							</tr>
							
	</table>
</div>