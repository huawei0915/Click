<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__nav.php' ?>


<div class="container">

    <div class="prdtop">

        <div class="d-flex">
            <figure class="prdpic"><img src="" alt=""></figure>
            <div class="prd_introduct">
                <h1>EOS 5D Mark IV</h1>
                <p>期待已久的EOS 5D Mark IV數位單眼相機搭載全新設計的3,040萬像素全片幅CMOS影像感測器及革命性Dual Pixel RAW，以追求更高影像品質；更配備承襲自旗艦型號EOS-1D X Mark II、全部61點自動對焦點均支援f/8光圈自動對焦的先進61點自動對焦系統及卓越的「雙像素CMOS自動對焦」技術，進一步提升攝影、錄影的自動對焦表現，同時支援DCI 4K短片拍攝，勢將拍攝錄影全面體驗進一步普及化。</p>
                <div class="prdprice d-flex">
                     <h6>建議售價</h6><h5>NT$169,000</h5>
                </div>
            </div>
        </div>

        <div class="prd_btn d-flex">
            <button type="button" class="btn btn-outline-secondary prd_comparison">商品比較</button>

            <button type="button" class="btn btn-outline-secondary prd_collection"><i class="far fa-star"></i>收藏</button>

            <div class="quantity">
                <button type="button" class="btn btn-outline-secondary down">-</button>
                <input type="text" name="quantity_input" id="quantity_number" value="1" min="1" max="10">
                <button type="button" class="btn btn-outline-secondary up">+</button>
            </div>

            <button type="button" class="btn btn-outline-secondary prd_car">放入購物車</button>
        </div>

        <div class="prd_specification d-flex">
            <div class="specification_left">
                <ul>
                    <li>堅固可靠鎂合金機身及防塵防水滴設計</li>
                    <li>高速DIGIC 6+ 數位影像處理器</li>
                    <li>內建具備「數位鏡頭優化（DLO）」功能的專用影像處理器</li>
                    <li>約3,040萬像素下實現最高約7張/秒連拍</li>
                    <li>內建Wi-Fi/NFC，支援FTP檔案傳輸及連接智慧型手機</li>
                    <li>3.2 吋Clear View II LCD螢幕支援觸控螢幕功能</li>
                </ul>
            </div>
            <div class="specification_right">
                <ul>
                    <li>全新研發約3,040萬像素全片幅CMOS影像感測器</li>
                    <li>標準ISO範圍100-32000</li>
                    <li>高精確度61點高密度自動對焦感應器</li>
                    <li>支援數位電影標準 DCI 4K</li>
                    <li>約150,000像素RGB+IR測光感應器</li>
                    <li>內建GPS接收器及支援記錄器功能</li>
                </ul>
            </div>

        </div>

    </div>





</div>




<?php include __DIR__ . '/__footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
var input = $('#quantity_number'),
    btnUp = $('button.up'),
    btnDown = $('button.down');

btnUp.on("click", function(){
  var max = parseInt(input.attr("max")),
      val = parseInt(input.val());
  
  if (val < max && val != max) {
    val++;
    input.val(val);
  }
});

btnDown.on("click", function(){
  var val = parseInt(input.val());
  
  if (val > 1) {
    val--;
    input.val(val);
  }
});

input.on("focusout", function(){
  var max = parseInt(input.attr("max")),
      val = parseInt(input.val());
  
  if (val > max) {
    input.val(max);
  }
});
</script>


<?php include __DIR__ . '/__html_end.php' ?>
