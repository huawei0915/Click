<?php //  require __DIR__. '/__db_connect.php' ?>

<?php require __DIR__.'/__html_head.php' ?>
<?php require __DIR__.'/__nav.php' ?>
<div class="container">
<div id="smartwizard">
    <ul>
        <li><a href="#step-1">Step1 Title<br /><small>Step description</small></a></li>
        <li><a href="#step-2">Step2 Title<br /><small>Step description</small></a></li>
        <li><a href="#step-3">Step3 Title<br /><small>Step description</small></a></li>
        <li><a href="#step-4">Step4 Title<br /><small>Step description</small></a></li>
    </ul>

    <div>
        <div id="step-1" class="">
            Step Content
        </div>
        <div id="step-2" class="">
            Step Content
        </div>
        <div id="step-3" class="">
            Step Content
        </div>
        <div id="step-4" class="">
            Step Content
        </div>
    </div>
</div>

</div>


<?php require __DIR__.'/__footer.php' ?>
<?php require __DIR__.'/__script.php' ?>
<script>

    $('#smartwizard').smartWizard();


</script>
<?php require __DIR__.'/__html_end.php' ?>