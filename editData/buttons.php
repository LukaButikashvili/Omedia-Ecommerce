<div class="d-flex flex-row mt-5 mb-5">
    <button type="button" class="btn bg-danger btn-lg delete-button" id=<?php echo $id ?>>Delete Product</button>
    <button type="button" class="btn bg-warning btn-lg edit-button ml-5" id=<?php echo $id ?>>Edit Product</button>
</div>
<?php 
    include_once './common/icludeJQuery.php';
?>
<script src="./editData/sendAjaxRequests.js" ></script>