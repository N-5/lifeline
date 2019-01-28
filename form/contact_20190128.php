<dl>
  <dt>お問合せ内容<i>※</i></dt>
  <dd class="select">[mwform_select name="contact" children=":選択してください,ご登録,来社予約,転職相談,その他" post_raw="true"]</dd>
</dl>
<dl>
  <dt>会社名</dt>
  <dd class="text">[mwform_text name="company" size="60"]</dd>
</dl>
<dl>
  <dt>お名前<i>※</i></dt>
  <dd class="text">[mwform_text name="onamae" size="60"]</dd>
</dl>
<dl>
  <dt>フリガナ<i>※</i></dt>
  <dd class="text">[mwform_text name="kana" size="60"]</dd>
</dl>
<dl>
  <dt>メールアドレス<i>※</i></dt>
  <dd class="text">[mwform_email name="mail" size="60"]</dd>
</dl>
<dl>
  <dt>メールアドレス確認用<i>※</i></dt>
  <dd class="text">[mwform_email name="checkmail" size="60"]</dd>
</dl>
<dl>
  <dt>電話番号<i>※</i></dt>
  <dd class="tel">[mwform_tel name="tel"]</dd>
</dl>
<dl>
  <dt>郵便番号<i>※</i></dt>
  <dd class="zip">[mwform_text name="zip" size="10" placeholder="半角英数" conv_half_alphanumeric="true"]-[mwform_text name="zip2" id="zip2" size="10" placeholder="半角英数" conv_half_alphanumeric="true"]</dd>
</dl>
<dl>
  <dt>ご住所<i>※</i></dt>
  <dd class="adress">
    <div class="item">
      <div class="name">都道府県</div>
      <div class="form select">[mwform_select name="area" children=":選択してください,北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,富山県,石川県,福井県,山梨県,長野県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県" post_raw="true"]</div>
    </div>
    <div class="item">
      <div class="name">市区町村</div>
      <div class="form">[mwform_text name="city" id="address2" size="10" ]</div>
    </div>
    <div class="item">
      <div class="name">丁目番地</div>
      <div class="form">[mwform_text name="build" id="strt21" size="10"]</div>
    </div></dd>
</dl>
<dl>
  <dt>ご用件<i>※</i></dt>
  <dd class="textarea">[mwform_textarea name="note" cols="50" rows="15"]</dd>
</dl>
<div class="check">[mwform_checkbox name="agree" children="「プライバシーポリシー」に同意する"]</div>
<div class="privacylink"><a href="/privacy">プライバシーポリシーについて</a></div>
<div class="btnarea">
  <div class="back">[mwform_backButton value="戻る"]</div>
  <div class="submit">[mwform_submit name="submit" value="送信する"]</div>
  <div class="confirm">[mwform_confirmButton value="送信内容を確認する"]</div>
</div>