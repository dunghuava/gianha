<style>
    table{
        width:100%;
    }
</style>
<div class="col-md-12">
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Loại</th>
            <th style="width:10%">Index</th>
            <th>Active</th>
            <th style="width:15%">Thao tác</th>
        </tr>
        <?php 
            foreach ($arr_category as $category)
            {
        ?>
            <tr>
                <td><?=$category['04_id']?></td>
                <td><?=$category['04_name']?></td>
                <td>
                    <?php
                        $parent_id = $category['04_parent_id'];
                        $name_parent = $this->Category_M->find(['04_id'=>$parent_id])[0]['04_name'];
                        echo $name_parent;
                    ?>
                </td>
                <td>
                    <input  onchange="setIndex(<?=$category['04_id']?>,this)" type="text" class="form-control text-center" value="<?=$category['04_index']?>">
                </td>
                <td>
                    <input onchange="setActive(<?=$category['04_id']?>,this)" type="checkbox" name="" <?=$category['04_active']==1 ? 'checked':''?> id="">
                </td>
                <td>
                    <a href="<?=base_url('admin/category/edit/'.$category['04_id'])?>">
                        <button class="btn btn-primary">Sửa</button>
                    </a>
                    <button onclick="onDelete(<?=$category['04_id']?>)" class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        <?php 
            } 
        ?>
    </table>
</div>

<script>
    function setIndex(id,e){
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/category/setindex')?>",
            data: {'04_id':id,'04_index':e.value},
            success: function (response) {
                location.reload();   
            }
        });
    }
    function setActive(id,e){
        var active=0;
        if(e.checked){
            active=1;
        }else{
            active=0;
        }
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/category/setactive')?>",
            data: {'04_id':id,'04_active':active},
            success: function (response) {
                //location.reload();   
            }
        });
    }
    function onDelete(id){
        if (confirm('Bạn có muốn xóa ?')){
            $.ajax({
                type: "post",
                url: "<?=base_url('admin/category/delete')?>",
                data: {'04_id':id},
                success: function (response) {
                    location.reload();   
                }
            });
        }
    }
</script>