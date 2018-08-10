<?php
/**
 * search.php
 */ ?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
  <div class="searchform-input"><input type="text" name="s" id="s" placeholder="どんなお仕事をお探しですか？" /></div>
<div class="searchform-body">
  <div class="searchform-list item">
    <div class="title name">勤務地</div>
    <div class="form">
      <select name="post_area">
        <option value="" selected>勤務地を選択</option>
        <option value="kanazawa">金沢市</option>
        <option value="hakusan">白山市</option>
        <option value="nomi">能美市</option>
        <option value="komatsu">小松市</option>
        <option value="kaga">加賀市</option>
        <option value="石川県その他">石川県その他</option>
        <option value="fukuishi">福井市</option>
        <option value="sakai">坂井市</option>
        <option value="sabae">鯖江市</option>
        <option value="echizen">越前市</option>
        <option value="福井県その他">福井県その他</option>
        <option value="その他の都道府県">その他の都道府県</option>
      </select>
    </div>
  </div>
  <div class="searchform-list item">
    <div class="title name">職種</div>
    <div class="form">
      <select name="post_job">
        <option value="" selected>職種を選択</option>
        <option value="製造">製造</option>
        <option value="軽作業（仕分け・ピッキング・検品）">軽作業（仕分け・ピッキング・検品）</option>
        <option value="接客・販売・サービス">接客・販売・サービス</option>
        <option value="営業">営業</option>
        <option value="医療・福祉・介護">医療・福祉・介護</option>
        <option value="一般事務・営業事務・受付">一般事務・営業事務・受付</option>
        <option value="経理・財務・会計">経理・財務・会計</option>
        <option value="総務・人事・労務">総務・人事・労務</option>
        <option value="その他オフィスワーク">その他オフィスワーク</option>
        <option value="設計・施工管理（建築・土木）">設計・施工管理（建築・土木）</option>
        <option value="開発・設計（電機・機械）">開発・設計（電気・機械）</option>
        <option value="生産管理・品質管理">生産管理・品質管理</option>
        <option value="クリエイティブ">クリエイティブ</option>
        <option value="ドライバー">ドライバー</option>
        <option value="その他">その他</option>
      </select>
    </div>
  </div>
<!--
  <div class="searchform-list item">
    <div class="title name">働き方</div>
    <div class="form">
      <select name="post_tag">
        <option value="" selected>働き方を選択</option>
        <option value="正社員求人">正社員求人</option>
        <option value="派遣求人">派遣求人</option>
        <option value="高収入！しっかり稼げる">高収入求人</option>
        <option value="wワーク《本業プラスα》">Wワーク求人</option>
        <option value="パートタイム《時間帯応相談》">パートタイム求人</option>
      </select>
    </div>
  </div>
-->
  <div class="c-button button-search button-color-blue"><input type="submit" value="この条件で検索する" /></div>
</div>
</form>