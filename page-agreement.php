<?php
switchLanguage();
get_header();
?>
<div id="agreement" class="p-agreement">
  <div class="p-agreement__logo">
    <a href="<?php echo home_url(); ?>">
      <img src="/images/logo_new.svg" alt="MAYS 家具のリース・販売・インテリアコーディネートのメイズ" />
    </a>
  </div>
  <div class="p-agreement__lang">
    <p class="p-agreement__lang__ja is-active">日本語</p><p class="p-agreement__lang__en">ENG</p>
  </div>
  
  <div class="p-agreement__wrap is-ja">
    <h1 class="p-agreement__title01"><span><?php the_title(); ?></span></h1>

    <div class="p-agreement__detail">
      <h2 class="p-agreement__title02">＜現在の契約内容＞</h2>
      <table>
        <tr>
          <th>
            <p>契約番号</p>
          </th>
          <td>
            <p>LK100014633-000</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>契約者名</p>
          </th>
          <td>
            <p>株式会社ﾘｺｰ</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>使用者名</p>
          </th>
          <td>
            <p>株式会社ﾘｺｰ</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>設置場所</p>
          </th>
          <td>
            <p>東京都 世田谷区 鎌田1-7-4</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>契約期間</p>
          </th>
          <td>
            <p>自　2019年06月10日　至　2020年06月09日</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>月額リース料</p>
          </th>
          <td>
            <p>金　48,164円　( 内消費税 4,378円 )</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>預託保証金</p>
          </th>
          <td>
            <p>金　0円</p>
          </td>
        </tr>
      </table>
      <div class="p-agreement__detail__button">
        <a href="#p-agreement__detail__lity" data-lity="data-lity" class="p-agreement__button01" id="is-lity"><span>ご契約中の商品明細を見る</span></a>
        <div class="p-agreement__button01" id="is-start"><span>手続きを開始する</span></div>
      </div>

      <div id="p-agreement__detail__lity" class="lity-hide">
        <table class="p-agreement__detail__lity-table">
          <tr>
            <th><p>商品番号</p></th>
            <th><p>商品名</p></th>
            <th><p>リース価値価格</p></th>
            <th><p>販売価格</p></th>
            <th><p>更新後月額リース料</p></th>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>

          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="p-agreement__step1">
      <h2 class="p-agreement__title03">
        <span class="required">STEP 1</span>
        <strong>契約満了後のご希望を選択してください。</strong>
      </h2>
      <div class="p-agreement__step1__radio">
        <input type="radio" name="radio_step1" id="cancel" value="cancel">
        <label for="cancel">すべて解約する</label>
        <input type="radio" name="radio_step1" id="update" value="update">
        <label for="update">すべて更新する</label>
        <input type="radio" name="radio_step1" id="buy" value="buy">
        <label for="buy">すべて買取する</label>
        <input type="radio" name="radio_step1" id="other" value="other">
        <label for="other">一部商品について、解約・更新・買取する</label>
      </div>
      <div class="p-agreement__step1__table">
        <table class="p-agreement__step1__other-table">
          <tr>
            <th><p>商品番号</p></th>
            <th><p>商品名</p></th>
            <th><p>リース価値価格</p></th>
            <th><p>販売価格</p></th>
            <th><p>更新後月額リース料</p></th>
            <th></th>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_1" id="select_step1_1">
                <option value disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update" selected>更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_2" id="select_step1_2">
                <option value disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy" selected>買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_4" id="select_step1_4">
                <option value disabled>未選択</option>
                <option value="cancel" selected>解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step1__price">
        <p>
          <span>買取金額</span>
          <small>：</small>
          <strong>￥33,075</strong>
        </p>
        <p>
          <span>搬出手数料</span>
          <small>：</small>
          <strong>￥8,800</strong>
        </p>
        <p>
          <span>更新後月額リース料金</span>
          <small>：</small>
          <strong>￥33,075</strong>
        </p>
      </div>
      <div class="p-agreement__step1__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step2">
      <h2 class="p-agreement__title03">
        <span>STEP 2</span>
        <strong>搬出希望日時をお教えください。</strong>
      </h2>
      <div class="p-agreement__step2__table">
        <table class="p-agreement__step2__day-table">
          <tr>
            <th><p><span class="required">第一希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_1_1" id="select_step2_1_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_1_2" id="select_step2_1_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <th><p><span>第二希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_2_1" id="select_step2_2_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_2_2" id="select_step2_2_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <th><p><span>第三希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_3_1" id="select_step2_3_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_3_2" id="select_step2_3_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step2__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step3">
      <h2 class="p-agreement__title03">
        <span>STEP 3</span>
        <strong>更新する商品の契約終了日を変更したい場合は入力してください。</strong>
      </h2>
      <div class="p-agreement__step3__flex">
        <table class="p-agreement__step3__start-table">
          <tr>
            <th><p>リース開始日</p></th>
            <td>
              <p>2021年2月17日</p>
            </td>
          </tr>
        </table>
        <table class="p-agreement__step3__end-table">
          <tr>
            <th><p>リース終了日</p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step3__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step4">
      <h2 class="p-agreement__title03">
        <span>STEP 4</span>
        <strong>保証金返金先口座をご入力ください。</strong>
      </h2>
      <div class="p-agreement__step4__table">
        <table class="p-agreement__step4__bank-table">
          <tr>
            <th><p>金融機関名</p></th>
            <td>
              <input type="text" name="step4_bank">
            </td>
          </tr>
          <tr>
            <th><p>支店名</p></th>
            <td>
              <input type="text" name="step4_branch">
            </td>
          </tr>
          <tr>
            <th><p>口座種類</p></th>
            <td>
              <input type="radio" name="step4_type" id="current" value="current">
              <label for="current">当座</label>
              <input type="radio" name="step4_type" id="normal" value="normal">
              <label for="normal">普通</label>
            </td>
          </tr>
          <tr>
            <th><p>口座名義</p></th>
            <td>
              <input type="text" name="step4_name">
            </td>
          </tr>
          <tr>
            <th><p>口座番号</p></th>
            <td>
              <input type="text" name="step4_number">
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step4__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step5">
      <h2 class="p-agreement__title03">
        <span>STEP 5</span>
        <strong>商品買取について以下より選択してください。</strong>
      </h2>
      <div class="p-agreement__step5__table">
        <table class="p-agreement__step5__select-table">
          <tr>
            <th><p>購入代金とお預かりしている保証金を相殺しますか？</p></th>
            <td>
              <input type="radio" name="step5_money" id="yes" value="yes">
              <label for="yes">はい</label>
              <input type="radio" name="step5_money" id="no" value="no">
              <label for="no">いいえ</label>
            </td>
          </tr>
          <tr>
            <th><p>買取商品における請求書の宛名をご選択ください。</p></th>
            <td>
              <input type="radio" name="step5_name" id="master" value="master">
              <label for="master">ご契約者様</label>
              <input type="radio" name="step5_name" id="user" value="user">
              <label for="user">ご利用者様</label>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step5__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step6">
      <h2 class="p-agreement__title03">
        <span>STEP 6</span>
        <strong>弊社営業担当者へのご連絡があればご記入ください。</strong>
      </h2>
      <div class="p-agreement__step6__textarea">
        <textarea name="step6_content" id="step6_content"></textarea>
      </div>
      <div class="p-agreement__step6__term">
        <div class="p-agreement__step6__term__wrap">
          <p>株式会社メイズリース契約約款</p>
          <p>(リース物件)<br>
            第 1 条 株式会社メイズ(以下、「甲」といいます。)は御見積書添付見積商品明細記載のリース物件(以下、総称して「本物件」という。)を、リース注文書の契約者借主(以下、「乙」といいます。)に賃貸し、乙はこれを賃借する。</p>
            <p>(契約の成立)<br>
              第 2 条 乙がリース注文書に署名捺印し、当該書面が甲に届いた時に、本約款に基づくリース契約が成立するものとする(以下、「本契約」という。)。</p>
          <p>(契約の終期)<br>
              第 3 条 契約の終期は、御見積書記載リース終了日とする。</p>
          <p>(契約時申受金)<br>
              第 4 条<br>
              1 乙は甲に対し、本契約成立後速やかに、御見積書に定める契約時申受金を支払う。<br>
              2 「契約時申受金」の「搬出入手数料」とは、初回1回分の手数料及び契約終了時1回分の手数料をいい、甲が乙に対し、本物件を売却または譲渡した場合であっても、契約終了時搬出手数料は返還しない。また、乙の責により、甲の指定する日数を割り込んでの搬出入日の変更及び解約、または甲乙間で合意された搬出入日に実際の搬出入が出来なかった場合等は、実際に搬出入を行わない場合でもその回数に含む。乙の事情により本契約期間中の設置場所の移動があった場合は、この搬出の手数料より増える場合がある。<br>
              3 「契約時申受金」の「保証金」は、本契約に基づく甲の乙に対するすべての債権を担保するものとし、甲はこの保証金をもって乙の甲に対するすべての債務の弁済に充当することができるものとする。甲は、本契約に関する乙のすべての債務が履行された時点で、残額を乙に返還する。乙は、甲の事前許可無くして、保証金返還請求権を他に譲渡、もしくは質権設定等いかなる処分もしてはならない。なお、保証金は無利息とする。</p>
        </div>
      </div>
      <div class="p-agreement__step6__checkbox">
        <input type="checkbox" name="step6_checkbox" id="term" value="term">
        <label for="term">上記規約に合意いたします</label>
      </div>
      <div class="p-agreement__step6__button">
        <div class="p-agreement__button01" id="is-confirm"><span>確認</span></div>
      </div>
    </div>
  </div>
  
  <div class="p-agreement__wrap is-en">
    <h1 class="p-agreement__title01"><span>English</span></h1>

    <div class="p-agreement__detail">
      <h2 class="p-agreement__title02">＜現在の契約内容＞</h2>
      <table>
        <tr>
          <th>
            <p>契約番号</p>
          </th>
          <td>
            <p>LK100014633-000</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>契約者名</p>
          </th>
          <td>
            <p>株式会社ﾘｺｰ</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>使用者名</p>
          </th>
          <td>
            <p>株式会社ﾘｺｰ</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>設置場所</p>
          </th>
          <td>
            <p>東京都 世田谷区 鎌田1-7-4</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>契約期間</p>
          </th>
          <td>
            <p>自　2019年06月10日　至　2020年06月09日</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>月額リース料</p>
          </th>
          <td>
            <p>金　48,164円　( 内消費税 4,378円 )</p>
          </td>
        </tr>
        <tr>
          <th>
            <p>預託保証金</p>
          </th>
          <td>
            <p>金　0円</p>
          </td>
        </tr>
      </table>
      <div class="p-agreement__detail__button">
        <a href="#p-agreement__detail__lity" data-lity="data-lity" class="p-agreement__button01" id="is-lity"><span>ご契約中の商品明細を見る</span></a>
        <div class="p-agreement__button01" id="is-start"><span>手続きを開始する</span></div>
      </div>

      <div id="p-agreement__detail__lity" class="lity-hide">
        <table class="p-agreement__detail__lity-table">
          <tr>
            <th><p>商品番号</p></th>
            <th><p>商品名</p></th>
            <th><p>リース価値価格</p></th>
            <th><p>販売価格</p></th>
            <th><p>更新後月額リース料</p></th>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>

          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="p-agreement__step1">
      <h2 class="p-agreement__title03">
        <span class="required">STEP 1</span>
        <strong>契約満了後のご希望を選択してください。</strong>
      </h2>
      <div class="p-agreement__step1__radio">
        <input type="radio" name="radio_step1" id="cancel" value="cancel">
        <label for="cancel">すべて解約する</label>
        <input type="radio" name="radio_step1" id="update" value="update">
        <label for="update">すべて更新する</label>
        <input type="radio" name="radio_step1" id="buy" value="buy">
        <label for="buy">すべて買取する</label>
        <input type="radio" name="radio_step1" id="other" value="other">
        <label for="other">一部商品について、解約・更新・買取する</label>
      </div>
      <div class="p-agreement__step1__table">
        <table class="p-agreement__step1__other-table">
          <tr>
            <th><p>商品番号</p></th>
            <th><p>商品名</p></th>
            <th><p>リース価値価格</p></th>
            <th><p>販売価格</p></th>
            <th><p>更新後月額リース料</p></th>
            <th></th>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_1" id="select_step1_1">
                <option value disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update" selected>更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_2" id="select_step1_2">
                <option value disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy" selected>買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_4" id="select_step1_4">
                <option value disabled>未選択</option>
                <option value="cancel" selected>解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p>5058840</p></td>
            <td><p>2Pソファ</p></td>
            <td><p>122,500</p></td>
            <td><p>36,750</p></td>
            <td><p>3,675</p></td>
            <td>
              <select name="select_step1_3" id="select_step1_3">
                <option value selected disabled>未選択</option>
                <option value="cancel">解約</option>
                <option value="update">更新</option>
                <option value="buy">買取</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step1__price">
        <p>
          <span>買取金額</span>
          <small>：</small>
          <strong>￥33,075</strong>
        </p>
        <p>
          <span>搬出手数料</span>
          <small>：</small>
          <strong>￥8,800</strong>
        </p>
        <p>
          <span>更新後月額リース料金</span>
          <small>：</small>
          <strong>￥33,075</strong>
        </p>
      </div>
      <div class="p-agreement__step1__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step2">
      <h2 class="p-agreement__title03">
        <span>STEP 2</span>
        <strong>搬出希望日時をお教えください。</strong>
      </h2>
      <div class="p-agreement__step2__table">
        <table class="p-agreement__step2__day-table">
          <tr>
            <th><p><span class="required">第一希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_1_1" id="select_step2_1_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_1_2" id="select_step2_1_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <th><p><span>第二希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_2_1" id="select_step2_2_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_2_2" id="select_step2_2_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <th><p><span>第三希望</span></p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_3_1" id="select_step2_3_1">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
            <td>
              <div class="p-agreement__step2__day-table__select">
                <select name="select_step2_3_2" id="select_step2_3_2">
                  <option value selected disabled>Select</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                </select>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step2__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step3">
      <h2 class="p-agreement__title03">
        <span>STEP 3</span>
        <strong>更新する商品の契約終了日を変更したい場合は入力してください。</strong>
      </h2>
      <div class="p-agreement__step3__flex">
        <table class="p-agreement__step3__start-table">
          <tr>
            <th><p>リース開始日</p></th>
            <td>
              <p>2021年2月17日</p>
            </td>
          </tr>
        </table>
        <table class="p-agreement__step3__end-table">
          <tr>
            <th><p>リース終了日</p></th>
            <td>
              <input type="text" value="" placeholder="12 May 2016" class="is-datepicker">
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step3__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step4">
      <h2 class="p-agreement__title03">
        <span>STEP 4</span>
        <strong>保証金返金先口座をご入力ください。</strong>
      </h2>
      <div class="p-agreement__step4__table">
        <table class="p-agreement__step4__bank-table">
          <tr>
            <th><p>金融機関名</p></th>
            <td>
              <input type="text" name="step4_bank">
            </td>
          </tr>
          <tr>
            <th><p>支店名</p></th>
            <td>
              <input type="text" name="step4_branch">
            </td>
          </tr>
          <tr>
            <th><p>口座種類</p></th>
            <td>
              <input type="radio" name="step4_type" id="current" value="current">
              <label for="current">当座</label>
              <input type="radio" name="step4_type" id="normal" value="normal">
              <label for="normal">普通</label>
            </td>
          </tr>
          <tr>
            <th><p>口座名義</p></th>
            <td>
              <input type="text" name="step4_name">
            </td>
          </tr>
          <tr>
            <th><p>口座番号</p></th>
            <td>
              <input type="text" name="step4_number">
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step4__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step5">
      <h2 class="p-agreement__title03">
        <span>STEP 5</span>
        <strong>商品買取について以下より選択してください。</strong>
      </h2>
      <div class="p-agreement__step5__table">
        <table class="p-agreement__step5__select-table">
          <tr>
            <th><p>購入代金とお預かりしている保証金を相殺しますか？</p></th>
            <td>
              <input type="radio" name="step5_money" id="yes" value="yes">
              <label for="yes">はい</label>
              <input type="radio" name="step5_money" id="no" value="no">
              <label for="no">いいえ</label>
            </td>
          </tr>
          <tr>
            <th><p>買取商品における請求書の宛名をご選択ください。</p></th>
            <td>
              <input type="radio" name="step5_name" id="master" value="master">
              <label for="master">ご契約者様</label>
              <input type="radio" name="step5_name" id="user" value="user">
              <label for="user">ご利用者様</label>
            </td>
          </tr>
        </table>
      </div>
      <div class="p-agreement__step5__button">
        <div class="p-agreement__button01" id="is-next"><span>次へ</span></div>
      </div>
    </div>

    <div class="p-agreement__step6">
      <h2 class="p-agreement__title03">
        <span>STEP 6</span>
        <strong>弊社営業担当者へのご連絡があればご記入ください。</strong>
      </h2>
      <div class="p-agreement__step6__textarea">
        <textarea name="step6_content" id="step6_content"></textarea>
      </div>
      <div class="p-agreement__step6__term">
        <div class="p-agreement__step6__term__wrap">
          <p>株式会社メイズリース契約約款</p>
          <p>(リース物件)<br>
            第 1 条 株式会社メイズ(以下、「甲」といいます。)は御見積書添付見積商品明細記載のリース物件(以下、総称して「本物件」という。)を、リース注文書の契約者借主(以下、「乙」といいます。)に賃貸し、乙はこれを賃借する。</p>
          <p>(契約の成立)<br>
            第 2 条 乙がリース注文書に署名捺印し、当該書面が甲に届いた時に、本約款に基づくリース契約が成立するものとする(以下、「本契約」という。)。</p>
          <p>(契約の終期)<br>
            第 3 条 契約の終期は、御見積書記載リース終了日とする。</p>
          <p>(契約時申受金)<br>
            第 4 条<br>
            1 乙は甲に対し、本契約成立後速やかに、御見積書に定める契約時申受金を支払う。<br>
            2 「契約時申受金」の「搬出入手数料」とは、初回1回分の手数料及び契約終了時1回分の手数料をいい、甲が乙に対し、本物件を売却または譲渡した場合であっても、契約終了時搬出手数料は返還しない。また、乙の責により、甲の指定する日数を割り込んでの搬出入日の変更及び解約、または甲乙間で合意された搬出入日に実際の搬出入が出来なかった場合等は、実際に搬出入を行わない場合でもその回数に含む。乙の事情により本契約期間中の設置場所の移動があった場合は、この搬出の手数料より増える場合がある。<br>
            3 「契約時申受金」の「保証金」は、本契約に基づく甲の乙に対するすべての債権を担保するものとし、甲はこの保証金をもって乙の甲に対するすべての債務の弁済に充当することができるものとする。甲は、本契約に関する乙のすべての債務が履行された時点で、残額を乙に返還する。乙は、甲の事前許可無くして、保証金返還請求権を他に譲渡、もしくは質権設定等いかなる処分もしてはならない。なお、保証金は無利息とする。</p>
        </div>
      </div>
      <div class="p-agreement__step6__checkbox">
        <input type="checkbox" name="step6_checkbox" id="term" value="term">
        <label for="term">上記規約に合意いたします</label>
      </div>
      <div class="p-agreement__step6__button">
        <div class="p-agreement__button01" id="is-confirm"><span>確認</span></div>
      </div>
    </div>
  </div>
  
</div>
<?php get_footer(); ?>