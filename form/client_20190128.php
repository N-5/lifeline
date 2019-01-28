<h3 class="heading">基本情報</h3>
<div class="form">
  <dl>
    <dt>会社名<i>※</i></dt>
    <dd class="text">[mwform_text name="company" size="60"]</dd>
  </dl>
  <dl>
    <dt>本所在地<i>※</i></dt>
    <dd class="adress">
      <div class="item zip">
        <div class="name">郵便番号</div>
        <div class="form">[mwform_text name="companyzip" size="10" placeholder="半角数字" conv_half_alphanumeric="true"]-[mwform_text name="companyzip2" id="companyzip2" size="10" placeholder="半角数字" conv_half_alphanumeric="true"]</div>
      </div>
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
    <dt>TEL<i>※</i></dt>
    <dd class="text">[mwform_text name="companytel" size="60"]</dd>
  </dl>
  <dl>
    <dt>FAX<i>※</i></dt>
    <dd class="text">[mwform_text name="companyfax" size="60"]</dd>
  </dl>
  <dl>
    <dt>ご担当者情報</dt>
    <dd class="adress">
      <div class="item">
        <div class="name">氏名<i>※</i></div>
        <div class="form">[mwform_text name="companyperson_name" size="60"]</div>
      </div>
      <div class="item">
        <div class="name">役職</div>
        <div class="form">[mwform_text name="companyperson_job" size="60"]</div>
      </div>
      <div class="item">
        <div class="name">メールアドレス<i>※</i></div>
        <div class="form">[mwform_text name="companyperson_email" size="60"]</div>
      </div></dd>
  </dl>
  <dl>
    <dt>事業内容<i>※</i></dt>
    <dd class="textarea">[mwform_textarea name="companynote" cols="50" rows="15"]</dd>
  </dl>
  <dl>
    <dt>PRポイント</dt>
    <dd class="textarea">[mwform_textarea name="companypoint" cols="50" rows="15"]</dd>
  </dl>
</div>
<h3 class="heading">求人内容</h3>
<div class="form">
  <dl>
    <dt>職種<i>※</i></dt>
    <dd class="text">[mwform_text name="job" size="60"]</dd>
  </dl>
  <dl>
    <dt>求めるスキル・経験・免許・資格<i>※</i></dt>
    <dd class="text">[mwform_text name="jobdescription" cols="50" rows="15"]</dd>
  </dl>
  <dl>
    <dt>勤務地<i>※</i></dt>
    <dd class="text">[mwform_text name="joblocation" cols="50" rows="15"]</dd>
  </dl>
  <dl>
    <dt>転勤<i>※</i></dt>
    <dd class="select">[mwform_select name="jobrelocation" children=":選択してください,有,無" post_raw="true"]</dd>
  </dl>
  <dl>
    <dt>学歴<i>※</i></dt>
    <dd class="select">[mwform_select name="jobstudent" children=":選択してください,不問,高卒,短大卒,専門卒,大卒,大学院卒" post_raw="true"]</dd>
  </dl>
  <dl>
    <dt>雇用形態<i>※</i></dt>
    <dd class="select">[mwform_select name="jobstate" children=":選択してください,正社員,契約社員,派遣社員,紹介予定派遣,パートタイム,その他" post_raw="true"]</dd>
  </dl>
  <dl>
    <dt>給与<i>※</i></dt>
    <dd class="text">[mwform_text name="jobincome" cols="50" rows="15"]</dd>
  </dl>
  <dl>
    <dt>年齢<i>※</i></dt>
    <dd class="text">[mwform_text name="jobyears" cols="50" rows="15" placeholder="○才〜○才位まで（上限○才）"]</dd>
  </dl>
  <dl>
    <dt>年齢制限理由</dt>
    <dd class="text">[mwform_textarea name="jobyearsreason" cols="50" rows="15"]</dd>
  </dl>
</div>
<h3 class="heading">勤務条件</h3>
<div class="form">
  <dl>
    <dt>就業時間<i>※</i></dt>
    <dd class="text">[mwform_text name="employtime" size="60"]</dd>
  </dl>
  <dl>
    <dt>休日<i>※</i></dt>
    <dd class="text">[mwform_text name="employholiday" size="60"]</dd>
  </dl>
  <dl>
    <dt>定年<i>※</i></dt>
    <dd class="w80">[mwform_text name="employretiring" size="60"]</dd>
  </dl>
  <dl>
    <dt>再雇用</dt>
    <dd class="select">[mwform_select name="employrehire" children=":選択してください,有,無" post_raw="true"]</dd>
  </dl>
  <dl>
    <dt>待遇・福利厚生<i>※</i></dt>
    <dd class="text">[mwform_textarea name="employinsurance" cols="50" rows="15"]</dd>
  </dl>
</div>
<h3 class="heading">その他</h3>
<div class="form">
  <dl>
    <dt>備考</dt>
    <dd class="text">[mwform_textarea name="other" cols="50" rows="15"]</dd>
  </dl>
</div>
<div class="btnarea">
  <div class="back">[mwform_backButton value="戻る"]</div>
  <div class="submit">[mwform_submit name="submit" value="送信する"]</div>
  <div class="confirm">[mwform_confirmButton value="送信内容を確認する"]</div>
</div>