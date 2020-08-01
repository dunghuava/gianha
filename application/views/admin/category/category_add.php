<style>
    table{
        width:100%;
    }
    table th{
        width:200px
    }
    form{
        width: 80%;
    }
</style>

<form action="" method="post">
    <table>
        <tr>
            <th>Tên danh mục</th>
            <td>
                <input type="hidden" name="04_id" value="<?=$cate['04_id']?>">
                <input name="04_name" required type="text" value="<?=$cate['04_name']?>" class="form-control">
            </td>
        </tr>
        <tr>
            <th>Module</th>
            <td>
               <select name="04_module_id" class="form-control">
                    <?php foreach ($arr_module as $module){ ?>
                        <option value="<?=$module['10_id']?>"><?=$module['10_name']?></option>
                    <?php } ?>
               </select>
            </td>
        </tr>
        <tr>
            <th>Loại</th>
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
            <th>Mô tả</th>
            <td>
                <textarea name="04_des" id="" cols="30" rows="5" class="form-control editor"><?=$cate['04_des']?></textarea>
            </td>
        </tr>
        <tr>
            <th>Số thứ tự</th>
            <td>
                <input style="width:100px" name="04_index" value="<?=$cate['04_index']?>" type="number" class="form-control">
            </td>
        </tr>
        <tr>
            <th>Menu</th>
            <td>
                <input <?=$cate['04_active']==1 ? 'checked':''?> name="04_active" type="checkbox">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <br>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button class="btn btn-primary">Lưu danh mục</button>
            </td>
        </tr>
    </table>
</form>