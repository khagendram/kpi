<div class="mt-2 p-2">

<?php
$SuccessMessage= Session("message:success");
?>
@if($SuccessMessage)
<div class="alert alert-success">
    {{$SuccessMessage}}
</div>
@endif
</div>