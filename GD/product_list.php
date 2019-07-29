<?php include __DIR__ . '/__html_head.php' ?>

<?php include __DIR__ . '/__nav.php' ?>

<div class="prd_list">
    <div class="container">
        <div class="filter">

            <div class="prd_price">
                <div class="form-group">
                    <label for="formControlRange">篩選列表</label>
                    <input type="range" class="form-control-range" id="formControlRange">
                </div>
            </div>

            <div class="pl_brand">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_canon">
                    <label class="custom-control-label" for="br_canon">CANON</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_nikon">
                    <label class="custom-control-label" for="br_nikon">NIKON</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="br_leica">
                    <label class="custom-control-label" for="br_leica">LEICA</label>
                </div>
            </div>

            <div class="pl_camera">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">微單眼相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">全片幅相機</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">數位攝影機</label>
                </div>                
            </div>

            <div class="pl_lens">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">廣角定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">廣角變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">標準變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">遠攝定焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">遠攝變焦鏡頭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">微距鏡頭</label>
                </div>
            </div>

            <div class="pl_parts">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">閃光燈</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                    <label class="custom-control-label" for="customCheck11">腳架</label>
                </div>
            </div>

            <div class="">
                
            </div>

        </div>
    </div>
</div>



<div class="container">
    <div class="pl-banner">
    </div>
</div>



<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>