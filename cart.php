<?php require __DIR__. '/__db_connect.php' ?>

<?php require __DIR__.'/__html_head.php' ?>
<?php require __DIR__.'/__nav.php' ?>

<div class="container" style="background-color:white;">
<div id="smartwizard">
    
    <ul>
    <h1>購物車結帳流程</h1>
        <li><a href="#step-1">1. Choose<br /><small>放入購物車</small></a></li>
        <li><a href="#step-2">2. LogIn<br /><small>登入會員</small></a></li>
        <li><a href="#step-3">3. Data<br /><small>填寫資料</small></a></li>
        <li><a href="#step-4">4. Finished<br /><small>完成結帳</small></a></li>
    </ul>

    <div class="messange">
        <div id="step-1" class="">
            Step Content
        </div>
        <div id="step-2" class="step-2">
            <div class="">
            <h2>會員流程</h2>
            <div class="wrapper">
            <h4>會員登入</h4>
                <a>會員登入</a>
            <h4>非會員登入</h4>
                <a>填寫基本資料</a>
            </div>
</div>
        </div>
        <div id="step-3" class="step-2">
            <div class="">
                <h2>基本資料</h2>
                <div class="wrapper">
                    <form class="text-right"　>
                        <div class="form-group row ">
                            <label for="name" class="col-sm-2 col-form-label ">姓名</label>
                                <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" value="">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-sm-2 col-form-label">電話</label>
                                <div class="col-sm-4">
                            <input type="text" class="form-control" id="mobile" value="">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">住址</label>
                                <div class="col-sm-4">
                                    <select class="custom-select" id="address0">
                                        <option selected>縣市</option>
                                        <option value="1">台北市</option>
                                        <option value="2">新北市</option>
                                        <option value="3">桃園市</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-4">
                                    <select class="custom-select" id="address1">
                                        <option selected>鄉鎮區</option>
                                        <option value="1">大安區</option>
                                        <option value="2">文山區</option>
                                        <option value="3">中山區</option>
                                    </select> 
                                    </div> 
                                    <input type="text" class="form-control col-sm-2" id="" value="郵遞區號">
                                 
                                <label for="address" class="col-sm-2 col-form-label" disable></label>
                                <div class="col-sm-10 pr-0 pt-3">
                                <input type="text" class="form-control" id="address" value="">
                                </div> 
                        </div>
                        <div class="form-group row">
                            <label for="pwd" class="col-sm-2 col-form-label">密碼</label>
                                <div class="col-sm-4">
                            <input type="password" class="form-control" id="pwd" placeholder="">
                            
                                </div>
                                <em class="col-sm-5 pt-2" style="font-size:0.75rem;">(密碼需8碼以上，英文或數字，英文請區分大小寫)</em>
                        </div>
                        <div class="form-group row">
                            <label for="pwd_check" class="col-sm-2 col-form-label">密碼確認</label>
                                <div class="col-sm-4">
                            <input type="password" class="form-control" id="pwd_check" placeholder="">
                                </div>
                        </div>
                    </form>   
                </div> 
                </div>
        </div>
        <div id="step-4" class="step-2">
            <div class="" >
                <h2>物流方式</h2>
                    <div class="wrapper delivery-main mt-2">
                        <div class="custom-control custom-radio custom-control-inline radio-text">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">宅配</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline radio-text">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">自取 <em>(10:00am~19:00pm)</em></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline radio-text">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">超商取貨</label>
                        </div>
                    </div>
                    <div class="wrapper delivery-main p-time mt-2">
                        <div class="p-time-title">配送時間 : </div>
                            <div class="p-time-area">
                                <div class="custom-control custom-radio custom-control-inline radio-text">
                                    <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4">9:00~12:00</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline radio-text">
                                    <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline5">14:00~17:00</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline radio-text">
                                    <input type="radio" id="customRadioInline6" name="customRadioInline2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline6">18:00~20:00</label>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper delivery-main"><em>* (宅配需選擇配送時段)</em></div>
                <div class="my-2">
                <h2>付款方式</h2>
                    <div class="pay-style d-flex ">
                        <div>
                        <a href="" class="text-center visa" >
                            <p class="mt-3">信用卡</p>
                            <p>VISA<br>
                                asterCard<br>
                                JCB</p>
                        </a>
                        </div>
                        <div>
                        <a href="" class="text-center visa" >
                            <p class="mt-3">第三方支付</p>
                            <p>Line pay<br>
                                Google pay<br>
                                Apple pay</p>
                        </a>
                        </div>
                    </div>
                    <div class="my-2">
                        <h3>發票類型</h3>
                        <div class="mt-2 pay-style">
                            <div class="custom-control custom-radio custom-control-inline radio-text">
                            <input type="radio" id="customRadioInline7" name="customRadioInline3" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline7">二聯式 </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline radio-text">
                            <input type="radio" id="customRadioInline8" name="customRadioInline3" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline8">開立統編</label>
                        </div>
                        <div class="mt-2 ">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">取件人與購買人相同</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                <label class="custom-control-label" for="customCheck2">用上述資料直接註冊會員並同意會員責任規範及個資聲明</label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php require __DIR__.'/__footer.php' ?>
<?php require __DIR__.'/__script.php' ?>
<script type="text/javascript" src="plugin/arrow/dist/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
      // Smart Wizard
      $('#smartwizard').smartWizard({
            selected: 0,  // Initial selected step, 0 = first step 
            keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            autoAdjustHeight:true, // Automatically adjust content height
            cycleSteps: false, // Allows to cycle the navigation of steps
            backButtonSupport: true, // Enable the back button support
            useURLhash: true, // Enable selection of the step based on url hash
            lang: {  // Language variables
                next: 'Next', 
                previous: 'Previous'
            },
            toolbarSettings: {
                toolbarPosition: 'bottom', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right
                showNextButton: true, // show/hide a Next button
                showPreviousButton: true, // show/hide a Previous button 
                toolbarExtraButtons: [
			$('<button></button>').text('Finish')
					      .addClass('btn btn-warning')
					      .on('click', function(){ 
						alert('Finsih button click');                            
					      }),
			$('<button></button>').text('Cancel')
					      .addClass('btn btn-danger')
					      .on('click', function(){ 
						alert('Cancel button click');                            
					      })
                      ]
            }, 
            anchorSettings: {
                anchorClickable: false, // Enable/Disable anchor navigation //啟用/禁用錨點導航
                enableAllAnchors: false, // Activates all anchors clickable all times //激活所有可點擊的錨點
                markDoneStep: true, // add done css //添加完成的css
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation //啟用/禁用完成步驟導航
            },            
            contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor // content url，啟用Ajax內容加載。可以在錨點上設置為data data-content-url
            disabledSteps: [],    // Array Steps disabled //陣列步驟已禁用
            errorSteps: [],    // Highlight step with errors //突出顯示有錯誤的步驟
            theme: 'dots',
            transitionEffect: 'fade', // Effect on navigation, none/slide/fade  //導航效果，無/滑動/淡入淡出
            transitionSpeed: '400'
      });
      
  
</script>

<?php require __DIR__.'/__html_end.php' ?>