<button type="button" class="btn bg-danger  delete-button" id=<?php echo $_GET['id'] ?> style="color: #fff;">Delete Product</button>
<button type="button" class="btn bg-warning   edit-button" id=<?php echo $_GET['id'] ?> style="color: #fff;"> Edit Product</button>
<?php
include_once './common/includeJQuery.php';
?>
<script src="./editData/sendAjaxRequests.js"></script>