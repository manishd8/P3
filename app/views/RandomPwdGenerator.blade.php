<!DOCTYPE html>
<html>

<head>
  <LINK href="Styles/Style2.css" rel="stylesheet" type="text/css">
  <title>Manish Goyal P2</title>
  <meta charset="utf-8">
</head>

<body >

  <div >
    <a href='/'>&#8592; Home</a>
  </div>
  
  <div class="MainBox">

      <div>
          <h1 class="Heading">Password Generator</h1><br/>
          <?php  
          $passStringLen = strlen($OutputPassword); 
          if($passStringLen<1)
            $passStringLen = 10;
             
            if($passStringLen<30){
                $passStringLen*=13; 
                $passStringLen*=(($passStringLen+5)/$passStringLen);
              }
              else
                $passStringLen*=12;

            $passString = 'width: ';
            $passString.=$passStringLen;
            $passString.='px';
          ?>
          <h2 class = "Output" style="<?php echo $passString?>" > 
            <?php echo $OutputPassword; ?>
          </h2>
          
      </div><br/>

      <div>

          <form action="/RPG" method="GET">
              <select class="Align" name = "WordCount">
                <option value="1" <?php if($WordCnt == 1) {?> selected = "selected"  <?php } ?>> 1 </option>
                <option value="2" <?php if($WordCnt == 2) {?> selected = "selected"  <?php } ?>> 2 </option>
                <option value="3" <?php if($WordCnt == 3) {?> selected = "selected"  <?php } ?>> 3 </option>
                <option value="4" <?php if($WordCnt == 4) {?> selected = "selected"  <?php } ?>> 4 </option>
                <option value="5" <?php if($WordCnt == 5) {?> selected = "selected"  <?php } ?>> 5 </option>
                <option value="6" <?php if($WordCnt == 6) {?> selected = "selected"  <?php } ?>> 6 </option>
                <option value="7" <?php if($WordCnt == 7) {?> selected = "selected"  <?php } ?>> 7 </option>
              </select> &nbsp; Number of words <br/><br/>

              <input class="Align" type="checkbox" name="NumberFlag" <?php if($numFlag == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Number <br/><br/>

              <div class="SymbolBox">
                <input type="checkbox" name="SymbolFlag" <?php if($symFlag == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; Include Symbols  &nbsp;&nbsp;&nbsp;
                <select name = "SymbolCount">
                  <option value="1" <?php if($SymCnt == 1) {?> selected = "selected"  <?php } ?>> 1 </option>
                  <option value="2" <?php if($SymCnt == 2) {?> selected = "selected"  <?php } ?>> 2 </option>
                  <option value="3" <?php if($SymCnt == 3) {?> selected = "selected"  <?php } ?>> 3 </option>
                  <option value="4" <?php if($SymCnt == 4) {?> selected = "selected"  <?php } ?>> 4 </option>
                </select> How Many <br/><br/>
              </div>
              <input class="Align" type="checkbox" name="UpperCaseFlag" <?php if($caseFlag == 'on') {?> checked = "checked"  <?php } ?>/> &nbsp; UpperCase First Letter <br/><br/>

              <div class="HeadingBox">
                <input class="Center" type="submit" value="Voila!"/>
              </div>
          </form> 

      </div>
    </div><br/><br/><br/><br/>

    <div class="HeadingBox">
        <img src = "http://imgs.xkcd.com/comics/password_strength.png" alt="Xkcd PWD Generator" height='400' width='500' style="float:center">
    </div>

</body>


</html>